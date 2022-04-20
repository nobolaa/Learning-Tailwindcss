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
            width: 400px;
            margin: 0 auto;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1 class="text-center text-3xl font-bold mb-3">Background</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta adipisci voluptatem pariatur at architecto, ratione saepe cumque dolores dolorum porro, consectetur illo necessitatibus, ipsa vitae possimus minima provident nobis recusandae.</p>
        <div class="imagen bg-contain bg-no-repeat border-8 border-blue-600"></div>
    </div>
</body>
</html>