<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<?php include_once 'services/results_services.php' ?>

<head>
  <meta charset="UTF-8">
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

                    
                </div>
            </div>
			
			</article>
</div> <!-- card.// -->

</div> 

<script src="lib/js/bootstrap.bundle.min.js"></script>  

</body>
</html>