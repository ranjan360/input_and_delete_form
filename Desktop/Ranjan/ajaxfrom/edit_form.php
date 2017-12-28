<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
 $id = $_GET['edit_id'];
 $stmt=$db_con->prepare("SELECT * FROM users WHERE id=:id");
 $stmt->execute(array(':id'=>$id));
 $row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
 display:none;
}

</style>

    <div id="dis">

 </div>

  <form method='post' id='emp-UpdateForm' action='#'>

    <table class='table table-bordered' style="color: white;">
   <input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
        <tr>
            <td>First Name</td>
            <td><input type='text' name='fname' class='form-control' value='<?php echo $row['fname']; ?>' required></td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td><input type='text' name='lname' class='form-control' value='<?php echo $row['lname']; ?>' required></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type='email' name='email' class='form-control' value='<?php echo $row['email']; ?>' required></td>
        </tr>

        <tr>
            <td>User Name</td>
            <td><input type='text' name='uname' class='form-control' value='<?php echo $row['uname']; ?>' required></td>
        </tr>

        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
      <span class="glyphicon glyphicon-plus"></span> Save Updates
   </button>
            </td>
        </tr>

    </table>
</form>
