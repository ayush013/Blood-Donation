<?php
	require('config.php');
	require('sendmail.php');
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = $_POST['name'];
		$student_no = $_POST['student_no'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$year = $_POST['year'];
		$branch = $_POST['branch'];
		$course = $_POST['course'];
		$gender = $_POST['gender'];
		$hostler = $_POST['hostler'];
		$bloodgroup = $_POST['bloodgroup'];
		$address = $_POST['address'];
		$error['name']='';$error['email']='';$error['student_no']='';$error['contact']='';
		
		if(empty($name))
		{
			$error['name'] = 'Name cannot be empty';
		}
		else if(!preg_match('/^[a-zA-Z]+[\s]{0,1}[a-zA-Z]+[\s]{0,1}[A-z]+/', $name))
		{
			$error['name'] = 'Invalid name';
		}
		
		if(empty($student_no))
		{
			$error['student_no'] = 'Student number cannot be empty';
		}
		else if(!preg_match('/^([1][4-7]\d{5}[Dd]{0,1})$/', $student_no))/* regex for student number */
		{
			$error['student_no'] = 'Invalid student number';
		}

		if(empty($email))
		{
			$error['email'] = 'Email cannot be empty';
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error['email'] = 'Invalid email';
		}

		if(empty($contact))
		{
			$error['contact'] = 'Contact cannot be empty';
		}
		else if(!preg_match('/([6-9]{1}[0-9]{9})/', $contact))
		{
			$error['contact'] = 'Invalid contact number';
		}

		$stmt = $pdo->prepare("SELECT email FROM `users` WHERE email = :email");
		$stmt->bindparam(":email" , $email);
		$stmt->execute();
		$emailcount=$stmt->fetch(PDO::FETCH_ASSOC);
		

		$stmt1 = $pdo->prepare("SELECT student_no FROM `users` WHERE student_no = :student_no");
		$stmt1->bindparam(":student_no" , $student_no);
		$stmt1->execute();
		$student_nocount=$stmt1->fetch(PDO::FETCH_ASSOC);


		$stmt2 = $pdo->prepare("SELECT contact FROM `users` WHERE contact = :contact");
		$stmt2->bindparam(":contact" , $contact);
		$stmt2->execute();
		$contactcount=$stmt2->fetch(PDO::FETCH_ASSOC);

		if($emailcount > 0)
			$error['email'] = 'Email already exists';
		if($student_nocount >0)
			$error['student_no'] = 'Student number already exists';
		if($contactcount > 0)
			$error['contact'] = 'Contact number already exists';

		if(!empty($error['email']) || !empty($error['name']) || !empty($error['contact']) || !empty($error['student_no']))
		{
			$error['status'] = 1;
		}

		else
		{
			try
			{


			    $stmt = $pdo->prepare("INSERT INTO users (name, email, contact, year, branch, course, blood_group, hostler, gender,student_no,permanent_address) VALUES (:name,:email,:contact,:year,:branch,:course,:blood_group,:hostler,:gender,:student_no,:address)");
	             
	           $stmt->bindparam(":name", $name);
	           $stmt->bindparam(":contact", $contact);
	           $stmt->bindparam(":email", $email);
	           $stmt->bindparam(":year", $year);   
	           $stmt->bindparam(":branch", $branch);
	           $stmt->bindparam(":address", $address);
	           $stmt->bindparam(":course",$course);
	           $stmt->bindparam(":blood_group", $bloodgroup);
	           $stmt->bindparam(":hostler",$hostler);
	           $stmt->bindparam(":gender", $gender);
	           $stmt->bindparam(":student_no",$student_no);
	           $stmt->execute();
	           if($stmt == true)
	           	{
	           		$error['status'] = 0;
	           		$message = file_get_contents('mail_templates/bdc.html');//replace the mail template
	          		$message = str_replace('%name%', $name, $message); //for sending email purpose
	          		$subject="Blood Donation Camp 2018";
	          		send_mail($email,$subject,$message);
            	}  

	           
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		echo json_encode($error);
		
	}

	
?>