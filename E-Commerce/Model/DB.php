<?php

class DB
{
    public $database;

    public function __construct()
    {
        $this->database = new MySQLi('localhost', 'root', '', 'tops_ecommerce');
    }

    public function insert($table, $details, $isPost = true)
    {
        if ($isPost) {
            // if we pass $_POST then remove last button value
            $details = $this->filterPost($details);
        }
        // To build dynamic query
        $key = array_keys($details);
        $productKeys = implode(", ", $key);
        $values = array_values($details);
        $productVal = implode("', '", $values);
        // INSERT INTO $table ($key1, $key2, $key...) VALUES ('$val1', '$val2', '$val...')
        $query = "INSERT INTO `$table` ($productKeys) VALUES ('$productVal')";
        $this->database->query($query);
    }

    public function filterPost($details)
    {
        // remove last element from array which is button name
        return $details = array_slice($details, 0, count($details) - 1);
    }

    public function getAll($table)
    {
        // select * from $table
        $getAll = "SELECT * FROM $table";
        return $this->database->query($getAll);
    }

    public function delete($table, $id)
    {
        // DELETE FROM $table WHERE id = $id;

        $query = "DELETE FROM $table WHERE id = $id";
        $this->database->query($query);
        return true;
    }
}
