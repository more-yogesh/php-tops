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
    $country = $_POST['country'];
    $hobbies = implode("/", $_POST['hobbies']);


    $updateUser  = "UPDATE users set `name` = '$name', `email` = '$email', gender = '$gender', country = '$country', hobbies = '$hobbies' WHERE id = $id";

    $db->query($updateUser);

    header('location:users.php');
}
include('includes/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>

<body>
    <form method="post">
        <div class="card mt-5">
            <div class="card-header">
                <h5>CREATE USER <a href="users.php" class="btn btn-success float-right">BACK</a></h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" value="<?php echo $user->name; ?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" value="<?php echo $user->email ?>">
                </div>
                <div class="form-group">
                    <label for="">Gender</label><br />
                    <input type="radio" name="gender" id="" value="male" <?php echo $user->gender == 'male' ? 'checked' : ''; ?>> Male
                    <input type="radio" name="gender" id="" value="female" <?php echo $user->gender == 'female' ? 'checked' : '' ?>> Female
                </div>
                <div class="form-group">
                    <label for="">Hobbies</label><br />
                    <?php
                    $strHobbies = $user->hobbies;
                    $arHobbies = explode("/", $strHobbies);
                    ?>
                    <input type="checkbox" name="hobbies[]" id="" value="read" <?php
                                                                                echo in_array('read', $arHobbies) ? 'checked' : '';
                                                                                ?>> Read
                    <input type="checkbox" name="hobbies[]" id="" value="code" <?php
                                                                                echo in_array('code', $arHobbies) ? 'checked' : '';
                                                                                ?>> Coding
                    <input type="checkbox" name="hobbies[]" id="" value="travel" <?php
                                                                                    echo in_array('travel', $arHobbies) ? 'checked' : '';
                                                                                    ?>> Travelling
                </div>
                <div class="form-group">
                    <label for="">Country</label>
                    <select name="country" id="" class="form-control">
                        <option value="">Select Country</option>
                        <option value="ind" <?php echo $user->country == 'ind' ? 'selected' : ''; ?>>INDIA</option>
                        <option value="us" <?php echo $user->country == 'us' ? 'selected' : ''; ?>>USA</option>
                        <option value="can" <?php echo $user->country == 'can' ? 'selected' : ''; ?>>CANADA</option>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <input type="submit" value="CREATE" name="btnUpdate" class="btn btn-secondary">
            </div>
        </div>
    </form>
    <?php
    require('includes/footer.php');
    ?>