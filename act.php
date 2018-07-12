<?php
$res = htmlspecialchars($_GET["res"]);
$aut = htmlspecialchars($_GET["name"]);
$email = htmlspecialchars($_GET["email"]);
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $user = "pysm1t";
    $host = "db4free.net";
    $passwd = "935afe2c";
    $name = "guestbook";
    $c = mysqli_connect($host, $user, $passwd, $name);
    
    $query="INSERT INTO `messages` (`author`, `email`, `message`) VALUES ('$aut', '$email', '$res')";
    
    if(!mysqli_query($c,$query)){
        echo "<p align=\"center\">MySQL error</p>";
    }else{
        echo "<p align=\"center\">Response succesfuly added</p>";
    }
}else{
    echo "<p align=\"center\">Email error</p>";
}
?>
