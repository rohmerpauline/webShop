<?php 

namespace App\Controllers;
use App\Models\NewsletterManagement;

Class Newsletter extends NewsletterManagement {

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