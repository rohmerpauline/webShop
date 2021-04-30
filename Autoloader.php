<?php

namespace App;

class Autoloader {

//Méthode statique donc accessible sans avoir besoin d'instancier la classe
    static function register (){
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class){
        // class take the entire namespace

        // On retire App\ __NAMESPACE__ affiche App, on veut retirer cette partie App\
        $class = str_replace(__NAMESPACE__.'\\', '', $class);

        // On remplace antislash par slash on veut avoir ex Controllers/Users au lieu de Controllers\Users
        $class = str_replace('\\', '/', $class);

        //We check if the file exists
        $file = __DIR__ . '/' . $class . '.php';
        
        if (file_exists($file)){
            require_once $file;
        }
    }
    
}