<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.05.2016
 * Time: 22:12
 */

namespace App;


trait Singleton
{

    protected static $instance;


    protected function __construct()
    {

    }


    public static function instance()
    {

        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }
}