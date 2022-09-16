<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
</head>
<body>
 <div class="m-3">
<div class="container m-top radius overflow-hidden  shadow-sm bg-white max-width">
        <div class="row radius">

 <form class="row g-3 method="POST" action="services/donor_services.php">
  <div class="col-md-5">
  <label for="inputEmail4" class="form-label">First Name</label>
  <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-5">
  <label for="inputPassword4" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-5">
    <label for="inputAddress" class="form-label">Gender</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Male or female">
  </div>
  <div class="col-md-5">
    <label for="inputAddress2" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="dob" >
  </div>
  <div class="col-md-5">
    <label for="inputCity" class="form-label">Blood Group</label>
    <input type="text" class="form-control" placeholder="A+">
  </div>
  
  <div class="col-md-5">
    <label for="phonenumber" class="form-label">Phone Number</label>
    <input type="tel" class="form-control" name="phonenumber">
  </div>
  
 <div class="col-md-5">
    <label for="weight" class="form-label">Weight</label>
    <input type="number" class="form-control" placeholder="50" name="weight">
  </div>
  
   <div class="col-md-5">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" placeholder="50" name="weight">
  </div>
  
  
  <div class="col-md-5">
    <label for="username" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="50" name="weight">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-success" class="btn btn-success" style="border-radius:0%";>register</button>
  </div>
</form>
 <div class="text-center mt-2">Already registered? <a href="login.php">Sign in</a></div> 
  </div>
 </div>
</div>
<script src="lib/js/bootstrap.bundle.min.js"></script>
</body>
</html>