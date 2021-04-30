<?php 

namespace App\Controllers;
use App\Controllers\Controller;

Class ContactController extends Controller {

    public function index(){
        $this->render('contact/contactView');
    }

}