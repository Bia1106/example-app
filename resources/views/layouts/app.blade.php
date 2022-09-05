<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="margin: 0px;padding:0px;">
    {{-- @section('header')
    <p>Conteúdo para a parent</p>
    @show --}}



    {{-- Para deixar estático para todas as páginas --}}
    <x-header></x-header>
    <main style="padding: 20px;height: 54vh;">
        {{-- Conteúdo --}}
        @yield('content')
    </main>
    {{-- Para deixar estático para todas as páginas --}}
    <x-footer></x-footer>


    
    {{-- @section('footer')
    @show --}}
</body>
</html>
