<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Accounts extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid',
        'firstName',
        'lastName',
        'middleName',
        'email',
        'address',
        'zipCode',
        'city',
        'state',
        'country',
        'phone',
        'mobile',
	    'industry',
	    'occupation',
	    'annualIncome',
	    'isVerified',
	    'dob',
        'isActive'
    ];
}
