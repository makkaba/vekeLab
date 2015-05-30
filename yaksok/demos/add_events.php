<?php

include_once 'db_info.php';

// Values received via ajax
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];


//connection to the DB...kiwan
 
     $addQry = "INSERT INTO yaksok (title, start, end) VALUES ('$title', '$start', '$end')";
      
    mysql_query($addQry) or trigger_error(mysql_error()." in ".$addQry);



?>
