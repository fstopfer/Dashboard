<?php
   
   $host = "localhost";
   $user = "root";
   $pwd = "";
   $db = "boston_tech";
   $port = 3306;
   
   $connection = new mysqli($host, $user, $pwd, $db, $port);
   
   if($connection->connect_error){
       
       die("An error occurred " . $connection->connect_error );
   }
   
?>