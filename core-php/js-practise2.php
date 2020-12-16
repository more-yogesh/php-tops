<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <div id="content">

    </div>
    <div id="content2">

    </div>
    <script>
        document.getElementById('content').innerHTML = '<h1>Hello World</h1>';
        document.getElementById('content2').textContent = '<h1>Hello World</h1>';
    </script> -->


    <form action="">
        <input type="text" name="" id="name" onfocus="showFocus()" onblur="removeFocus()">

        <input type="text" name="dmeo" id="testingId" placeholder="Type Here......" onkeyup="showTypingText(this)">
        <div id="myText"></div>
    </form>

    <script>
        function showFocus() {
            document.getElementById('name').style = 'border:2px solid red;background-color:green;';
        }

        function removeFocus() {
            document.getElementById('name').style = '';
        }

        function showTypingText(currentElement) {
            // console.log(currentElement);
            // console.log(currentElement.value)
            var inputText = currentElement.value;
            document.getElementById('myText').innerHTML = "<h1>" + inputText + "</h1>";
        }
    </script>

</body>

</html>