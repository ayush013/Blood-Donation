<!DOCTYPE html>
<html>
<head>
	<title>
		Registration
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="assets/js/validations.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	
</head>
<body>
	<style type="text/css">
  
  #loader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(ellipse at center, rgba(38,0,0,1) 0%, rgba(0,0,0,1) 100%);
    z-index: 10000;
  }

  #presvg {
    width: 100px;
    height: 100px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -50px 0 0 -50px;
  }

  .heart_path {
    -webkit-animation: groove 6s 3000 alternate;
            animation: groove 6s 3000 alternate;
    fill: transparent;
    stroke: #FFF;
    stroke-dasharray: 0;
    stroke-width: 10px;
  }

  @keyframes groove {
    0%, 100% {
      stroke-dasharray: 1600;
    }
    25%, 75% {
      stroke-dasharray: 70;
    }
    50% {
      stroke-dasharray: 150;
    }
  }
</style>	
<div class="container">
<div id = 'loader'>
	<div id="presvg">
    <svg class="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 612">
    <style type="text/css">
      .st0{enable-background:new;}
      .st1{fill:#FCFCFC;}
    </style>
    <path class="heart_path"  d="M401.8,67.8c-18.7-19.1-43.7-29.6-70.4-29.6c-26.3,0-51,10.2-69.6,28.8l-9.6,9.6l-9.6-9.6C224,48.4,199.3,38.2,173,38.2
  S122,48.4,103.4,67s-28.8,43.3-28.8,69.6s10.2,51,28.8,69.6l123.1,123.1c7.1,7.1,16.4,10.7,25.8,10.7c9.3,0,18.7-3.6,25.8-10.7
  L400.4,207C438.6,168.7,439.3,106.2,401.8,67.8L401.8,67.8z M387.3,194.2L265.1,316.4c-7.1,7.1-18.7,7.1-25.8,0l-123.1-123
  c-15.2-15.2-23.5-35.3-23.5-56.7S101,95.1,116.2,80c15.2-15.2,35.3-23.5,56.7-23.5s41.6,8.3,56.7,23.5l9.6,9.6l-14.7,14.7
  c-3.6,3.6-3.6,9.3,0,12.9c1.8,1.8,4.1,2.7,6.4,2.7c2.3,0,4.7-0.9,6.4-2.7L274.5,80c15.2-15.2,35.3-23.5,56.7-23.5
  c21.8,0,42.1,8.6,57.4,24.2C419.4,111.8,418.7,162.8,387.3,194.2L387.3,194.2z M397.8,132.5c-1-16.2-7.9-31.5-19.3-42.9
  c-8.1-8.1-18.2-14-29.1-17.1c-4.9-1.3-9.9,1.5-11.2,6.3c-1.3,4.8,1.5,9.9,6.3,11.2c7.9,2.2,15.2,6.5,21.1,12.4
  c8.3,8.3,13.3,19.4,14,31.2c0.3,4.8,4.3,8.6,9.1,8.6c0.2,0,0.4,0,0.6,0C394.3,141.9,398.1,137.5,397.8,132.5L397.8,132.5z"/>
    <g class="st0">
      <path class="st1" d="M125.2,392.5c0,5.4-3.3,9.6-8.7,11c6.6,1.2,10.5,6.1,10.5,12.7c0,8.6-7.3,13.9-18.9,13.9H84.2v-50.2h23.1
        C118.3,379.9,125.2,384.7,125.2,392.5z M113.5,394.5c0-3.5-2.6-5.5-6.9-5.4H95.3v11h11.2C111,400.1,113.5,398.1,113.5,394.5z
         M115.3,414.8c0-3.7-3.3-5.9-8.6-5.9H95.4v12h11.2C111.9,420.9,115.3,418.6,115.3,414.8z"/>
      <path class="st1" d="M182.8,405c0,14.8-11,25.1-26.8,25.1h-20.9v-50.2h21.3C172.1,379.9,182.8,390.2,182.8,405z M171.3,405.1
        c0-9.2-6.5-15.7-15.1-15.7h-9.8v31.1h10.3C165.1,420.5,171.3,414.2,171.3,405.1z"/>
      <path class="st1" d="M212.3,389.3c-8.6,0-15.3,6.7-15.3,15.4s6.7,15.5,15.3,15.5c4.5,0,9.4-2.3,13-5.9l6.7,7.3
        c-5.3,5.5-13,9-20.3,9c-14.9,0-26.3-11.1-26.3-25.7c0-14.5,11.6-25.3,26.8-25.3c7.3,0,14.8,3.2,19.8,8.4l-6.6,8
        C222,392,217,389.3,212.3,389.3z"/>
      <path class="st1" d="M282.2,394c0-3.2-2.5-5.1-6.9-5.1c-4.3,0-9.4,2.4-14,6.3l-4.4-8.5c6.2-4.7,13-7.4,20.1-7.4
        c10,0,17.1,5.1,17.1,13c0,5.4-4.1,11-9.6,16.7l-11.7,11.6h23.1v9.6h-37.6v-7.8l18.5-19.1C280.1,399.9,282.2,396.5,282.2,394z"/>
      <path class="st1" d="M340.6,404.9c0,16.4-6.9,25.5-19.4,25.5c-12.5,0-19.5-9.1-19.5-25.5c0-16.4,6.9-25.5,19.5-25.5
        C333.6,379.4,340.6,388.6,340.6,404.9z M312.7,404.9c0,12,2.6,17.1,8.5,17.1c5.7,0,8.4-5.3,8.4-17.1c0-12-2.6-17.1-8.4-17.1
        C315.4,387.8,312.7,392.9,312.7,404.9z"/>
      <path class="st1" d="M371.6,379.8v50.3h-11.4v-40.6h-10v-9.6h21.4V379.8z"/>
      <path class="st1" d="M426.9,392.7c0,4.4-2.4,8.4-6.5,10.5c5.5,2.3,9.1,6.9,9.1,12.7c0,9.1-7.6,14.7-19.8,14.7s-19.8-5.6-19.8-14.5
        c0-5.9,3.8-10.6,9.6-12.9c-4.4-2.4-7.1-6.3-7.1-10.9c0-8,6.7-13,17.2-13C420.2,379.3,426.9,384.4,426.9,392.7z M400.5,414.9
        c0,4.5,3.3,7.2,9.2,7.2c5.9,0,9.2-2.6,9.2-7.1c0-4.4-3.3-7.1-9.2-7.1S400.5,410.5,400.5,414.9z M401.9,393.3c0,3.8,2.7,6.1,7.8,6.1
        c4.9,0,7.8-2.3,7.8-6.1c0-3.9-2.7-6.2-7.8-6.2C404.6,387.2,401.9,389.3,401.9,393.3z"/>
    </g>
    <g>
      <path class="st1" d="M116.2,457.4v27.8h14.5v5.8h-20.9v-33.6H116.2z"/>
      <path class="st1" d="M173.7,474.2c0,9.6-7.8,17.1-17.9,17.1s-17.9-7.4-17.9-17.1c0-9.7,7.8-17,17.9-17S173.7,464.5,173.7,474.2z
         M144.4,474.2c0,6.3,5.2,11.3,11.4,11.3c6.1,0,11.2-5,11.2-11.3c0-6.3-5.1-11.2-11.2-11.2C149.6,463,144.4,467.9,144.4,474.2z"/>
      <path class="st1" d="M205.2,483.9h-16.4l-3,7.1h-6.7l14.7-33.6h6.7L215,491h-6.9L205.2,483.9z M202.8,478.4l-5.9-14.1l-6,14.1
        H202.8z"/>
      <path class="st1" d="M255.4,474.2c0,9.8-7.4,16.8-17.8,16.8h-13.7v-33.6h14C248.1,457.4,255.4,464.4,255.4,474.2z M248.8,474.2
        c0-6.6-4.8-11.2-11-11.2h-7.4v22.3h7.7C244.2,485.3,248.8,480.8,248.8,474.2z"/>
      <path class="st1" d="M272.3,457.4V491h-6.4v-33.6H272.3z"/>
      <path class="st1" d="M291.4,457.4l17.3,23v-23h6.2V491h-6.1l-17.3-22.9V491h-6.3v-33.6H291.4z"/>
      <path class="st1" d="M350.8,474.3h5.6v12.6c-3.5,2.6-8.6,4.4-13.3,4.4c-10,0-17.8-7.4-17.8-17.1c0-9.6,7.9-17,18.1-17
        c4.8,0,9.8,1.9,13.2,4.8l-3.6,4.7c-2.5-2.4-6.1-3.8-9.5-3.8c-6.5,0-11.6,4.9-11.6,11.3c0,6.4,5.1,11.3,11.6,11.3
        c2.3,0,4.9-0.8,7.2-2.1V474.3z"/>
      <path class="st1" d="M373.2,487.9c0,2-1.4,3.5-3.3,3.5c-1.9,0-3.3-1.5-3.3-3.5s1.4-3.4,3.3-3.4
        C371.9,484.5,373.2,485.9,373.2,487.9z"/>
      <path class="st1" d="M388.8,487.9c0,2-1.4,3.5-3.3,3.5c-1.9,0-3.3-1.5-3.3-3.5s1.4-3.4,3.3-3.4
        C387.5,484.5,388.8,485.9,388.8,487.9z"/>
      <path class="st1" d="M404.4,487.9c0,2-1.4,3.5-3.3,3.5c-1.9,0-3.3-1.5-3.3-3.5s1.4-3.4,3.3-3.4
        C403.1,484.5,404.4,485.9,404.4,487.9z"/>
    </g>
    </svg>
  </div>

</div>
	<h1 class="text-center heading">Register Yourself</h1>

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
	  	  	<div class="form-row">
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