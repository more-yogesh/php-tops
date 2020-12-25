<?php

include('DB.php');

class Product extends DB
{
    public function create($table, $details)
    {
        $this->insert($table, $details);
    }
}

$product = new Product();
