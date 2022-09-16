<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--link rel="stylesheet" href="lib/css/bootstrap.min.css"-->
    <!--link rel="stylesheet" href="src/nav_1.css"-->

</head>
<!-- <body>
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

    
<div class="m-3">
<h3 >Donor Details</h3>
<div class="container m-top radius overflow-hidden  shadow-sm bg-white max-width">
        <div class="row radius">

                <form class="row g-3" method="POST" action="services/registration_services.php">

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
                    <input type="text" class="form-control" placeholder="" name="username">
                  </div>
                  
                  
                  <div class="col-md-5">
                    <label for="username" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="50" name="password">
                  </div>
                  
                  <div class="col-12">
                    <button type="submit" class="btn btn-danger"  style="border-radius:0%";>Register</button>
                  </div>
                  
                </form>
                <div class="text-center mt-2">Already registered? <a href="login.php">Sign in</a></div> 
                  </div>
                </div>
                </div>

                </body> -->
                </html>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Registration Form</title>
  </head>
<body>
  <div class="container">
    <div class="title">Adding Donor</div>
    <div class="content">
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


<!-- <div class="col-12">
  <button type="submit" class="btn btn-danger"  style="border-radius:0%";>Register</button>
</div> -->
<div class="button">
          <input type="submit" value="Register">
        </div>
</div>

</form>

      <!--form action="#"--> 
      <!-- <form class="row g-3" method="POST" action="services/registration_services.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form> -->
    </div>
  </div>
</body>
</html>