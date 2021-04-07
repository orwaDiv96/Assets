<?php 
include 'con_db.php'; 

if (isset($_GET['user_id'])) {
	$permission = $_GET['permission'];
	$id = $_GET['user_id'];

	if ($permission == 'admin') {

		$query = "UPDATE users SET permission='$permission' WHERE id = '$id'";
		$result = mysqli_query($con,$query);
		if ($result) {
			  echo '<script type="text/javascript">
			alert("User Permission Updated");
			window.location.href = "index.php";
			</script>';
		} else {
		 	 echo "Error updating record: " . mysqli_error($con);
		}

	}

	if ($permission == 'user') {

		$query = "UPDATE users SET permission='$permission' WHERE id = '$id'";
		mysqli_query($con,$query);
		$result = mysqli_query($con,$query);
		if ($result) {
			  echo '<script type="text/javascript">
			alert("User Permission Updated");
			window.location.href = "index.php";
			</script>';
		} else {
			  echo "Error updating record: " . mysqli_error($con);
			}
	}

	if ($permission == 'editor') {

		$query = "UPDATE users SET permission='$permission' WHERE id = '$id'";
		mysqli_query($con,$query);
		$result = mysqli_query($con,$query);

		if ($result) {
			  echo '<script type="text/javascript">
			alert("User Permission Updated");
			window.location.href = "index.php";
			</script>';
		} else {
		  	echo "Error updating record: " . mysqli_error($con);
		}
	}
}
?>