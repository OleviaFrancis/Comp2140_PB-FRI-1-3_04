<?php

$x= $_POST['studentid'];
$y= $_POST['firstname'];
$z= $_POST['lastname'];

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


$sql= "SELECT studentid , firstname , lastname , roomnumber FROM user";
$result= $conn->query($sql);

if($result->num_rows > 0){
	//output data in rows
	//var_dump($result->fetch_assoc());exit;
echo "<table>";
	while ($row = $result->fetch_assoc()){
		echo"<tr><td> StudentID:"  .  $row["studentid"] . 
		"</td><td> Firstname:"     ." " .$row["firstname"] . 
		"</td><td> LastName:"      ." " .$row["lastname"].
		"</td><td> RooNumber:"      ." " .$row["roomnumber"]. "</td></tr>";
	}
echo "</table>";

}else{
	echo "0 result";
}
$conn->close();

?>
