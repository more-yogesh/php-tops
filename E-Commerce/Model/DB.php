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
            $details = $this->filterPost($details);
        }
        $key = array_keys($details);
        $productKeys = implode(", ", $key);
        $values = array_values($details);
        $productVal = implode("', '", $values);

        $query = "INSERT INTO `$table` ($productKeys) VALUES ('$productVal')";
        $this->database->query($query);
    }

    public function filterPost($details)
    {
        return $details = array_slice($details, 0, count($details) - 1);
    }
}
