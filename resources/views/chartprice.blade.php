@extends('layouts.app2')
@section('content')


<!DOCTYPE html>
<html>
<head>
  <title> Chart View</title>
  <!-- Latest CSS -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
    <a class="btn btn-primary text-black" href="searchmarketprice"> Back </a>
  <div class="chart-container">
    <div class="line-chart-container">
      <canvas id="line-chart" style="width:500%;max-width:1100px"></canvas>
    </div>
  </div>

  <!-- javascript -->

   <script>
  $(function(){

      var cData = JSON.parse(`<?php echo $chart_data; ?>`);
      var ctx = $("#line-chart");

      //pie chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: "Product Price",
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,155,255,1.0)",
            borderColor: "rgba(0,155,255,1)",
            data: cData.data,
            borderWidth: 2
          }
        ]
      };

      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "This week's Product prices at the market",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display:true,
          position: "bottom",

          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        },
        scales: {
        	yAxes: [{
            	ticks: {
                	beginAtZero: true,
                    stepSize:1

            	}
        	}]
    	}


      };


      var chart1 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
      });

  });
</script>
</body>
</html>
@endsection
