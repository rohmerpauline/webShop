<?php 

namespace App\Controllers;
use App\Controllers\Controller;

Class RegisterController extends Controller {

    public function index(){
        
        $this->render('login-register/registerView');
        
    }
    
}