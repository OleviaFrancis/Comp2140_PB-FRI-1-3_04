<?php
$x= $_POST['messageid'];
$y= $_POST['Name'];
$z= $_POST['Email'];
$a= $_POST['phone'];
$b= $_POST['recipient'];
$c= $_POST['message'];



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

$sql= "INSERT INTO Contact (messageid, fullname,email, phonenumber , recipient , message) 
		VALUES('$x','$y','$z', '$a', '$b','$c')";

if($conn->query($sql) === TRUE){
	echo"New record successfully added";
}else{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

$sql= "SELECT messageid, fullname,email, phonenumber , recipient , message FROM Contact";
$result= $conn->query($sql);

if($result->num_rows > 0){
	//output data in rows
	//var_dump($result->fetch_assoc());exit;
	echo "<script>alert('Submission successful');
	document.location='/homepage.html'</script>";
	
echo "<table>";
	while ($row = $result->fetch_assoc()){
		echo"<tr><td> MessageID:"  .  $row["messageid"] . 
		"</td><td> FullName:"     ." " .$row["fullname"] . 
		"</td><td> Email:"      ." " .$row["email"].
		"</td><td> PhoneNumber:"      ." " .$row["phonenumber"].
		"</td><td> Recipient:"      ." " .$row["recipient"].
		"</td><td> Message:" . "" . $row["message"] . "</td></tr>";
	}
echo "</table>";

}else{
	echo "0 result";
}
$conn->close();

?>