<html>
  <head><title>Guest book</title></head>
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <body>
    <H1 align="center">Guest book</H1>
    <?php      
      include 'vars.php';
      $c = mysqli_connect($host, $user, $passwd, $name);
      
      $status = mysqli_fetch_assoc(mysqli_query($c,"CHECK TABLE messages"));
      if (($status['Msg_type'] == 'error') && ($status['Msg_text'] == "Table 'base.tablename' doesn't exist")){
        $exists = false;
      }else{
        $exists = true;
      }
      if(!($exist)){
          mysqli_query($c, $install);
      }
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
        $nip = explode('.',$ip);
        if(($nip[0] == '127')||($nip[0] == '::1')){
            echo "<p class=\"root\">Root access permited</p>";
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
