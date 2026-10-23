<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webtech";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	$sql="SELECT * from workSchedule";
	$result=$conn->query($sql);
	$output='<table border="1" width=100%><tr><th>Flight_ID</th><th>From</th><th>To</th><th>Date</th><th>Time</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr><td>{$row["flight_id"]}</td><td>{$row["fl_from"]}</td><td>{$row["fl_to"]}</td><td>{$row["Date"]}</td><td>{$row["Time"]}</td></tr>";
		}
		$output.='</table>';
	}
	else
		echo "O results";


}
$conn->close();
echo $output;
?>
