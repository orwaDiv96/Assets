<?php

session_start();
include("con_db.php");
//$permission = $_SESSION["permission"];
include "dataTablesCustom.php"; 
?>


        <script type="text/javascript">
$(document).ready( function () {

   function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}



$('#insertUserform').submit(function(){
  return false;
});

  $('#AddBTN').click(function(){

  if (($('#UserEmail').val() != '') && (validateEmail($('#UserEmail').val()))) { 

    if (($('#UserName').val() != '') && ($('#UserDivision').val() != '') && ($('#UserJob').val() != '') && ($('#UserEmail').val() != '') && ($('#UserPermission').val() != '')){
 $.post(   
    $('#insertUserform').attr('action'),
    $('#insertUserform :input').serializeArray(),
    function(result){
      if (result) {
      $('#theUsers').load('usersTable.php');
      $('#addedmsg').delay(1500).fadeIn(500);
      $('#UserName').val('');
      $('#UserDivision').val('');
      $('#UserJob').val('');
      $('#UserEmail').val('');
      $('#addedmsg').delay(1500).fadeOut(500);
    }
    }
  );
}else{
  $('#emptyedmsg').fadeIn(500);
  $('#emptyedmsg').delay(1500).fadeOut(500);
}

}else{
  $('#emailmsg').fadeIn(500);
  $('#emailmsg').delay(1500).fadeOut(500);
}


// alert($('#insertUserform').attr('action'));
});


});
        </script>



        <div class="container-fluid"> 
              <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-2">Control Panel</h1>
                         <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">   

<div id="addedmsg" class="alert alert-success" style="display: none;">User Added Successfuly</div>
<div id="emptyedmsg" class="alert alert-warning" style="display: none;">Some Fields are Empty</div>

<div id="emailmsg" class="alert alert-warning" style="display: none;">Please Check the Email you Entered</div>

<form method="post" id="insertUserform" action="addUserAction.php"> 
  <div class="form-row" style="margin-left: 1%;">
  <div class="form-group">
      <label class="small ">Name</label>
      <input class="form-control col-md-11" id="UserName" name="UserName" type="text" required="true"/> 
  </div>  

  <div class="form-group">
      <label class="small">Division</label>
      <input class="form-control col-md-11 ml-3"  id="UserDivision" name="UserDivision" required="true" type="text"/>
  </div>
  <div class="form-group">
      <label class="small">Job Title</label>
      <input class="form-control col-md-11 ml-3" id="UserJob" name="UserJob" type="text" required="true"/> 

  </div> 
  <div class="form-group">
      <label class="small">Email</label>
      <input class="form-control col-md-11 ml-3" id="UserEmail" name="UserEmail" required="true" type="email"/>
  </div> 
  </div>   

  <div class="form-row ml-2">
 <div class="form-group col-md-5">
      <label class="small mb-1">Permission</label>
      <select class="form-control col-md-12" id="UserPermission" name="UserPermission">
        <option value="user">User</option>
        <option value="editor">Editor</option>
        <option value="admin">Admin</option>
      </select> 
      </div>    

     <div class="form-group col-md-5 mt-4">
        <button class="btn btn-primary col-md-3" id="AddBTN" name="addUserBTN">Submit</button>
     </div> 
  
</div>

</form>
<div id="theUsers">
<?php include "usersTable.php"; ?>              
</div>
</div>
              </div>
              </div>

    </main>
    </div>
</div>
 </div>