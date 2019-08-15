<?php
$con=mysqli_connect('localhost','root','','formdb');
$qry="select *  from degree";
$res=mysqli_query($con,$qry);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
          <form>
        Username:<input type="text" name=""class="form-control"><br/>
              Password:<input type="password" name=""class="form-control"><br/>
              Degree:<select class="form-control" onchange="myfun(this.value)">
              <option>Please Select</option>
              <?php $i=1;
               while($data=mysqli_fetch_assoc($res))
              {
                  ?>
              <option value="<?php echo $i;?>"><?php echo $data['degrees'];?></option>
              <?php $i++;
              }
              ?>
              </select><br/>
              Degree:<select class="form-control"id="dataget">
              <option>Please Select</option>
              </select><br/>
              <button class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script type="text/javascript">
        
    function myfun(value){
        $.ajax({
            url:'class.php',
            type:'post',
            data: {datapost:value},
               success : function(result){
              $('#dataget').html(result);   
        }
        });
        console.log(value);
    }
    </script>
</body>
</html>
