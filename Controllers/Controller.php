<?php 

namespace App\Controllers;

abstract class Controller {

    public function render(string $fichier, array $donnees = [], string $template = 'template'){

        extract($donnees);

        // Start the buffer
        ob_start();

        // Create the path to the view
        require_once('Views/'.$fichier.'.php');

        // Stock the view content in $content
        $content = ob_get_clean();

        require_once('Views/'.$template.'.php');
    }


}