<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //pode ser criado uma lógica. Ex: verificar usuário, buscar dados...
    public function index()
    {
        $name = 'Bia';
        $birthday = '1998-06-11';
        $lastName = 'Adeodato';
        $age = Carbon::parse($birthday)->diff(Carbon::now())->y; // calcular idade
        $bdayFormatted = date('d/m/Y', strtotime($birthday));
        $data = [
            'name_user' => $name, // o campo, nesse caso 'name' tem que ser o mesmo para o arquivo html
            'age' => $age,
            'lastName' => $lastName,
            'birthday' => $bdayFormatted,
        ];
        //Exercicio 1(Componentes)
        $people = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'name' => 'John',
                'birth' => '29/02/90',
                'age' => 29
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'name' => 'Anne',
                'birth' => '29/02/90',
                'age' => 29
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'name' => 'Jane',
                'birth' => '29/02/90',
                'age' => 29
            ]
        ];
        $d['people'] = $people;
        //Exercicio 2(Loops)
        // $number = 0;
        // $url = 'https://i.pravatar.cc/150?img='.$number;
        // $d ['url'] = $url;
        return view('welcome', $d);
    }
    public function exit()
    {
        return view('exit');
    }
    public function users(Request $r)
    {
        $data = [
            'quantidade' => $r->qnt,
        ];
        return view('users', $data);
    }
    public function index2()
    {

        return view('include');
    }

}
