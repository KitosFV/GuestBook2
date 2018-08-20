<?php
include 'vars.php';

$c = mysqli_connect($host, $user, $passwd, $name);
$query = "DELETE FROM messages WHERE id = $id";

if(mysqli_query($c,$query)){
    echo "<p align=\"center\">Response succesfuly deleted</p>";
}

?>