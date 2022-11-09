<?php
//	session_start();
	require("../model/userModel.php") ;



    $name = $username = $email = $password = $dob = $gender = "";
    $nameErr = $unameErr = $emailErr = $passErr = $cPassErr = $dobErr = $genderErr =  "";


    if(isset($_POST["submit"])){


            //name validation
            if(empty($_POST["name"]))
						{
                $nameErr = "* name cannot be empty";

            }
						else
						{
							$name =$_POST['name'];
						}

            //user name validation
           if(empty($_POST["username"]))
						{
              $unameErr = "* user name cannot be empty";

            }
					else if(strlen($_POST["username"])<3){
              $unameErr = "user name must have atleast three characters.";

            }
						else
						{
						$username = $_POST['username'];
						}
            //email validation
            if(empty($_POST["email"]))
						{
                $emailErr = "* email cannot be empty";

            }
						else
						{
							$email = $_POST['email'];
						}

            //date of birth validation
            if(empty($_POST["dob"]))
						{
                $dobErr = "* date cannot be empty";
            }
						else {
							// code...
							$dob = $_POST['dob'];
						}
            //gender validation
            if(empty($_POST["gender"]))
						{
                $genderErr = "* gender must be checked";
            }
						else {

								$gender = $_POST['gender'];

						}

            //password validation
            if(empty($_POST["pass"]))
						{
                $passErr = "* password is required";

            }
						else if(strlen($_POST["pass"])<3)
						{
							  $passErr = "* password must be three characters long";
						}
						else if(empty($_POST["cPass"]))
						{
							$cPassErr = "Confirm password cannot be empty";
						}
						else if($_POST["pass"] != $_POST["cPass"]){
                $cPassErr = "* password doesnot match";

            }
						else
						{
							$password = $_POST['pass'];
						}

  //   }
	//
	//
	//
	//
	//
	//  if(isset($_POST['submit'])){
	// 	$name =$_POST['name'];
	// 	$email = $_POST['email'];
	// 	$username = $_POST['username'];
	// 	$password = $_POST['pass'];
	// 	//$cPass = $_POST['cPass'];
	// //	$gender = $_POST['gender'];
	// 	$dob = $_POST['dob'];


		if($name != null && $email != null && $username != null && $password != null && $gender != null && $dob !=null){
    //  echo "hi";
			$status = signup($name,$username,$email, $password, $gender, $dob);


			if($status){
				//echo $status;
				echo "successfull";
				header('location: ../view/jsLogin.php');
			}else{
				echo "not valid";
				header('location: ../view/reg.php');
			}

		}
	}
?>
