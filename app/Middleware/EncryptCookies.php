<?php
/**
 * Volcano - EncryptCookie
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

namespace App\Middleware;

use Volcano\Cookie\Middleware\EncryptCookies as BaseEncrypter;


class EncryptCookies extends BaseEncrypter
{
    /**
     * Les noms des cookies qui ne doivent pas être cryptés.
     *
     * @var array
     */
    protected $except = array(
        'PHPSESSID',
    );
}
