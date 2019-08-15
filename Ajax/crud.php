<html>
    <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Insert Data Using AJAX</h1>
            <div class="col-lg-8 m-auto"> 
                <div class="alert alert-danger" id="a"></div>
            <form id="myform">
                <div class="form-group">
                   <label>UserName:</label>
                    <input type="text"class="form-control"name="u"/>
                </div>
                <div class="form-group">
                   <label>Password:</label>
                    <input type="password"class="form-control"name="p"/>
                </div>
                <input type="button" value="Submit" name="s" class="btn btn-success"/>
            </form>
        </div>
        </div>
<!--
        <script type="text/livescript">
        $(document).ready(function(){
        var form=$('#myform');
         $('[name=s]').click(function(){ //form.attr("action"),
         $.ajax({
         url:'formdata.php',
         type:'post',
         data:$('#myform').serialize(),
         success:function(data){
         alert(data);
         }
         });
         });
        });
        </script >
-->
        <script type="text/javascript">
        $(document).ready(function(){
           $('[name=s]').click(function(){
              $.ajax({
                  url:"formdata.php",
                  type:"post",
                  data:$("#myform").serialize(),
                  success:function(d)
                  {
                      $("#a").html(d);
                      $("#nyform")[0].reset();
                  }
              }); 
           });
        });
        </script>
    </body>
</html>