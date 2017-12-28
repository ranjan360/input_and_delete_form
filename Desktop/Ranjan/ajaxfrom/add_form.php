A<style type="text/css">
#display{
 display:none;
}
#SaveForm{
  color: white;
}
</style>

    <div id="display">
 </div>


  <form method='post' id='SaveForm' action="#">

    <table class='table table-bordered'>

        <tr>
            <td>First Name</td>
            <td><input type='text' name='fname' class='form-control' placeholder='EX : Ranjan ' required /></td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td><input type='text' name='lname' class='form-control' placeholder='EX : Kumar' required></td>
        </tr>

        <tr>
            <td>email</td>
            <td><input type='email' name='email' class='form-control' placeholder='EX : ranjan@abc.com' required></td>
        </tr>

        <tr>
            <td>User Name</td>
            <td><input type='text' name='uname' class='form-control' placeholder='EX : ranjanabc' required></td>
        </tr>

        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
      <span class="glyphicon glyphicon-plus"></span> Save this Record
   </button>
            </td>
        </tr>

    </table>
</form>
