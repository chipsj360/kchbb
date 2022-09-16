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