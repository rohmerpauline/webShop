<?php

namespace App\Models;
use App\Core\DbConnection;

class UsersManagement extends DbConnection {

    public function setUsers ($pseudo, $password, $email, $tel, $newsletter) {
        $sql = "INSERT INTO users (pseudo, password, mail, tel, newsletter) VALUES (:pseudo, :password, :mail, :tel, :newsletter)";
        $req = $this->dbconnect()->prepare($sql);
        $req->execute(array(
            'pseudo'=>$pseudo,
            'password'=>$password,
            'mail'=>$email,
            'tel'=>$tel,
            'newsletter'=>$newsletter
        ));
    }

    public function getUsers ($pseudo) {
        $sql = "SELECT * FROM users WHERE pseudo = :pseudo";
        $req = $this->dbconnect()->prepare($sql);
        $req->execute(array(
            'pseudo'=>$pseudo
        ));
        return $req;
    }

}
