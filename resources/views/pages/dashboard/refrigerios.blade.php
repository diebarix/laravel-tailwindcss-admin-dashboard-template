<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">REFRIGERIO DE LA SEMANA</h1>
            </div>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
Elije los dias que tu hijo quiere tener refrigerio
{{--                 <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />

                <!-- Add view button -->
                <button class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">
                    <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                  </svg>
                  <span class="max-xs:sr-only">Add View</span>
                </button> --}}

            </div>

        </div>
        @if ($latestFood)
        <div class="flex items-center justify-center flex-col space-y-8">
            <p><strong>Nombre:</strong> {{ $latestFood->nombre_comida }}</p>
            {{-- <p><strong>Imagen:</strong></p> --}}
            <img src="{{ asset('storage/' . $latestFood->imagen) }}" alt="{{ $latestFood->nombre_comida }}" class="w-96 object-cover rounded-md">
            <p><strong>Fecha del Refrigerio:</strong>
                @if ($latestFood->fecha_pedido)
                    {{ $latestFood->fecha_pedido/* ->format('d/m/Y') */ }}
                @else
                    No disponible
                @endif
            </p>
        </div>
    @else
        <p>No hay registros disponibles.</p>
    @endif
<h4 class="text-2xl md:text-1xl text-gray-800 dark:text-gray-100 font-bold">Pedir:</h4>

{{-- Ins --}}
{{-- ___________________________________________________________________ --}}
<div {{-- wire:key='{{ $paypalOrder->foodStudent->inscription->id }}' --}} class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 max-h-[600px] overflow-hidden">

