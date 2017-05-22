<?php

//require 'Database.php';

class Table
{
    private $db = null;

    public function __construct()
    {
        $this->db = Database::getInstance();

    }

    public function createTable()
    {
        try {
            // sql to create table
            $sql = "CREATE TABLE `Student` ( `ID` INT NOT NULL AUTO_INCREMENT , `name`VARCHAR(40) NOT NULL , `last_name` VARCHAR(40) NOT NULL , `email` VARCHAR(40)NOT NULL , PRIMARY KEY (`ID`)) ";
            // use exec() because no results are returned
            $this->db->exec($sql);
            echo "Table Student created successfully";
            $this->db->closeConnection();
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    public function insertData()
    {
        try {

            // inserting data into create table using prepare statement to prevent from sql injections
            $stm = $this->db->prepare("INSERT INTO student (name,last_name,email) VALUES (:name, :last_name, :email)");
            // inserting  record
            $stm->execute(array(
                ':name' => 'Saquib',
                ':last_name' => 'Rizwan',
                ':email' => 'saquib.rizwan@cloudways.com'));
            echo "New record created successfully";
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    public function selectData()
    {
        try {
            $sql = "SELECT * FROM student";
//            $i = 0;
//
//            $out = [];
            foreach ($this->db->query($sql) as $row) {
                echo " ID: " . $row['ID'] . "<br>";
                echo " Name: " . $row['name'] . "<br>";
                echo " Last Name: " . $row['last_name'] . "<br>";
                echo " Email: " . $row['email'] . "<br>";
//                $out[$i] = $row[$i];
//
//                print_r($out);
//
//                echo "a " .$out[$i]. ".";
//                $i++;
            }
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    public function updateData()
    {
        try {
            $sql = "UPDATE student SET name = 'nebojsa' WHERE ID = 1";
            $affectedrows = $this->db->exec($sql);
            if (isset($affectedrows)) {
                echo "Record has been successfully updated!";
            }
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }
}