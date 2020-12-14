<?php

require('db.php');

$allUsers = "SELECT * FROM users";

$result = $db->query($allUsers);

// echo $result->num_rows;
require('includes/header.php');
?>

<div class="card mt-5">
    <div class="card-header">
        <h5>Users List <a href="register.php" class="btn btn-primary float-right">CREATE</a></h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr class="bg-primary text-white">
                <th>Photo</th>
                <th>Sr. No.</th>
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
                    <td>
                        <img src="<?php echo full_path($user->profile_image); ?>" width="100">
                    </td>
                    <td><?php echo $i;
                        $i++; ?></td>
                    <td><?php echo $user->name; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->gender; ?></td>
                    <td><a href="delete.php?del_id=<?php echo $user->id; ?>">DELETE</a>
                        <a href="edit.php?edit_id=<?php echo $user->id; ?>">EDIT</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>

<?php
require('includes/footer.php');
?>