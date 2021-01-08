<?php

session_start();

session_unset($_SESSION['loggedInUser']);

session_destroy();

header('location:login.php');
