<?php 

namespace App\Controllers;

use App\Controllers\Controller;

class ShopController extends Controller {

    public function index(){
        echo "coucou";
    }

    public function sidebarshop(){
        $this->render('shop/sidebarshopView');
    }

    public function shopdetail(){
        $this->render('shop/shopdetailView');
    }

    public function cart(){
        $this->render('shop/cartView');
    }

    public function checkout(){
        $this->render('shop/checkoutView');
    }

    public function wishlist(){
        $this->render('shop/wishlistView');
    }

}