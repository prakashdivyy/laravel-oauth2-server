<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

App::singleton('oauth2', function () {

    $storage = new OAuth2\Storage\Pdo(App::make('db')->getPdo());
    $server = new OAuth2\Server($storage);

    $server->addGrantType(new OAuth2\GrantType\UserCredentials($storage));

    return $server;
});

Route::post('oauth/token', function () {
    $bridgedRequest = OAuth2\HttpFoundationBridge\Request::createFromRequest(Request::instance());
    $bridgedResponse = new OAuth2\Response();

    $bridgedResponse = App::make('oauth2')->handleTokenRequest($bridgedRequest, $bridgedResponse);
    $code = $bridgedResponse->getStatusCode();
    $parameters = $bridgedResponse->getParameters();
    return response($parameters, $code);
});

Route::get('oauth/resource', function () {
    $bridgedRequest = OAuth2\HttpFoundationBridge\Request::createFromRequest(Request::instance());
    $bridgedResponse = new OAuth2\Response();

    if (App::make('oauth2')->verifyResourceRequest($bridgedRequest, $bridgedResponse)) {
        $token = App::make('oauth2')->getAccessTokenData($bridgedRequest, $bridgedResponse);
        $token["expires"] = $token["expires"] * 1000;
        return response($token);
    } else {
        $code = $bridgedResponse->getStatusCode();
        $parameters = $bridgedResponse->getParameters();
        return response($parameters, $code);
    }
});