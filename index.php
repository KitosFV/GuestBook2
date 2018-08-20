<html>
  <head><title>Guest book</title></head>
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <body>
    <H1 align="center">Guest book</H1>
    <?php      
      include 'vars.php';
      $c = mysqli_connect($host, $user, $passwd, $name);
      
      $query = "CREATE TABLE `messages` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`author` varchar(255) DEFAULT NULL,
`email` varchar(255) DEFAULT NULL,
`message` varchar(255) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8";
      
      mysqli_query($c, $query);
      ?>
    <form action="act.php" methode="get">
      <fieldset>
      <legend>Response info:</legend>
      <p>Name: <input type="text" name="name"/></p>
      <p>Email: <input type="text" name="email"/></p>
      <input type="text" name="res"/>
      <input type="submit">
      </fieldset>
    </form>
      <?php
	    $ip = $_SERVER['REMOTE_ADDR'];
        $sip = gethostbyname($_SERVER['SERVER_NAME']);
        
        if($ip == $sip){
            echo "<p class=\"root\">Root access denide</p>";
            echo '<form action="del.php" methode="get">
                    <fieldset>
                    <legend>Delete info:</legend>
                    <p>Id: <input type="text" name="id"/></p>
                    <input type="submit">
                    </fieldset>
                </form>';
        }
		?>
    <table>
      <?php
	    $result = mysqli_query($c,"SELECT * FROM messages");
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><th>".$row['author']."</th><th>".$row['email']."</th></tr><tr><td>".$row['id']."</td><td>".$row['message']."</td></tr>";
        }
		?>
    </table>
  </body>
</html>
