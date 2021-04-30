<?php 

namespace App\Controllers;
use App\Controllers\Controller;

Class LoginController extends Controller {

    public function index(){
        $this->render('login-register/loginView');
    }

}