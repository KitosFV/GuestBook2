<html>
  <head><title>Guest book</title></head>
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <body>
    <H1 align="center">Guest book</H1>
    <?php      
      
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
	    
        
		?>
    </table>
  </body>
</html>
