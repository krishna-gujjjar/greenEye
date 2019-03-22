<?php namespace GreenEye\App\Config;

use \PDO as PDO;

/** Database Connection Class */
abstract class database
{
    const DB_TYPE = 'mysql';
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_NAME = 'gReeneye';

    protected $dns;
    protected $options;
    protected $dbh;
    protected $stmt;

    public function __construct()
    {
        $this->dns = self::DB_TYPE . ':host=' . self::DB_HOST . ';dbname=' . self::DB_NAME;
        $this->options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $this->connect();
    }

    public function connect()
    {
        if (!$this->dbh) {
            try {
                $this->dbh = new PDO(
                    $this->dns,
                    self::DB_USER,
                    self::DB_PASS,
                    $this->options
                );
                if ($this->dbh) {
                    echo 'Connected to Server';
                } else {
                    echo 'Not Connected';
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'Not Try to Connect';
        }
    }

    // public function __destruct()
    // {
    //     $this->dbh = null;
    // }
}
