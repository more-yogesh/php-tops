<?php

require('db.php');

$allUsers = "SELECT * FROM users";

$result = $db->query($allUsers);

// echo $result->num_rows;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
        while ($user = $result->fetch_object()) {
            // print_r($user);exit;
        ?>

            <tr>
                <td><?php echo $i;
                    $i++; ?></td>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->gender; ?></td>
                <td><a href="delete.php?del_id=<?php echo $user->id; ?>">DELETE</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>