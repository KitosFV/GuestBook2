<?php
$id = htmlspecialchars($_GET["id"]);
$user = "pysm1t";
$host = "db4free.net";
$passwd = "935afe2c";
$name = "guestbook";
$c = mysqli_connect($host, $user, $passwd, $name);

$query = "DELETE FROM messages WHERE id = $id";

if(mysqli_query($c,$query)){
    echo "<p align=\"center\">Response succesfuly deleted</p>";
}

?>