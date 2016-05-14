<?php

namespace App\Models;


interface HasEmail
{

    /**
     * Метод, возвращающий адрес электронной почты
     * @deprecated
     * @return string Адрес электронной почту
     */
    public function getEmail();

}