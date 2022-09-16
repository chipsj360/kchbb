<!DOCTYPE html>
<html lang="en">
<!-- <head>
	<link rel="stylesheet" href="chartstyle.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head> -->
<head>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../../lib/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../src/nav.css">
  <link rel="stylesheet" href="../../src/dashboard.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>




</head>
</head>
<body>

 <div class="container-fluid ">
          <div class="row">
            <div class="">
              <div class="card mt-4 mb-4 mx-auto" style="width: 40rem;">
                <div class="card-header">Available Blood</div>
                <div class="card-body">
                  <div class="chart-container pie-chart">
                    <canvas id="myChart"></canvas>
                  </div>
				  <a href="../../dispense.php" class="btn btn-secondary  float-right">Dispense</a>
                </div>
              </div>
            </div>
          </div>
        </div>
		
		

        <script type="text/javascript" src="jquery.min.js"> </script>
        <script type="text/javascript" src="chart.min.js"> </script>
        <script>
        

          $(document).ready(function() {


            makechart();

            function makechart() {
              $.ajax({
                url: "chart.php",
                method: "GET",

                dataType: "JSON",
                success: function(data) {
                  var blood_group = [];
                  var total = [];
                  var color = [];

                  for (var count = 0; count < data.length; count++) {
                    blood_group.push(data[count].blood_group);
                    total.push(data[count].total);
                    color.push(data[count].color);
                  }






                  var group_chart1 = $('#myChart');
                  var graph1 = new Chart(group_chart1, {
                    type: 'bar',
                    data: {
                      labels: blood_group,
                      datasets: [{
                        label: '# blood units',
                        data: total,
                        backgroundColor: color
                      }]
                    },
                    options: {
                      responsive: true,
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });




                }
              })
            }

          });
        </script>

		
</body>


</html>


