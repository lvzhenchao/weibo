<?php


Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');


/*注册路由*/
Route::get('signup', 'UsersController@create')->name('signup');
//用户资源路由
Route::resource('users', 'UsersController');


//显示登录页面
Route::get('login', 'SessionsController@create')->name('login');
//创建新会话（登录）
Route::post('login', 'SessionsController@store')->name('login');
//销毁会话（退出登录）
Route::delete('logout', 'SessionsController@destroy')->name('logout');
