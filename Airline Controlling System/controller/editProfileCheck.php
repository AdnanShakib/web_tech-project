<?php
//	session_start();
	require("../model/userModel.php") ;

  //$name = $_SESSION['name'];
  //$dob = $_SESSION['dob'];

    $name = $dob= $username = $email = $password = $gender = "";
    $unameErr = $emailErr = $genderErr =  "";


    if(isset($_POST["submit"])){


            //name validation


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
						else {
							$email = $_POST['email'];
						}

            //gender validation
            if(empty($_POST["gender"]))
						{
                $genderErr = "* gender must be checked";
            }
						else {

								$gender = $_POST['gender'];
							}



		if($email != null && $username != null  && $gender != null){
			$id = $_SESSION['id'];
    //  echo "hi";
			$status = updateInfo($id,$email,$username,$gender);
      //echo $status;

			if($status){
				//echo $status;
				$info = userdata($id);
			  if($info)
			  {
			    //$_SESSION['name'] = $info['NAME'];
			    $_SESSION['Username'] = $info['USERNAME'];
			    $_SESSION['Email'] = $info['EMAIL'];
			    $_SESSION['Gender'] = $info['GENDER'];
			   // $_SESSION['dob'] = $info['DOB'];
			  }
				header('location: ../view/homePage.php');
			}
}
		}

?>
