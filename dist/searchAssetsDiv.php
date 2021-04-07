<?php 

include "con_db.php";
$data = $_GET['data'];

?>
<?php include "dataTablesCustom.php"; ?>


<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Assets</h1>
             <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">


        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                <th>Remarks </th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead> 
        <tbody>             

<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM company_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%' OR company_name LIKE '%$data%' OR AssignedTo LIKE '%$data%'");
$rows = mysqli_num_rows($result);
if ($rows > 0) {
?>


<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>Africot</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
             <?php if ($row['Status'] == "N/A"){?>
     <td><?php echo $row['Status']; ?></td>

   <?php
        }
            if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?asset_id=<?php echo $row['id']; ?>">Edit</a></td>
            <td><button class="btn btn-danger" onclick="if (window.confirm('Are You Sure You Want To Delete This Item ?')){document.location = 'deleteAsset.php?asset_id=<?php echo $row['id']; ?>';}">Delete</button></td>
        </tr>
<?php 
}
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
