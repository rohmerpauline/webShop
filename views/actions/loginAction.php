<?php 

use App\Autoloader;
use App\Controllers\Users;

require_once 'classes/Autoloader.php';
Autoloader::register();

if (isset($_POST['login'])) {
    if (isset($_POST['pseudo']) AND isset($_POST['password'])) {
        $userLogin = new Users();
        $userLogin->loginUser($_POST['pseudo'], $_POST['password']);
        header('Location: index.php');
    }   
}
