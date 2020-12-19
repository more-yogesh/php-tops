<?php

include('db.php');


if (isset($_POST['btnAdd'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $hobbies = implode(",", $_POST['hobbies']);
    $userInsert = "INSERT INTO `new_users` (name,email, gender, mobile, password,hobbies) VALUES ('$name', '$email', '$gender', '$mobile', '$password', '$hobbies')";
    $db->query($userInsert);
    header('location:list.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="">Name</label>
        <input type="text" name="name" id="">
        <br />
        <label for="">Email</label>
        <input type="text" name="email" id="">
        <br />
        <label for="">Gender</label>
        <input type="radio" name="gender" id="" value="male">MALE
        <input type="radio" name="gender" id="" value="female">FEMALE
        <br />
        <label for="">Mobile</label>
        <input type="text" name="mobile" id="">
        <br />
        <label for="">Password</label>
        <input type="password" name="password" id=""><br />
        <label for="">Hobbies</label><br />
        <input type="checkbox" name="hobbies[]" id="" value="dance">DANCE
        <input type="checkbox" name="hobbies[]" id="" value="cricket">CRICKET
        <input type="checkbox" name="hobbies[]" id="" value="reading">READING
        <br />
        <input type="submit" value="ADD" name="btnAdd">
    </form>
</body>

</html>