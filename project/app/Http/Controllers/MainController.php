<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{   
    /*
    //senza compact
    public function holaTodos1() {
        return view('index-2',  
        [
            'hello' => 'Hola a todos!',
            'user' => 'Alessia'
        ]);
    }
    */

    //con compact
    public function holaTodos2() {

        $hello = 'Hola a todos!';
        $user = 'Marco';

        return view('index-2', compact('hello', 'user'));
    }
}
 