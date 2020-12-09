<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <?php
        require('layout/header.php');
        ?>
    </div>
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, cumque. Ipsum, recusandae. Itaque, numquam praesentium. Assumenda, necessitatibus architecto suscipit ut reprehenderit molestiae! Earum neque vel nostrum voluptatem, facere incidunt molestias.
    </div>

    <?php
    for ($i = 0; $i <= 10; $i++) {
        require_once('layout/header.php');
    }
    ?>

    <div class="footer">
        <?php
        require('layout/footer.php');
        ?>
    </div>
</body>

</html>