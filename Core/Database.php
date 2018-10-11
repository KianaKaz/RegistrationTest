<?php
namespace Core;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database {

    public static function boot(){
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'programming_test',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix'    => '',
        ]);
        $capsule->bootEloquent();
    }

}