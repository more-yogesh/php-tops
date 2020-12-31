<?php
include('../../Controller/ProductController.php');
print_r($record);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../../Controller/ProductController.php?edit_id=<?php echo $record->id;?>" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name" value="<?php echo $record->name; ?>"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td><input type="text" name="category" value="<?php echo $record->category; ?>"></td>
            </tr>
            <tr>
                <td>Sub Category</td>
                <td><input type="text" name="sub_category" value="<?php echo $record->sub_category; ?>"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" value="<?php echo $record->price; ?>"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="description" id="" cols="60" rows="10"><?php echo $record->description;?></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="UPDATE" name="btnUpdate"></td>
            </tr>

        </table>
    </form>
</body>

</html>