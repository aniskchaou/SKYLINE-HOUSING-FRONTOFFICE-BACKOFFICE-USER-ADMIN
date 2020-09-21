<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/properties' => [[['_route' => 'admin.property.index', '_controller' => 'App\\Controller\\AdminPropertyController::index'], null, null, null, false, false, null]],
        '/admin/edit' => [[['_route' => 'admin.property.edit', '_controller' => 'App\\Controller\\AdminPropertyController::edit'], null, null, null, false, false, null]],
        '/admin/create' => [[['_route' => 'admin.property.create', '_controller' => 'App\\Controller\\AdminPropertyController::create'], null, null, null, false, false, null]],
        '/admin/delete' => [[['_route' => 'admin.property.delete', '_controller' => 'App\\Controller\\AdminPropertyController::delete'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/show' => [[['_route' => 'show', '_controller' => 'App\\Controller\\HomeController::show'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/properties' => [[['_route' => 'properties', '_controller' => 'App\\Controller\\PropertyController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
