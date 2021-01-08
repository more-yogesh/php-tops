<?php
include_once('db.php');
?>
<h1>JOB PORTAL</h1>
<ul>
    <?php
    if (!isset($_SESSION['loggedInUser'])) {

    ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>

    <?php  } else { ?>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
    <?php } ?>
</ul>