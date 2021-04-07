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
    @include('includes.admin.style')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('includes.staff.navbar')
            <div class="main-sidebar">
                @include('includes.staff.sidebar')
            </div>
            <div class="main-content">
                @yield('content')
            </div>
            @include('includes.staff.footer')
        </div>
    </div>

    @include('includes.staff.script')
</body>

</html>