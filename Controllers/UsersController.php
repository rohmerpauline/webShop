<?php

namespace App\Controllers;
use App\Models\UsersManagement;
use App\Controllers\NewsletterController;

class UsersController extends UsersManagement {

    public function loginaction(){
        if (isset($_POST['login'])) {
            if (isset($_POST['pseudo']) AND isset($_POST['password'])) {
                $this->loginSystem($_POST['pseudo'], $_POST['password']);
                header('Location: http://localhost:8888/webShop/');
            }   
        } else {
            header('Location: http://localhost:8888/webShop/');
        }
    }

    public function registeraction(){
        if (isset($_POST['register'])) {
            if (isset($_POST['pseudo'])  AND isset($_POST['password']) AND isset($_POST['password2']) AND isset($_POST['email']) AND isset($_POST['tel'])) {
                if ($_POST['password'] == $_POST['password2']){
                    if (isset($_POST['suscribe'])){
                        $this->registerSystem($_POST['pseudo'], $_POST['password'], $_POST['email'], $_POST['tel'], 1);
                        
                        $userNewsletter = new NewsletterController();
                        $userNewsletter->newsletterSubscription($_POST['email']);
                    } else {
                        $this->registerSystem($_POST['pseudo'], $_POST['password'], $_POST['email'], $_POST['tel'], 0);
                    }
                }
                header('Location: http://localhost:8888/webShop/');
            }   
        } else {
            header('Location: http://localhost:8888/webShop/');
        }
    }

    protected function loginSystem($pseudo, $password){
        
        $result = $this->getUsers($pseudo);
        $user = $result->fetch();
        if ($password == $user['password']) {
            $_SESSION['pseudo'] = $user['pseudo'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['mail'] = $user['mail'];
            $_SESSION['tel'] = $user['tel'];
        } 
    }

    protected function registerSystem($pseudo, $password, $email, $tel, $newsletter){
        $this->setUsers($pseudo, $password, $email, $tel, $newsletter);
    }

    


}