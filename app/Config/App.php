<?php
/**
 * Volcano - App
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

return array(
    /**
     * Mode débogage
     * Lorsque cette option est activée, les erreurs PHP réelles seront affichées.
     */
    'debug' => true, 

    /**
     * Le moteur de rendu des erreurs: "php, "whoops"
     */
    'exception_render' => 'whoops',

    /**
     * L'URL du site Web.
     */
    'url' => 'http://www.volcano.dev/',

    /**
    * L'adresse e-mail de l'administrateur.
    */
    'email' => 'admin@volcano.dev',

    /**
     * Le chemin du site Web.
     */
    'path' => '/',

    /**
     * Nom du site Web.
     */
    'name' => 'Volcano 1.0',

    /**
     * Le nom du thème par défaut ou false pour désactiver l'utilisation des thèmes.
     */
    'theme' => false,

    /**
     * La locale par défaut qui sera utilisée par la traduction.
     */
    'locale' => 'fr',

    /**
     * Le fuseau horaire par défaut de votre site Web.
     * http://www.php.net/manual/en/timezones.php
     */
    'timezone' => 'Europe/Paris',

    /**
     * La clé de cryptage.
     */
    'key' => 'SomeRandomStringThere_1234567890',

    /*
    |--------------------------------------------------------------- -------------------------
    | Configuration de la journalisation
    |--------------------------------------------------------------- -------------------------
    |
    | Ici, vous pouvez configurer les paramètres du journal pour votre application. Hors de
    | la boîte, Laravel utilise la bibliothèque de journalisation PHP Monolog. Cela donne
    | vous une variété de gestionnaires de journaux / formateurs puissants à utiliser.
    |
    | Paramètres disponibles : "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => 'single',

    /**
     * La pile middleware de l'application.
     */
    'middleware' => array(
        'Volcano\Foundation\Http\Middleware\CheckForMaintenanceMode',
        'Volcano\Routing\Middleware\DispatchAssetFiles',
    ),

    /**
     * Les groupes de middleware de route de l'application.
     */
    'middlewareGroups' => array(
        'web' => array(
            'App\Middleware\HandleProfiling',
            'App\Middleware\EncryptCookies',
            'Volcano\Cookie\Middleware\AddQueuedCookiesToResponse',
            'Volcano\Session\Middleware\StartSession',
            'Volcano\Localization\Middleware\SetupLanguage',
            'Volcano\View\Middleware\ShareErrorsFromSession',
            'App\Middleware\VerifyCsrfToken',
            //'App\Middleware\MarkNotificationAsRead',
        ),
        'api' => array(
            'throttle:60,1',
        )
    ),

    /**
     * Middleware de route de l'Application.
     */
    'routeMiddleware' => array(
        'auth'     => 'Volcano\Auth\Middleware\Authenticate',
        'guest'    => 'App\Middleware\RedirectIfAuthenticated',
        'throttle' => 'Volcano\Routing\Middleware\ThrottleRequests',
    ),

    /**
     * Les fournisseurs de services enregistrés.
     */
    'providers' => array(
        'Volcano\Auth\AuthServiceProvider',
        'Volcano\Bus\BusServiceProvider',
        'Volcano\Broadcasting\BroadcastServiceProvider',
        'Volcano\Cache\CacheServiceProvider',
        'Volcano\Routing\RoutingServiceProvider',
        'Volcano\Cookie\CookieServiceProvider',
        'Volcano\Database\DatabaseServiceProvider',
        'Volcano\Encryption\EncryptionServiceProvider',
        'Volcano\Filesystem\FilesystemServiceProvider',
        'Volcano\Localization\LocalizationServiceProvider',
        'Volcano\Hashing\HashServiceProvider',
        'Volcano\Mail\MailServiceProvider',
        'Volcano\Notifications\NotificationServiceProvider',
        'Volcano\Packages\PackageServiceProvider',
        'Volcano\Pagination\PaginationServiceProvider',
        'Volcano\Queue\QueueServiceProvider',
        'Volcano\Redis\RedisServiceProvider',
        'Volcano\Session\SessionServiceProvider',
        'Volcano\Validation\ValidationServiceProvider',
        'Volcano\View\ViewServiceProvider',

        // Les fournisseurs Forge.
        'Volcano\Cache\ConsoleServiceProvider',
        'Volcano\Foundation\Providers\ConsoleSupportServiceProvider',
        'Volcano\Foundation\Providers\ForgeServiceProvider',
        'Volcano\Database\MigrationServiceProvider',
        'Volcano\Database\SeedingServiceProvider',
        'Volcano\Localization\ConsoleServiceProvider',
        'Volcano\Notifications\ConsoleServiceProvider',
        'Volcano\Packages\ConsoleServiceProvider',
        'Volcano\Routing\ConsoleServiceProvider',
        'Volcano\Session\ConsoleServiceProvider',

        // Les fournisseurs d'applications.
        'App\Providers\AppServiceProvider',
        'App\Providers\AuthServiceProvider',
        'App\Providers\EventServiceProvider',
        'App\Providers\RouteServiceProvider',
        'App\Providers\BroadcastServiceProvider',
    ),

    /**
     * Le chemin du manifeste des fournisseurs de services.
     */
    'manifest' => STORAGE_PATH .'framework',

    /**
     * Les alias de classe enregistrés.
     */
    'aliases' => array(

        // Les classes de support.
        'Arr'           => 'Volcano\Support\Arr',
        'Str'           => 'Volcano\Support\Str',

        // Le générateur de base de données.
        'Seeder'        => 'Volcano\Database\Seeder',

        // Les façades de soutien.
        'App'           => 'Volcano\Support\Facades\App',
        'Asset'         => 'Volcano\Support\Facades\Asset',
        'Auth'          => 'Volcano\Support\Facades\Auth',
        'Broadcast'     => 'Volcano\Support\Facades\Broadcast',
        'Bus'           => 'Volcano\Support\Facades\Bus',
        'Cache'         => 'Volcano\Support\Facades\Cache',
        'Config'        => 'Volcano\Support\Facades\Config',
        'Cookie'        => 'Volcano\Support\Facades\Cookie',
        'Crypt'         => 'Volcano\Support\Facades\Crypt',
        'DB'            => 'Volcano\Support\Facades\DB',
        'Event'         => 'Volcano\Support\Facades\Event',
        'File'          => 'Volcano\Support\Facades\File',
        'Forge'         => 'Volcano\Support\Facades\Forge',
        'Gate'          => 'Volcano\Support\Facades\Gate',
        'Hash'          => 'Volcano\Support\Facades\Hash',
        'Input'         => 'Volcano\Support\Facades\Input',
        'Language'      => 'Volcano\Support\Facades\Language',
        'Mailer'        => 'Volcano\Support\Facades\Mailer',
        'Notification'  => 'Volcano\Support\Facades\Notification',
        'Queue'         => 'Volcano\Support\Facades\Queue',
        'Redirect'      => 'Volcano\Support\Facades\Redirect',
        'Redis'         => 'Volcano\Support\Facades\Redis',
        'Request'       => 'Volcano\Support\Facades\Request',
        'Response'      => 'Volcano\Support\Facades\Response',
        'Route'         => 'Volcano\Support\Facades\Route',
        'Schedule'      => 'Volcano\Support\Facades\Schedule',
        'Schema'        => 'Volcano\Support\Facades\Schema',
        'Session'       => 'Volcano\Support\Facades\Session',
        'Validator'     => 'Volcano\Support\Facades\Validator',
        'Log'           => 'Volcano\Support\Facades\Log',
        'URL'           => 'Volcano\Support\Facades\URL',
        'Template'      => 'Volcano\Support\Facades\Template',
        'View'          => 'Volcano\Support\Facades\View',
        'Package'       => 'Volcano\Support\Facades\Package',
    ),

);
