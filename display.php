<?php
    include 'inc/functions.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Your Selected Song</h1>
        <br/>
        <style>
            @import url("CSS/styles.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    </head>
    
    <body>
         <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="display.php">About Songs</a></li>

        </ul>
        <?php
            display();
        ?>
    </body>
</html>