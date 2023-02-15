<?php
/**
 * Volcano - Routing
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

return array(
    /*
     * La configuration du serveur de fichiers d'actifs.
     */
    'assets' => array(
        // Le chemin d'accès aux fichiers d'actifs.
        'path' => BASEPATH .'assets',

        // Les options de contrôle du cache du navigateur.
        'cache' => array(
            'ttl'          => 600,
            'maxAge'       => 10800,
            'sharedMaxAge' => 600,
        ),

        // The Valid Vendor Paths - sachez qu'une configuration incorrecte des Valid Vendor Paths pourrait 
        // introduire
        // problèmes de sécurité graves, essayez de limiter l'accès à une zone précise, où ne sont pas 
        // présents les fichiers "non sécurisés".
        //
        // '/vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css'
        //          ^____________________^____^____________________Ce sont les parties du chemin qui sont 
        // validées.validated.
        //
        'paths' => array(           
        ),
    ),
);
