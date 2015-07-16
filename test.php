<html>

<body>

 
<?php
$cusname=$_POST['cname'];
$mailid=$_POST['email'];
$mobilenum=$_POST['msisdn'];
$mesage=$_POST['message'];

$con = mysql_connect("eparipalanadb.cqcjs9c9bd9b.ap-southeast-1.rds.amazonaws.com","seshadri","murugaa8");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("eparipalanadb", $con);

 

$sql="INSERT INTO OTPValidation (customerName, customerEmail, customerPhoneNo, purposeStatement, otp, status)
VALUES ('$cusname','$mailid','$mobilenum','$mesage', '55555', 'pending')";
 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>
