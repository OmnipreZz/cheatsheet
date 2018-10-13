<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OmniScience : Commands & Shortcuts</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Inconsolata|Nunito" rel="stylesheet">  

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>


<div class="container-fluid bgHome text-center">
    <h1 class="homeTitle pt-5">OmniScience</h1>
    <h2 class="pt-4 homeShadow">Commands and Shortcuts</h2>
    <div class="pt-5 mt-5 btnApply">
        <a type="button" class="btn btnHome btnGreen mr-5  text-white pt-2" href="{{ route('command_index') }}"><h3>Commandes</h3></a>
        <a type="button" class="btn btnHome btnGreen ml-5 text-white pt-2" href="{{ route('shortcut_index') }}"><h3>Raccourcis</h3></a>
    </div>
    <div class="pt-5 mt-5 btnMobil">
        <a type="button" class="btn btnHome btnGreen text-white pt-2" href="{{ route('command_index') }}"><h3>Commandes</h3></a>
        <a type="button" class="btn btnHome btnGreen text-white pt-2 mt-4" href="{{ route('shortcut_index') }}"><h3>Raccourcis</h3></a>
    </div>
    
</div>

</body>
</html>