{{--     <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 my-3 rounded-full shadow-lg" src="{{ asset('storage/'.$paypalOrder->foodStudent->inscription->imagen) }}" alt="image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $paypalOrder->foodStudent->inscription->nombre }} {{ $paypalOrder->foodStudent->inscription->grado }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $paypalOrder->foodStudent->inscription->apell_paterno }} {{ $paypalOrder->foodStudent->inscription->apell_materno }}</span>
        {{ $paypalOrder->foodStudent->inscription->id }}
        <div> --}}
            <form method="POST" {{-- wire:submit.event='update("{{ $paypalOrder->foodStudent->inscription->id }}")' --}} class="flex items-center justify-center flex-col gap-3" action="{{ route('refrigerios_store') }}">
                @csrf
                <input type="hidden" name="inscriptions_id" value="{{ $paypalOrder->foodStudent->inscription->id }}">
                <input type="hidden" name="food_id" value="{{ $latestFood->id }}">
                <p class="text-2xl md:text-1xl text-gray-800 dark:text-gray-100 font-bold mt-2">Costo: 35$</p>
{{--                 <p>
                    Cantidad: {{ $paypalOrder->foodStudent->inscription->foodStudents->count() }}
                </p> --}}
                <div class="flex mt-4 md:mt-6 flex-wrap items-center justify-center gap-2">
                    <label for="{{ $paypalOrder->foodStudent->inscription->id.'l' }}" class="flex items-center cursor-pointer">
                        <input type="checkbox" name="days[]" value="lunes" id="{{ $paypalOrder->foodStudent->inscription->id.'l' }}"
                               class="sr-only peer" {{ $paypalOrder->foodStudent->lunes ? 'checked' : '' }}>
                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded
                                     dark:bg-gray-700 dark:text-gray-300 peer-checked:text-green-800 peer-checked:bg-green-100
                                     dark:peer-checked:bg-green-900 dark:peer-checked:text-green-300 transition-all duration-700
                                     {{ $paypalOrder->foodStudent->lunes ? 'peer-checked:bg-green-100 peer-checked:text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            Lunes
                        </span>
                    </label>

                    <label for="{{ $paypalOrder->foodStudent->inscription->id.'ma' }}">
                        <input type="checkbox" name="days[]" value="martes" id="{{ $paypalOrder->foodStudent->inscription->id.'ma' }}"
                               class="sr-only peer" {{ $paypalOrder->foodStudent->martes ? 'checked' : '' }}>
                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded
                                     dark:bg-gray-700 dark:text-gray-300 peer-checked:text-green-800 peer-checked:bg-green-100
                                     dark:peer-checked:bg-green-900 dark:peer-checked:text-green-300 transition-all duration-700
                                     {{ $paypalOrder->foodStudent->martes ? 'peer-checked:bg-green-100 peer-checked:text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            Martes
                        </span>
                    </label>

                    <label for="{{ $paypalOrder->foodStudent->inscription->id.'mi' }}">
                        <input type="checkbox" name="days[]" value="miercoles" id="{{ $paypalOrder->foodStudent->inscription->id.'mi' }}"
                               class="sr-only peer" {{ $paypalOrder->foodStudent->miercoles ? 'checked' : '' }}>
                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded
                                     dark:bg-gray-700 dark:text-gray-300 peer-checked:text-green-800 peer-checked:bg-green-100
                                     dark:peer-checked:bg-green-900 dark:peer-checked:text-green-300 transition-all duration-700
                                     {{ $paypalOrder->foodStudent->miercoles ? 'peer-checked:bg-green-100 peer-checked:text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            Miércoles
                        </span>
                    </label>

                    <label for="{{ $paypalOrder->foodStudent->inscription->id.'j' }}">
                        <input type="checkbox" name="days[]" value="jueves" id="{{ $paypalOrder->foodStudent->inscription->id.'j' }}"
                               class="sr-only peer" {{ $paypalOrder->foodStudent->jueves ? 'checked' : '' }}>
                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded
                                     dark:bg-gray-700 dark:text-gray-300 peer-checked:text-green-800 peer-checked:bg-green-100
                                     dark:peer-checked:bg-green-900 dark:peer-checked:text-green-300 transition-all duration-700
                                     {{ $paypalOrder->foodStudent->jueves ? 'peer-checked:bg-green-100 peer-checked:text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            Jueves
                        </span>
                    </label>

                    <label for="{{ $paypalOrder->foodStudent->inscription->id.'v' }}">
                        <input type="checkbox" name="days[]" value="viernes" id="{{ $paypalOrder->foodStudent->inscription->id.'v' }}"
                               class="sr-only peer" {{ $paypalOrder->foodStudent->viernes ? 'checked' : '' }}>
                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded
                                     dark:bg-gray-700 dark:text-gray-300 peer-checked:text-green-800 peer-checked:bg-green-100
                                     dark:peer-checked:bg-green-900 dark:peer-checked:text-green-300 transition-all duration-700
                                     {{ $paypalOrder->foodStudent->viernes ? 'peer-checked:bg-green-100 peer-checked:text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            Viernes
                        </span>
                    </label>
            </div>
            {{-- $paypalOrder->foodStudent->inscription->foodStudents->lunes --}}
            <button {{-- wire:click='update("{{ $paypalOrder->foodStudent->inscription->id }}")' --}} {{-- type="submit" --}} type="submit" class="focus:outline-none text-gray-800 font-bold bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 {{-- font-medium --}} rounded-lg text-sm px-5 py-2.5 me-2 {{-- mb-2 --}} dark:focus:ring-yellow-900">Enviar</button>
        </form>
        @if(session('totalSum'))

        @endif
        {{-- </div> --}}
{{--         {{ $latestFood->id }} --}}
        <p class="ml-6 mt-6">
            <b> Comida: </b>
            {{ $latestFood->nombre_comida }}
        </p>
        {{-- <label for="{{ $paypalOrder->foodStudent->inscription->id.'l' }}"> --}}
            <div class="flex justify-end items-start flex-col m-6">
                <b>Dias confirmados:</b>
                <p>
                    | Lunes {{ $paypalOrder->foodStudent->lunes ? '✅' : '❌' }}
                </p>
                <p>
                    | Martes {{ $paypalOrder->foodStudent->martes ? '✅' : '❌' }}
                </p>
                <p>
                    | Miércoles {{ $paypalOrder->foodStudent->miercoles ? '✅' : '❌' }}
                </p>
                <p>
                    | Jueves {{ $paypalOrder->foodStudent->jueves ? '✅' : '❌' }}
                </p>
                <p>
                    | Viernes {{ $paypalOrder->foodStudent->viernes ? '✅' : '❌' }}
                </p>
{{--                 <p>|Lunes: {{ in_array('lunes', session('selectedDays', [])) ? '✅' : '❌' }}|</p>
                <p>|Martes: {{ in_array('martes', session('selectedDays', [])) ? '✅' : '❌' }}|</p>
                <p>|Miercoles: {{ in_array('miercoles', session('selectedDays', [])) ? '✅' : '❌' }}|</p>
                <p>|Jueves: {{ in_array('jueves', session('selectedDays', [])) ? '✅' : '❌' }}|</p>
                <p>|Viernes: {{ in_array('viernes', session('selectedDays', [])) ? '✅' : '❌' }}|</p> --}}
            </div>


{{-- <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Green</span>
<span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Yellow</span> --}}
    </div>
</div>

{{-- ___________________________________________________________________ --}}
@if(session('totalSum'))
<div class="ml-6">
<h6 class="text-md md:text-1xl text-gray-800 dark:text-gray-100 font-bold">Total a Pagar: {{ session('totalSum') }}$</h6>
<h4 class="text-2xl md:text-1xl text-gray-800 dark:text-gray-100 font-bold">Pagar:</h4>
<p class="text-md text-gray-400">¡¡Clickea el boton de PayPal para PEDIR!!</p>
    <form action="{{ url('/paypal/pay') }}" method="GET" class="w-80">
        <div class="eapps-paypal-button-container flex justify-center items-center">
            <div class="eapps-paypal-button-inner flex flex-col items-center">
                <form class="eapps-paypal-button-form space-y-4r" eapps-link="form">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="">
                    <input type="hidden" name="currency_code" value="MXN">

                    <input type="hidden" name="food_student_id"
                    value="{{ $paypalOrder->foodStudent->foods->id }}">

                    <input type="hidden" name="undefined_quantity" value="1">

                    <input type="hidden" name="lc" value="en_US">

                    <input type="hidden" name="amount" value="{{ session('totalSum') }}">

                    <div class="eapps-paypal-button-form-submit flex justify-center mt-4" eapps-link="button">

                        <button type="submit" class="btn btn bg-blue-200 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
                        <div class="eapps-paypal-button-form-submit-paypal-icon w-8">
                            <svg width="100%" height="100%" viewBox="0 0 24 32">
                                <path fill="#009cde"
                                    d="M 20.905 9.5 C 21.185 7.4 20.905 6 19.782 4.7 C 18.564 3.3 16.411 2.6 13.697 2.6 L 5.739 2.6 C 5.271 2.6 4.71 3.1 4.615 3.6 L 1.339 25.8 C 1.339 26.2 1.62 26.7 2.088 26.7 L 6.956 26.7 L 6.675 28.9 C 6.581 29.3 6.862 29.6 7.236 29.6 L 11.356 29.6 C 11.825 29.6 12.292 29.3 12.386 28.8 L 12.386 28.5 L 13.228 23.3 L 13.228 23.1 C 13.322 22.6 13.79 22.2 14.258 22.2 L 14.821 22.2 C 18.845 22.2 21.935 20.5 22.871 15.5 C 23.339 13.4 23.153 11.7 22.029 10.5 C 21.748 10.1 21.279 9.8 20.905 9.5 L 20.905 9.5">
                                </path>
                                <path fill="#012169"
                                    d="M 20.905 9.5 C 21.185 7.4 20.905 6 19.782 4.7 C 18.564 3.3 16.411 2.6 13.697 2.6 L 5.739 2.6 C 5.271 2.6 4.71 3.1 4.615 3.6 L 1.339 25.8 C 1.339 26.2 1.62 26.7 2.088 26.7 L 6.956 26.7 L 8.267 18.4 L 8.173 18.7 C 8.267 18.1 8.735 17.7 9.296 17.7 L 11.636 17.7 C 16.224 17.7 19.782 15.7 20.905 10.1 C 20.812 9.8 20.905 9.7 20.905 9.5">
                                </path>
                                <path fill="#003087"
                                    d="M 9.485 9.5 C 9.577 9.2 9.765 8.9 10.046 8.7 C 10.232 8.7 10.326 8.6 10.513 8.6 L 16.692 8.6 C 17.442 8.6 18.189 8.7 18.753 8.8 C 18.939 8.8 19.127 8.8 19.314 8.9 C 19.501 9 19.688 9 19.782 9.1 C 19.875 9.1 19.968 9.1 20.063 9.1 C 20.343 9.2 20.624 9.4 20.905 9.5 C 21.185 7.4 20.905 6 19.782 4.6 C 18.658 3.2 16.506 2.6 13.79 2.6 L 5.739 2.6 C 5.271 2.6 4.71 3 4.615 3.6 L 1.339 25.8 C 1.339 26.2 1.62 26.7 2.088 26.7 L 6.956 26.7 L 8.267 18.4 L 9.485 9.5 Z">
                                </path>
                            </svg>
                        </div>





                            <div class="eapps-paypal-button-form-submit-paypal-text ml-2">

                                <svg width="100%" height="100%" viewBox="0 0 100 32">
                                    <path fill="#003087"
                                        d="M 12 4.917 L 4.2 4.917 C 3.7 4.917 3.2 5.317 3.1 5.817 L 0 25.817 C -0.1 26.217 0.2 26.517 0.6 26.517 L 4.3 26.517 C 4.8 26.517 5.3 26.117 5.4 25.617 L 6.2 20.217 C 6.3 19.717 6.7 19.317 7.3 19.317 L 9.8 19.317 C 14.9 19.317 17.9 16.817 18.7 11.917 C 19 9.817 18.7 8.117 17.7 6.917 C 16.6 5.617 14.6 4.917 12 4.917 Z M 12.9 12.217 C 12.5 15.017 10.3 15.017 8.3 15.017 L 7.1 15.017 L 7.9 9.817 C 7.9 9.517 8.2 9.317 8.5 9.317 L 9 9.317 C 10.4 9.317 11.7 9.317 12.4 10.117 C 12.9 10.517 13.1 11.217 12.9 12.217 Z">
                                    </path>
                                    <path fill="#003087"
                                        d="M 35.2 12.117 L 31.5 12.117 C 31.2 12.117 30.9 12.317 30.9 12.617 L 30.7 13.617 L 30.4 13.217 C 29.6 12.017 27.8 11.617 26 11.617 C 21.9 11.617 18.4 14.717 17.7 19.117 C 17.3 21.317 17.8 23.417 19.1 24.817 C 20.2 26.117 21.9 26.717 23.8 26.717 C 27.1 26.717 29 24.617 29 24.617 L 28.8 25.617 C 28.7 26.017 29 26.417 29.4 26.417 L 32.8 26.417 C 33.3 26.417 33.8 26.017 33.9 25.517 L 35.9 12.717 C 36 12.517 35.6 12.117 35.2 12.117 Z M 30.1 19.317 C 29.7 21.417 28.1 22.917 25.9 22.917 C 24.8 22.917 24 22.617 23.4 21.917 C 22.8 21.217 22.6 20.317 22.8 19.317 C 23.1 17.217 24.9 15.717 27 15.717 C 28.1 15.717 28.9 16.117 29.5 16.717 C 30 17.417 30.2 18.317 30.1 19.317 Z">
                                    </path>
                                    <path fill="#003087"
                                        d="M 55.1 12.117 L 51.4 12.117 C 51 12.117 50.7 12.317 50.5 12.617 L 45.3 20.217 L 43.1 12.917 C 43 12.417 42.5 12.117 42.1 12.117 L 38.4 12.117 C 38 12.117 37.6 12.517 37.8 13.017 L 41.9 25.117 L 38 30.517 C 37.7 30.917 38 31.517 38.5 31.517 L 42.2 31.517 C 42.6 31.517 42.9 31.317 43.1 31.017 L 55.6 13.017 C 55.9 12.717 55.6 12.117 55.1 12.117 Z">
                                    </path>
                                    <path fill="#009cde"
                                        d="M 67.5 4.917 L 59.7 4.917 C 59.2 4.917 58.7 5.317 58.6 5.817 L 55.5 25.717 C 55.4 26.117 55.7 26.417 56.1 26.417 L 60.1 26.417 C 60.5 26.417 60.8 26.117 60.8 25.817 L 61.7 20.117 C 61.8 19.617 62.2 19.217 62.8 19.217 L 65.3 19.217 C 70.4 19.217 73.4 16.717 74.2 11.817 C 74.5 9.717 74.2 8.017 73.2 6.817 C 72 5.617 70.1 4.917 67.5 4.917 Z M 68.4 12.217 C 68 15.017 65.8 15.017 63.8 15.017 L 62.6 15.017 L 63.4 9.817 C 63.4 9.517 63.7 9.317 64 9.317 L 64.5 9.317 C 65.9 9.317 67.2 9.317 67.9 10.117 C 68.4 10.517 68.5 11.217 68.4 12.217 Z">
                                    </path>
                                    <path fill="#009cde"
                                        d="M 90.7 12.117 L 87 12.117 C 86.7 12.117 86.4 12.317 86.4 12.617 L 86.2 13.617 L 85.9 13.217 C 85.1 12.017 83.3 11.617 81.5 11.617 C 77.4 11.617 73.9 14.717 73.2 19.117 C 72.8 21.317 73.3 23.417 74.6 24.817 C 75.7 26.117 77.4 26.717 79.3 26.717 C 82.6 26.717 84.5 24.617 84.5 24.617 L 84.3 25.617 C 84.2 26.017 84.5 26.417 84.9 26.417 L 88.3 26.417 C 88.8 26.417 89.3 26.017 89.4 25.517 L 91.4 12.717 C 91.4 12.517 91.1 12.117 90.7 12.117 Z M 85.5 19.317 C 85.1 21.417 83.5 22.917 81.3 22.917 C 80.2 22.917 79.4 22.617 78.8 21.917 C 78.2 21.217 78 20.317 78.2 19.317 C 78.5 17.217 80.3 15.717 82.4 15.717 C 83.5 15.717 84.3 16.117 84.9 16.717 C 85.5 17.417 85.7 18.317 85.5 19.317 Z">
                                    </path>
                                    <path fill="#009cde"
                                        d="M 95.1 5.417 L 91.9 25.717 C 91.8 26.117 92.1 26.417 92.5 26.417 L 95.7 26.417 C 96.2 26.417 96.7 26.017 96.8 25.517 L 100 5.617 C 100.1 5.217 99.8 4.917 99.4 4.917 L 95.8 4.917 C 95.4 4.917 95.2 5.117 95.1 5.417 Z">
                                    </path>
                                </svg>

                            </div>

                        </button>

                    </div>

                    <div class="eapps-paypal-button-form-cards flex justify-center mt-4" eapps-link="cards">

                        <svg class="eapps-paypal-button-form-cards-item" width="100%" height="100%"
                            viewBox="0 0 40 24">
                            <path
                                d="M0 1.927C0 .863.892 0 1.992 0h36.016C39.108 0 40 .863 40 1.927v20.146C40 23.137 39.108 24 38.008 24H1.992C.892 24 0 23.137 0 22.073V1.927z"
                                style="fill: rgb(33, 86, 154);"></path>
                            <path
                                d="M19.596 7.885l-2.11 9.478H14.93l2.11-9.478h2.554zm10.743 6.12l1.343-3.56.773 3.56H30.34zm2.85 3.358h2.36l-2.063-9.478H31.31c-.492 0-.905.274-1.088.695l-3.832 8.783h2.682l.532-1.415h3.276l.31 1.415zm-6.667-3.094c.01-2.502-3.6-2.64-3.577-3.76.008-.338.345-.7 1.083-.793.365-.045 1.373-.08 2.517.425l.448-2.01c-.615-.214-1.405-.42-2.39-.42-2.523 0-4.3 1.288-4.313 3.133-.016 1.364 1.268 2.125 2.234 2.58.996.464 1.33.762 1.325 1.177-.006.636-.793.918-1.526.928-1.285.02-2.03-.333-2.623-.6l-.462 2.08c.598.262 1.7.49 2.84.502 2.682 0 4.437-1.273 4.445-3.243zM15.948 7.884l-4.138 9.478h-2.7L7.076 9.8c-.123-.466-.23-.637-.606-.834-.615-.32-1.63-.62-2.52-.806l.06-.275h4.345c.554 0 1.052.354 1.178.966l1.076 5.486 2.655-6.45h2.683z"
                                style="fill: rgb(255, 255, 255);"></path>
                        </svg>



                        <svg class="eapps-paypal-button-form-cards-item" width="100%" height="100%"
                            viewBox="0 0 40 24">
                            <path
                                d="M0 1.927C0 .863.892 0 1.992 0h36.016C39.108 0 40 .863 40 1.927v20.146C40 23.137 39.108 24 38.008 24H1.992C.892 24 0 23.137 0 22.073V1.927z"
                                style="fill: rgb(62, 57, 57);"></path>
                            <path style="fill: rgb(255, 95, 0);"
                                d="M 22.205 3.901 L 15.688 3.901 L 15.688 15.589 L 22.205 15.589"></path>
                            <path
                                d="M 16.1 9.747 C 16.1 7.371 17.218 5.265 18.935 3.901 C 17.67 2.912 16.078 2.312 14.342 2.312 C 10.223 2.312 6.892 5.636 6.892 9.746 C 6.892 13.853 10.223 17.178 14.342 17.178 C 16.078 17.178 17.67 16.58 18.935 15.588 C 17.216 14.246 16.099 12.119 16.099 9.745 Z"
                                style="fill: rgb(235, 0, 27);"></path>
                            <path
                                d="M 30.996 9.747 C 30.996 13.854 27.663 17.179 23.547 17.179 C 21.81 17.179 20.216 16.581 18.954 15.589 C 20.691 14.227 21.788 12.12 21.788 9.746 C 21.788 7.37 20.671 5.264 18.954 3.9 C 20.216 2.911 21.81 2.311 23.547 2.311 C 27.663 2.311 30.996 5.657 30.996 9.745 Z"
                                style="fill: rgb(247, 158, 27);"></path>
                            <path
                                d="M 7.167 22.481 L 7.167 20.43 C 7.167 19.641 6.685 19.127 5.857 19.127 C 5.443 19.127 4.993 19.262 4.683 19.71 C 4.44 19.332 4.096 19.127 3.579 19.127 C 3.233 19.127 2.888 19.23 2.612 19.607 L 2.612 19.197 L 1.886 19.197 L 1.886 22.481 L 2.612 22.481 L 2.612 20.668 C 2.612 20.086 2.921 19.812 3.406 19.812 C 3.888 19.812 4.131 20.121 4.131 20.669 L 4.131 22.481 L 4.856 22.481 L 4.856 20.668 C 4.856 20.086 5.204 19.812 5.651 19.812 C 6.137 19.812 6.377 20.121 6.377 20.669 L 6.377 22.481 L 7.171 22.481 Z M 17.909 19.197 L 16.734 19.197 L 16.734 18.204 L 16.007 18.204 L 16.007 19.197 L 15.352 19.197 L 15.352 19.845 L 16.007 19.845 L 16.007 21.351 C 16.007 22.106 16.319 22.551 17.146 22.551 C 17.459 22.551 17.804 22.449 18.044 22.309 L 17.839 21.695 C 17.632 21.831 17.389 21.867 17.216 21.867 C 16.872 21.867 16.734 21.66 16.734 21.319 L 16.734 19.847 L 17.909 19.847 L 17.909 19.198 Z M 24.053 19.127 C 23.639 19.127 23.364 19.332 23.191 19.607 L 23.191 19.197 L 22.465 19.197 L 22.465 22.481 L 23.191 22.481 L 23.191 20.633 C 23.191 20.086 23.434 19.777 23.882 19.777 C 24.018 19.777 24.192 19.812 24.33 19.847 L 24.538 19.162 C 24.401 19.127 24.192 19.127 24.052 19.127 Z M 14.765 19.469 C 14.42 19.229 13.937 19.127 13.418 19.127 C 12.588 19.127 12.036 19.538 12.036 20.188 C 12.036 20.736 12.453 21.044 13.175 21.146 L 13.524 21.181 C 13.903 21.249 14.108 21.351 14.108 21.523 C 14.108 21.765 13.832 21.934 13.35 21.934 C 12.864 21.934 12.484 21.764 12.244 21.592 L 11.898 22.139 C 12.278 22.411 12.794 22.549 13.313 22.549 C 14.28 22.549 14.831 22.105 14.831 21.488 C 14.831 20.908 14.383 20.599 13.692 20.496 L 13.348 20.462 C 13.037 20.428 12.795 20.36 12.795 20.155 C 12.795 19.914 13.038 19.777 13.418 19.777 C 13.83 19.777 14.245 19.949 14.453 20.052 L 14.764 19.469 Z M 34.033 19.127 C 33.618 19.127 33.342 19.332 33.171 19.607 L 33.171 19.197 L 32.445 19.197 L 32.445 22.481 L 33.171 22.481 L 33.171 20.633 C 33.171 20.086 33.414 19.777 33.862 19.777 C 33.998 19.777 34.17 19.812 34.307 19.847 L 34.515 19.162 C 34.38 19.127 34.172 19.127 34.033 19.127 Z M 24.779 20.838 C 24.779 21.834 25.47 22.551 26.54 22.551 C 27.025 22.551 27.369 22.449 27.715 22.173 L 27.369 21.593 C 27.092 21.798 26.816 21.901 26.504 21.901 C 25.919 21.901 25.505 21.49 25.505 20.84 C 25.505 20.226 25.919 19.813 26.507 19.78 C 26.816 19.78 27.092 19.883 27.369 20.089 L 27.715 19.507 C 27.369 19.233 27.024 19.13 26.54 19.13 C 25.47 19.13 24.779 19.85 24.779 20.841 Z M 31.478 20.838 L 31.478 19.198 L 30.75 19.198 L 30.75 19.608 C 30.51 19.3 30.165 19.128 29.717 19.128 C 28.784 19.128 28.058 19.848 28.058 20.84 C 28.058 21.835 28.784 22.552 29.716 22.552 C 30.197 22.552 30.543 22.382 30.748 22.074 L 30.748 22.484 L 31.477 22.484 L 31.477 20.84 Z M 28.818 20.838 C 28.818 20.259 29.196 19.779 29.819 19.779 C 30.406 19.779 30.821 20.224 30.821 20.84 C 30.821 21.424 30.406 21.902 29.819 21.902 C 29.196 21.869 28.818 21.424 28.818 20.841 Z M 20.148 19.128 C 19.183 19.128 18.494 19.813 18.494 20.84 C 18.494 21.869 19.183 22.552 20.185 22.552 C 20.671 22.552 21.154 22.417 21.533 22.108 L 21.188 21.595 C 20.914 21.799 20.565 21.937 20.222 21.937 C 19.772 21.937 19.323 21.732 19.219 21.149 L 21.671 21.149 L 21.671 20.878 C 21.705 19.815 21.083 19.13 20.15 19.13 Z M 20.148 19.748 C 20.6 19.748 20.911 20.019 20.98 20.532 L 19.253 20.532 C 19.321 20.087 19.633 19.748 20.148 19.748 Z M 38.141 20.84 L 38.141 17.898 L 37.412 17.898 L 37.412 19.61 C 37.173 19.302 36.828 19.13 36.38 19.13 C 35.446 19.13 34.721 19.85 34.721 20.841 C 34.721 21.837 35.446 22.554 36.379 22.554 C 36.861 22.554 37.206 22.383 37.41 22.076 L 37.41 22.486 L 38.14 22.486 L 38.14 20.841 Z M 35.481 20.84 C 35.481 20.261 35.861 19.78 36.484 19.78 C 37.069 19.78 37.486 20.226 37.486 20.841 C 37.486 21.426 37.069 21.904 36.484 21.904 C 35.861 21.87 35.481 21.426 35.481 20.843 Z M 11.237 20.84 L 11.237 19.2 L 10.515 19.2 L 10.515 19.61 C 10.272 19.302 9.928 19.13 9.478 19.13 C 8.545 19.13 7.82 19.85 7.82 20.841 C 7.82 21.837 8.545 22.554 9.477 22.554 C 9.96 22.554 10.304 22.383 10.512 22.076 L 10.512 22.486 L 11.236 22.486 L 11.236 20.841 Z M 8.546 20.84 C 8.546 20.261 8.926 19.78 9.548 19.78 C 10.134 19.78 10.55 20.226 10.55 20.841 C 10.55 21.426 10.134 21.904 9.548 21.904 C 8.926 21.87 8.546 21.426 8.546 20.843 Z"
                                style="fill: rgb(255, 255, 255);"></path>
                        </svg>



                        <svg class="eapps-paypal-button-form-cards-item" width="100%" height="100%"
                            viewBox="0 0 40 24">
                            <path
                                d="M38.333 24H1.667C.75 24 0 23.28 0 22.4V1.6C0 .72.75 0 1.667 0h36.666C39.25 0 40 .72 40 1.6v20.8c0 .88-.75 1.6-1.667 1.6z"
                                style="fill: rgb(20, 119, 190);"></path>
                            <path
                                d="M6.26 12.32h2.313L7.415 9.66M27.353 9.977h-3.738v1.23h3.666v1.384h-3.675v1.385h3.821v1.005c.623-.77 1.33-1.466 2.025-2.235l.707-.77c-.934-1.004-1.87-2.08-2.804-3.075v1.077z"
                                style="fill: rgb(255, 255, 255);"></path>
                            <path
                                d="M38.25 7h-5.605l-1.328 1.4L30.072 7H16.984l-1.017 2.416L14.877 7h-9.58L1.25 16.5h4.826l.623-1.556h1.4l.623 1.556H29.99l1.327-1.483 1.328 1.483h5.605l-4.36-4.667L38.25 7zm-17.685 8.1h-1.557V9.883L16.673 15.1h-1.33L13.01 9.883l-.084 5.217H9.73l-.623-1.556h-3.27L5.132 15.1H3.42l2.884-6.772h2.42l2.645 6.233V8.33h2.646l2.107 4.51 1.868-4.51h2.575V15.1zm14.727 0h-2.024l-2.024-2.26-2.023 2.26H22.06V8.328H29.53l1.795 2.177 2.024-2.177h2.025L32.26 11.75l3.032 3.35z"
                                style="fill: rgb(255, 255, 255);"></path>
                        </svg>



                        <svg class="eapps-paypal-button-form-cards-item" width="100%" height="100%"
                            viewBox="0 0 40 24">
                            <path
                                d="M38.333 24H1.667C.75 24 0 23.28 0 22.4V1.6C0 .72.75 0 1.667 0h36.666C39.25 0 40 .72 40 1.6v20.8c0 .88-.75 1.6-1.667 1.6z"
                                style="fill: rgb(17, 49, 82);"></path>
                            <path
                                d="M 5.498 13.349 C 5.16 13.654 4.722 13.787 4.028 13.787 L 3.738 13.787 L 3.738 10.141 L 4.028 10.141 C 4.722 10.141 5.143 10.265 5.498 10.587 C 5.868 10.917 6.093 11.431 6.093 11.959 C 6.093 12.489 5.869 13.019 5.498 13.349 Z M 4.243 9.206 L 2.666 9.206 L 2.666 14.721 L 4.236 14.721 C 5.069 14.721 5.671 14.524 6.199 14.084 C 6.829 13.564 7.199 12.779 7.199 11.968 C 7.199 10.34 5.985 9.206 4.243 9.206 Z M 7.696 14.721 L 8.77 14.721 L 8.77 9.207 L 7.696 9.207 M 11.393 11.323 C 10.748 11.083 10.559 10.926 10.559 10.628 C 10.559 10.281 10.897 10.018 11.359 10.018 C 11.681 10.018 11.946 10.15 12.226 10.464 L 12.788 9.727 C 12.326 9.322 11.773 9.115 11.17 9.115 C 10.195 9.115 9.452 9.793 9.452 10.695 C 9.452 11.455 9.798 11.845 10.807 12.208 C 11.227 12.356 11.442 12.455 11.55 12.522 C 11.765 12.662 11.872 12.862 11.872 13.092 C 11.872 13.54 11.518 13.872 11.038 13.872 C 10.528 13.872 10.114 13.614 9.868 13.136 L 9.173 13.806 C 9.668 14.532 10.263 14.856 11.08 14.856 C 12.196 14.856 12.98 14.111 12.98 13.044 C 12.98 12.168 12.617 11.771 11.395 11.324 Z M 13.316 11.968 C 13.316 13.588 14.586 14.845 16.223 14.845 C 16.685 14.845 17.081 14.755 17.57 14.525 L 17.57 13.258 C 17.14 13.688 16.76 13.862 16.273 13.862 C 15.191 13.862 14.423 13.077 14.423 11.962 C 14.423 10.902 15.215 10.067 16.223 10.067 C 16.735 10.067 17.123 10.25 17.57 10.687 L 17.57 9.421 C 17.098 9.181 16.71 9.081 16.248 9.081 C 14.621 9.081 13.316 10.364 13.316 11.968 Z M 26.088 12.911 L 24.62 9.206 L 23.446 9.206 L 25.783 14.862 L 26.361 14.862 L 28.741 9.207 L 27.576 9.207 M 29.226 14.721 L 32.272 14.721 L 32.272 13.787 L 30.299 13.787 L 30.299 12.299 L 32.199 12.299 L 32.199 11.365 L 30.299 11.365 L 30.299 10.141 L 32.272 10.141 L 32.272 9.206 L 29.226 9.206 M 34.373 11.745 L 34.059 11.745 L 34.059 10.075 L 34.389 10.075 C 35.059 10.075 35.423 10.355 35.423 10.893 C 35.423 11.447 35.059 11.745 34.373 11.745 Z M 36.528 10.835 C 36.528 9.802 35.818 9.207 34.578 9.207 L 32.986 9.207 L 32.986 14.721 L 34.059 14.721 L 34.059 12.506 L 34.199 12.506 L 35.686 14.721 L 37.006 14.721 L 35.273 12.398 C 36.083 12.233 36.528 11.678 36.528 10.835 Z"
                                style="fill: rgb(255, 255, 255);"></path>
                            <g id="MarkingBase_1_"
                                transform="matrix(0.089776, 0, 0, 0.089776, 2.192296, 5.72498)">
                                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="224.3917"
                                    y1="44.1731" x2="201.33" y2="80.2807"
                                    gradientTransform="matrix(1 0 0 -1 0 141.7323)">
                                    <stop offset="0" style="stop-color:#F89F21"></stop>
                                    <stop offset="0.2502" style="stop-color:#F79A23"></stop>
                                    <stop offset="0.5331" style="stop-color:#F78E22"></stop>
                                    <stop offset="0.6196" style="stop-color:#F68721"></stop>
                                    <stop offset="0.7232" style="stop-color:#F48220"></stop>
                                    <stop offset="1" style="stop-color:#F27623"></stop>
                                </linearGradient>
                                <circle fill="url(#SVGID_1_)" cx="207.343" cy="70.866" r="33.307"></circle>
                                <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="220.7487"
                                    y1="44.664" x2="187.0436" y2="110.5426"
                                    gradientTransform="matrix(1 0 0 -1 0 141.7323)">
                                    <stop offset="0" style="stop-color:#F68721;stop-opacity:0"></stop>
                                    <stop offset="0.3587" style="stop-color:#E27027;stop-opacity:0.2704"></stop>
                                    <stop offset="0.703" style="stop-color:#D4612C;stop-opacity:0.5299"></stop>
                                    <stop offset="0.9816" style="stop-color:#D15D2D;stop-opacity:0.74"></stop>
                                </linearGradient>
                                <circle opacity="0.65" fill="url(#SVGID_2_)" cx="207.343" cy="70.866"
                                    r="33.307"></circle>
                            </g>
                            <g id="Orange_1_" enable-background="new    "
                                transform="matrix(0.469224, 0, 0, 0.469224, 13.785085, 6.199149)">
                                <g id="Orange">
                                    <g>
                                        <path d="M13,38c20.1,0,40,0,40,0c1.7,0,3-1.3,3-3V18C56,18,51.2,31.8,13,38z"
                                            style="fill: rgb(255, 129, 38);"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>

                    </div>

                    <div class="eapps-paypal-button-form-error" eapps-link="error"></div>
                </form>
            </div>
        </div>
    </form>
    </div>
    @endif

    </div>
</x-app-layout>
