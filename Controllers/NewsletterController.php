<?php 

namespace App\Controllers;
use App\Models\NewsletterManagement;

Class NewsletterController extends NewsletterManagement {

    public function index(){
        if (isset($_POST['submitNewsletter'])) {
            if (isset($_POST['email']) AND isset($_POST['urlOfPage'])) {
                $this->newsletterSubscription($_POST['email']);
                $this->completeUserInformation($_POST['email']);
                header('Location:'. $_POST['urlOfPage']);
            }   
        } else {
            header('Location: http://localhost:8888/webShop/');
        }
    }

    public function newsletterSubscription($mail) {
        $result = $this->checkIfEmailExists($mail);
        $emailExists = $result->rowCount();
        if ($emailExists > 0){
            $error = "emailTaken";
        } else {
            $this->setNewsletterSub($mail);
        }
    }

    public function completeUserInformation($mail){
        $result = $this->checkIfAccountExists($mail);
        $accountExists = $result->rowCount();
        if ($accountExists > 0) {
            $changeSubscription = $this->changeStateSubscription($mail);
        }
    }

}