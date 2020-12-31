<?php
$rootPath = $_SERVER['DOCUMENT_ROOT'] . "/php-tops-batch/E-Commerce/";
// echo "<pre>";print_r($_SERVER);exit;
include("$rootPath/Model/Product.php");
include("$rootPath/View/helpers/helper.php");

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

$allProducts = $product->getAll('product');

if (isset($_GET['delete_id'])) {
    $product->delete('product', $_GET['delete_id']);
    redirect('product/index.php');
}

if (isset($_GET['edit_id'])) {
    $record = $product->getWhere('product', ['id' => $_GET['edit_id']]);
}

if (isset($_POST['btnUpdate'])) {
    $product->update('product', $_POST, ['id' => $_GET['edit_id']]);
    redirect('product/index.php');
}

$categories = $product->getAll('category');
