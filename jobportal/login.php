<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['loggedInUser'])) {
        header('location:profile.php');
    }
    include('header.php');
    if (isset($_POST['btnLogin'])) {
        // echo "I am clicked";exit;
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email = '$email' AND `password` = '$password'";

        $result = $db->query($query);
        if ($result->num_rows == 1) {
            if ($_POST['remember_me'] == 'yes') {
                // cookie code
                setcookie('tops_email', $email, time() + 10);
                setcookie('tops_password', $password, time() + 10);
            }
            $_SESSION['loggedInUser'] = $result->fetch_object();
            header('location:profile.php');
        } else {
            echo "Email or Password is wrong";
        }
    }
    ?>

    <form action="" method="post">
        <table border="0" align="center">
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo isset($_COOKIE['tops_email']) ? $_COOKIE['tops_email'] : ''; ?>" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="remember_me" value="yes">Remember Me</td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="LOGIN" name="btnLogin"></td>
            </tr>
        </table>
    </form>
</body>

</html>