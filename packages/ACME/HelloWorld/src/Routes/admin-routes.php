<?php

Route::group(['middleware' => ['web', 'admin']], function () {
    Route::prefix(config('app.admin_url'))->group(function () {

        // all admin routes will place here
        Route::view('/admin/hello-world', 'helloworld::admin.index');
    });
});
