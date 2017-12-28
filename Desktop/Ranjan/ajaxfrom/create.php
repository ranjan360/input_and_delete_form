<?php
require_once 'dbconfig.php';

 if($_POST)
 {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $uname = $_POST['uname'];

  try{

   $stmt = $db_con->prepare("INSERT INTO users(fname,lname,email,uname) VALUES(:fname, :lname, :email,:uname)");
   $stmt->bindParam(":fname", $fname);
   $stmt->bindParam(":lname", $lname);
   $stmt->bindParam(":email", $email);
   $stmt->bindParam(":uname", $uname);

   if($stmt->execute())
   {
    echo "Successfully Added";
   }
   else{
    echo "Query Problem";
   }
  }
  catch(PDOException $e){
   echo $e->getMessage();
  }
 }
?>
