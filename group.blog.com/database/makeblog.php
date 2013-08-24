<?php

class MakeBlog {

    function create($userID, $topic, $content) {
        include("database/connection.php");
    
        mysql_query("INSERT INTO Blog (userID, topic, content)
                     VALUES ('$userID', '$topic', '$content');");
    }
    
}

?>