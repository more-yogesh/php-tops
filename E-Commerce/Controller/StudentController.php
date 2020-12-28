<?php
include('../Model/Student.php');

if (isset($_POST['btnAdd'])) {

    //     $name = $_POST['name'];
    //     $percentage = $_POST['percentage'];

    //     $studentData = [
    //         'name' => $name,
    //         'percentage' => $percentage
    //     ];
    // echo "<pre>";
    //     print_r($studentData);
    //     echo "<hr/>";
    //     print_r($_POST);
    // exit;

    $student->insert('student', $_POST, true);
}