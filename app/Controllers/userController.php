<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;

class userController extends Controller {
     
    public function list(){
        $this -> view('funclist');
    }

    public function perfil(Request $request){
        $username = $request -> get();
        $this -> view('sobre', ['Amanda' => $username]);
    }
}


?>