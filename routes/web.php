<?php
use Illuminate\Http\Request;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\InscriptionsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\RefrigerioController;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home');
Route::view('/terminos-y-condiciones', 'terms');
Route::view('/politicas-de-privacidad', 'policy');
// Route::redirect('/', 'login');


Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->stateless()->user();

    $user = User::updateOrCreate([
        'google_id' => $user_google->id,
    ], [
        'name' => $user_google->name,
        'email' => $user_google->email,
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});

Route::get('/paypal/pay', [PaymentsController::class, 'createOrder']);
Route::get('/paypal/success', [PaymentsController::class, 'captureOrder']);

Route::view('dashboard', 'pages/dashboard/dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');

    // Ruta para verificar el correo electrónico
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/dashboard');
    })->middleware(['auth', 'signed'])->name('verification.verify');

    // Ruta para reenviar el enlace de verificación
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');



Route::middleware(['auth', 'verified'])->group(function () {
/* auth:sanctum */
    // Route for the getting the data feed
    /* Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed'); */

/*     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); */

    Route::get('/refrigerios', [FoodsController::class, 'index'])->name('refrigerios_index');

    Route::post('/refrigerios/store', [FoodsController::class, 'store'])->name('refrigerios_store');

    Route::get('/inscripcion', [InscriptionsController::class, 'index'])->name('inscripcion_index');

    Route::fallback(function() {
        return view('pages/utility/404');
    });
});
