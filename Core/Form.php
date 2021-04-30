<?php 

namespace App\Core;

class Form {

    protected function test_input($data){

            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    }
