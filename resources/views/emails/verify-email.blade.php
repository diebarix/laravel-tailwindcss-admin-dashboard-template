<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Orden #{{ $order->id }}</title>

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
            border: 1px solid #ddd;
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
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
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
            background-color: #b18441;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Temoc</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Factura Id: #{{ $order->id }}</span> <br>
                    <span>Fecha: {{ date('d / m / Y') }}</span> <br>
                    <span>Código postal: 63070</span> <br>
                    <span>Dirección: Av. Allende #876, Col. Emiliano Zapata 63070 Tepic, México</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Detalles del pedido</th>
                <th width="50%" colspan="2">Detalles de usuario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Orden Id:</td>
                <td>{{ $order->id }}</td>

                <td>Nombre completo:</td>
                <td>{{ $order->fullname }}</td>
            </tr>
            <tr>
                <td>ID de seguimiento/No.:</td>
                <td>{{ $order->tracking_no }}</td>

                <td>Dirección de correo electrónico:</td>
                <td>{{ $order->email }}</td>
            </tr>
            <tr>
                <td>Fecha de pedido:</td>
                <td>{{ $order->created_at->format('d-m-Y h:i A') }}</td>

                <td>Teléfono:</td>
                <td>{{ $order->phone }}</td>
            </tr>
            <tr>
                <td>Modo de pago:</td>
                <td>{{ $order->payment_mode }}</td>

                <td>Dirección:</td>
                <td>{{ $order->address }}</td>
            </tr>
            <tr>
                <td>Estado del pedido:</td>
                <td>{{ $order->status_message }}</td>

                <td>Código PIN:</td>
                <td>{{ $order->pincode }}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Orden artículos
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Cotizacion</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
                @php
                    $totalPrice = 0;
                @endphp
                @foreach ($order->orderItems as $orderItem)
                    <tr>
                        <td width="10%">{{ $orderItem->id }}</td>
                        <td>
                            {{ $orderItem->product->name }}
                            @if ($orderItem->productColor)
                                @if ($orderItem->productColor->color)
                                    <span>- Color: {{ $orderItem->productColor->color->name }}</span>
                                @endif
                            @endif
                        </td>
                        <td width="10%">{{ $orderItem->price }}</td>
                        <td width="10%">{{ $orderItem->quantity }}</td>
                        <td width="15%" class="fw-bold">
                            ${{ number_format($orderItem->quantity * $orderItem->price, 2) }} MXN</td>
                        @php
                            $totalPrice += $orderItem->quantity * $orderItem->price;
                        @endphp
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4" class="total-heading">Cantidad total - <small>Inc. todo iva/impuesto</small> :</td>
                    <td colspan="1" class="total-heading">${{ number_format($totalPrice, 2)  }} MXN</td>
                </tr>
        </tbody>
    </table>

    <br>
    <p class="text-center">
        Gracias por comprar con ARTvent!
    </p>

</body>
</html>
