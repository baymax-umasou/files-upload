<?php

use Illuminate\Routing\Router;


Route::group([
    'prefix'     => config('upload.route.prefix'),
    'middleware' => config('upload.route.middleware'),
], function (Router $router) {

    $router->get('file/upload', 'BaymaxUmasou\FilesUpload\Controllers\FilesUploadController@upload');

});