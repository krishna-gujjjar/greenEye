<?php namespace GreenEye\App\Libs;

use \PDO as PDO;
use GreenEye\App\Helper\DB;
use function GreenEye\errMsg;

require_once ROOT . 'app/config/setdb.php';

/** Database Connection Class
 *
 * Connections & Execution For All Database Related Queries */
abstract class Database extends DB
{
    /** Data Source Name
     * @var string */
    protected $dns;
    protected $options;
    protected $dbh;
    protected $error;
    protected $stmt;

    public function __construct()
    {
        if (parent::__construct()) {
            parent::__destruct();
            $this->dns = DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
            $this->options = [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            $this->connect();
        } else {
            echo 'Database & Table Not Found';
        }
    }

    /** Connect Function
     *
     * Connection for Database
     * @return object */
    public function connect()
    {
        if (!$this->dbh) {
            try {
                $this->dbh = new PDO(
                    $this->dns,
                    DB_USER,
                    DB_PASS,
                    $this->options
                );
                if (!$this->dbh) {
                    die(errMsg('Server Not Connected.'));
                }
            } catch (PDOException $e) {
                echo errMsg($this->error = $e->getMessage());
            }
        } else {
            echo errMsg('Server Not Live Yet.');
        }
        return $this->dbh;
    }

    /** Query Function
     *
     * Prepare Query For Execution
     * @param string $query Query for Preparetion
     * @return string */
    public function query(string $query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    /** Bind Function
     *
     * Binding Variable & Values to Query
     * @param string $param
     * @param mixed $value
     * @param mixed|null $type */
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

    /** Execute Function
     *
     * Execute the prepared statement
     * @return object */
    public function execute()
    {
        return $this->stmt->execute();
    }

    /** resultset Function
     *
     * Execute Query & Return All Result as Associated Object
     * @return array */
    public function resultset()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /** resultArray Function
     *
     * Execute Query & Return All Result as Associated Array
     * @return array */
    public function resultArray()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /** single Function
     *
     * Execute Query & Return Single Result as Associated Array
     * @return array */
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    /** rowCount Function
     *
     * Get record row count
     * @return int|bool */
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    // Returns the last inserted ID
    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

    public function __destruct()
    {
        $this->dbh and $this->dbh = null;
    }
}
