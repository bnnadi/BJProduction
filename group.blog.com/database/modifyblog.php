<?php 

include "database/connection.php";

$blogID = $_GET['blogid'];
$topic = $_POST['topic'];
$title = $_POST['title'];
$content = $_POST['content'];

$query = "UPDATE Blog SET title='$title', topic='$topic', content='$content' WHERE blogID = '$blogID';";
mysql_query($query) or die(mysql_error());

?>

<?php 

/*if (isset($_POST['submit'])) {
    $u = "UPDATE People SET Name='$_POST[inputName]', Description='$_POST[inputDescription]' WHERE ID = $_POST[id]";
    mysql_query($u) or die(mysql_error());
    
    echo "User has been modified!";
    header("Location: index.php");
}*/

?>