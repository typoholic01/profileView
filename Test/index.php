<html>
   <head>
      <title>Connecting MySQLi Server</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>   
   <body>
      <?php
      require 'DBSetting.php';
      
      $host = DBSetting::host;
      $user = DBSetting::user;
      $pw = DBSetting::pw;
      $dbName = DBSetting::dbName;
      
      // Create connection
      $conn = new mysqli($host, $user, $pw, $dbName);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         
         mysqli_close($conn);
      ?>
   </body>
</html>