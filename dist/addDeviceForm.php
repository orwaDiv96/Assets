      <?php 
include "con_db.php";
?>
<?php 
include "dataTablesCustom.php"; 
?>

        <script type="text/javascript">
$(document).ready( function () {
$('#insertform').submit(function(){
  return false;
});

  $('#AddBTN').click(function(){
    if ($('#DeviceName').val() != '') {
  $.post(   
    $('#insertform').attr('action'),
    $('#insertform :input').serializeArray(),
    function(result){
      if (result) {
      $('#addedmsg').fadeIn(1000);
      $('#DeviceName').val('');
      $('#addedmsg').fadeOut(3000);
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

        </script>

<div style="margin-left: 15%;margin-top: 5%; width: 120%;">
        <div class="container-fluid"> 
              <div id="layoutSidenav_content">
                <div class="card mb-4">                
                    <div class="card-body">
                        <div class="table-responsive">
                          <div id="addedmsg" class="alert alert-success" style="display: none;">Device Added Successfuly</div>
                          <div id="emptyedmsg" class="alert alert-warning" style="display: none;">Some Fields are Empty</div>

                  <form method="post" id="insertform" action="addDeviceAction.php"> 

                    <div class="form-group">
                        <h4>Add Device Type</h4>
                        <input class="form-control col-md-6" id="DeviceName" name="device" type="text" required="true" placeholder="Enter Device Type" />
                    </div>                                  
                    <button style="margin-bottom: 20px;" class="btn btn-primary" id="AddBTN" name="addDeviceBTN">Submit</button>
                  </form>
             <h1 class="mt-4">Devices</h1>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin-bottom: 3%;">

                               <?php

    $result = mysqli_query($con,"SELECT * FROM device_types");

?>
                                        <thead>
                                            <tr>
                                                <th>Device</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>

    <?php 
    while($row = mysqli_fetch_array($result)){

    ?>
  <tr>
      <td><?php echo $row['device_type']; ?></td>
      <td><button class="btn btn-danger" onclick="if (window.confirm('Are You Sure You Want To Delete This Item ?')){document.location = 'deleteDevice.php?dID=<?php echo $row['id']; ?>';}">Delete</button></td>
      
      <!-- <td><a href="deleteDevice.php?dID=<?php echo $row['id']; ?>" class="btn btn-danger dltBTN" >Delete</a></td> -->
  </tr>
<?php 
}
        ?>
                                         
                                        </tbody>
                                    </table>
                      </div>
            </div>
          </div></div>
        </div>
      </div>

     


