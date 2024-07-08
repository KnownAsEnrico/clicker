<!DOCTYPE php>
<?php
?>

<html>
    <head>
        <title>
            Clicker
        </title>
        <script
        src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
        crossorigin="anonymous">
        </script>  
        <link rel="stylesheet" href="clicker.css">
    </head>
    <body>
        <div class="buttonhere">
            <div id="count">Count: <p id="number"></p></div>   
            <input class="button" id="button" type="button" value="Click me" disabled>
            <input  id="remove1k" onclick="remove1k()" type="button" value="Reward" disabled>
        </div>
    </body>
    <script src="clicker.js"></script>
</html>