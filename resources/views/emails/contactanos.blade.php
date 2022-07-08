<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            padding-right: 20px;
            padding-left: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <p>{{ $formdata['Nombre'] }} gracias por contactar con nosotros,
    un tecnico se comunicará contigo {{ $formdata['Disponibilidad'] }}
    al siguiente número telefónico: {{ $formdata['Telefono'] }}</p>

    <p>Gracias por la espera.</p>
</div>
</body>
</html>
