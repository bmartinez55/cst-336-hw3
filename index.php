<?php
    $hip = $_GET['HipHop'];
    $reg = $_GET['Reggae'];
    $trap = $_GET['Trap'];
    
    $content=array(
            "$hip" => "<iframe width='560' height='400' src='https://www.youtube.com/embed/IPw9gbbQ1xA?autoplay=1' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>",
            "$reg" => "<iframe width='560' height='400' src='https://www.youtube.com/embed/9Ecsg2AYH8E?autoplay=1' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>",
            "$trap" => "<iframe width='560' height='400' src='https://www.youtube.com/embed/HCE8EKmoBIg?autoplay=1' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>"
        );
        
    if($hip!="Hip-Hop" && $car != "HipHop"){
        $content[$hip] = "<iframe width='560' height='315' src='https://www.youtube.com/embed/5abamRO41fE' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
    }
    if($reg!="Reggae" && reg != "reggae"){
        $content[$reg] = "<iframe width='560' height='315' src='https://www.youtube.com/embed/5abamRO41fE' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
    }
    if($trap!="Trap" && $trap != "LatinTrap" && $trap != "Latin Trap"){
        $content[$trap] = "<iframe width='560' height='315' src='https://www.youtube.com/embed/5abamRO41fE' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
    }
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <title>Homework 3</title>
        <h1>Choose Your Song</h1>
        <br/>
        <style>
            @import url("CSS/styles.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    </head>
    
    <body>
        <ul>
          <li><a class="active" href="#home">Home</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#about">About</a></li>
        </ul>
        
        <form>
          <fieldset>
            <legend>Search by Genre (Reggae, Latin Trap, Hip-Hop):</legend>
            Input Genre:<br>
            <input type="radio" name="Reggae" value="Reggae">Reggae<br>
            <input type="radio" name="Trap" value="Latin Trap">Latin Trap<br>
            <input type="radio" name="HipHop" value="Hip-Hop">Hip-Hop<br>
            <!--<div id = "searchbox">-->
            <!--    <input type="search" name="q" value="" placeholder="Search for your song..." size="30" required>-->
                
            <!--</div>-->
            <br><br>
            <button type="submit">Search</button>
          </fieldset>
        </form>
        <?php
            if(isset($hip)){
                echo "$content[$hip] </br>";
            }
            if(isset($reg)){
                echo "$content[$reg] </br>";
            }
            if(isset($trap)){
                echo "$content[$trap] </br>";
            }
        ?>
        
    </body>

</html>