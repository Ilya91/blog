<?php

namespace App\Models;

use App\Model;
use App\Db;

class News extends Model{

    const TABLE = 'news';

    public static function findLastNews(){
        $db = Db::instance();
        return $db->query("SELECT * FROM " . self::TABLE . " ORDER BY id DESC LIMIT 3", self::class);
    }

}