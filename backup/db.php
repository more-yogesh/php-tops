<?php
function userImage($imageName)
{
    if ($imageName == '') {
        $imageName = 'default.png';
    }
    return 'http://localhost/php-tops-batch/backup/uploads/' . $imageName;
}
$db = new MySQLi('localhost', 'root', '', 'tops_php');
