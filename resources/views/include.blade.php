<h1>Teste include</h1>
@include('components.cards', ['image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
        'name' => 'John',
        'birth' => '29/02/90',
        'age' => 29])
