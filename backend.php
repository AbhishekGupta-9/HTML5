<?php
$con=mysqli_connect("localhost","root","","ajaxcrud");

//print_r($_POST);
extract($_POST);
if(isset($readrecord))
{
    $data='
<table class="table table-bordered table-striped">
    <tr>
        <th>S.No.</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email_Id</th>
        <th>Mobile No.</th>
        <th>Edit Action</th>
        <th>Delete Action</th>
    </tr>';
    $qry="select * from form";
    $res=mysqli_query($con,$qry);
    if(mysqli_num_rows($res) >0)
    {
        $i=1;
        while($row=mysqli_fetch_assoc($res))
        {
            $data.='
            <tr>
            <td>'.$i.'</td>
            <td>'.$row['fname'].'</td>
            <td>'.$row['lname'].'</td>
            <td>'.$row['rmail'].'</td>
            <td>'.$row['mobile'].'</td>
            <td>
            <button onclick="gettinguserdetails('.$row['id'].')" class="btn btn-warning">Edit</button>
            </td>
            <td><button onclick="deleyeuser('.$row['id'].')" class="btn btn-danger">Delete</button></td>
            </tr>';
            $i++;
            
        }
    }
$data.'</table>';
    echo $data;

}

if(isset($deleteid)){
    $qry1="DELETE FROM `form` WHERE id=$deleteid";
    $res=mysqli_query($con,$qry1);
}

?>