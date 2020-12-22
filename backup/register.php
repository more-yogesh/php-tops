<?php

include('db.php');

if (isset($_POST['btnAdd'])) {

    // echo "<pre>";
    // print_r($_FILES['photo']);
    // exit;

    // 2 parts (1) is original file name & 2 is folder name where you want to upload it.

    $originalFileName = $_FILES['photo']['name'];
    $destination = 'uploads/' . $originalFileName;

    $fileName = $_FILES['photo']['tmp_name'];

    move_uploaded_file($fileName, $destination);

    // exit;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $hobbies = implode(",", $_POST['hobbies']);

    $userInsert = "INSERT INTO `new_users` (name,email, gender, mobile, password,hobbies, image) VALUES ('$name', '$email', '$gender', '$mobile', '$password', '$hobbies', '$originalFileName')";
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <div class="card mt-5">
                <div class="card-header bg-primary">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="" class="form-control is-valid" id="">
                        <div class="valid-feedback">Enter the name filed</div>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="" class="form-control" id="">
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Sign Up" class="btn btn-warning text-white">
                </div>
            </div>
        </form>
    </div>




    <label for="">Name</label>
    <input type="text" class="form-control" name="name" id="">
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
    <label for="">Image</label><br />
    <input type="file" name="photo" id=""><br />

    <input type="submit" value="ADD" name="btnAdd">
    </form>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>