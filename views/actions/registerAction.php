<?php 

use App\Autoloader;
use App\Controllers\{Users, Newsletter};

require_once 'classes/Autoloader.php';
Autoloader::register();

// Register Form submitted
if (isset($_POST['register'])) {
    if (isset($_POST['pseudo'])  AND isset($_POST['password']) AND isset($_POST['password2']) AND isset($_POST['email']) AND isset($_POST['tel'])) {
        if ($_POST['password'] == $_POST['password2']) {
            $userRegister = new Users();
            if (isset($_POST['suscribe'])){
                $userRegister->registerUser($_POST['pseudo'], $_POST['password'], $_POST['email'], $_POST['tel'], 1);
                $userNewsletter = new Newsletter();
                $userNewsletter->newsletterSubscription($_POST['email']);
            } else {
                $userRegister->registerUser($_POST['pseudo'], $_POST['password'], $_POST['email'], $_POST['tel'], 0);
            }
            header('Location: index.php');
        }
    }
}