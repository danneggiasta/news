<?php
include 'config/database.php';

Class Database
{

    private $server = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "";
    private $user = DB_USER;
    private $pass = DB_PASS;

    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    private $db;


    public function __construct()
    {

        try {
            $this->db = new PDO($this->server, $this->user, $this->pass, $this->options);

            return $this->db;

        } catch (PDOException $e) {

            return "There is some problem in connection: " . $e->getMessage();
        }
    }

    public function __destruct()
    {
        return $this->db = null;
    }

    function run($sql, $bind = array())
    {
        $sql = trim($sql);

        try {
            $result = $this->db->prepare($sql);
            $result->execute($bind);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit(1);
        }
    }

    function create($table, $data)
    {
        $fields = $this->filter($table, $data);
        $sql = "INSERT INTO" . $table . " (" . implode($fields, ", ") . ") VALUES (:" . implode($fields, ", :") . ");";
        $bind = array();
        foreach ($fields as $field)
            $bind[":$field"] = $data[$field];
        $result = $this->run($sql, $bind);
        return $this->db->lastInsertId();
    }

    function read($fields = "*", $table, $where = "", $bind = array())
    {
        $sql = "SELECT " . $fields . " FROM " . $table;
        if (!empty($where))
            $sql .= " WHERE " . $where;
        $sql .= ";";
        $result = $this->run($sql, $bind);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $rows = array();
        while ($row = $result->fetch()) {
            $rows[] = $row;
        }
        return $rows;
    }

    function update($table, $data, $where, $bind = array())
    {
        $fields = $this->filter($table, $data);
        $fieldSize = sizeof($fields);
        $sql = "UPDATE " . $table . " SET ";
        for ($f = 0; $f < $fieldSize; ++$f) {
            if ($f > 0)
                $sql .= ", ";
            $sql .= $fields[$f] . " = :update_" . $fields[$f];
        }
        $sql .= " WHERE " . $where . ";";
        foreach ($fields as $field)
            $bind[":update_$field"] = $data[$field];

        $result = $this->run($sql, $bind);
        return $result->rowCount();
    }

    function delete($table, $where, $bind = "")
    {
        $sql = "DELETE FROM" . $table . " WHERE " . $where . ";";
        $result = $this->run($sql, $bind);
        return $result->rowCount();
    }

    private function filter($table, $data)
    {
        $driver = $this->config['dbdriver'];
        if ($driver == 'sqlite') {
            $sql = "PRAGMA table_info('" . $table . "');";
            $key = "name";
        } elseif ($driver == 'mysql') {
            $sql = "DESCRIBE " . $table . ";";
            $key = "Field";
        } else {
            $sql = "SELECT column_name FROM information_schema.columns WHERE table_name = '" . $table . "';";
            $key = "column_name";
        }
        if (false !== ($list = $this->run($sql))) {
            $fields = array();
            foreach ($list as $record)
                $fields[] = $record[$key];
            return array_values(array_intersect($fields, array_keys($data)));
        }
        return array();
    }

    private $config = array(
        # "dbdriver" => "sqlite",
        # "sqlitedb" => "path/to/db.sqlite"

        "dbdriver" => "mysql",
        "dbuser" => "danneggiasta",
        "dbpass" => "QAZxc321!@#",
        "dbname" => "test"
    );

    public function userLogin($email, $pass)
    {

        try {
            $sql = "SELECT id FROM users WHERE 'email' = :email AND 'pass' = md5(:pass)";

            $bind = [':email' => $_POST['email'], ':pass' => $_POST['password']];
            $result = $this->run($sql, $bind);
            $count = $result->rowCount();
            $data = $result->fetch(PDO::FETCH_ASSOC);

            if (isset($count)) {
                $_SESSION['id'] = $data->id;
                // Storing user session value
                return true;
            } else {

                return false;
            }

        } catch(PDOException $e) {

            echo $e->getMessage();
        }
    }

}

?>