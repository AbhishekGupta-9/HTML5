<?php
$con=mysqli_connect("localhost","root","","newform");
?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <form action="" method="post">
            <table border="1px"align="center">
                <tr>
                    <td>Name:</td>
                    <td><input type="text"name="a" placeholder="Enter Name"/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email"name="b" placeholder="Enter Email"/></td>
                </tr>
                <tr>
                    <td colspan="2"align="right"><input type="submit"value="Submit"name="c"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
$q2="select * from data";
$r2=mysqli_query($con,$q2);
?>
<table border="1px"align="center">
    <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php $i=1;
    $count=mysqli_num_rows($r2);
    if($count>0)
    {
    while($data=mysqli_fetch_assoc($r2))
    {
        ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['email'];?></td>
        <td><a href="index.php?id=<?php echo $data['id'];?>">Edit</a></td>
        <td><a href="index.php?id=<?php echo $data['id'];?>">Delete</a></td>
    </tr>
    <?php
    $i++;}}
    else{
        ?>
    <tr>
        <td colspan="5">No data found in Database</td>
    </tr>
    <?php
    }
    ?>
</table>
<?php 
extract($_POST);
if(isset($c))
{
    $q1="insert into data (name,email) values ('$a','$b')";
    $r1=mysqli_query($con,$q1);
    if($r1){echo "done";}
}
?><script type="text/javascript">
$(document).ready(function(){
alert(window.location);
});
    </script>