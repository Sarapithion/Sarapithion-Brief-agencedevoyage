<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/adv/reservation' => [[['_route' => 'app_adv_reservation_index', '_controller' => 'App\\Controller\\AdvReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/adv/reservation/new' => [[['_route' => 'app_adv_reservation_new', '_controller' => 'App\\Controller\\AdvReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/adv/user' => [[['_route' => 'app_adv_user_index', '_controller' => 'App\\Controller\\AdvUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/adv/user/new' => [[['_route' => 'app_adv_user_new', '_controller' => 'App\\Controller\\AdvUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/adv/voyage' => [[['_route' => 'app_adv_voyage_index', '_controller' => 'App\\Controller\\AdvVoyageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/adv/voyage/new' => [[['_route' => 'app_adv_voyage_new', '_controller' => 'App\\Controller\\AdvVoyageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/reservations' => [[['_route' => 'api_reservation_index', '_controller' => 'App\\Controller\\Api\\ReservationController::index'], null, null, null, false, false, null]],
        '/api/reservation/new' => [[['_route' => 'api_reservation_new', '_controller' => 'App\\Controller\\Api\\ReservationController::new'], null, ['POST' => 0], null, false, false, null]],
        '/api/user' => [[['_route' => 'app_api_user', '_controller' => 'App\\Controller\\Api\\UserController::index'], null, null, null, false, false, null]],
        '/api/voyage' => [[['_route' => 'app_api_voyage', '_controller' => 'App\\Controller\\Api\\VoyageController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/adv/(?'
                    .'|reservation/([^/]++)(?'
                        .'|(*:38)'
                        .'|/edit(*:50)'
                        .'|(*:57)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:81)'
                        .'|/edit(*:93)'
                        .'|(*:100)'
                    .')'
                    .'|voyage/([^/]++)(?'
                        .'|(*:127)'
                        .'|/edit(*:140)'
                        .'|(*:148)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_adv_reservation_show', '_controller' => 'App\\Controller\\AdvReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        50 => [[['_route' => 'app_adv_reservation_edit', '_controller' => 'App\\Controller\\AdvReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        57 => [[['_route' => 'app_adv_reservation_delete', '_controller' => 'App\\Controller\\AdvReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        81 => [[['_route' => 'app_adv_user_show', '_controller' => 'App\\Controller\\AdvUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_adv_user_edit', '_controller' => 'App\\Controller\\AdvUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'app_adv_user_delete', '_controller' => 'App\\Controller\\AdvUserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        127 => [[['_route' => 'app_adv_voyage_show', '_controller' => 'App\\Controller\\AdvVoyageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        140 => [[['_route' => 'app_adv_voyage_edit', '_controller' => 'App\\Controller\\AdvVoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        148 => [
            [['_route' => 'app_adv_voyage_delete', '_controller' => 'App\\Controller\\AdvVoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
