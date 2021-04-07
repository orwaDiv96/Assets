// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
// var myNums = 4400;
var tables = ["africot_assets", "alnileen_assets", "apco_assets_second", "areco_assets","commodore_assets","delta_assets","ginning_assets","holding_assets"," masot_assets","kasingger_assets","medical_assets","plastic_assets","tt_factory_assets"];

for (var i = 0; i < 14; i++) {

var ctx = document.getElementById(tables[i]);
console.log(ctx);
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Desktops", "Laptops", "Printers"],
    datasets: [{
      label: "Count",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [264, 221, 135],
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
}