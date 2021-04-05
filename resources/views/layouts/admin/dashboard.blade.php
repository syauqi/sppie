<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title', 'SPPIE') — SPPIE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="SYAUQIZAIDAN KHAIRAN KHALAF">
    <link rel="icon" type="image/png" href="{{ url('stisla/assets/img/stisla-fill.svg')}}" />
    @include('includes.admin.style')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('includes.admin.navbar')
            <div class="main-sidebar">
                @include('includes.admin.sidebar')
            </div>
            <div class="main-content">
                @yield('content')
            </div>
            @include('includes.admin.footer')
        </div>
    </div>

    @include('includes.admin.script')
</body>

</html>