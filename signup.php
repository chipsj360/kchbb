<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

 <form class="row g-3" method="POST" action="services/donor_services.php">
  <div class="col-md-5">
  <label for="inputEmail4" class="form-label">First Name</label>
  <input type="text" class="form-control" id="" name="firstname">
  </div>
  <div class="col-md-5">
  <label for="inputPassword4" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="inputPassword4" name="lastname">
  </div>
  <div class="col-md-5">
    <label for="inputAddress" class="form-label">Gender</label>
    <input type="text" class="form-control"  placeholder="Male or female" name="gender">
  </div>
  <div class="col-md-5">
    <label for="inputAddress2" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob" >
  </div>
  <div class="col-md-10">
  <select class="form-select form-select-md" name="bloodgroup">
  <option selected>bloodgroup</option>
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
  <div class="col-md-5">
    <label for="phonenumber" class="form-label">Phone Number</label>
    <input type="tel" class="form-control" name="contact">
  </div>
  
 <div class="col-md-5">
    <label for="weight" class="form-label">Weight</label>
    <input type="number" class="form-control" placeholder="50" name="weight">
  </div>
  
   <div class="col-md-5">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control"  name="username">
  </div>
  
  
  <div class="col-md-5">
    <label for="username" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="" name="password">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-danger"  style="border-radius:0%";>Register</button>
  </div>
</form>
 <div class="text-center mt-2">Already registered? <a href="login.php">Sign in</a></div> 
  </div>
 </div>
</div>
<script src="lib/js/bootstrap.bundle.min.js"></script>
</body>
</html>