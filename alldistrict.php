<?php
    // Capture selected country
	
    //$country = $_POST["country"];
    
$servername = "eparipalanadb.cqcjs9c9bd9b.ap-southeast-1.rds.amazonaws.com";
$username = "seshadri";
$password = "murugaa8";
$dbname = "eparipalanadb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 

$sql="SELECT * FROM Location";
 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	


    while($row = $result->fetch_assoc()) {
		
echo "<label><input type='checkbox' onclick='getNext()' name='district[]'>&nbsp;&nbsp;" . $row['district'] . "</label><br/>";
		
       // echo "id: " . $row["customer_id"]. " - Name: " . $row["cname"]. " " . $row["email"]. "e-mail: " . $row["email"]. "<br>";
    }
	

} else {
    echo "0 results";
}
$conn->close();

	 
	 
    // Define country and city array
   
?>







