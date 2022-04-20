<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
    <style>
        .imagen{
            background-image: url("{{asset('img/tailwind-intellisense.jpg')}}");
            height: 400px;
            width: 900px;
            margin: 0 auto;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="h-12 bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400"></div>
    </div>
</body>
</html>