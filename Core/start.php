<?php

// Admin routes
App::adminRoutes('Serenity\Core\Http\Controllers\Admin', function() {

    // Dashboard
    Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'Controller@dashboard']);

    // Auth
    Route::get('/', ['as' => 'admin.logout', 'uses' => 'Controller@dashboard']); // TODO

});

// Front routes
App::frontRoutes('Serenity\Core\Http\Controllers\Front', function() {

    Route::get('/', ['as' => 'front', 'uses' => 'Controller@front']);

});

// Customize admin window
App::adminWindow(function($window) {

    // Set admin window variables
    $window->set('logo_href', route('admin.dashboard'));
    $window->set('webURL', route('front'));
    $window->set('logoutURL', route('admin.logout'));

    // Menu
    $menu = $window->getSidebarMenu();

    $menu->heading('HLAVNÁ NAVIGÁCIA');

    $menu->link('Hlavný panel', route('admin.dashboard'), 'fa fa-dashboard');

});
