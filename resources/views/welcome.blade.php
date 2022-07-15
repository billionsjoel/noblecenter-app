<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Noble Center for Behavior Change</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: white;
            scroll-behavior: smooth;

        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    @include('./layouts/app')
    @include('./components/menu')
    @include('./components/header')
    @include('./components/profile')
    @include('./components/philosophy')
    @include('./components/objective')
    @include('./components/what')
    @include('./components/values')
    @include('./components/footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
