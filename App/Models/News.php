<?php

namespace App\Models;

use App\Model;
use App\Db;
use App\View;

/**
 * Class News
 * @package App\Models
 *
 * @property \App\Models\Author $author
 */


class News extends Model{

    const TABLE = 'news';


    public $title;
    public $content;
    public $author;

    /**
     * Lazy Load - ленивая загрузка(делаем запрос к базе на получение связанных данных, только тогда, когда они реально нужны)
     * @param $name
     * @return null
     */
    public function __get($name)
    {
        switch($name){
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($name)
    {
        switch($name){
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return null;
        }
    }

    /**
     * @return mixed
     * Запрашивает 3 последние новости
     */
    public static function findLastNews(){
        $db = Db::instance();
        return $db->query("SELECT * FROM " . self::TABLE . " ORDER BY id DESC LIMIT 3", self::class);
    }

    public function addNews()
    {

    }



}