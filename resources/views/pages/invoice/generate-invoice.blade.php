<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Refrigerio #{{ $refrigerio->id }}</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #b3ecbd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #41b150;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Kinder Las tortuguitas</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Refrigerio Id: #{{ $refrigerio->id }}</span> <br>
                    <span>Fecha: {{ date('d / m / Y') }}</span> <br>
                    <span>Código postal: 63070</span> <br>
                    <span>Dirección: Calzada Jose Guadalupe Gallo #2601 </span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Detalles del Refrgerio</th>
                <th width="50%" colspan="2">Detalles del cliente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Refrigerio Id:</td>
                <td>{{ $refrigerio->id }}</td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td>{{ $refrigerio->nombre_comida }}</td>
            </tr>
            <tr>
                <td>Fecha del pedido:</td>
                <td>{{ $refrigerio->fecha_pedido }}</td>
            </tr>
            <tr>
                <td>Dias Contratados:</td>
                <td>lunes: {{ $refrigerio->lunes ? 'Sí' : 'No' }}</td>
                <td>martes: {{ $refrigerio->martes ? 'Sí' : 'No' }}</td>
                <td>miercoles: {{ $refrigerio->miercoles ? 'Sí' : 'No' }}</td>
                <td>jueves: {{ $refrigerio->jueves ? 'Sí' : 'No' }}</td>
                <td>viernes: {{ $refrigerio->viernes ? 'Sí' : 'No' }}</td>
            </tr>
{{--             <tr>
                <td>Cortinas:</td>
                <td>{{ $refrigerio->cortinas ? 'Sí' : 'No' }}</td>
            </tr> --}}

        </tbody>
    </table>

    <br>
    <p class="text-center">
        Gracias por confiar en ARTvent!
    </p>

</body>
</html>
