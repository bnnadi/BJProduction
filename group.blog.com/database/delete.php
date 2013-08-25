<?php

include "database/connection.php";

$blogID = $_GET['blogid'];

mysql_query("DELETE FROM Blog WHERE blogID = '$blogID';") or die(mysql_error());

?>