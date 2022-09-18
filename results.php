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

<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" >
  <div class="col-8">
                <div class="form p-5">
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
                    </form>

                    <form class="row g-3" method="POST" action="services/registration_services.php">
    <div class="user-details">
<div class="input-box">
<label for="inputEmail4" class="form-label">First Name</label>
<input type="text" class="form-control" id="" name="firstname">
</div>
<div class="input-box">
<label for="inputPassword4" class="form-label">Last Name</label>
  <input type="text" class="form-control" id="inputPassword4" name="lastname">
</div>
<div class="input-box">
  <label for="inputAddress" class="form-label">Gender</label>
  <input type="text" class="form-control"  placeholder="Male or female" name="gender">
</div>
<div class="input-box">
  <label for="inputAddress2" class="form-label">Date of Birth</label>
  <input type="date" class="form-control" id="dob" name="dob" >
</div>

<div class="input-box">
  <label for="phonenumber" class="form-label">Phone Number</label>
  <input type="tel" class="form-control" name="contact">
</div>

<div class="input-box">
  <label for="weight" class="form-label">Weight</label>
  <input type="number" class="form-control" placeholder="50" name="weight">
</div>

<div class="input-box">
  <label for="username" class="form-label">User Name</label>
  <input type="text" class="form-control" placeholder="" name="username">
</div>


<div class="input-box">
  <label for="username" class="details">Password</label>
  <input type="password" class="form-control" placeholder="50" name="password">
</div>
<div class="input-box">
<select class="form-select form-select-md" name="bloodgroup">
<option selected>--Select Blood Group--</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O">O-</option>
</select>
</div>


<!-- <div class="col-12">
  <button type="submit" class="btn btn-danger"  style="border-radius:0%";>Register</button>
</div> -->
<div class="button">
          <input type="submit" value="Register">
        </div>
</div>
<center><p>Copyright &copy;whitehorse.com</p></center>
</form>

                </div>
            </div>
			
			</article>
</div> <!-- card.// -->

</div> 

<script src="lib/js/bootstrap.bundle.min.js"></script>  

</body>
</html>