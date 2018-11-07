  <?php
  // tithe calculation function
   function tithe_func(int $x){
   	$salary = $x*0.1;
   	//$salary = 20000*0.1;
   	return $salary;

   	
   }
   
   if(isset($_POST['cal_btn'])) {
        $salary = $_POST['salary'];
    }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Functions Tithe</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <div class="container">
  	<div class="row">
  		<div class="col-md-2"></div>
  		<div class="col-md-8">
  			<form method="POST" action="<?php echo($_SERVER['PHP_SELF'])?>">
  				<h4 style="text-align: center; color: #007bff; margin-top: 20px;">CHURCH TITHE (FUNCTION)</h4>
  				<label for="salary"><b>SALARY</b></label>
  				<input type="number" name="salary" value="" class="form-control" placeholder="enter Your salary" required=""><br>
  				<div class="container">
  					<div class="row">
  					<div class="col-md-6">
  						<button type="submit" name="cal_btn" class="btn btn-primary" style="width:100%;">CALCULATE TITHE</button>
  					</div>
  					<div class="col-md-6">
  						<a href="http://localhost/functions/index.php" class="btn btn-danger" style="width:100%;">RESET SALARY</a>
  					</div>
  					</div>
  				</div>
  				
  			</form><br>

  			<?php
                if (isset($_POST['cal_btn'])) {
                
  			?>
  			<h5><b>Your tithe is:</b>  <?php echo tithe_func($salary); ?></h5>
  			<h5><b>Your balance is:</b> <?php echo $salary-tithe_func($salary); ?></h5>
  			<?php
               }
  			?>
  			<h4 style="text-align: center; color: #007bff;">Thank you for using this app.</h4>
  		</div>
  		<div class="col-md-2"></div>
  	</div>
  </div>
</body>
</html>