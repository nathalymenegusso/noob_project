<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;

class userController extends Controller {
     
    public function lista(){
        $this -> view('userlist');
    }

    public function perfil(Request $request){
        $username = $request -> get();
        $this -> view('perfil', ['username' => $username]);
    }

    public function edit(Request $request){
        $username = $request -> get();
        $email = $request -> get('email');
        $cep = $request -> get('cep');
        $telefone = $request -> get('telefone');
        $userData = $request -> post();

        $this -> view ('update', ['username' => $username, 'dados' => $userData]);
    }
}


?>