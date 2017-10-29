<?php

use CrispySystem\Helpers\Config;
use CrispySystem\Router\Router;
use CrispySystem\Router\Route;

$baseUrl = Config::get('system.base_urls.backend');

Router::group()
    ->setPathPrefix($baseUrl . '/admins')
    ->setHandlerPrefix('CrispySystem\Modules\Admins\Controllers\BackendAdminsController.')
    ->setNamePrefix('backend.admins')
    ->routes(function () {

        // Index
        Route::get('', 'index')
            ->setName('index');

        // Add
        Route::get('/new', 'new')
            ->setName('new');

        Route::post('/create', 'create');

        // Edit
        Route::get('/edit/{id}', 'edit')
            ->where('id', '(\\d+)')
            ->setName('edit');

        Route::post('/update/{id}', 'update')
            ->where('id', '(\\d+)');

        // Delete
        Route::get('/delete/{id}', 'delete')
            ->where('id', '(\\d+)')
            ->setName('delete');

        Route::post('/destroy/{id}', 'destroy')
            ->where('id', '(\\d+)');

    });

Router::group()
    ->setPathPrefix($baseUrl . '/admins/roles')
    ->setHandlerPrefix('CrispySystem\Modules\Admins\Controllers\BackendRolesController.')
    ->setNamePrefix('backend.admins.roles')
    ->routes(function () {

        // Index
        Route::get('', 'index')
            ->setName('index');

        // Add
        Route::get('/new', 'new')
            ->setName('new');

        Route::post('/create', 'create');

        // Edit
        Route::get('/edit/{id}', 'edit')
            ->where('id', '(\\d+)')
            ->setName('edit');

        Route::post('/update/{id}', 'update')
            ->where('id', '(\\d+)');

        // Delete
        Route::get('/delete/{id}', 'delete')
            ->where('id', '(\\d+)')
            ->setName('delete');

        Route::post('/destroy/{id}', 'destroy')
            ->where('id', '(\\d+)');

    });
