<?php

require('db.php');

if (isset($_POST['btnSubmit'])) {

    // echo "button is clicked";

    // echo "<pre>";print_r($_FILES);exit;

    // BODMAS
    /**
     * (2+2)*4
     * 
     */
    $fileSize = $_FILES['profile']['size'];

    $sizeInKB = $fileSize / 1024;
    if ($sizeInKB <= 200) {
        $fileName = $_FILES['profile']['name'];
        $destination = "uploads/";
        $tmpName = $_FILES['profile']['tmp_name'];
        move_uploaded_file($tmpName, $destination . $fileName);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $hobbies = implode("/", $_POST['hobbies']);
        $password = $_POST['password'];

        $insertQuery = "INSERT INTO users (`name`, `email`, `gender`, `password`, `country`, `hobbies`, `profile_image`) VALUES ('$name', '$email', '$gender', '$password', '$country', '$hobbies', '$fileName')";
        $db->query($insertQuery);

        header('location:users.php');
    } else {
        $errorMessage = "File size is $sizeInKB KB which is very big file to upload";
    }
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

<form method="post" enctype="multipart/form-data">
    <div class="card mt-5">
        <div class="card-header">
            <h5>CREATE USER <a href="users.php" class="btn btn-success float-right">BACK</a></h5>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Gender</label><br />
                <input type="radio" name="gender" id="" value="male"> Male
                <input type="radio" name="gender" id="" value="female"> Female
            </div>
            <div class="form-group">
                <label for="">Hobbies</label><br />
                <input type="checkbox" name="hobbies[]" id="" value="read"> Read
                <input type="checkbox" name="hobbies[]" id="" value="code"> Coding
                <input type="checkbox" name="hobbies[]" id="" value="travel"> Travelling
            </div>
            <div class="form-group">
                <label for="">Country</label>
                <select name="country" id="" class="form-control">
                    <option value="">Select Country</option>
                    <option value="ind">INDIA</option>
                    <option value="us">USA</option>
                    <option value="can">CANADA</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="profile" id="" class="form-control">
                <?php
                if (isset($errorMessage)) {
                    echo "<div class='text-danger'>$errorMessage</div>";
                }
                ?>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" name="confirm_password" id="" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="CREATE" name="btnSubmit" class="btn btn-secondary">
        </div>
    </div>
</form>
<?php
include('includes/footer.php');
?>