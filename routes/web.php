<?php



Route::resource('/','InicioController');

//Normally User
Route::group(['middleware' => ['guest']],function(){

    Route::resource('Inicio','InicioController');

    Route::resource('Donativos','DonativosController');

    Route::resource('QuienesSomos','QuienesSomosController');

    Route::resource('ConoceMas','ConoceMasController');

});
//Admin
Route::group(['middleware' => 'useradmin'],function(){
    Route::resource('Admin/Inicio','Admin\AdminInicioController');

    Route::resource('Admin/Donativos','Admin\AdminDonativosController');

    Route::resource('Admin/QuienesSomos','Admin\AdminQuienesSomosController');

    //Route::resource('Admin/ConoceMas','Admin\AdminConoceMasController');
});

//User
Route::group(['middleware' => ['usernormally']],function (){
    Route::resource('User/Inicio','Normally\UserInicioController');

    Route::resource('User/Donativos','Normally\UserDonativosController');

    Route::resource('User/QuienesSomos','Normally\UserQuienesSomosController');

    Route::resource('User/ConoceMas','Normally\UserConoceMasController');
});
Auth::routes();
