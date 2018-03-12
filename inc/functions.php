<?php
    function Go($select){
        $content=array(
            "$hip" => "<iframe width='560' height='400' src='https://www.youtube.com/embed/9Ecsg2AYH8E?autoplay=1' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>",
            "$reg" => "<iframe width='560' height='400' src='https://www.youtube.com/embed/HCE8EKmoBIg?autoplay=1' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>",
            "$trap" => "<iframe width='560' height='400' src='https://www.youtube.com/embed/IPw9gbbQ1xA?autoplay=1' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>"
        );
         $album=array("MikeJones","AnuelAA","FridayAlbum");
         $genre=array("Reggae","Latin Trap","Hip-Hop");
        
        
        for($i=0;$i<3;$i++){
            if($genre[i] == $select){
                $song=$songs[i];
                $cover=$album[i];
                $type=$genre[i];
            }
        }
        
        foreach($songs as $s){
            if(count($songs)<0 or count($cover)<0){
                return false;
            }
        }
        display($song, $cover,$type);
    }
    //Make labels for album cover and song title work 
    function display($song, $cover,$type){
        echo "<h3>Album Cover</h3>";
        echo "<img src='$cover.png' width='400' height='400'/>";
        echo "<h3>Song/Video</h3>";
        echo "<iframe width='560' height='400' src='$song' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
        echo "<h3> Genre: </h3>" . $type;
    }
    
    function displayAlbums(){
        $randomAlbums=array("1stRound","2001","2002","Aquemini","ATLiens");
        foreach($randomAlbums as $ran){
            echo "<img src='$ran.png' width='200' height='200'/>". "    ";
        }
    }
?>