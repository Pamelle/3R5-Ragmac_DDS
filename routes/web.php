<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/', function () use ($router) {
    return $router->app->version();
}); 

// unsecure routes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users',['uses' => 'UserController@getUsers']);
});

$router->get('login',[
    'as'=>'login','uses'=>'UserController@loginPage'
]);
$router->get('CRUD',[
    'as'=>'CRUD','uses'=>'UserController@CRUDPage'
]);
$router->post('verify',[
    'as'=>'verify','uses'=> 'UserController@verifyUser'
]);

$router->post('add',[
    'as'=> 'add','uses'=>'UserController@newUserPage'
]);

$router->post('insert',[
    'as'=>'insert','uses'=>'UserController@insertUser'
]);

$router->post('delUserPage', [
    'as' => 'delUserPage', 'uses' => 'UserController@deleteUserPage'
]);
$router->post('viewUser', [
    'as' => 'viewUser', 'uses' => 'UserController@viewUserPage'
]);

$router->post('deleteUser', [
    'as' => 'deleteUser', 'uses' => 'UserController@delete'
]);

$router->post('updateUserPage', [
    'as' => 'updateUserPage', 'uses' => 'UserController@updateUserPage'
]);


$router->post('updateUser', [
    'as' => 'updateUser', 'uses' => 'UserController@update'
]);