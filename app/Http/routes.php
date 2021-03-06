<?php

/*
 * COMMENTS
 */
$router->post
('order/new-comment', ['as' => 'new.comment', 'uses' => 'CommentController@addOrderComment']);


/*
 * PAGES
 */
$router->get('/', ['as' => 'home', 'uses' => 'PagesController@getHome']);
$router->get('/contact', ['as' => 'contact', 'uses' => 'PagesController@getContact']);
$router->get('/how-it-works', ['as' => 'how.it.works', 'uses' => 'PagesController@getHowItWorks']);
$router->get('/blog', ['as' => 'blog', 'uses' => 'PagesController@getBlog']);
$router->get('/gallery', ['as' => 'gallery', 'uses' => 'PagesController@getGallery']);
$router->get('/order/sneaker-con', ['as' => 'order.sneaker.con', 'uses' => 'OrderController@getSneakerConForm']);
$router->post('/order/sneaker-con', ['as' => 'order.sneaker.con', 'uses' => 'OrderController@postSneakerConForm']);

/*
 * SHOE REQUEST
 */

$router->get('/shoe-request', ['as' => 'shoe.request', 'uses' => 'OrderController@getShoeRequest']);
$router->post('/shoe-request', ['as' => 'shoe.request', 'uses' => 'OrderController@postShoeRequest']);
$router->group(['middleware' => 'auth'], function($router){
    $router->get('/shoe-request/checkout', ['as' => 'shoe.request.checkout', 'uses' => 'OrderController@getShoeRequestCheckout']);
    $router->post('/shoe-request/checkout', ['as' => 'shoe.request.checkout', 'uses' => 'OrderController@postShoeRequestCheckout']);
});


/*
 * AUTH
 */

$router->get('/auth/sign-up', ['as' => 'sign.up', 'uses' => 'Auth\AuthController@getSignUp']);
$router->get('/auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
$router->post('/auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);
$router->post('/auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
$router->post('/user/add-details', ['as' => 'login', 'uses' => 'UserController@postAddDetails']);

/*
 * ORDER
 */
/*
 * ADMIN
 */
$router->group(['middleware' => 'auth'], function($router){
    $router->group(['middleware' => 'admin'], function($router){
        $router->get('/admin/order/{order_number}', ['as' => 'admin.order', 'uses' => 'OrderController@getAdminOrder']);
        $router->post('/admin/order/add-price', ['as' => 'add.order.price', 'uses' => 'OrderController@postAddPrice']);
        $router->get('/admin/orders', ['as' => 'admin.orders', 'uses' => 'OrderController@getAdminOrders']);
    });
});
/*
 * USER
 */
$router->group(['middleware' => 'owner'], function($router){
    $router->get('/{username}/order/{order_number}', ['as' => 'user.order', 'uses' => 'OrderController@getUserOrder']);
    $router->get('/{username}/orders', ['as' => 'user.orders', 'uses' => 'OrderController@getUserOrders']);
    $router->post('/{username}/order/accept-order', ['as' => 'accept.order', 'uses' => 'OrderController@postAcceptOrder']);
    $router->post('/{username}/order/decline-order', ['as' => 'decline.order', 'uses' => 'OrderController@postDeclineOrder']);
});

