<?php

require('db.php');


$id = $_GET['del_id'];

$delQuery = "DELETE FROM users WHERE id = $id";

$db->query($delQuery);

header('location:users.php');
