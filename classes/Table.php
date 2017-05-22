<?php

include_once 'Database.php';

class Table extends Database
{
    public function createTable()
    {
        try {

            $con = new Database();

            $db = $con->openConnection();

            // sql to create table

            $sql = "CREATE TABLE `Student` ( `ID` INT NOT NULL AUTO_INCREMENT , `name`VARCHAR(40) NOT NULL , `last_name` VARCHAR(40) NOT NULL , `email` VARCHAR(40)NOT NULL , PRIMARY KEY (`ID`)) ";

            // use exec() because no results are returned

            $db->exec($sql);

            echo "Table Student created successfully";

            $con->closeConnection();

        } catch (PDOException $e) {

            echo "There is some problem in connection: " . $e->getMessage();
        }

    }

    public function insertData()
    {

        try {

            $con = new Database();

            $db = $con->openConnection();

            // inserting data into create table using prepare statement to prevent from sql injections

            $stm = $db->prepare("INSERT INTO student (name,last_name,email) VALUES (:name, :last_name, :email)");

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

            $con = new Database();

            $db = $con->openConnection();

            $sql = "SELECT * FROM student";

//            $i = 0;
//
//            $out = [];

            foreach ($db->query($sql) as $row) {

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

            $con = new Database();

            $db = $con->openConnection();

            $sql = "UPDATE student SET name = 'nebojsa' WHERE ID = 1";

            $affectedrows = $db->exec($sql);

            if(isset($affectedrows)) {

                echo "Record has been successfully updated!";
            }

        } catch (PDOException $e) {

            echo "There is some problem in connection: " . $e->getMessage();
        }
    }


}