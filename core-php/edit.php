<?php

require_once('db.php');

$id  = $_GET['edit_id'];

$selectUser  = "SELECT * FROM users  WHERE id = $id";

$result = $db->query($selectUser);

$user = $result->fetch_object();

// print_r($user);

if (isset($_POST['btnUpdate'])) {
    // echo "updated";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $updateUser  = "UPDATE users set `name` = '$name', `email` = '$email', gender = '$gender' WHERE id = $id";

    $db->query($updateUser);

    header('location:users.php');
}


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
                <td><input type="text" name="name" id="name" value="<?php echo $user->name; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email" value="<?php echo $user->email ?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" value="male" <?php echo $user->gender == 'male' ? 'checked' : ''; ?>>MALE
                    <input type="radio" name="gender" value="female" <?php echo $user->gender == 'female' ? 'checked' : '' ?>>FEMALE</td>
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
                <td colspan="2" align="center"><input type="submit" name="btnUpdate" value="UPDATE"></td>
            </tr>
        </table>
    </form>
</body>

</html>