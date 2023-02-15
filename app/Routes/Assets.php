<?php
/**
 * Volcano - Assets
 *
 * @author  Nicolas Devoy
 * @email   nicolas@volcano-frramework.fr 
 * @version 1.0.0
 * @date    15 Fevrier 2023
 */

use Volcano\Http\Request;


// Enregistrez l'itinéraire pour les ressources à partir du dossier principal des ressources.
$dispatcher->route('assets/(:all)', function (Request $request, $path) use ($dispatcher)
{
    $basePath = Config::get('routing.assets.path', BASEPATH .'assets');

    $path = $basePath .DS .str_replace('/', DS, $path);

    return $dispatcher->serve($path, $request);
});

// Enregistrez l'itinéraire pour les actifs des packages, modules et thèmes.
$dispatcher->route('packages/(:any)/(:any)/(:all)', function (Request $request, $vendor, $package, $path) use ($dispatcher)
{
    $namespace = $vendor .'/' .$package;

    return $dispatcher->servePackageFile($namespace, $path, $request);
});

// Enregistrez l'itinéraire pour les actifs du fournisseur.
$dispatcher->route('vendor/(:all)', function (Request $request, $path) use ($dispatcher)
{
    return $dispatcher->serveVendorFile($path, $request);
});
