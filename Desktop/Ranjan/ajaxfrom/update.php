<?php
require_once 'dbconfig.php';

 if($_POST)
 {
  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $uname = $_POST['uname'];

  $stmt = $db_con->prepare("UPDATE users SET fname=:fn, lname=:ln, email=:em, uname=:ul,  WHERE id=:id");
  $stmt->bindParam(":fn", $fname);
  $stmt->bindParam(":ln", $lname);
  $stmt->bindParam(":em", $email);
  $stmt->bindParam(":ul", $uname);
  $stmt->bindParam(":id", $id);

  if($stmt->execute())
  {
   echo "Successfully updated";
  }
  else{
   echo "Query Problem";
  }
 }
?>
