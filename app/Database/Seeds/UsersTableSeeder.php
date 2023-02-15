<?php
/**
 * Volcano - UsersTableSeeder
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

namespace App\Database\Seeds;

use Volcano\Database\ORM\Model;
use Volcano\Database\Seeder;
use Volcano\Support\Facades\Hash;
use Volcano\Support\Str;

use App\Models\User;


class UsersTableSeeder extends Seeder
{

    /**
     * Exécutez les graines de la base de données.
     *
     * @return void
     */
    public function run()
    {
        // Tronquez le tableau avant de semer.
        User::truncate();

        User::create(array(
            'id'             => 1,
            'username'       => 'admin',
            'password'       => Hash::make('admin'),
            'realname'       => 'Site Administrator',
            'email'          => 'admin@volcano.dev',
            'remember_token' => '',
            'api_token'      => Str::random(60),
        ));
    }
}
