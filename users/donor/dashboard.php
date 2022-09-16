<?php
session_start();

if (!isset($_SESSION['name'])) {
    $_SESSION['lgn_msg'] = "You are not logged in, Please login first";
    $_SESSION['lgn'] = 0;
    header("Location: ../../login.php");
}
include_once '../../repository/Donor_repository.php';
include_once '../../config/dbconnect.php';
$database = new dbconnect();
$db = $database->connect();
$donor=new DonorRepository($db);
?>

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
        <!-- <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Donation</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name" href="list-messages" aria-controls="list-donor" >Blood</span>
          </a>
        </li> -->
        
        <!-- <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock Level</span>
          </a>
        </li> -->
        
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
       
        <span class="admin_name">Donor</span>
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
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Importance of Blood Donation</div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <!-- <button class="btn btn-outline-dark ml" onclick="location.href='../../donor.php'">+ Add New</button> -->
        </div>
          <div class="sales-details">
            <p>
            Maintaining diversity in the blood supply is essential. Some blood types are quite rare and are likeliest to
             be found among people with shared ancestral origins. Visit our Blood and Diversity page for more information on the need for diversity in the blood supply.

          <br>Why CMV Negative Blood is Important
          CMV is known as the cytomegalovirus. CMV is a flu-like virus to which an estimated 85% of adults in the United States will be exposed by the age of 40. This means that the majority of adults in the United States carry CMV antibodies. Unfortunately, these antibodies might pose a danger to particularly vulnerable patients. That’s why CMV-negative blood is preferred for use in some cases.

          In a medical setting, CMV-negative blood may be utilized for transfusions for 
          pediatric-specific conditions for newborns and premature babies, as well as for 
          immune-compromised adults.

          Blood Donation Types
          Blood donations can yield a variety of blood products, including red cells, platelets and plasma. You may be most familiar with the typical whole blood donation drive seen at workplaces, schools and community events, but there are a few other ways to help give more life through the Red Cross.
          </p>
          <!-- <table class="table table-hover caption-top table-responsive table-borderless" id="donors">          
          <div class="button"> 
                       
          </div>          
        </div>
          <thead>
            <tr class="heade">
              <th>Id</th>
              <th>Names</th>
              <th>Sex</th>
              <th>DOB</th>
              <th>B.Group</th>
              <th>Contact</th>
              <th>Weight</th>
              <th>Username</th>
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
        </table> -->
        
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

          <!-- <script>
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
<body>
  <section class="header">
    <div class="container">
<?php include 'navbar.php'?>
</div>
</section>
<header class="container-fluid bg-danger title title-nav pt-2">
<h3><?php echo $donor->first_name .' '.$donor->last_name  ?></h3>
<button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menu</button>
</header>
<div class="container pt-5 pb-5">
<div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-donor" role="tabpanel" aria-labelledby="list-donor-list">
	  
	  </div>
	  <!--End of first pane -->
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
</div> -->

 

<!--offcanvas -->

<!-- <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">KTCH BLOOD BANK</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  
  <div class="list-group" id="list-tab" role="tablist">
  <a class="list-group-item" id="list-title"><b><?php echo $donor->first_name . ' ' . $donor->last_name  ?></b></a>
      <a class="list-group-item list-group-item-action active" id="list-donor-list" data-bs-toggle="list" href="#list-donor" role="tab" aria-controls="list-donor">Donor</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
    </div>
  
  </div>
</div> -->


<script src="../../lib/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript Bundle with Popper -->
</body>
</html>