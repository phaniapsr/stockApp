<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 5/9/18
 * Time: 8:51 AM
 */

namespace app\Models;
use Illuminate\Database\Eloquent\Model;


class Stocks extends Model{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'stocks';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'uid',
		'userId',
		'stockId',
		'stockName'
	];
}