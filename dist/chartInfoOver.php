
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

// Bar Chart Example
// var myNums = 4400;
var ctx = document.getElementById("AllDevices");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?php echo $allDesktops; ?>+" Desktops", <?php echo $allLaptops; ?>+" Laptops", <?php echo $allPrinters; ?>+" Printers"],
    datasets: [{
      label: "Count",
      backgroundColor: ['#007bff', '#dc3545', '#ffc107'],
      borderColor: "rgba(255,255,255,1)",
      data: [<?php echo $allDesktops; ?>, <?php echo $allLaptops; ?>, <?php echo $allPrinters; ?>],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'Devices'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 400,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
  </script>


     