<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<?php include_once 'services/results_services.php' ?>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Results</title>
  <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/nav_1.css">
</head>
<body>

<div class="container">

<center> 
  <h2 class="text-center">Blood Testing</h2>
  
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="index.php">Home</a> -->
          <button type="button" class="btn mb-1 btn-outline-secondary" href="index.php" >Home</button>
        </li>        
        <li class="nav-item">
        <button type="button" class="btn mb-1 btn-outline-secondary" href="index.php" >Dashboard</button>
        </li>
    
</center>
  <!-- <div class="col-8">
                <div class="form p-5"><center>
                    <form class="row g-3" method="POST" action="services/bloodservices.php">
                        <h3>Test Results</h3>                        
                        <div class="col-md-12">
                            <label for="inputusername" class="form-label">Blood id</label>
                            <input type="text"  <?php if(isset($_GET['result'])) ?> value="<?php echo $blood_id ?>" class="form-control"   name="blood_id" readonly >
                        </div>
                        <div class="col-md-12">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Hiv">
                             <option selected>Hiv</option>
                             <option value="Negative">Negative</option>
                             <option value="Positive">Positive</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Hepatitis-A">
                             <option selected>Heptitis-A</option>
                             <option value="Negative">Negative</option>
                             <option value="Positive">Positive</option>
                            </select>
                          </div>
                           <div class="col-md-12">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Hepatitis-B">
                             <option selected>Heptitis-B</option>
                             <option value="Negative">Negative</option>
                             <option value="Positive">Positive</option>
                            </select>
                          </div>
                          <div class="col-md-12">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Hepatitis-C">
                             <option selected>Heptitis-C</option>
                             <option value="Negative">Negative</option>
                             <option value="Positive">Positive</option>
                            </select>
                          </div>                  
                        <div class="col-12">
                            <button type="submit"  class="btn btn-danger col-12" name=" results" >Submit</button>
                        </div>
                    </form>   </center>                 
                </div> 
            </div>
</div>  -->

<form class="row g-3" method="POST" action="services/registration_services.php">
    <div class="user-details">

<div class="input-box">
         <!-- <label for="inputusername" class="form-label">Blood Id</label> -->
             <input type="text" placeholder="Blood Id" <?php if(isset($_GET['result'])) ?> value="<?php echo $blood_id ?>" class="form-control"   name="blood_id" readonly >
</div>

       <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Hiv">
                             <option selected>Hiv</option>
                             <option value="Negative">Negative</option>
                             <option value="Positive">Positive</option>
                            </select>
                        </div>

<div class="col-md-12">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Hepatitis-A">
                             <option selected>Heptitis-A</option>
                             <option value="Negative">Negative</option>
                             <option value="Positive">Positive</option>
                            </select>
                          </div>

<div class="input-box">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Hepatitis-B">
                             <option selected>Heptitis-B</option>
                             <option value="Negative">Negative</option>
                             <option value="Positive">Positive</option>
                            </select>
                          </div>

<div class="col-md-12">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Hepatitis-C">
                             <option selected>Heptitis-C</option>
                             <option value="Negative">Negative</option>
                             <option value="Positive">Positive</option>
                            </select>
                          </div>  

                          <div class="col-12">
                            <button type="submit"  class="btn btn-danger col-12" name=" results" >Submit</button>
                        </div>
                        <center><p>Copyright &copy;whitehorse.com</p></center>
<!-- <div class="button">
          <input type="submit" value="Test">
        </div> -->
</div>
</form>
<script src="lib/js/bootstrap.bundle.min.js"></script>  
</body>
</html>