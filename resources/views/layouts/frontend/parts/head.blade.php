<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
        @hasSection('title')
            @yield('title')
        @else
            Some app
        @endif
    </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{!! asset("css/frontend/bootstrap.min.css") !!}">
    <link rel="stylesheet" href="{!! asset("css/frontend/bootstrap-theme.min.css") !!}">
    <link rel="stylesheet" href="{!! asset("css/frontend/fontAwesome.css") !!}">
    <link rel="stylesheet" href="{!! asset("css/frontend/light-box.css") !!}">
    <link rel="stylesheet" href="{!! asset("css/frontend/templatemo-main.css") !!}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="{!! asset('js/frontend/vendor/modernizr-2.8.3-respond-1.4.2.min.js') !!}"></script>

</head>