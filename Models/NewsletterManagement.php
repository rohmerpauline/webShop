<?php

namespace App\Models;
use App\Core\DbConnection;

class NewsletterManagement extends DbConnection {

    public function setNewsletterSub ($mail) {
        $sql = "INSERT INTO newsletter_suscription (email_newsletter) VALUES (:email_newsletter)";
        $req = $this->dbconnect()->prepare($sql);
        $req->execute(array(
            'email_newsletter'=>$mail
        ));
    }

    public function checkIfEmailExists($mail) {
        $sql = "SELECT email_newsletter FROM newsletter_suscription WHERE email_newsletter = :email_newsletter";
        $req = $this->dbconnect()->prepare($sql);
        $req->execute(array(
            'email_newsletter'=>$mail
        ));
        return $req;
    }

    public function checkIfAccountExists($mail){
        $sql = "SELECT mail, newsletter FROM users WHERE mail = :mail";
        $req = $this->dbconnect()->prepare($sql);
        $req->execute(array(
            'mail'=>$mail
        ));
        return $req;
    }

    public function changeStateSubscription ($mail) {
        $sql = "UPDATE users SET newsletter = :newsletter WHERE mail = :mail";
        $req = $this->dbconnect()->prepare($sql);
        $req->execute(array(
            'newsletter'=>1,
            'mail'=>$mail
        ));
    }

}