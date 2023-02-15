<?php
/**
 * Volcano - User
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

namespace App\Models;

use Volcano\Auth\UserTrait;
use Volcano\Auth\UserInterface;
use Volcano\Database\ORM\Model as BaseModel;
use Volcano\Foundation\Auth\Access\AuthorizableTrait;


class User extends BaseModel implements UserInterface
{
    use UserTrait, AuthorizableTrait;

    //
    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = array('username', 'password', 'realname', 'email', 'activation_code');

    protected $hidden = array('password', 'remember_token');

}
