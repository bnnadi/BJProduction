<?php

class MakeBlog {

    function create($userID, $title, $topic, $content) {
        include("database/connection.php");
        
        mysql_query("INSERT INTO Blog (userID, title, topic, content, time)
                     VALUES ('$userID', '$title', '$topic', '$content', NOW());") or die(mysql_error());
    }
    
}

?>