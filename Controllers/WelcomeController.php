<?php 

namespace App\Controllers;
use App\Controllers\Controller;

class WelcomeController extends Controller {

    public function index(){

        $this->render('main/welcomeView', compact(''));
    }
}