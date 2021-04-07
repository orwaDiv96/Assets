else{


?>


<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM alnileen_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>

<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>Alnileen</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=alnileen_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}else{



?>


<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM apco_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>            


<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>APCO</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=apco_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}



?>               

<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM apco_assets_second WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>

<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td><?php echo $row['APCO']; ?></td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=apco_assets_second&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}else{


?>

<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM areco_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>

<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=areco_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}


?>

<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM brand_avenue WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>

<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>Brand Avenue</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=brand_avenue&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}else{


?>

<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM commodore_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>

<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>Commodore</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=commodore_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}else{



?>


<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM delta_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>

<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>Delta</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=delta_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}else{



?>

<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM ginning_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>

<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>Ginning</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=ginning_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}else{



?>
<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM holding_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>

<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>Holding</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=holding_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}else{



?>

<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM kasingger_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>
<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>Kasingger</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=kasingger_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}else{



?>
<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM masot_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>

<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>MASOT</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=masot_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}else{



?>
<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM medical_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>

<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>Medical</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=medical_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}else{



?>


<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM plastic_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>
<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>Plastic Factory</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=plastic_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}else{



?>
<?php


    # code...
$result = mysqli_query($con,"SELECT * FROM tt_factory_assets WHERE SerialNumber LIKE '%$data%' OR Location LIKE '%$data%' OR AssestsCode LIKE '%$data%'");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
?>
<?php 
while($row = mysqli_fetch_array($result)){

?>
        <tr>
            <td>T&T Factory</td>
            <td><?php echo $row['DeviceType']; ?></td>
            <td><?php echo $row['DeviceName']; ?></td>
            <td><?php echo $row['SerialNumber']; ?></td>
            <td><?php echo $row['AssignedTo']; ?></td>
            <td><?php echo $row['JobTitle']; ?></td>
            <?php if ($row['Status'] == "ON"){?>
     <td style="background-color: green;color: white;"><?php echo $row['Status']; ?></td>

   <?php
        }

        if ($row['Status'] == "OFF"){?>
     <td style="background-color: red;color: white;"><?php echo $row['Status']; ?></td>

           <?php } ?>
            <td><?php echo $row['Location']; ?></td>
            <td><?php echo $row['AssestsCode']; ?></td>
            <td><?php echo $row['Remarks']; ?></td>
            <td><a class="btn btn-primary" href="editAssest.php?tn=tt_factory_assets&asset_id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
<?php 
}
}



?>