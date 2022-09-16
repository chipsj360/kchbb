<!DOCTYPE html>
<html lang="en">
<?php

session_start();

if (!isset($_SESSION['name'])) {
  $_SESSION['lgn_msg'] = "You are not logged in, Please login first";
  $_SESSION['lgn'] = 0;
  header("Location: ../../login.php");
} elseif (!isset($_SESSION['role'])) {
  $_SESSION['stts_msg'] = "Operation not allowed!";
  $_SESSION['msg_type'] = "danger";
  header("Location: ../../dashboard.php");
} elseif ($_SESSION['role'] != 'ADMIN') {
  $_SESSION['stts_msg'] = "Operation not allowed!";
  $_SESSION['msg_type'] = "danger";
  header("Location: ../../dashboard.php");
}


include_once '../../config/dbconnect.php';
include_once '../../repository/Donor_repository.php';
include_once '../../repository/test_repository.php';
include_once '../../repository/Blood_repository.php';



$database = new dbconnect();
$db = $database->connect();



$donor = new DonorRepository($db);
$result = new TestRepository($db);
$blood = new BloodRepository($db);

?>

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

<body>
  <section class="header">
    <div class="container">
      <?php include 'navbar.php' ?>
    </div>
  </section>
  <header class="container-fluid bg-danger title title-nav pt-2">
    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menu</button>
  </header>
  <div class="container pt-5 pb-5">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active card p-4 overflow-auto side-tab-content" id="list-donor" role="tabpanel" aria-labelledby="list-donor-list">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-outline-dark ml" onclick="location.href='../../donor.php'">+ New Donor</button>
        </div>
        <div class="">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <form action="../../services/donor_services" method="GET">
                  <div class="input-group mb-1">
                    <input type="text" name="search" required class="form-control" placeholder="Search donor" id="data-search">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <table class="table table-hover caption-top table-responsive table-borderless" id="donors">
          <caption class="title">Donors</caption>
          <div class="button">
            <a href="dashboardpage.php">New Dashboard</a>       
          </div>
        </div>
          <thead>
            <tr class="heade">
              <th>Donor Id</th>
              <th>Full name</th>
              <th>Gender</th>
              <th>DOB</th>
              <th>Blood Group</th>
              <th>Phone Number</th>
              <th>Weight</th>
              <th>User Name</th>
            </tr>
          </thead>
          <tbody class="tbody">
            <?php
            $donors = $donor->read();
            //$donors = $donor->search_read();
            foreach ($donors as $donorz) { ?>
              <tr class="text-center">
                <td><?php echo $donorz['donor_id']; ?></td>
                <td><?php echo ucwords($donorz['first_name'] . " " . $donorz['last_name']); ?></td>
                <td><?php echo $donorz['gender']; ?></td>
                <td><?php echo $donorz['dob']; ?></td>
                <td><?php echo $donorz['blood_group']; ?></td>
                <td><?php echo $donorz['phone_number']; ?></td>
                <td><?php echo $donorz['weight']; ?></td>
                <td><?php echo ucwords($donorz['user_name']); ?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="../../services/donor_services.php?delete=<?php echo $donorz['donor_id']; ?>" class="btn btn-danger">Delete</a>
                    <a href="../../donationform.php?blood=<?php echo $donorz['donor_id']; ?>" class="btn btn-success">Blood</a>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!--End of first pane -->
      <div class="tab-pane fade card p-4 overflow-auto" id="list-blood" role="tabpanel" aria-labelledby="list-profile-blood">
        <table class="table table-hover caption-top table-responsive table-borderless">
          <caption class="title">Blood</caption>
          <thead>
            <tr>
              <th scope="col">blood_id</th>
              <th scope="col">first_name</th>
              <th scope="col">last_name</th>
              <th scope="col">blood_group</th>
              <th scope="col">collection_date</th>
              <th scope="col">quantity</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $bloodz = $blood->read();
            foreach ($bloodz as $blood_item) { ?>
              <tr>
                <td><?php echo $blood_item['blood_id']; ?></td>
                <td><?php echo $blood_item['first_name']; ?></td>
                <td><?php echo $blood_item['last_name']; ?></td>
                <td><?php echo $blood_item['blood_group']; ?></td>
                <td><?php echo $blood_item['donation_date']; ?></td>
                <td><?php echo $blood_item['quantity']; ?></td>
                <td><?php

                    if ($blood_item['results_id'] == NULL) {
                      /*echo '<span href="../../results.php?blood=<?php echo $blood_item['blood_id']; ?>" class=""btn btn-primary'>Enter Results </span>';*/
                      echo "<a href=\"../../results.php?result={$blood_item['blood_id']}\" class='btn btn-primary' >Enter Results </a>";
                    } else {
                      if ($result->read_by_id($blood_item['results_id'])) {
                        if ($result->Hiv == 'Negative' && $result->Hepatitis_A == 'Negative' && $result->Hepatitis_B == 'Negative' && $result->Hepatitis_C == 'Negative') {
                          echo "<span class ='btn btn-primary'>Approved</span>";
                        } else {
                          echo "<span class = 'btn btn-danger'>Rejected</span>";
                        }
                      } else {
                        echo "<span class = 'btn btn-danger'>Error</span>";
                      }
                    }
                    ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <div class="container-fluid ">
          <div class="row">
            <div class="">
              <div class="card mt-4 mb-4 mx-auto" style="width: 40rem;">
                <div class="card-header">Available Blood</div>
                <div class="card-body">
                  <div class="chart-container pie-chart">
                    <canvas id="myChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="../../dispense.php" class="btn btn-warning  float-right">Dispense</a>
        <script type="text/javascript" src="jquery.min.js"> </script>
        <script type="text/javascript" src="chart.min.js"> </script>
        <script>
          const search = document.getElementById('data-search');
          // Search the table 
          search.addEventListener("keyup", function() {
            var keyword = this.value;
            keyword = keyword.toUpperCase();
            var table_3 = document.getElementById("donors");
            var all_tr = table_3.getElementsByTagName("tr");
            for (var i = 0; i < all_tr.length; i++) {
              var all_columns = all_tr[i].getElementsByTagName("td");
              for (j = 0; j < all_columns.length; j++) {
                if (all_columns[j]) {
                  var column_value = all_columns[j].textContent || all_columns[j].innerText;
                  column_value = column_value.toUpperCase();
                  if (column_value.indexOf(keyword) > -1) {
                    all_tr[i].style.display = ""; // show
                    break;
                  } else {
                    all_tr[i].style.display = "none"; // hide
                  }
                }
              }
            }
          })
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
                    color.push(data[count].color); }
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
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
  
  <!--offcanvas -->
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">KTCH BLOOD BANK</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-donor-list" data-bs-toggle="list" href="#list-donor" role="tab" aria-controls="list-donor">Donor</a>
        <a class="list-group-item list-group-item-action" id="list-profile-blood" data-bs-toggle="list" href="#list-blood" role="tab" aria-controls="list-blood">Blood</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Stock Levels</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
      </div>
    </div>
  </div>
  <script src="../../lib/js/bootstrap.bundle.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
</body>

</html>