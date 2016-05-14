<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2016
 * Time: 11:13
 */

namespace App\Models;


use App\Model;

class Author extends Model
{
    const TABLE = 'authors';
    public $name;
}