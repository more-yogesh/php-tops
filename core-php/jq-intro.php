<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script>
        // alert(' O am on the eay');
    </script>
</head>

<body>
    <div class="myClass" id="myId">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis dicta, fugit incidunt eligendi amet quisquam numquam autem omnis magni sit blanditiis nobis aut distinctio nesciunt veniam ea doloribus quidem tempore.</div>

    <input type="text" name="" id="myInput">


    <script>
        $(document).ready(function() {
            $('#myInput').css({
                'background': 'red',
                'border': '2px solid pink'
            });
        });
        // $('.myClass').text('Hello World');
        // $('#myId').text('Hello World');
        // $('#myInput').css("background", "red");

        // alert('I am ready');
    </script>
</body>

</html>