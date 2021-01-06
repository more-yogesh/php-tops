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

    public function getWhere($table, $where)
    {
        $whereKey = array_keys($where);
        $whereValue = array_values($where);
        // print_r($whereKey);
        $query = "select * from $table where $whereKey[0] = $whereValue[0]";
        $record = $this->database->query($query);
        return $record->fetch_object();
    }

    public function update($table, $data, $where)
    {
        // UPDATE $table SET 
        //`key` = '$value', `key` = '$value', `key` = '$value' 
        //WHERE $key = $value AND $key = $value AND key = value

        $query = "UPDATE $table SET ";

        $data = $this->filterPost($data);

        $dataLength = sizeof($data);
        $i = 0;
        foreach ($data as $key => $value) {
            $i++;
            if ($dataLength == $i) {
                $query .= " $key = '" . $value . "'";
            } else {
                $query .= " $key = '" . $value . "',";
            }
        }

        //        echo $query;exit;

        $query .= " WHERE ";

        $whereLength = sizeof($where);
        $j = 0;
        foreach ($where as $key1 => $value1) {
            $j++;
            if ($whereLength == $j) {
                $query .= " $key1 = '" . $value1 . "'";
            } else {
                $query .= " $key1 = '" . $value1 . "' AND ";
            }
        }
        $this->database->query($query);
        return true;
    }

    public function query($query)
    {
        return $this->database->query($query);
    }
}
