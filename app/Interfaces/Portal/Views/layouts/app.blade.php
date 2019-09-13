<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal</title>

    <link rel="stylesheet" href="{{ mix('portal/css/app.css') }}">
</head>
<body>
    @yield('content')
    <script src="{{ mix('portal/js/app.js') }}"></script>
</body>
</html>