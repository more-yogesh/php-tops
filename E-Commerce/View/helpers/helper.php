<?php
$GLOBALS['base_url'] = "http://localhost/php-tops-batch/E-Commerce/View/";

function redirect($fileName)
{
    header("location:" . $GLOBALS['base_url'] . $fileName);
}
function url($fileName)
{
    return "http://localhost/php-tops-batch/E-Commerce/".$fileName;
}