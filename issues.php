<?php
$x= $_POST['studentid'];
$y= $_POST['firstname'];
$z= $_POST['lastname'];
$a= $_POST['email'];
$b= $_POST['issue'];
$c= $_POST['roomnumber'];



$servername= getenv('IP');
$username=getenv('C9_USER');
$password="";
$database = "elrdatabase2";
$dbport = 3306;


//Create connection
$conn= new mysqli($servername, $username, $password , $database, $dbport);

//Check connection
if($conn-> connect_error){
	die("Connection failed" . $conn->connect_error);
}

echo "Connection succesfull";

$sql= "INSERT INTO issues (studentid, firstname ,lastname , email , issue , roomnumber) 
		VALUES('$x','$y','$z', '$a', '$b','$c')";

if($conn->query($sql) === TRUE){
	echo"New record successfully added";
}else{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

$sql= "SELECT studentid, firstname ,lastname , email , issue , roomnumber FROM issues";
$result= $conn->query($sql);

if($result->num_rows > 0){
	//output data in rows
	//var_dump($result->fetch_assoc());exit;
echo "<table>";
	while ($row = $result->fetch_assoc()){
		echo"<tr><td> StudentID:"  .  $row["studentid"] . 
		"</td><td> FirstName:"     ." " .$row["firstname"] . 
		"</td><td> LastName:"      ." " .$row["lastname"].
		"</td><td> Email:"      ." " .$row["email"].
		"</td><td> Issue:"      ." " .$row["issues"].
		"</td><td> RoomNumber:" . "" . $row["roomnumber"] . "</td></tr>";
	}
echo "</table>";

}else{
	echo "0 result";
}
$conn->close();

?>