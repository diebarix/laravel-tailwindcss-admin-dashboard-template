<!DOCTYPE html>
<html>
<head>
    <title>PAGO CONFIRMADO</title>
</head>
<body>
    <p>Hola, {{ $user->name }},</p>
    <p>Gracias por hacer tu evento con nosotros.</p>
    <p>Si no creaste una cuenta, no se requiere ninguna acción adicional.</p>
    <p>Saludos cordiales,<br>El equipo de ARTvent</p>
    <p>Haz clic en el enlace de abajo para verificar tu dirección de correo electrónico:</p>
    <a href="{{ $verificationUrl }}">{{ $verificationUrl }}</a>
</body>
</html>
