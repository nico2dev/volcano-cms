<?php
/**
 * Volcano - AuthServiceProvider
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

namespace App\Providers;

use Volcano\Auth\Access\GateInterface as Gate;
use Volcano\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * Les mappages de stratégie pour l'application.
     *
     * @var array
     */
    protected $policies = array(
        'App\Models\SomeModel' => 'App\Policies\ModelPolicy',
    );


    /**
     * Enregistrez tous les services d'authentification / autorisation d'application.
     *
     * @param  Volcano\Auth\Access\GateInterface  $gate
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies($gate);

        //
    }
}
