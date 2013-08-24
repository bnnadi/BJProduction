<?php

include "database/connection.php";

mysql_query("DELETE FROM People WHERE ID = $_GET[id]") or die(mysql_error());
header('Location: index.php');

?>