<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Personal Website - Code With Dary
    </title>

    <link
        rel="stylesheet"
        href="{{asset('css/app.css')}}"
    />

    <style>
        .active {font-weight: bold; color: red;}
    </style>

</head>

<body class="bg-gradient-to-r from-gray-100 to-gray-200">
    @yield('content')
</body>
</html>
