
<?php
$x= $_POST['firstname'];
$y= $_POST['lastname'];
$z= $_POST['studentid'];
$a= $_POST['gender'];
$b= $_POST['dob'];
$c= $_POST['roomnumber'];
$d= $_POST['nationality'];
$e= $_POST['homeaddress'];
$f= $_POST['emailaddress'];
$g= $_POST['major'];
$h= $_POST['yearofstudy'];
$i= $_POST['degree'];
$servername= "localhost";
$username="root";
$password="";
$dbname="elrdatabase";


//Create connection
$conn= new mysqli($servername, $username, $password , $dbname);

//Check connection
if($conn-> connect_error){
	die("Connection failed" . $conn->connect_error);
}

echo "Connection succesfull";

$sql= "INSERT INTO user (StudentID, FirstName,LastName, Gender , DOB , RoomNumber , Nationality, HomeAddress, Email, Major,  YearOfStudy, DegreeLevel) 
		VALUES('$z','$x','$y', '$a', '$b','$c','$d','$e','$f','$g','$h','$i')";

if($conn->query($sql) === TRUE){
	echo"New record successfully added";
}else{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

$sql= "SELECT StudentID, FirstName,LastName, Gender , DOB , RoomNumber , HomeAddress, Email, Major,  YearOfStudy, DegreeLevel FROM user";
$result= $conn->query($sql);

if($result->num_rows > 0){
	//output data in rows
	//var_dump($result->fetch_assoc());exit;
echo "<table>";
	while ($row = $result->fetch_assoc()){
		echo"<tr><td> StudentID:"  .  $row["StudentID"] . 
		"</td><td> FirstName:"     ." " .$row["FirstName"] . 
		"</td><td> LastName:"      ." " .$row["lastname"].
		"</td><td> Gender:"      ." " .$row["Gender"].
		"</td><td> DOB:"      ." " .$row["DOB"].
		"</td><td> RoomNumber:"      ." " .$row["RoomNumber"].
		"</td><td> Nationality:"      ." " .$row["Nationality"].
		"</td><td> HomeAddress:"      ." " .$row["HomeAddress"].
		"</td><td> Email:"      ." " .$row["Email"].
		"</td><td> Major:"      ." " .$row["Major"].
		"</td><td> YearOfStudy:"      ." " .$row["YearOfStudy"].
		"</td><td> DegreeLevel:" . "" . $row["DegreeLevel"] . "</td></tr>";
	}
echo "</table>";

}else{
	echo "0 result";
}
$conn->close();

?>


