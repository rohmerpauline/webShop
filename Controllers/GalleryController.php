<?php

namespace App\Controllers;
use App\Controllers\Controller;

Class GalleryController extends Controller {

    public function index(){
        $this->render('gallery/galleryView');
    }

}