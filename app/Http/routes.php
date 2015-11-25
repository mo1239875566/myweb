<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*Route::get('/', function () {
    return view ('welcome') ;
}
);*/
//路由到欢迎页面


/*Route::get('/', function () {
    return '<h3>信息工程学院13网络技术1313100120</h3>';
});*/
//路由到H3


/*Route::get('/', function () {
    return view ('');
});*/

/*
Route::get('/', function ($age="20") {
    $test='<h1>web web </h1>';
    return view ('test',["age"=>$age]) ;
    });*/

//路由到test页面




/*Route::get('/', function () {
    return view ('main') ;
});*/



/*Route::get('user/{id}', 'UserController@showProfile');*/


Route::get('/product', 'productController@index') ;
Route::get('/product/show/{id}', 'productController@show') ;
Route::get('/product/edit/{id?}', 'productController@edit') ;
Route::get('/product/save/{id?}', 'productController@save') ;
Route::get('/product/delete/{id}', 'productController@delete') ;


Route::get('/product/send', 'productController@testsend') ;
Route::get('/product/receive', 'productController@testreceive') ;