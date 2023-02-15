<?php
/**
 * Volcano - Channels
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

/*
|--------------------------------------------------------------------------
| Broadcast - Canaux de diffusion
|--------------------------------------------------------------------------
|
| Ici, vous pouvez enregistrer tous les canaux de diffusion d'événements que votre
| prend en charge les applications. Les rappels d'autorisation de canal donnés sont
| utilisé pour vérifier si un utilisateur authentifié peut écouter le canal.
|
*/

use Modules\Users\Models\User;


Broadcast::channel('Modules.Users.Models.User.{id}', function (User $user, $id)
{
    return (int) $user->id === (int) $id;
});

