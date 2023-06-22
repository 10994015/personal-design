<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="body-1">
    @include('components.home')

    <script src='/js/app.js'></script>
    <script src='/js/index.min.js'></script>
    <script src='/js/canvas.js'></script>
    @stack('scripts')
</body>
</html>