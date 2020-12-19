<?php
include('db.php');

$records = $db->query("SELECT * FROM new_users");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Data</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Hobbies</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
        while ($user = $records->fetch_object()) {
        ?>
            <tr>
                <td><?php echo $i;
                    $i++; ?></td>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->mobile; ?></td>
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->gender; ?></td>
                <td><?php echo $user->hobbies; ?></td>
                <td><a href="delete.php?del_id=<?php echo $user->id; ?>">DELETE</a>
                    <a href="edit.php?edit_id=<?php echo $user->id; ?>">EDIT</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>