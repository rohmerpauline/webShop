<?php 

namespace App\Controllers;
use App\Models\UsersManagement;

Class Users extends UsersManagement {

    public function registerUser($pseudo, $password, $email, $tel, $newsletter) {
        $this->setUsers($pseudo, $password, $email, $tel, $newsletter);
    }

    public function loginUser ($pseudo, $password) {
        $result = $this->getUsers($pseudo);
        $user = $result->fetch();
        if ($password == $user['password']) {
            $_SESSION['pseudo'] = $user['pseudo'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['mail'] = $user['mail'];
            $_SESSION['tel'] = $user['tel'];
        } 
    }

    /* public function infoUser($pseudo){
        $result = $this->getUsers($pseudo);
        $user = $result->fetch();
        $pseudo2 = $user['pseudo'];
        $tel = $user['tel'];
        $mail = $user['mail'];
        return $pseudo2;
    } */

}