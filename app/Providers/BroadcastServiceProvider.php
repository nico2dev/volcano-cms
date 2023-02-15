<?php
/**
 * Volcano - BroadcastServiceProvider
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

namespace App\Providers;

use Volcano\Http\Request;
use Volcano\Routing\Router;
use Volcano\Support\Facades\Broadcast;
use Volcano\Support\ServiceProvider;


class BroadcastServiceProvider extends ServiceProvider
{

    /**
     * Amorcez tous les services d'application.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->post('broadcasting/auth', array('middleware' => 'web', function (Request $request)
        {
            return Broadcast::authenticate($request);
        }));

        require app_path('Routes/Channels.php');
    }

    /**
     * Enregistrez le fournisseur de services de l'application.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
