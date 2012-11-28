<?php
	/*define('DB_HOST', 'int.instance32897.db.xeround.com:11076');
	define('DB_USER', 'app9522621');
	define('DB_PASSWORD', 'skip1234');
	define('DB_NAME', 'gwdb');*/
	
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'skip1234');
	define('DB_NAME', 'mmudb');

	// Connect to the database 
	$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)
	  or die("Could not connect to database");

	mysql_select_db(DB_NAME);
?>
