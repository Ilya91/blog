<?php


namespace App;

class Db
{
    // данный класс остаётся универсальным, чтобы он мог работать с любыми данными

    use Singleton; //использование трэйта

    protected $dbh; // это свойство необходимо для того, чтобы не оставить соединение с базой данных в конструкторе и соединение поместить в это свойство

    protected function __construct()
    {
        try {
            $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        } catch (\PDOException $e) {
            throw new \App\Exceptions\Db($e->getMessage());
        }

    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
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