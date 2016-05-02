<?php

namespace App\Models;

use App\Db;
use App\Model;

class User extends Model{

    const TABLE = 'users';
    public $email;
    public $name;
    public $age;
    public $phone;

    /*
     * данная функция сделана статической, чтобы не создавался объект пользователя, когда нужно найти всех пользователей
     */
/*    public static function findAll(){
        $db = new Db();
        return $db->query("SELECT * FROM " . self::TABLE, self::class);
    }*/

}