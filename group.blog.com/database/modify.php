<?php 

include "database/connection.php";

if(!isset($_POST['submit'])) {
    $q = "SELECT * FROM People WHERE ID = $_GET[id]";
    $result = mysql_query($q);
    $person = mysql_fetch_array($result);
}

?>

<!--<h1>Modify The User</h1>
<form action="<?//php echo $_SERVER['PHP_SELF']; ?>" method="post">
Name<input type="text" name="inputName" value="<?//php echo $person['Name']; ?>" />
Description<input type="text" name="inputDescription" value="<?//php echo $person['Description']; ?>" />
<br>
<input type="hidden" name="id" value="<?//php echo $_GET['id'] ?>" />
<input type="submit" name="submit" value="Modify" />
</form>-->

<?php 

/*if (isset($_POST['submit'])) {
    $u = "UPDATE People SET Name='$_POST[inputName]', Description='$_POST[inputDescription]' WHERE ID = $_POST[id]";
    mysql_query($u) or die(mysql_error());
    
    echo "User has been modified!";
    header("Location: index.php");
}*/

?>