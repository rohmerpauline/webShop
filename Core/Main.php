<?php 

namespace App\Core;
use App\Controllers\WelcomeController;

class Main {

    public function start() {

        // delete "trail slash"
        // retrieve URL 
        $uri = $_SERVER['REQUEST_URI'];

        // check if uri isn't empty and end by slash

        if (!empty($uri) && $uri != "/webShop/" && $uri[-1] === '/'){

            $uri = substr($uri, 0, -1);
            http_response_code(301);
            header('Location: '.$uri);
            exit;

        }

        $params = explode('/', $_GET['action']);

        if($params[0] != ''){
            //On récupère le nom du controller à instancier
            // MAJ en 1e lettre, ajout du namespace complet

            $controller = '\\App\\Controllers\\'.ucfirst(array_shift($params)).'Controller';

            // On instancie le contrôleur
            $controller = new $controller;

            // On vérifie si deuxième paramètre existe
            $action = (isset($params[0])) ? array_shift($params) : 'index';

            if(method_exists($controller, $action)){
                // Check if il reste paramètres
                (isset($params[0])) ? $controller->$action($params) : $controller->$action();

            } else {
                http_response_code(404);
                echo "la page recherchée n'existe pas";
            }

        } else {
            $controller = new WelcomeController();
            $controller->index();
        }

    }

}