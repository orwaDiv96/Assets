<?php 
session_start();
include "con_db.php";
$company = $_GET['tn'];
$location = $_GET['lcn'];
$permission = $_SESSION["permission"];

?>
<?php include "dataTablesCustom.php"; ?>

        <div class="container-fluid"> 
              <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-2"><?php echo $company; ?> Assets</h1>
                         <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">


<table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">

                               <?php
                               // echo $company;
                               // echo $location;
   if (empty($location) && ($company == 'All')) {
    $result = mysqli_query($con,"SELECT * FROM company_assets");
   }

   if ((empty($location)) && ($company != 'All')) {
   	$result = mysqli_query($con,"SELECT * FROM company_assets WHERE company_name = '$company'");
   }

   if (!empty($location)) {
   	 $result = mysqli_query($con,"SELECT * FROM company_assets WHERE company_name = '$company' AND Location = '$location'");

   }
?>
<thead>
    <tr>
        <th>Company</th>
        <th>Device Type</th>
        <th>Device Name</th>
        <th>Serial Number</th>
        <th>Assigned To</th>
        <th>Job Title</th>
        <th>Status</th>
        <th>Location</th>
        <th>Assests Code</th>
        <th>Remarks	</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</thead>
                                        <tbody>

		<?php 
		while($row = mysqli_fetch_array($result)){

		?>
                        <tr>
                            <td><?php echo $row['company_name']; ?></td>
                            <td><?php echo $row['DeviceType']; ?></td>
                            <td><?php echo $row['DeviceName']; ?></td>

                            <td><?php echo $row['SerialNumber'];?></td>

                            <td><?php echo $row['AssignedTo']; ?></td>
                            <td><?php echo $row['JobTitle']; ?></td>
                            <?php if ($row['Status'] == "N/A"){?>
                            <td><?php echo $row['Status'];?> </td>

                        <?php 
                    }
                             if ($row['Status'] == "ON"){?>
                         <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

                       <?php
                            }

                        if ($row['Status'] == "OFF"){?>
                     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

                        <?php 
                        }
                    
                         ?>

                            <td><?php echo $row['Location']; ?></td>
                            <td><?php echo $row['AssestsCode']; ?></td>
                            

                            <td><?php echo $row['Remarks']; ?></td>
                            <?php if (($permission == 'admin') || ($permission == 'editor')) {?>
                            <td><a class="btn btn-primary" href="editAssest.php?asset_id=<?php echo $row['id']; ?>">Edit</a></td>                                                
                            <td><button class="btn btn-danger" onclick="if (window.confirm('Are You Sure You Want To Delete This Item ?')){document.location = 'deleteAsset.php?asset_id=<?php echo $row['id']; ?>';}">Delete</button></td>

                        <?php }else{?>

                            <td><button class="btn btn-primary" disabled="true">Edit</button></td>                                                
                            <td><button class="btn btn-danger" disabled="true">Delete</button></td>

                        <?php }?>
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
</main>
</div>
</div>

