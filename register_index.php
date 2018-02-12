
<!DOCTYPE html>
<html>
<head>
	<title>
		registration
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script type="text/javascript" src = "js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src = 'js/validations.js'></script>
</head>
<body>
<div class="container">
	<h1 class="text-center">Register Yourself</h1>
	<h6 id = 'loader'>Loading...</h6>
	<form  id = 'registration_form' method = 'post' >
	<div class="row justify-content-md-center">	
		<div class="col-md-8">
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="student_no.">Student No.</label>
	      <input id = 'student_no' type="text" class="form-control" name="student_no" placeholder="Enter Student No." >
	      <span id = 'err_student_no'></span>
	    </div>

	    <div class="form-group col-md-6">
	      <label for="name">Name</label>
	      <input id = 'name' type="text" class="form-control" name="name" placeholder="Enter Name">
	      <span id = 'err_name'></span>
	    </div>
	  </div>
	  <div class="form-row">
	    
	    <div class="form-group col-md-6">
	      <label for="number">Year</label>
	      <select id="number" class="form-control" name = 'year'>
	        <option value = '1' selected>1</option>
	        <option value = '2'>2</option>
	        <option value = '3'>3</option>
	        <option value = '4'>4</option>
	      </select>
	    </div>
	    <div class="form-group col-md-6">
	      <label for="blood-group">Blood Group</label>
	      <select id="blood-group" class="form-control" name= 'blood-group'>
	        <option value='AP' selected>A+</option>
	        <option value='AN'>A-</option>
	        <option value='ABP'>AB+</option>
	        <option value='ABN'>AB-</option>
	        <option value='BP'>B+</option>
	        <option value='BN'>B-</option>
	        <option value='OP'>O+</option>
	        <option value='ON'>O-</option>
	        <option value="Don't Know">Don't Know</option>
	      </select>
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-check form-check-inline col-md-3">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="male" value="male" checked>
			  <label class="form-check-label" for="male" checked>Male</label>
		</div>
		<div class="form-check form-check-inline col-md-3">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="female" value="female">
			  <label class="form-check-label" for="female">Female</label>
		</div>
	  </div>
	  <div class="form-row">
	  	<div class="form-group col-md-6">
	  		<label for="email" >Email ID:</label> 
	  		<input id="email" type="email" placeholder="Enter Email" class="form-control" name ='email'>
	  		<span id = 'err_email'></span>
	  	</div>
	  	<div class="form-group col-md-6">
	  		<label for="contact_number" >Contact No.</label> 
	  		<input id="contact_number" type="text" placeholder="Enter contact no" class="form-control" name = 'contact'>
	  		<span id = 'err_contact_no'></span>
	  	</div>
	  </div>
	  <div class="form-row">
	    <div class="form-check form-check-inline col-md-3">
			  <input class="form-check-input" type="radio" name="inlineRadioOption" id="hosteller" value="Hosteller" checked>
			  <label class="form-check-label" for="Hosteller" >Hosteller</label>
		</div>
		<div class="form-check form-check-inline col-md-3">
			  <input class="form-check-input" type="radio" name="inlineRadioOption" id="day_scholar" value="Day_Scholar">
			  <label class="form-check-label" for="day_scholar">DayScholar</label>
		</div>
	  </div>
	  <div class="form-row">
	    
	    <div class="form-group col-md-6">
	      <label for="text">Course</label>
	      <select id="course" class="form-control" name = 'course'>
	        <option value = 'B.Tech' selected>B.Tech</option>
	        <option value = 'M.Tech'>M.Tech</option>
	        <option value = 'MCA'>MCA</option>
	        <option value = 'MBA'>MBA</option>
	      </select>
	    </div>
	    <!-- <div class="form-group col-md-6">
	      <label for="branch">Branch</label>
	      <select id="branch" class="form-control" name = 'branch'>
	        <option value = 'CSE' selected>CSE</option>
	        <option value='IT-'>IT</option>
	        <option value='CE'>CE</option>
	        <option value='ECE'>ECE</option>
	        <option value='EN'>EN</option>
	        <option value='EI'>EI</option>
	        <option value='ME'>ME</option>
	      </select>
	    </div>-->
	  </div>
	  <input type="submit" class="btn btn-primary" id = 'register' value = 'register' name='register'>
   </div>


   </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>