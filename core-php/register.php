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

include('includes/header.php');
?>

<form method="post">
    <div class="card mt-5">
        <div class="card-header">
            <h5>CREATE USER <a href="users.php" class="btn btn-success float-right">BACK</a></h5>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="CREATE" class="btn btn-secondary">
        </div>
    </div>
</form>




<form action="" method="POST">
    <!-- <table border="0" align="center">
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
        </table> -->
</form>
<?php
include('includes/footer.php');
?>