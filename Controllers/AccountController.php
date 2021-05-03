<?php 

namespace App\Controllers;

use App\Controllers\Controller;
use App\Controllers\UsersController;
use App\Models\UsersManagement;

class AccountController extends Controller {

    public function index(){
        $this->render('account/accountView');
    }

    public function loginsecurity(){
        $user = new UsersManagement;
        $user->getUsers($_SESSION['pseudo']);


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