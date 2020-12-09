<?php

require('db.php');

if (isset($_POST['btnSubmit'])) {
    // echo "button is clicked";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $insertQuery = "INSERT INTO users (`name`, `email`, `gender`, `password`) VALUES ('$name', '$email', '$gender', '$password')";
    $db->query($insertQuery);

    header('location:users.php');
}
// $abc = 12; 
// if(isset($abc))
// {
//     echo "Yes is set now";
// }
//  else {
//      echo "its not set";
//  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>

<body>
    <form action="" method="POST">
        <table border="0" align="center">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" value="male">MALE
                    <input type="radio" name="gender" value="female">FEMALE</td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="confirm_password" id="confirm_password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="btnSubmit" value="REGISTER"></td>
            </tr>
        </table>
    </form>
</body>

</html>