
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
  <link rel="stylesheet" href="../../src/dashboard.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <div class="sales-boxes">
  <div class="recent-sales box">
  <div>
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
	</div>
	</div>
</body>
</html>