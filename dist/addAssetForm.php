     <?php include "con_db.php";?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<style type="text/css">
    
[class^='select2'] {
  border-radius: 0px !important;
}

</style>
    <script>



  $(document).ready(function() {

 $('.js-example-basic-single').select2();


});

  
$(document).ready( function () {
$('#insertform').submit(function(){
  return false;
});

  $('#AddBTN').click(function(){
    if ( $('#company').val() != '' && $('#branch').val() != '' && $('#deviceType').val() != '' && $('#DeviceName').val() != '' && $('#serial_number').val('') != '' && $('#assest_code').val() != '' && $('#AssignedTo').val() != '' && $('#JobTitle').val() != '' && $('#Status').val() != '') {
  $.post(   
    $('#insertform').attr('action'),
    $('#insertform :input').serializeArray(),
    function(result){
      if (result) {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      $('#addedmsg').fadeIn(1000);

      $('#company').val('');
      $('#branch').val('');
      $('#deviceType').val('');
      $('#DeviceName').val('');
      $('#serial_number').val('');
      $('#assest_code').val('');
      $('#AssignedTo').val('');
      $('#JobTitle').val('');
      $('#Status').val('');
      $('#Remarks').val('');

      $('#addedmsg').fadeOut(3000);
    }else{
      $("html, body").animate({ scrollTop: 0 }, "slow");
      $('#erroredmsg').show();
      $('#erroredmsg').delay(5000).fadeOut(3000);
    }
    }
  );
}else{
  $("html, body").animate({ scrollTop: 0 }, "slow");
  $('#emptyedmsg').fadeIn(500);
  $('#emptyedmsg').delay(1500).fadeOut(500);
}
});


});


  

</script>
       <div style="margin-left: 15%;margin-top: 5%; width: 120%;">

           
              <div id="layoutSidenav_content">
                <h1 class="mt-4">Add Asset</h1>
                <div class="card mb-4">                  
                  
                 <div class="card-body">

                <!-- <div id="SelectValue">None</div> -->
    <form method="post" id="insertform" action="addAssetAction.php"> 


                        <div class="form-group">
                            <div id="addedmsg" class="alert alert-success" style="display: none;">Assest Added Successfuly
                            </div>
                            <div id="erroredmsg" class="alert alert-danger" style="display: none;">Error While Adding Assest
                            </div>
                            <div id="emptyedmsg" class="alert alert-warning" style="display: none;">Some Fields are Empty</div>

                        <label class="small mb-1">Company</label>
                                    <br>

                        <select class="js-example-basic-single form-control" name="company" id="company" style="width: 100%;height: 80%;">
                                        <option value=""></option>
                            <?php $result = mysqli_query($con,"SELECT * FROM companies"); ?>

                                                        <?php 
                                while($row = mysqli_fetch_array($result)){

                                ?>
                                                                
                                <option value="<?php echo $row['company']; ?>"><?php echo $row['company']; ?></option>
                                    <?php }?>
                        </select>
                        </div>
                                <div class="form-group">
                            <label class="small mb-1">Branch (Location)<br></label>
                            <br>

                           <select class="js-example-basic-single form-control" name="branch" id="branch" style="width: 100%;height: 80%;">
                            <option value=""></option>
                            <?php $result = mysqli_query($con,"SELECT * FROM branches"); ?>

                                                        <?php 
                                while($row = mysqli_fetch_array($result)){

                                ?>
                                                                
                                        <option value="<?php echo $row['branch_code']; ?>"><?php echo $row['branch']; ?></option>
                                    <?php }?>
                           </select>

                        </div>


                                <div class="form-group">
                                    <label class="small mb-1">Device Type</label>
                                    <br>

                        <select class="js-example-basic-single form-control" name="device_type" id="deviceType" style="width: 100%;height: 80%;">
                                        <option value=""></option>
                            <?php $result = mysqli_query($con,"SELECT * FROM device_types"); ?>

                                                        <?php 
                                while($row = mysqli_fetch_array($result)){

                                ?>
                                                                
                                        <option value="<?php echo $row['device_type']; ?>"><?php echo $row['device_type']; ?></option>
                                    <?php }?>
                                     </select>
                                </div>

                                <div class="form-group">
                                    <label class="small mb-1">Device Name</label>
                                    <input class="form-control py-4" type="text" placeholder="Enter Device Name" name="device_name" id="DeviceName" />
                                </div>

                                <div class="form-group">
                                    <label class="small mb-1">Serial Number</label>
                                    <input class="form-control py-4" type="text" placeholder="Enter Serial Number" name="serial_number" id="serial_number" />
                                </div>


                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1">Assigned to</label>
                                    <input class="form-control py-4" type="text" placeholder="Enter Emplyee Name" name="assigned_to" id="AssignedTo" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1">Job title</label>
                                    <input class="form-control py-4" type="text" placeholder="Enter Employee Job title" name="job_title" id="JobTitle" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="small mb-1" >Status</label>

                           <select class="form-control col-xs-12" id="Status" name="status">
                            <option></option>
                            <option style="background-color: green;color: white;">ON</option>
                            <option style="background-color: red;color: white;">OFF</option>
                           </select>

                        </div>

                        <div class="form-group">
                                    <label class="small mb-1">Asset Code</label>
                                    <input class="form-control py-4" type="text" placeholder="Enter Asset Code" name="assest_code" id="assest_code" />
                                </div>


                        <div class="form-group">
                            <label class="small mb-1">Remarks</label>
                            <textarea style="resize: none;height: 200px;" class="form-control" placeholder="Add Remarks..." id="Remarks" name="remarks"></textarea>
                        </div>
                                                
                        <button style="margin-bottom: 20px;" class="btn btn-primary btn-block" id="AddBTN">Submit</button>
                        <a href="index.php" style="margin-bottom: 20px;" class="btn btn-danger btn-block">Cancel</a>

      </form>
                </div>

</div> 
</div>
</div>
