<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['loggedInUser'])) {
        header('location:profile.php');
    }
    include('header.php');
    if (isset($_POST['btnRegister'])) {
        $register = "INSERT INTO users (`name`, `email`, `password`) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')";
        $db->query($register);
        header('location:login.php');
    }
    ?>
    <form action="" method="post">
        <table border="0" align="center">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="confirm_password" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="REGISTER" name="btnRegister"></td>
            </tr>
        </table>
    </form>
</body>

</html>