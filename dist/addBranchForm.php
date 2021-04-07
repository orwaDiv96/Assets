      <?php 
include "con_db.php";
?>
<?php include "dataTablesCustom.php"; ?>


        <script type="text/javascript">
$(document).ready( function () {
$('#insertform').submit(function(){
  return false;
});

  $('#AddBTN').click(function(){
    if (($('#BranchName').val() != '') && ($('#BranchCode').val() != '')){
  $.post(   
    $('#insertform').attr('action'),
    $('#insertform :input').serializeArray(),
    function(result){
      if (result) {
      $('#addedmsg').delay(1500).fadeIn(500);
      $('#BranchName').val('');
      $('#BranchCode').val('');
      $('#addedmsg').delay(1500).fadeOut(500);
    }
    }
  );
}else{
  $('#emptyedmsg').fadeIn(500);
  $('#emptyedmsg').delay(1500).fadeOut(500);
}
});


});
        </script>


<div style="margin-left: 15%;margin-top: 5%; width: 120%;">
        <div class="container-fluid"> 
              <div id="layoutSidenav_content">
                <div class="card mb-4">
                    <div class="card-body">
                      <h4 class="mt-4">Add Branch</h4>
                        <div class="table-responsive">
                          <div id="addedmsg" class="alert alert-success" style="display: none;">Branch Successfuly</div>

                          <div id="emptyedmsg" class="alert alert-warning" style="display: none;">Some Fields are Empty</div>
                  <form method="post" id="insertform" action="addBranchAction.php"> 
                    <div class="form-row" style="margin-left: 1%;">
                    <div class="form-group">
                        <label class="small mb-1">Branch Name</label>
                        <input class="form-control col-md-11" id="BranchName" name="branch" type="text" required="true" placeholder="Branch Name" /> 
                    </div>  

                    <div class="form-group">
                        <label class="small mb-1">Branch Code</label>
                        <input class="form-control col-md-12" id="BranchCode" name="branch_code" required="true" type="text" placeholder="Branch Code" />
                    </div>
                    </div>   

                    <button style="margin-bottom: 20px;margin-left: 1%;" class="btn btn-primary" id="AddBTN" name="addDeviceBTN">Submit</button>
                  </form>
             <h1 class="mt-4">Branches</h1>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin-bottom: 3%;">

<?php

$result = mysqli_query($con,"SELECT * FROM branches");

?>
<thead>
  <tr>
  <th>Branch</th>
  <th>Branch Code</th>
  <th>Delete</th>

  </tr>
</thead>
<tbody>

    <?php 
    while($row = mysqli_fetch_array($result)){

    ?>
  <tr>
      <td><?php echo $row['branch']; ?></td>
      <td><?php echo $row['branch_code']; ?></td>
      <td><button class="btn btn-danger" onclick="if (window.confirm('Are You Sure You Want To Delete This Item ?')){document.location = 'deleteBranch.php?bID=<?php echo $row['id']; ?>';}">Delete</button></td>

  </tr>
<?php 
}
        ?>
                                   
                                  </tbody>
                              </table>
                      </div>
            </div>
          </div>
        </div>
        </div>
      </div>

     


