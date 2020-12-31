<?php
include('../../Controller/ProductController.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../../Controller/ProductController.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                    <select name="category" id="">
                        <?php

                        while ($category = $categories->fetch_object()) {
                        ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Sub Category</td>
                <td>
                    <select name="sub_category" id="">
                        <option></option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="description" id="" cols="60" rows="10"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="INSERT" name="create"></td>
            </tr>

        </table>
    </form>
</body>

</html>