<?php
//session_start();
include "../controller/loginCheck.php" ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LogIn</title>
  </head>
  <body>
    <table border="0" width="100%" height="100px">
      <tr>
        <td align="left">
          <img src="../images/airline.jpg" width="100px" height="100px">
        </td>
       <!-- <td align="left"> <h1 style="color:Red">MSTS Airlines</h1></td> -->
       <td><a href="../index.php"><h1 style="color:Red">MSTS Airlines</h1></a> </td>
      </tr>
    </table>
    <hr>

    <form id = "form" action="" method="post">
      <center>
      <table border="0">
        <tr>
          <td><h2>Login</h2> </td>
        </tr>
        <tr>
          <td><label>User Id</label></td>
          <td><input type="text" name="userid" id="userid" placeholder="user id"><span style="color : red;"> <?php echo $uidErr; ?></span> <br> <br></td>
        </tr>
        <tr>
          <td><label>Password</label></td>
          <td><input type="password" name="password" id = "password" placeholder="password"><span style ="color : red;"> <?php echo $passwordErr ?></span><br> <br></td>
        </tr>
        <tr>
          <td><input type="checkbox" id="remember" name="remember" value=""> Remember me </td>
          <td><a href="forgotPassword.php">Forgot Password or username?</a> </td>

        </tr>
        <tr>
          <td></td>
          <td><a href="reg.php">or don't have an account?</a> </td>  <br>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
      </table>
  </center>
    </form>
    <hr>
   	<table border="0" width="100%" height="50px">
   		<tr>
   			<td colspan="2" align="center">
   				Copyright ~ Web Technology, Section: A, Group: 3
   			</td>
   		</tr>
   	</table>
  </body>
  </html>
