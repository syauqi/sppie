<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{url('main-assets/styles/main.css')}}" />
    <link rel="shortcut icon" href="{{ url('stisla/assets/img/stisla-fill.svg')}}" type="image/x-icon" />
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src=" https://cdn.jsdelivr.net/npm/chart.js@2.8.0"> </script>
    <script src="{{url('main-assets/scripts/utils.js')}}""></script> @stack('css') <title>
        SPPIE — Sistem Pembayaran SPP </title>
</head>
