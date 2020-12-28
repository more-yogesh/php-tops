<?php
include('../../Controller/ProductController.php');
print_r($allProducts);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Product List</h1>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Category</td>
            <td>Sub Category</td>
            <td>Price</td>
            <td>Description</td>
        </tr>
        <?php
        while ($product = $allProducts->fetch_object()) {
        ?>
            <tr>
                <td><?php echo $product->name; ?></td>
                <td><?php echo $product->category; ?></td>
                <td><?php echo $product->sub_category; ?></td>
                <td><?php echo $product->price; ?></td>
                <td><?php echo $product->description; ?></td>
                <td><a href="<?php echo url('Controller/ProductController.php?delete_id=' . $product->id); ?>">DELETE</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>