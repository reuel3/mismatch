<?php
  require_once('authorize.php');
  require_once('connectvars.php');

  //login data to authenticate
  $user_name = mysql_real_escape_string(trim($_SERVER['PHP_AUTH_USER']));
  $user_password = mysql_real_escape_string(trim($_SERVER['PHP_AUTH_PW']));

  $query = "select user_id, username from mismatch_user where username='$user_name' and password=sha('$user_password')";

  $data = mysql_query($query);

  if (mysql_num_rows($data) == 1) {
  	$row = mysql_fetch_array($data, MYSQL_ASSOC);
  	$user_id = $row['user_id'];
  	$username = $row['username'];

  } else {
  	//bad username/password - kick 'em out
  	header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Mismatch"');
    exit('<h2>Mismatch</h2>Sorry, you must enter a valid user name and password to access this page.');
  }

  echo('<p class="login">You are logged in as ' . $username . '.</p>');
?>