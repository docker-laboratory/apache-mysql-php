<html>
  <head>
    <title>Apache MySQL PHP Stack</title>
    <style link="css">
      h1, p {
        text-align: center;
        font-family: Arial;
      }
    </style>
  </head>
  <body>
    <h1>Apache MySQL PHP Stack</h1>
    <p>
    <?php 
      $connection = @mysqli_connect("db-server:3306", "root", "password");
      
      if (!$connection) {
        echo "Unable to connect to MySQL:<br/>" . mysqli_connect_error();
      } else {
        echo "Connect to MySQL successful!";
      }

      exit;
    ?>
    </p>
  </body>
</html>