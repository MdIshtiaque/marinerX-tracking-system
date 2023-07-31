<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login to your account</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="public/dist/assets/app-f888e93a.css" >
    @vite('resources/css/app.css')
</head>


<body class="bg-slate-50">

    <!-- navbar start here -->
    @include('frontend.partial.navbar')

    <!-- main section start here -->
    @yield('user_content')

    <!-- footer area start here -->
    @include('frontend.partial.footer')


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    @vite('resources/css/app.js')
    @stack('js')
</body>

</html>
