<?php
/**
 * Created by Phani.
 * Date: 5/9/18
 * Time: 8:17 AM
 */

$this->app->group(['prefix' => 'stocks'], function() {
	$this->app->post( 'watchlist', [
		'uses'       => 'WatchlistController@store',
		'middleware' => "scope:watchlist,watchlist:create"
	] );
	$this->app->get( 'watchlist', [
		'uses'       => 'WatchlistController@index',
		'middleware' => "scope:watchlist,watchlist:list"
	] );
	$this->app->get( 'watchlist/{id}', [
		'uses'       => 'WatchlistController@show',
		'middleware' => "scope:watchlist,watchlist:read"
	] );
	$this->app->put( 'watchlist/{id}', [
		'uses'       => 'WatchlistController@update',
		'middleware' => "scope:watchlist,watchlist:write"
	] );
	$this->app->delete( 'watchlist/{id}', [
		'uses'       => 'WatchlistController@destroy',
		'middleware' => "scope:watchlist,watchlist:delete"
	] );
});