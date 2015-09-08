<?php

// Admin routes
App::adminRoutes('Serenity\Modules\Http\Controllers\Admin', function() {

    // Modules
    Route::group(['prefix' => 'modules'], function() {
        Route::get('/', ['as' => 'admin.modules.index', 'uses' => 'ModulesController@index']);
        Route::get('show/{module}', ['as' => 'admin.modules.show', 'uses' => 'ModulesController@show']);
        Route::get('install/{module}', ['as' => 'admin.modules.install', 'uses' => 'ModulesController@install']);
        Route::get('uninstall/{module}', ['as' => 'admin.modules.uninstall', 'uses' => 'ModulesController@uninstall']);
        Route::get('remove/{module}', ['as' => 'admin.modules.remove', 'uses' => 'ModulesController@remove']);
    });

});

// Customize admin window
App::adminWindow(function($window) {

    // Menu
    $menu = $window->getSidebarMenu();

    $menu->link('Moduly', route('admin.modules.index'), 'fa fa-puzzle-piece');

});