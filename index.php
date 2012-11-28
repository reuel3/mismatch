<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Mismatch - Where opposites attract!</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h3>Mismatch - Where opposites attract!</h3>

<?php
  require_once('appvars.php');
  require_once('connectvars.php');

  // Generate the navigation menu
  echo '&#10084; <a href="viewprofile.php">View Profile</a><br />';
  echo '&#10084; <a href="editprofile.php">Edit Profile</a><br />';

  // Retrieve the user data from MySQL
  $query = "SELECT user_id, first_name, picture FROM mismatch_user WHERE first_name IS NOT NULL ORDER BY join_date DESC LIMIT 5";
  $data = mysql_query($query);

  // Loop through the array of user data, formatting it as HTML
  echo '<h4>Latest members:</h4>';
  echo '<table>';
  while ($row = mysql_fetch_array($data, MYSQL_ASSOC)) {
    if (is_file(MM_UPLOADPATH . $row['picture']) && filesize(MM_UPLOADPATH . $row['picture']) > 0) {
      echo '<tr><td><img src="' . MM_UPLOADPATH . $row['picture'] . '" alt="' . $row['first_name'] . '" /></td>';
    }
    else {
      echo '<tr><td><img src="' . MM_UPLOADPATH . 'nopic.jpg' . '" alt="' . $row['first_name'] . '" /></td>';
    }
    echo '<td>' . $row['first_name'] . '</td></tr>';
  }
  echo '</table>';

  mysql_close($dbc);
?>

</body> 
</html>
