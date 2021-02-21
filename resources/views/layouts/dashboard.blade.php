<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>
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