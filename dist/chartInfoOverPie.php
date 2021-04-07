
<?php 

$result87 = mysqli_query($con,"SELECT DISTINCT company_name FROM company_assets");
$companies = mysqli_num_rows($result87);
  ?>



<?php 
      $allDesktops = 0;
      $allLaptops = 0;
      $allPrinters = 0;
//$num = 120;
for ($i=0; $i < $companies; $i++) {

  $result = mysqli_query($con,"SELECT * FROM company_assets WHERE DeviceType LIKE '%Desktop'");
  $allDesktops = mysqli_num_rows($result);

  $result2 = mysqli_query($con,"SELECT * FROM company_assets WHERE DeviceType LIKE '%Printer'");
  $allPrinters = mysqli_num_rows($result2);

  $result3 = mysqli_query($con,"SELECT * FROM company_assets WHERE DeviceType LIKE '%Laptop'");
  $allLaptops = mysqli_num_rows($result3);

 }

?>

<script type="text/javascript">         
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById('AllDevices');
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: [<?php echo $allDesktops ?>+" Desktops", <?php echo $allLaptops ?>+" Laptops", <?php echo $allPrinters ?>+" Printers"],
    datasets: [{
      data: [<?php echo $allDesktops ?>, <?php echo $allLaptops ?>, <?php echo $allPrinters ?>],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107'],
    }],
  },
});
  </script>


     