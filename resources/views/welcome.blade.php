<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>

<body>
    {{-- <h1>Olá, {{ $name_user }} {{ $lastName }}</h1>
    <h2>Sua idade é: {{ $age }} <br /> E sua data de aniversário é: {{ $birthday }}</h2> --}}
    <h3>Teste: {{-- funcao() --}}</h3> {{-- Só será mostrado na tela se o retorno de funcao() for string ou número --}}
    {{-- Para exibir um html interpretado: {!! $variavel !!} --}}
    <div class="container">
        <div class="row">
            <div class="col">
                @component('components.botao')
                    @slot('cor')
                        green
                    @endslot
                    Refresh
                @endcomponent
            </div>
            <div class="col">
                @component('components.botao')
                    @slot('cor')
                        blue
                    @endslot
                    Atualizar
                @endcomponent
            </div>
            {{-- Exercicio 1(Componentes) --}}
            {{-- @foreach ($people as $p)
                <div class="col">
                    @component('components.cards')
                        @slot('path')
                            {{ $p['image'] }}
                        @endslot
                        <h2>
                            {{ $p['name'] }}
                        </h2>
                        {{ $p['age'] }} Anos
                        {{ $p['birth'] }}
                    @endcomponent
                </div>
            @endforeach --}}
            {{-- Exercicio 2(Loops) --}}
            {{-- @for ($number = 0; $number < 50; $number++)
                @component('components.cards')
                    @slot('path')
                      {{$url.$number}}
                      @endslot
                      {{$number}}
                @endcomponent
            @endfor --}}

            @foreach ($people as $p)
                @include('components.cards', $p)
            @endforeach
        </div>
    </div>



</body>

</html>
