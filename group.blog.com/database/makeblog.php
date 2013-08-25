<?php

class MakeBlog {

    function create($userID, $title, $topic, $content) {
        include("database/connection.php");
        
        mysql_query("INSERT INTO Blog (userID, title, topic, content)
                     VALUES ('$userID', '$title', '$topic', '$content');") or die(mysql_error());
    }
    
}

?>