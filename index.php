<?php

session_start();

use App\Autoloader;
use App\Controllers\Users;

require_once 'classes/Autoloader.php';
Autoloader::register();

if (isset($_GET["action"])) {
    /* ============= 
        ABOUT
    ================*/
    if ($_GET["action"] == "about") {

        require('views/aboutView.php');
    
    /* =============
        SHOP
    ================*/
    } else if ($_GET["action"] == "shop") {

        require('views/shopView.php');
    
    /* =============
        SHOPDETAIL
    ================*/
    } else if ($_GET["action"] == "shopdetail") {

        require('views/shop-detailView.php');

    /* =============
        CART
    ================*/
    } else if ($_GET["action"] == "cart") {

        require('views/cartView.php');
    /* =============
        CHECKOUT
    ================*/
    } else if ($_GET["action"] == "checkout"){

        require('views/checkoutView.php');

    /* =============
        ACCOUNT
    ================*/
    } else if ($_GET["action"] == "account") {
        if (isset($_SESSION['pseudo']) AND isset($_SESSION['password'])){
            require('views/my-accountView.php');
        } else {
            header("Location: index.php?action=login");
        }
    /* =============
        WISHLIST
    ================*/
    } else if ($_GET["action"] == "loginsecurity"){
        if (isset($_SESSION['pseudo']) AND isset($_SESSION['password'])){
            $userInfo = new Users();
            $userInfo->loginUser($_SESSION['pseudo'], $_SESSION['password']);
            require('views/loginsecurityView.php');
        } else {
            header("Location: index.php");
        }
    } else if ($_GET["action"] == "whishlist") {

        require('views/wishlistView.php');

    /* =============
        GALLERY
    ================*/
    } else if ($_GET["action"] == "gallery"){

        require('views/galleryView.php');

    /* =============
        CONTACT
    ================*/
    } else if ($_GET["action"] == "contact"){

        require('views/contact-usView.php');

    /* =============
        LOGIN
    ================*/
    } else if ($_GET["action"] == "login") {
        require('views/loginView.php');

    /* =============
        REGISTER
    ================*/
    } else if ($_GET["action"] == "loginAction") {
        require('views/actions/loginAction.php');

    } else if ($_GET["action"] == "register"){
        require('views/registerView.php');
    
    } else if ($_GET["action"] == "registerAction") {
        require('views/actions/registerAction.php');
    } else if ($_GET["action"] == "newsletterAction") {
        require('views/actions/newsletterAction.php');
    }

/* =============
     WELCOME
================*/
} else {
    require('views/welcomeView.php');
    echo $_SESSION['pseudo'];
}