<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_admin_user' => [[], ['_controller' => 'App\\Controller\\AdminUserController::index'], [], [['text', '/admin/user']], [], [], []],
    'app_meals_index_some' => [['id'], ['_controller' => 'App\\Controller\\MealsController::some'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/meals/meals']], [], [], []],
    'app_meals_new' => [[], ['_controller' => 'App\\Controller\\MealsController::new'], [], [['text', '/meals/new']], [], [], []],
    'app_meals_delete' => [['id'], ['_controller' => 'App\\Controller\\MealsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/meals']], [], [], []],
    'app_meals_filter' => [['status'], ['_controller' => 'App\\Controller\\MealsController::filter'], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/meals/filter']], [], [], []],
    'app_planner_index' => [[], ['_controller' => 'App\\Controller\\PlannerController::index'], [], [['text', '/planner/']], [], [], []],
    'app_planner_new' => [['id'], ['_controller' => 'App\\Controller\\PlannerController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planner/new']], [], [], []],
    'app_planner_show' => [['id'], ['_controller' => 'App\\Controller\\PlannerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planner']], [], [], []],
    'app_planner_edit' => [['id'], ['_controller' => 'App\\Controller\\PlannerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/planner']], [], [], []],
    'app_planner_delete' => [['id'], ['_controller' => 'App\\Controller\\PlannerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planner']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_static' => [[], ['_controller' => 'App\\Controller\\StaticController::index'], [], [['text', '/']], [], [], []],
    'app_static_show' => [['id'], ['_controller' => 'App\\Controller\\StaticController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/static']], [], [], []],
    'app_static_filter_by_meal_type' => [['mealType'], ['_controller' => 'App\\Controller\\StaticController::filterByMealType'], [], [['variable', '/', '[^/]++', 'mealType', true], ['text', '/filterByMealType']], [], [], []],
    'app_user_access' => [[], ['_controller' => 'App\\Controller\\UserAccessController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_access_new' => [[], ['_controller' => 'App\\Controller\\UserAccessController::new'], [], [['text', '/user/new']], [], [], []],
    'app_meals_show' => [['id'], ['_controller' => 'App\\Controller\\UserAccessController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_meals_edit' => [['id'], ['_controller' => 'App\\Controller\\UserAccessController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'admin_user_ban' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::banUser'], [], [['text', '/ban'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
    'admin_user_unban' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::unbanUser'], [], [['text', '/unban'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
    'app_meals_index' => [[], ['_controller' => 'App\\Controller\\MealsController::index'], [], [['text', '/meals']], [], [], []],
    'app_meals_filtered' => [['status'], ['_controller' => 'App\\Controller\\MealsController::filtered'], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/meals/filter']], [], [], []],
    'app_meals_filter_by_meal_type' => [['mealType'], ['_controller' => 'App\\Controller\\MealsController::filterByMealType'], [], [['variable', '/', '[^/]++', 'mealType', true], ['text', '/filterByMealType']], [], [], []],
];
