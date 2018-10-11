<?php
/**
 * Created by PhpStorm.
 * User: acerr
 * Date: 10/6/2018
 * Time: 11:56 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class user extends Model
{

    protected $fillable=['first_name','last_name','tell','Acount_owner','IBAN'];
}