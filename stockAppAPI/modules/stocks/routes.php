<?php
/**
 * Created by Phani.
 * Date: 5/9/18
 * Time: 8:17 AM
 */

$this->app->group(['prefix' => 'stocks'], function() {
	$this->app->post( '/', [
		'uses'       => 'StockController@store',
		'middleware' => "scope:stocks,stocks:create"
	] );
	$this->app->get( '/', [
		'uses'       => 'StockController@index',
		'middleware' => "scope:stocks,stocks:list"
	] );
	$this->app->get( '/{id}', [
		'uses'       => 'StockController@show',
		'middleware' => "scope:stocks,stocks:read"
	] );
	$this->app->put( '/{id}', [
		'uses'       => 'StockController@update',
		'middleware' => "scope:stocks,stocks:write"
	] );
	$this->app->delete( '/{id}', [
		'uses'       => 'StockController@destroy',
		'middleware' => "scope:stocks,stocks:delete"
	] );
});