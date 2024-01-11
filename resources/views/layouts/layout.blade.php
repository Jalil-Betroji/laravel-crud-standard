<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <secrtion class='wrapper'>

        @extends('layouts.nav')
        @extends('layouts.sidebar')
        <div class='content-wrapper' style='min-hieght:1302.4px'>@yield('content')</div>
        </section>
</body>

</html>