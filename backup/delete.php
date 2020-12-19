<?php
$id = $_GET['del_id'];

include('db.php');

$deleteUser = "DELETE FROM new_users WHERE id = $id";

$db->query($deleteUser);

header('location:list.php');
