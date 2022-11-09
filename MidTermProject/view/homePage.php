<?php
session_start();

//session_destroy();

 ?>
 <html>
 <head>
 	<title>Home Page</title>
  <link rel="stylesheet" href="../css/mix.css">
 </head>
 <body>

 	<!-- Menu -->
  <div class="header">


  <table border="0" width="100%" height="100px">
    <tr>
      <td align="left">
        <img src="../images/airline.jpg" width="100px" height="100px">
      </td>
      <td align="left"> <h1 style="color:Red">MSTS Airlines</h1></td>
      <td align="right">
        <h3 class="pos">
          <a href="../controller/logout.php"> Logout </a>
        </h3>
      </td>
    </tr>
  </table>
  </div>
 	<hr>
  <div style = "background-color: tomato" class="welcome">

  <center style="color:white">
    <h2><?php echo "Welcome ".$_SESSION["username"]; ?></h2>
  </center>
</div>

 <!-- Content -->
 	<table border="0" width="100%" height="500px">
    <tr>
      <td align="center">
        <h2 style="font-size: 30px; color: green;">Dashboard</h2>
      </td>
    </tr>
 		<tr>
 			<td align="center" width="20%" >


 				<table border="1"  width="100%" >

 					<tr>
            <td class = "glow" align="center" height="50px">
 							<a href="viewProfile.php">View Profile</a>
 						</td>
            <td class = "glow" align="center" height="50px">
              <a href="editProfile.php">Edit Profile</a>
            </td>
            <td class = "glow" align="center" height="50px">
              <a href="changePassword.php">Change Password</a>
            </td>

 					</tr>
 					<tr>
 						<td class = "glow" align="center" height="50px">
 							<a href="workingTimeSchedule.php">Working Time Schedule</a>
 						</td>
            <td class = "glow" align="center" height="50px">
              <a href="changeSchedule.php">Change Schedule</a>
            </td>
            <td class = "glow" align="center" height="50px">
 							<a href="deleteid.php">Delete Profile</a>
 						</td>
 					</tr>
          <tr>
 						<td class = "glow" align="center" height="50px">
 							<a href="workingTimeSchedule.php">Upcoming Meeting Schedule</a>
 						</td>
            <td class = "glow" align="center" height="50px">
 							<a href="fileComplaint.php">File Complaint</a>
 						</td>
            <td class = "glow" align="center" height="50px">
              <a href="submitFlightReport.php">Submit Flight Report</a>
            </td>
 					</tr>
          <tr>
 						<td class = "glow" align="center" height="50px">
 							<a href="leaveApplication.php">Leave Application</a>
 						</td>
 					</tr>
 				</table>
 			</td>
 		</tr>
 	</table>

 <!-- Footer -->
 	<hr>
  <div class="header">

 	<table border="0" width="100%" height="50px">
 		<tr>
 			<td colspan="2" align="center">
 				Copyright ~ Web Technology, Section: A, Group: 3
 			</td>
 		</tr>
 	</table>
  </div>

 </body>
 </html>
