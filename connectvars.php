<?php
  // Define database connection constants
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASSWORD', 'skip1234');
  define('DB_NAME', 'mmudb');

  // Connect to the database 
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD); 
  mysql_select_db(DB_NAME);
?>
