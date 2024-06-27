<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_admin_user', '_controller' => 'App\\Controller\\AdminUserController::index'], null, null, null, false, false, null]],
        '/meals/new' => [[['_route' => 'app_meals_new', '_controller' => 'App\\Controller\\MealsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/planner' => [[['_route' => 'app_planner_index', '_controller' => 'App\\Controller\\PlannerController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_static', '_controller' => 'App\\Controller\\StaticController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_access', '_controller' => 'App\\Controller\\UserAccessController::index'], null, null, null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_access_new', '_controller' => 'App\\Controller\\UserAccessController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/meals' => [[['_route' => 'app_meals_index', '_controller' => 'App\\Controller\\MealsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/meals/(?'
                    .'|meals/([^/]++)(*:193)'
                    .'|([^/]++)(*:209)'
                    .'|filter/([^/]++)(?'
                        .'|(*:235)'
                    .')'
                .')'
                .'|/planner/(?'
                    .'|new/([^/]++)(*:269)'
                    .'|([^/]++)(?'
                        .'|(*:288)'
                        .'|/edit(*:301)'
                        .'|(*:309)'
                    .')'
                .')'
                .'|/static/([^/]++)(*:335)'
                .'|/filterByMealType/([^/]++)(?'
                    .'|(*:372)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:398)'
                    .'|/edit(*:411)'
                .')'
                .'|/admin/users/([^/]++)/(?'
                    .'|ban(*:448)'
                    .'|unban(*:461)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'app_meals_index_some', '_controller' => 'App\\Controller\\MealsController::some'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        209 => [[['_route' => 'app_meals_delete', '_controller' => 'App\\Controller\\MealsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        235 => [
            [['_route' => 'app_meals_filter', '_controller' => 'App\\Controller\\MealsController::filter'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_meals_filtered', '_controller' => 'App\\Controller\\MealsController::filtered'], ['status'], null, null, false, true, null],
        ],
        269 => [[['_route' => 'app_planner_new', '_controller' => 'App\\Controller\\PlannerController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        288 => [[['_route' => 'app_planner_show', '_controller' => 'App\\Controller\\PlannerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        301 => [[['_route' => 'app_planner_edit', '_controller' => 'App\\Controller\\PlannerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        309 => [[['_route' => 'app_planner_delete', '_controller' => 'App\\Controller\\PlannerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        335 => [[['_route' => 'app_static_show', '_controller' => 'App\\Controller\\StaticController::show'], ['id'], null, null, false, true, null]],
        372 => [
            [['_route' => 'app_static_filter_by_meal_type', '_controller' => 'App\\Controller\\StaticController::filterByMealType'], ['mealType'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_meals_filter_by_meal_type', '_controller' => 'App\\Controller\\MealsController::filterByMealType'], ['mealType'], ['GET' => 0], null, false, true, null],
        ],
        398 => [[['_route' => 'app_meals_show', '_controller' => 'App\\Controller\\UserAccessController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        411 => [[['_route' => 'app_meals_edit', '_controller' => 'App\\Controller\\UserAccessController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        448 => [[['_route' => 'admin_user_ban', '_controller' => 'App\\Controller\\AdminUserController::banUser'], ['id'], null, null, false, false, null]],
        461 => [
            [['_route' => 'admin_user_unban', '_controller' => 'App\\Controller\\AdminUserController::unbanUser'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
