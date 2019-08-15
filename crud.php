<html>
    <head>
          <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="text-primary text-center">CRUD OPERATION</h1>
            
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Records</button>
            </div>
            <h2 class="text-danger">All Records</h2>
            
            <div id="records_content">
                
            </div>
            <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ajax Crud Operations</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form id="myform">
        <div class="form-group">
            <label>Firstname:</label>
            <input type="text" name="s" id="firstname" placeholder="Enter FirstName" class="form-control"/>
          </div>
          
          <div class="form-group">
            <label>Lastname:</label>
            <input type="text" name="d" id="lastname" placeholder="Enter LastName" class="form-control"/>
          </div>
          
          <div class="form-group">
            <label>Email_Id:</label>
            <input type="text" name="f" id="email" placeholder="Enter Email_Id" class="form-control"/>
          </div>
          
          <div class="form-group">
            <label>Mobile No:</label>
            <input type="text" name="g" id="mobile" placeholder="Enter Mobile No" class="form-control"/>
          </div>
              </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" id="a">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
        </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
//            $(document).ready(function(){
//                $("#a").click(function addrecords(){
//                    alert("working");
//                });
//            });
        </script>
        <script type="text/javascript">
        $(document).ready(function(){
            readrecords();
            function readrecords(){
                var readrecord="readrecord";
                $.ajax({
                    url:"backend.php",
                    type:"post",
                    data:{ readrecord:readrecord},
                    success:function(data,status)
                    {
                        $('#records_content').html(data);
                    }
                });
            }
           $('#a').click(function(){
               
              $.ajax({
                  url:"backend1.php",
                  type:"post",
                  data:$("#myform").serialize(),
                  success:function(data,status)
                  {
                      readrecords();
                  }
              }); 
           });
        });
            function deleyeuser(deleteid)
            {
                var conf=confirm("Are You Sure");
                if(conf==true)
                    {
                $.ajax({
                    url:"backend.php",
                    type:"post",
                    data:{deleteid:deleteid},
                    success:function(data,status){
                        //readrecords();
                        console.log(data);
                    }
                });}
            }
        </script>
    </body>
</html>