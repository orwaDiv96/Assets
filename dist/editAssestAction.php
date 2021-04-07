<?php
include 'con_db.php';

if (isset($_POST['submitEdit'])) {

// $company = $_POST['tn'];
$asset_id = $_POST['asset_id'];


$branch = $_POST['branch'];
$device_type = $_POST['device_type'];
$device_name = $_POST['device_name'];
$serial_number = $_POST['serial_number'];
$assigned_to = $_POST['assigned_to'];
$job_title = $_POST['job_title'];
$status = $_POST['status'];
$remarks = $_POST['remarks'];
$assest_code = $_POST['assest_code'];


$sql = "UPDATE company_assets SET DeviceType = '$device_type',DeviceName = '$device_name',SerialNumber = '$serial_number',AssignedTo = '$assigned_to',JobTitle = '$job_title',Status = '$status',Location = '$branch',AssestsCode = '$assest_code',Remarks = '$remarks' WHERE id='$asset_id'";

$result = mysqli_query($con, $sql);

if ($result) {
  echo '<script type="text/javascript">
alert("Assest Updated Successfully");
window.location.href = "index.php";
</script>';
} else {
  echo "Error updating record: " . mysqli_error($con);
}
}



 ?>