<?php
namespace SAWatchList;
/**
 * Created by PhpStorm.
 * User: Phani
 * Date: 5/9/18
 * Time: 8:27 AM
 */

use Illuminate\Support\ServiceProvider;
class SAWatchListServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
		//Register Leave routes
		include __DIR__ . '/routes.php';


	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		//

	}
}