<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Smart Home</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/assets/bower_components/bootstrap/dist/css/bootstrap-theme.min.css">

    <!-- Main App Style -->
    <link href="/assets/css/app.css" rel="stylesheet">
</head>
<body>

<div class="container">

  @yield('content')

</div>


<!-- Latest compiled and minified JavaScript -->
<script src="/assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/assets/js/config.js"></script>

@yield('scripts')

</body>
</html>