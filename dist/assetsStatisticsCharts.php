<?php 
      include 'con_db.php';
      // include 'chartInfo.php';
      include 'chartInfoPie.php';
      include 'chartInfoOverPie.php';
      $companiesArray = array();

      $result87 = mysqli_query($con,"SELECT DISTINCT company_name FROM company_assets");
      $companies = mysqli_num_rows($result87);
      while($row23 = mysqli_fetch_array($result87)){
        array_push($companiesArray, $row23['company_name']);
       }

  ?>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <!-- <script src="assets/demo/chart-area-demo.js"></script> -->
        <!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
<div id="welcomeDIV">
  <div class="container-fluid"> 
    <div id="layoutSidenav_content">
     <main>

        <br>
      <h3 class="mt-3">Overall Chart</h3>
      <div class="card col-sm-3"></div>
      <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header btn-warning">
                        <i class="fas fa-chart-bar mr-1"></i> All Devices
                    </div>
                    <div class="card-body">
                        <canvas id="AllDevices" width="150%" height="100%" style="width: 50px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

      <br>
      <h3 class="mt-3">Assets Charts</h3>
      <div class="card col-sm-3"></div>
      <br>
        <div class="row">
                  <?php 
for ($i=0; $i < $companies; $i++) { 
  $result1 = mysqli_query($con,"SELECT * FROM company_assets WHERE DeviceType LIKE '%Desktop'");
  $DesktopCount = mysqli_num_rows($result1);  

  $result2 = mysqli_query($con,"SELECT * FROM company_assets WHERE DeviceType LIKE '%Printer'");
  $PrinterCount = mysqli_num_rows($result2);

  $result3 = mysqli_query($con,"SELECT * FROM company_assets WHERE DeviceType LIKE '%Laptop'");
  $LaptopCount = mysqli_num_rows($result3);
}

    for ($i=0; $i < count($companiesArray); $i++) { 
      ?>

            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header btn-warning">
                        <i class="fas fa-chart-bar mr-1"></i>
                        <?php echo $companiesArray[$i]; ?>
                    </div>
                    <div class="card-body">
                        <canvas id="chartDiv<?php echo $i; ?>" width="120%" height="70"></canvas>
                    </div>
                </div>
            </div>
    <?php   
 
     }
       ?> 
        </div>
      </main>
    </div>
  </div>
</div>