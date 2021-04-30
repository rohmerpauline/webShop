<?php 

namespace App\Controllers;
use App\Controllers\Controller;

Class AboutController extends Controller {

    public function index(){
        $this->render('about/aboutView');
    }

}