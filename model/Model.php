<?php

abstract class Model {

    private static $db;
    private $cost;

    //GETTERS
    protected function getDb() {
        if (self::$db == null) {
            self::setDb();
        }
        return self::$db;
    }

    //SETTERS
    private static function setDb() {
        try {
            self::$db = new PDO('mysql:host=localhost;dbname=codoc;charset=utf8mb4', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function setCost($timeTarget) {
        $cost = 10;
        do {
            $cost++;
            $start = microtime(true);
            password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
            $end = microtime(true);
        } while (($end - $start) < $timeTarget);

        $this->cost = $cost;
        return $cost;
    }
}