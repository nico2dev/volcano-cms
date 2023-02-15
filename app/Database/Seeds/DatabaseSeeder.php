<?php
/**
 * Volcano - DatabaseSeeder
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

namespace App\Database\Seeds;

use Volcano\Database\ORM\Model;
use Volcano\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    /**
     * Exécutez les graines de la base de données.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //
        $this->call('App\Database\Seeds\UsersTableSeeder');
    }
}
