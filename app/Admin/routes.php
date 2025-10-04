<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('galleries', GalleryController::class);
    $router->resource('videos', VideoContorller::class);
    $router->resource('contact-uses', ContactUsController::class);
    $router->resource('tour-categories', TourCategoryController::class);
    $router->resource('tours', TourController::class);
    $router->resource('tourdetails', TourDetailsController::class);
    $router->resource('testimonials', TestimonialsController::class);
    $router->resource('titles', TitleController::class);
});
