<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert, Update, Delete using jQuery, PHP and MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
  <style>
    body{
      font-size: 18px;
      color: black;
      font-weight: bold;
      background-image: url(2.jpg);
    }
    #example{
      color: #FB8C00;
    }
  </style>
<script type="text/javascript">
$(document).ready(function(){

 $("#btn-view").hide();

 $("#btn-add").click(function(){
  $(".content-loader").fadeOut('slow', function()
  {
   $(".content-loader").fadeIn('slow');
   $(".content-loader").load('add_form.php');
   $("#btn-add").hide();
   $("#btn-view").show();
  });
 });

 $("#btn-view").click(function(){

  $("body").fadeOut('slow', function()
  {
   $("body").load('index.php');
   $("body").fadeIn('slow');
   window.location.href="index.php";
  });
 });

});
</script>

</head>

<body>


 <div class="container">

        <h2 class="form-signin-heading" style="color: white; font-weight: bold;">Register List.</h2><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add List</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Client List</button>
        <hr />

        <div class="content-loader">

        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>User Name</th>
        <th>edit</th>
        <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';

        $stmt = $db_con->prepare("SELECT * FROM users ORDER BY id DESC");
        $stmt->execute();
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
  {
   ?>
   <tr>
   <td><?php echo $row['id']; ?></td>
   <td><?php echo $row['fname']; ?></td>
   <td><?php echo $row['lname']; ?></td>
   <td><?php echo $row['email']; ?></td>
   <td><?php echo $row['uname']; ?></td>
   <td align="center">
   <a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Edit">
   <img src="edit.png" width="20px" />
            </a></td>
   <td align="center"><a id="<?php echo $row['id']; ?>" class="delete-link" href="#" title="Delete">
   <img src="delete.png" width="20px" />
            </a></td>
   </tr>
   <?php
  }
  ?>
        </tbody>
        </table>

        </div>

    </div>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
 $('#example').DataTable();

 $('#example')
 .removeClass( 'display' )
 .addClass('table table-bordered');
});
</script>
</body>
</html>
