<?php
//
//$con=mysqli_connect("localhost","root","","ajaxcrud");
//extract($_POST);
//if(isset($s))
//{
//    $q="insert into formdata(username,password) values('$u','$p')";
//    $r=mysqli_query($con,$q);
//        if($r){ echo "success";}
//
$con=mysqli_connect("localhost","root","","ajaxcrud");

//print_r($_POST);
extract($_POST);
$q="INSERT INTO `formdata`(`username`, `password`) VALUES ('$u','$p')";
if($con->query($q))
{
    echo "inserted successfully";
}
?>