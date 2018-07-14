<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Dashboard');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Добро пожаловать в панель Администратора';
	return AdminSection::view($content, 'Панель Администратора');
}]);



//Route::post('/blog/admin.add_news', [
//	'uses' => 'BlogsController@postAdd',
//	'as' => 'add_state'
//]);