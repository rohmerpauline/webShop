<?php 

use App\Autoloader;
use App\Controllers\Newsletter;

require_once 'classes/Autoloader.php';
Autoloader::register();

if (isset($_POST['submitNewsletter'])) {
    if (isset($_POST['email']) AND isset($_POST['urlOfPage'])) {
        $suscribeNewsletter = new Newsletter();
        $suscribeNewsletter->newsletterSubscription($_POST['email']);
        $suscribeNewsletter->completeUserInformation($_POST['email']);
        header('Location:'. $_POST['urlOfPage']);
    }   
}