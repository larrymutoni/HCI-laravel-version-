<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iTax Portal --- GROUP 5</title>
    <!-- websiteicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/tutorials/fullsize/itaxlogo.jpeg') }}" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body>
    <header class="masthead">
        @include('layouts.nav')
        @include('layouts.header')
    </header>

    @yield('content')

    <footer>
        @include('layouts.footer')
    </footer>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>