<?php
class ConnectionDatabase
{
    const DATABASE = 'magazine';
    const USERNAME = 'root';
    const PASWWORD = '12345';
    const HOST = 'localhost';
    const OPTIONS = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    private static $connection;
    public static function getConnection()
    {
        if (empty(self::$connection)){
            $dsn = 'mysql:host=localhost;dbname=magazine';
            $pdo = new PDO($dsn,self::USERNAME,self::PASWWORD,self::OPTIONS);
            self::$connection = $pdo;
            echo 'ok';
        }
        return self::$connection;
    }
}