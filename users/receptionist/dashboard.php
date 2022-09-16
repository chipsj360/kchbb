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
}

include_once '../../repository/Donor_repository.php';
include_once '../../config/dbconnect.php';

$database = new dbconnect();
$db = $database->connect();


$donor=new DonorRepository($db);

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Staff Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../../lib/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../../src/nav.css"> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</head>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../../lib/css/bootstrap.min.css">
  <!--link rel="stylesheet" href="../../src/nav.css"-->
  <link rel="stylesheet" href="../../src/dashboard.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | White Horse </title>-->
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
	  
      <span class="logo_name">KTHBD</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Donor</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name" href="list-messages" aria-controls="list-donor" >Blood</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock Level</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name" a href="google.com">Notification</span>
          </a>
        </li>
       
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>        
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      
     <div class="profile-details">
       
        <span class="admin_name">User</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Donors</div>
            <div class="number">4076</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from Last Year</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Lives Saved</div>
            <div class="number">3876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from Last Year</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Budget</div>
            <div class="number">$1287</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Deaths</div>
            <div class="number">110</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">List of Donors</div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-outline-dark ml" onclick="location.href='../../donor.php'">+ Add New donor</button>
        </div>
          <div class="sales-details">
          <table class="table table-hover caption-top table-responsive table-borderless">
	  <!-- <caption class="title">Donors</caption> -->
	       <thead>
                 <tr>
                 <th scope="col">Id</th>
                   <th scope="col">F.Name</th>
                   <th scope="col">Surname</th>                    
                    <th scope="col">Sex</th>
                   <th scope="col">DOB</th>
                   <th scope="col">B.Group</th>
                   <th scope="col">Contact</th>
                   <th scope="col">Weight</th>
                   <!-- <th scope="col">Username</th>
                   <th scope="col">Password</th>                -->
                </tr>
          </thead>
		  <tbody>
		       <?php $donors = $donor->read();
                        foreach ($donors as $donorz) { ?>
                            <tr>
                            <td><?php echo $donorz['donor_id']; ?></td>
                            <td scope="row"><?php echo $donorz['first_name']; ?></td>
                                <td><?php echo $donorz['last_name']; ?></td>
                                <td><?php echo $donorz['gender']; ?></td>
                                <td><?php echo $donorz['dob']; ?></td>
                                <td><?php echo $donorz['blood_group']; ?></td>
                                <td><?php echo $donorz['phone_number']; ?></td>
                                <td><?php echo $donorz['weight']; ?></td>
                                <!-- <td><?php echo $donorz['user_name']; ?></td>
                                <td><?php echo $donorz['password']; ?></td> -->
                                <td>
                                   <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-primary">View</button>
                                    
                               </div>
                                </td>
						
                            </tr>
						<?php } ?>
		  </tbody>
	  </table>
        
      </div>
          <div class="button">
            <!--a href="#"></!--a-->
          </div>
       </div>
        <div class="top-sales box">
          <div class="title">Blood Groups</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">     
            </a>
            <span class="price">A+</span>
          </li>
          <li>
            <a href="#">     
            </a>
          </li>
          <li>
            <a href="#">   
            </a>
            <span class="price">A-</span>
          </li>
          <li>
            <a href="#">              
            </a>
            <span class="price">B+</span>
          </li>
          <li>
            <a href="#">
            </a>
            <span class="price">B-</span>
          </li>
          </ul>
          <li>
            <a href="#">     
            </a>
            <span class="price">AB+</span>
          </li>
          <li>
            <a href="#">     
            </a>
            <span class="price">AB-</span>
          </li>
          <li>
            <a href="#">     
            </a>
            <span class="price">O+</span>
          </li>
          <li>
            <a href="#">     
            </a>
            <span class="price">O-</span>
          </li>
            </div>
      </div>
    </div>
  </section>

          <script>
          let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
          sidebar.classList.toggle("active");
          if(sidebar.classList.contains("active")){
          sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
          sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
        </script>

      </body>

</html>