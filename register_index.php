<!DOCTYPE html>
<html>
<head>
	<title>
		registration
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="assets/js/validations.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
	<h1 class="text-center heading">Register Yourself</h1>
	<h6 id = 'loader'>Loading..</h6>
	<form id="registration_form" method="POST">
	<div class="row justify-content-center">	
		<div class="col-md-9 form">
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="student_no">Student No.:</label>
	      <input type="text" class="form-control" id="student_no" placeholder="Enter Student No." name="student_no" autocomplete="off">
	      <span id="err_student_no" class="error"></span>
	    </div>
	    <div class="form-group col-md-6">
	      <label for="name">Name:</label>
	      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" autocomplete="off">
	      <span id="err_name" class="error"></span>
	    </div>
	  </div>
	  <div class="form-row">
	    
	    <div class="form-group col-md-6">
	      <label for="number">Year:</label>
	      <select id="number" class="form-control" name="year">
	        <option selected value="1">1</option>
	        <option value="2">2</option>
	        <option value="3">3</option>
	        <option value="4">4</option>
	      </select>
	    </div>
	    <div class="form-group col-md-6 ">
	      <label for="blood-group">Blood Group:</label>
	      <select id="blood-group" class="form-control" name="blood-group">
	        <option selected value="AP">A+</option>
	        <option value="AN">A-</option>
	        <option value="ABP">AB+</option>
	        <option value="ABN">AB-</option>
	        <option value="BP">B+</option>
	        <option value="BN">B-</option>
	        <option value="OP">O+</option>
	        <option value="ON">O-</option>
	        <option value="Don't know">Don't Know</option>
	      </select>
	    </div>
	  </div>
	  <div class="form-row">
	    
	    <div class="form-group col-md-12">
	      <label for="course">Course:</label>
	      <select id="course" class="form-control" name="course">
	        <option selected value="B.Tech">B.Tech</option>
	        <option value="M.Tech">M.Tech</option>
	        <option value="MBA">MBA</option>
	        <option value="MCA">MCA</option>
	      </select>
	    </div>
	    
	  </div>
	  <div class="form-row">
	  	  <div class="form-group col-md-12">
	  	  	<div class="row">
	  		<label class="col-md-4">Gender:</label>
	        <div class="form-check form-check-inline col-md-3">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="male" value="male" checked>
			  <label class="form-check-label" for="male"><span></span>Male</label>
		    </div>
		    <div class="form-check form-check-inline col-md-3">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="female" value="female">
			  <label class="form-check-label" for="female"><span></span>Female</label>
		    </div>
		</div>
	      </div>
	  </div>
	  <div class="form-row">
	  	<div class="form-group col-md-6">
	  		<label for="email" >Email ID:</label> 
	  		<input id="email" type="email" placeholder="Enter Email" class="form-control" name="email" autocomplete="off">
	  		<span id="err_email" class="error"></span>
	  	</div>
	  	<div class="form-group col-md-6">
	  		<label for="contact_number" >Contact No.:</label> 
	  		<input id="contact_number" type="tel" placeholder="Enter contact no" class="form-control" name="contact" autocomplete="off">
	  		<span id="err_contact_no" class="error"></span>
	  	</div>
	  </div>
	  <div class="form-row">
	    <div class="form-check form-check-inline col-md-3">
			  <input class="form-check-input" type="radio" name="inlineRadioOption" id="Hosteller" value="Hosteller" checked>
			  <label class="form-check-label" for="Hosteller"><span></span>Hosteller</label>
		</div>
		<div class="form-check form-check-inline col-md-5">
			  <input class="form-check-input" type="radio" name="inlineRadioOption" id="day_scholar" value="Day_Scholar">
			  <label class="form-check-label" for="day_scholar"><span></span>Day Scholar</label>
		</div>
	  </div>
	  <div class="form-row justify-content-center">
	  <button type="submit" class="btn col-md-4" id = 'register'>Register</button>
	</div>
   </div>	
   </form>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>