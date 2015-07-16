<?php
	//require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
<title>eparipalana</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
 
<body>
<a href="exporttoexcel.php">Export</a><br/>
<table  border="1"  align="center"  class="gridtable">

                                                    <thead>
							<th>Sr.No</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone Number</th>
                                                        <th>Purpose Statement</th>
                                                        
                                                    </thead>
                                                    <tr>
                                                        <?php
                                                        include("connection.php");
                                                        $sql = "SELECT * FROM OTPValidation";
                                                        $qry1 = mysql_query($sql);
                                                        if (mysql_num_rows($qry1) > 0) {
                                                               $sno='1';
                                                            while ($row = mysql_fetch_array($qry1)) {
                                                                ?>
                                                                <td><?php  echo $sno; ?></td>
                                                                <td><?php echo $row['customerName']; ?></td>
                                                                <td><?php echo $row['customerEmail']; ?></td>
                                                                <td><?php echo $row['customerPhoneNo']; ?></td>
                                                                <td><?php echo $row['purposeStatement']; ?></td>
                                                                
                                                            </tr>
                                                            <?php
                                                                     $sno=$sno+1;
                                                        }

                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
</body>
</html>
