
<?php 

  $companiesArray = array();

  $result87 = mysqli_query($con,"SELECT DISTINCT company_name FROM company_assets");
  $companies = mysqli_num_rows($result87);
  while($row23 = mysqli_fetch_array($result87)){
    array_push($companiesArray, $row23['company_name']);
   }


for ($i=0; $i < $companies; $i++) { 
        $result = mysqli_query($con,"SELECT * FROM company_assets WHERE company_name = '$companiesArray[$i]' AND DeviceType LIKE '%Desktop'");
        $desktopsCount = mysqli_num_rows($result);

        //echo count($tables);
        $result2 = mysqli_query($con,"SELECT * FROM company_assets WHERE company_name = '$companiesArray[$i]' AND DeviceType LIKE '%Printer'");
        $PrinterCount = mysqli_num_rows($result2);

        //echo count($tables);
        $result3 = mysqli_query($con,"SELECT * FROM company_assets WHERE company_name = '$companiesArray[$i]' AND DeviceType LIKE '%Laptop'");
        $LaptopCount = mysqli_num_rows($result3);
?>

<script type="text/javascript">
           
           // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
// var myNums = 4400;
var tables = ["Alnileen"];

var ctx = document.getElementById('chartDiv'+<?php echo $i; ?>);
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?php echo $desktopsCount; ?>+" Desktops ", <?php echo $LaptopCount; ?>+" Laptops", <?php echo $PrinterCount; ?>+" Printers"],
    datasets: [{
      label: "Count",
      backgroundColor: ['#007bff', '#dc3545', '#ffc107'],
      borderColor: "rgba(2,117,216,1)",
      data: [<?php echo $desktopsCount; ?>, <?php echo $LaptopCount; ?>, <?php echo $PrinterCount; ?>],
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
          max: 60,
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

<?php }
?>

     