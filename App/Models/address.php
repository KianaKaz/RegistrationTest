<?php
/**
 * Created by PhpStorm.
 * User: acerr
 * Date: 10/6/2018
 * Time: 11:56 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    public $table="addresses";
    protected $fillable=['city','St','NO','zip','user_id'];
}