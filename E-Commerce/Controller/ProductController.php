<?php
include('../Model/Product.php');
include('../View/helpers/helper.php');

if (isset($_POST['create'])) {
    // echo "We got this";
    // $name = $_POST['name'];
    // $price = $_POST['price'];
    // $description = $_POST['description'];
    // $category = $_POST['category'];
    // $sub_category = $_POST['sub_category'];

    // $productDetails = [
    //     'name' => $name,
    //     'price' => $price,
    //     'description' => $description,
    //     'category' => $category,
    //     'sub_category' => $sub_category
    // ];

    // echo "<pre>";print_r($_POST);
    // echo "<pre>";print_r($productDetails);exit;

    $product->insert('product', $_POST);
    redirect('product/index.php');
}
