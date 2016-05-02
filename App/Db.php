<?php


namespace App;

class Db
{
    // данный класс остаётся универсальным, чтобы он мог работать с любыми данными

    protected $dbh; // это свойство необходимо для того, чтобы не оставить соединение с базой данных в конструкторе и соединение поместить в это свойство

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

    /*
     * данная функция возвращает объекты нужного класса, согласно ORM
     */
    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return []; // возвращаем пустой массив в противном случае
    }

}