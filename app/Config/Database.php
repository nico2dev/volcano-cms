<?php
/**
 * Volcano - Database
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

return array(
    // Le style d'extraction du PDO.
    'fetch' => PDO::FETCH_CLASS,

    // Le nom de connexion à la base de données par défaut.
    'default' => 'mysql',

    // Les connexions à la base de données.
    'connections' => array(
        'sqlite' => array(
            'driver'    => 'sqlite',
            'database'  => BASEPATH .'storage' .DS .'database.sqlite',
            'prefix'    => '',
        ),
        'mysql' => array(
            'driver'    => 'mysql',
            'hostname'  => 'localhost',
            'database'  => 'volcano_dev',
            'username'  => 'volcano_dev',
            'password'  => 'volcano_dev',
            'prefix'    => PREFIX,
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ),
        'pgsql' => array(
            'driver'   => 'pgsql',
            'host'     => 'localhost',
            'database' => 'volcano',
            'username' => 'volcano',
            'password' => 'password',
            'charset'  => 'utf8',
            'prefix'   => PREFIX,
            'schema'   => 'public',
        ),
    ),

    // Table de référentiel de migration
    'migrations' => 'migrations',
);
