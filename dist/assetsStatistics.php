
<?php 
      include 'con_db.php';
      $companiesArray = array();
      $result87 = mysqli_query($con,"SELECT DISTINCT company_name FROM company_assets");
      $companies = mysqli_num_rows($result87);
      while($row23 = mysqli_fetch_array($result87)){
        array_push($companiesArray, $row23['company_name']);
       }

  ?>

<div id="welcomeDIV">
  <div class="container-fluid"> 
    <div id="layoutSidenav_content">
     <main>
      <br>


      <h3 class="mt-3">Overall Assets</h3>
      <div class="card col-sm-3"></div>
      <br>
            <div class="row">
      <?php 
      $allDesktops = 0;
      $allLaptops = 0;
      $allPrinters = 0;
      for ($i=0; $i < $companies; $i++) { 
        //echo count($tables);
        $result = mysqli_query($con,"SELECT * FROM company_assets WHERE DeviceType LIKE '%Desktop'");
        $allDesktops = mysqli_num_rows($result);
        //$allDesktops += $desktopsCount;

        //echo count($tables);
        $result2 = mysqli_query($con,"SELECT * FROM company_assets WHERE DeviceType LIKE '%Printer'");
        $allPrinters = mysqli_num_rows($result2);
        //$allPrinters += $PrinterCount;

        //echo count($tables);
        $result3 = mysqli_query($con,"SELECT * FROM company_assets WHERE DeviceType LIKE '%Laptop'");
        $allLaptops = mysqli_num_rows($result3);
        //$allLaptops += $LaptopCount;
        //$row = mysqli_fetch_array($result);
      }
      ?>
        
      <div class="col-sm-4">
        <div class="card"> 
          <div class="card-header btn-warning" style=""><b>Desktops: </b><?php echo $allDesktops; ?></div>
        </div>   
        <br>
      </div>
      <div class="col-sm-4">
        <div class="card"> 
          <div class="card-header btn-warning" style=""><b>Laptops: </b><?php echo $allLaptops; ?></div>
        </div>   
        <br>
      </div>
      <div class="col-sm-4">
        <div class="card"> 
          <div class="card-header btn-warning" style=""><b>Printers: </b><?php echo $allPrinters; ?></div>
        </div>   
        <br>
      </div>
    
     
                                  
        </div>

      <h3 class="mt-3">Assets by Company</h3>
      <div class="card col-sm-3"></div>
      <br>
      <div class="row">
      <?php 

      for ($i=0; $i < $companies; $i++) { 
        //echo count($tables);
        $result = mysqli_query($con,"SELECT * FROM company_assets WHERE company_name = '$companiesArray[$i]' AND DeviceType LIKE '%Desktop'");
        $desktopsCount = mysqli_num_rows($result);

        //echo count($tables);
        $result2 = mysqli_query($con,"SELECT * FROM company_assets WHERE company_name = '$companiesArray[$i]' AND DeviceType LIKE '%Printer'");
        $PrinterCount = mysqli_num_rows($result2);

        //echo count($tables);
        $result3 = mysqli_query($con,"SELECT * FROM company_assets WHERE company_name = '$companiesArray[$i]' AND DeviceType LIKE '%Laptop'");
        $LaptopCount = mysqli_num_rows($result3);
        $row = mysqli_fetch_array($result);
    

      ?>
        
      <div class="col-sm-4">
        <div class="card"> 
          <div class="card-header btn-warning" style=""><b><?php echo $row['company_name']; ?></b></div>
          <div class="card-body">
            <div class="row">
              <p class="card-text">
                <b>Desktops: </b><?php echo $desktopsCount; ?><br>
                <b>Laptops: </b><?php echo $LaptopCount; ?><br>
                <b>Printers: </b><?php echo $PrinterCount; ?>
              </p>
            </div>
          </div>
        </div>   
        <br>
      </div>
    
        <?php   

      } ?>                            
        </div>
        <br>

      </main>
    </div>
  </div>
</div>  