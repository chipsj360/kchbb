<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<?php include_once 'services/blood_edit_services.php' ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donation Form</title>
  <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/nav_1.css">
</head>
<body>
<section class="header">
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KTCH BLOOD BANK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">Dashboard</a>
        </li>
      </ul>
      
    </div>
                                                                                                                                   
        </div>
  </div>
</nav>
</section>
</div>

 <div class="m-3">
<div class="container m-top radius overflow-hidden  shadow-sm bg-white max-width">
        <div class="row radius">

 <form class="row g-3" method="POST" action="services/bloodservices.php">
 <div class="col-md-5">
  <label for="inputEmail4" class="form-label">Donor_id</label>
  <input type="text" <?php if(isset($_GET['blood'])) ?> value="<?php echo $donor_id ?>" class="form-control" id="" name="donor_id" readonly >
  </div>
 
  </div>
  <div class="col-md-5">
    <label for="inputAddress2" class="form-label">Collection Date</label>
    <input type="date" class="form-control" id="dob" name="collectiondate" >
  </div>
  
  <div class="col-md-5">
    <label for="inputAddress2" class="form-label">Blood Group</label>
    <input type="text" value="<?php echo $blood_group ?>"  class="form-control" id="" name="bloodgroup" readonly  >
  </div>

 
  <div class="col-md-5">
    <label for="pints" class="form-label">Quantity</label>
    <input type="number" class="form-control" placeholder="470 ml" name="pints">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-success"  style="border-radius:0%"; name="blood">collect</button>
  </div>
</form>
 
  </div>
 </div>
</div>
<script src="lib/js/bootstrap.bundle.min.js"></script>  

</body>
</html>