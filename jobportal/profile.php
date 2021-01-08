<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>

<body>
    <?php
    session_start();
    if (empty($_SESSION['loggedInUser'])) {
        header('location:login.php');
    }
    include('header.php');
    $user = $_SESSION['loggedInUser'];
    ?>
    <h1>Welcome <?php echo ucfirst($user->name); ?></h1>
</body>

</html>