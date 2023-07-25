<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/head.png" type="image/x-icon" />
    <title>Li Cheng-Yan</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="body-1" >
    <div class="loading" id="loading" >
        <div class="content">
            <div class="loading-content-border"></div>
            <div class="cover">LI</div>
        </div>
    </div>

    @include('components.home')
    
    <script src='/js/app.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='/js/index.min.js'></script>
    <script src='/js/canvas.js'></script>
    @stack('scripts')
</body>
</html>
