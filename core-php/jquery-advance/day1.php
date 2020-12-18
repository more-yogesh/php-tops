<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="background-color: red;">
        <h1>Hello World</h1>
        <p>I am P1</p>
        <p>I am P3</p>
        <p>I am P4</p>
        <p>I am P2</p>
        <input type="text" name="fname" id="">
        <input type="text" name="fname" id="">
        <input type="text" name="fname" id="">
        <input type="text" name="fname" id="">
        <input type="text" name="fname" id="">
        <input type="text" name="fname" id="">
        <input type="text" name="fname" id="">
        <input type="radio" name="" id="">
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        // document.getElementById();
        // $db->query();




        $(document).ready(function() {

            //  select by name

            // $('[name="fname"]').css({
            //     "border" : '10px solid pink' 
            // });

            $('input:text').focus(function() {
                $(this).css({
                    "border": '10px solid blue',
                    "height": "200px"
                });
            });

            // $('div').hide();
            // $('div').fadeIn(3000);

            // $('div').click(function(){
            //     // $('div').hide();
            //     // $('div').fadeOut();
            // });


            $('p').click(function() {
                // $(this).hide();
                // this.style = "display:none";
                // console.log(this);
                // $(this).css("font-weight", "bold");
                var pContent = $(this).html();
                console.log(pContent);
                // boldP = "<div id='" + pContent + "'><b>" + pContent + "</b></div>";
                bold = `<div id="${pContent}"><b>${pContent}</b></div>`;
                $(this).html(bold);
            });

        });
    </script>
</body>

</html>