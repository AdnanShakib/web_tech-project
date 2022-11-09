<?php
//session_start();
include "../controller/forgotPasswordCheck.php" ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forgot Password</title>
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

    <form action="" method="post">
      <center>
      <table border="0">
        <tr>
          <td><label>Type Id to know username:</label></td>
          <td><input type="text" name="id"><span style="color : red;"> <?php echo $idErr; ?></span> <br></td>
          <td><td><input type="submit" name="idSubmit"></td></td>
        </tr>
      </table>
  </center>
    </form>
    <table>
      <tr>
        <td><?php echo 'Username :'.$userName;?></td>
      </tr>
    </table>
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
