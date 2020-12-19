<?php

// echo time();

// echo date('Y-m-d');

$futureDate =  mktime(date('h'), date('i'), date('s'), date('m'), date('d') + 10, date('Y'));

echo date('D d-m-Y', $futureDate);

include('db.php');
$id = $_REQUEST['edit_id'];


if (isset($_POST['btnUpdates'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $hobbies = implode(",", $_POST['hobbies']);
    $userUpdate = "UPDATE new_users SET name= '$name', email = '$email', gender = '$gender', mobile = '$mobile', hobbies = '$hobbies' WHERE id = $id";
    $db->query($userUpdate);
    header('location:list.php');
}


$getUser = "SELECT * FROM new_users WHERE id  = $id";

$record = $db->query($getUser);

$user = $record->fetch_object();

// print_r($user->name);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="">Name</label>
        <input type="text" name="name" id="" value="<?php echo $user->name; ?>">
        <br />
        <label for="">Email</label>
        <input type="text" name="email" id="" value="<?php echo $user->email; ?>">
        <br />
        <label for="">Gender</label>
        <input type="radio" name="gender" id="" value="male" <?php echo $user->gender == 'male' ? 'checked' : '' ?>>MALE
        <input type="radio" name="gender" id="" value="female" <?php echo $user->gender == 'female' ? 'checked' : '' ?>>FEMALE
        <br />
        <label for="">Mobile</label>
        <input type="text" name="mobile" id="" value="<?php echo $user->mobile; ?>">
        <br />
        <label for="">Hobbies</label><br />
        <?php
        $hobbies = explode(",", $user->hobbies);

        ?>
        <input type="checkbox" name="hobbies[]" id="" value="dance" <?php echo in_array('dance', $hobbies) ? 'checked' : '' ?>>DANCE
        <input type="checkbox" name="hobbies[]" id="" value="cricket" <?php echo in_array('cricket', $hobbies) ? 'checked' : ''; ?>>CRICKET
        <input type="checkbox" name="hobbies[]" id="" value="reading" <?php echo in_array('reading', $hobbies) ? 'checked' : ''; ?>>READING
        <br />
        <input type="submit" value="UPDATE" name="btnUpdates">
    </form>
</body>

</html>