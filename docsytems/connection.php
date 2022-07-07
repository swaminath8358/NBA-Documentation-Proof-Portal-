<?php
date_default_timezone_set("Africa/Nairobi");
$con= mysqli_connect("localhost","root","");
if($con)
{
    mysqli_select_db($con,"try_test");
}
 else {
     echo "could not connect to the database".die(mysqli_error($con));
}
?>
