<?php 
include 'con_db.php';

// $table_name = $_GET['tn'];
$asset_id = $_GET['asset_id'];

 $result32 = mysqli_query($con,"SELECT * FROM company_assets WHERE id = '$asset_id'");
 $row32 = mysqli_fetch_array($result32);                     
?>
<!DOCTYPE html>
<html>
<head>

	<title></title>
<link href="css/styles.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script> 

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $('.js-example-basic-single').select2();
});

</script>
</head>
<body>
<div style="margin-left: 15%;margin-top: 5%; width: 40%;">

           
              <div id="layoutSidenav_content">
                <div class="card mb-4">
                 <div class="card-body">
                    <h3>Edit Asset Info</h3>
                <!-- <div id="SelectValue">None</div> -->
    <form method="post" id="insertform" action="editAssestAction.php"> 
    	<!-- <input type="hidden" name="tn" value="<?php echo $table_name; ?>"> -->
    	<input type="hidden" name="asset_id" value="<?php echo $asset_id; ?>">

                        <div class="form-group">
                            <div id="addedmsg" class="alert alert-success" style="display: none;">Assest Added Successfuly
                            </div>
                            <div id="erroredmsg" class="alert alert-danger" style="display: none;">Error While Adding Assest
                            </div>
    
                        </div>

                                <div class="form-group">
                            <label class="small mb-1" >Branch (Location)<br><small>Not Required</small></label>
                            <br>

                           <select class="js-example-basic-single form-control" name="branch" id="branch" style="width: 100%;height: 80%;">
                            <option value="<?php echo $row32['Location']; ?>"><?php echo $row32['Location']; ?></option>
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
                                        <option value="<?php echo $row32['DeviceType']; ?>"><?php echo $row32['DeviceType']; ?></option>
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
                                    <input class="form-control py-4" type="text" placeholder="Enter Device Name" value="<?php echo $row32['DeviceName']; ?>" name="device_name" id="DeviceName" />
                                </div>

                                <div class="form-group">
                                    <label class="small mb-1">Serial Number</label>
                                    <input class="form-control py-4" type="text" placeholder="Enter Device Serial Number" value="<?php echo $row32['SerialNumber']; ?>" name="serial_number" id="serial_number" />
                                </div>


                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1">Assigned to</label>
                                    <input class="form-control py-4" type="text" placeholder="Enter Emplyee Name" name="assigned_to" value="<?php echo $row32['AssignedTo']; ?>" id="AssignedTo" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1">Job title</label>
                                    <input class="form-control py-4" type="text" placeholder="Enter Employee Job title" value="<?php echo $row32['JobTitle']; ?>" name="job_title" id="JobTitle" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="small mb-1" >Status</label>

                           <select class="form-control col-xs-12" id="Status" name="status">
                            <option><?php echo $row32['Status']; ?></option>
                            <option style="background-color: green;color: white;">ON</option>
                            <option style="background-color: red;color: white;">OFF</option>
                           </select>

                        </div>

                        <div class="form-group">
                                    <label class="small mb-1">Assest Code</label>
                                    <input class="form-control py-4" type="text" placeholder="Enter Device Name" name="assest_code" value="<?php echo $row32['AssestsCode']; ?>" id="assest_code" />
                                </div>


                        <div class="form-group">
                            <label class="small mb-1">Remarks</label>
                            <textarea style="resize: none;height: 200px;" class="form-control" placeholder="Add Remarks..." id="Remarks" name="remarks"><?php echo $row32['Remarks']; ?></textarea>
                        </div>
                                                
                        <button style="margin-bottom: 10px;" name="submitEdit" class="btn btn-primary btn-block" id="AddBTN">Submit</button>
                        <a href="index.php" style="margin-bottom: 20px;" class="btn btn-danger btn-block">Cancel</a>
      </form>
                </div>
</select>
</body>
</html>