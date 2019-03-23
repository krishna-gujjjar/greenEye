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
    protected $con;
    protected $error;
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
        if (!$this->con) {
            try {
                $this->con = new PDO(
                    $this->dns,
                    self::DB_USER,
                    self::DB_PASS,
                    $this->options
                );
                if ($this->con) {
                    echo 'Connected to Server';
                } else {
                    die('Not Connected');
                }
            } catch (PDOException $e) {
                echo $this->error = $e->getMessage();
            }
        } else {
            echo 'Not Try to Connect';
        }
        return $this->con;
    }

    public function query(string $query)
    {
        $this->stmt = $this->con->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // Execute the prepared statement
    public function execute()
    {
        return $this->stmt->execute();
    }

    // Get result set as array of objects
    public function resultset()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get single record as object
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Get record row count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    // Returns the last inserted ID
    public function lastInsertId()
    {
        return $this->con->lastInsertId();
    }

    public function __destruct()
    {
        $this->con and $this->con = null;
    }
}
