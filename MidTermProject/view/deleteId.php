<?php
 include "../controller/deleteCheck.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete profile</title>
    <link rel="stylesheet" href="../css/mix.css">
  </head>
  <body>
    <div class="header">

    <table border="0" width="100%" height="100px">
      <tr>
        <td align="left">
          <img src="../images/airline.jpg" width="100px" height="100px">
        </td>
       <!-- <td align="left"> <h1 style="color:Red">MSTS Airlines</h1></td> -->
       <td><a href="../index.php"><h1 style="color:Red">MSTS Airlines</h1></a> </td>
       <td align="right">
         <h3 class="pos">
           <a href="../controller/logout.php"> Logout </a>
         </h3>
       </td>
      </tr>
    </table>
    </div>
    <hr>

    <form id = "form" action="" method="post">
      <center>
      <table border="0">
        <tr>
          <td><h2>Type password to delete your account :</h2> </td>
        </tr>
        <tr>
          <td><label>Password</label></td>
          <td><input type="password" name="password" id = "password" placeholder="password"><span style ="color : red;"> <?php echo $passwordErr ?></span> <br></td>

        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Submit"></td>
        </tr>

      </table>
  </center>
    </form>
    <hr>
    <div class="header">
   	<table class="bottom" border="0" width="100%" height="50px">
   		<tr>
   			<td colspan="2" align="center">
   				Copyright ~ Web Technology, Section: A, Group: 3
   			</td>
   		</tr>
   	</table>
    </div>
  </body>
  </html>
