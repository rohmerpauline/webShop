<?php 

namespace App\Controllers;

use App\Controllers\Controller;
use App\Controllers\UsersController;

class AccountController extends Controller {

    public function index(){
        $this->render('account/accountView');
    }

    public function loginsecurity(){
        $this->render('account/loginsecurityView');
    }

    /* public function login() {

        $this->render('account/loginView');
        $login = new UsersController;
        $login->loginUser($pseudo, $password);
    }

    public function loginaction(){
        $this->render('account/loginActionView');
    } */

}