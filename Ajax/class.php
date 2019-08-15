<?php
$con=mysqli_connect('localhost','root','','formdb');
extract($_POST);
$nameid=$_POST['datapost'];
$qry="select * from class where = $nameid ";
$res=mysqli_query($con,$qry);
while($data=mysqli_fetch_assoc($res))
              {
                  ?>
              <option><?php echo $data['degrees'];?></option>
              <?php
              }
              ?>
?>   