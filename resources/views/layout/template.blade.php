<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title> @yield('title', 'OpenTravels') - OpenTravels</title>
</head>

<body class="h-screen">
    @yield('content')

    @vite('resources/js/app.js')
</body>

</html>