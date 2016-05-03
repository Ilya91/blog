<?php

namespace App;

abstract class Model
{

    const TABLE = '';

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE, // static будет использовать тот класс, который вызывает этот код(позднее статическое связывание)
            static::class
        );
    }

    public static function findById($id){
        $db = Db::instance();
        return $db->query('SELECT * FROM ' . static::TABLE . " WHERE id = '{$id}'", static::class);
    }

}