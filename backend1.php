<?php
$con=mysqli_connect("localhost","root","","ajaxcrud");
$q="INSERT INTO `form`( `fname`, `lname`, `rmail`, `mobile`) VALUES ('$s','$d','$f','$g')";
if($con->query($q))
{
    echo "inserted successfully";
}
?>