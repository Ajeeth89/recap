<!DOCTYPE html>
<html>
<head>
	<title>Login | eParipalana</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		 <nav class="navbar navbar-default navbar-fixed-top" style="position:absolute">
      <div class="container">
        <div class="navbar-header">
          <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
        </div>
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        <div id="navbar">
          <ul class="nav navbar-nav">
          <li  ><a href="index.html">Home</a></li>
            <li><a href="work.html">Work</a></li>
            <li><a href="brand.html">Brand</a></li>
          <li ><a href="activity.html">Activity</a></li>
          <li><a href="culture.html">Culture</a></li>
          <li><a href="reach.html">Reach Us</a></li>
          <li ><a href="customer.html">Customer</a></li>
          <li><a href="playstore.html">ePSCenquiry</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="content" style="padding: 10px 10px 10px 10px; margin:298px 150px 10px 54px; position: absolute;">
          <div class="see-button" style="margin-top:0;display:none;">
          <div class="call">
            <img src="images/vidcon.png" style="margin:0 auto;display:block;width:300px;">
          <a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal specialty-button e-button footer-middle wow bounceIn animated" data-wow-delay="0.4s"
         style="margin:15px auto;display:block;width:205px;visibility: visible; -webkit-animation-delay: 0.4s;" href="#" target="_blank" role="button">Call Now</a>
        
        </div>

        
        </div>


        <div class="contact-form" >
          
            <div style="margin:">
               <form name="loginform" action="login_exec.php" method="post">
			   <center>
				<table>
          <tr>
           <td colspan="2">
            <!--the code bellow is used to display the message of the input validation-->
            <?php
              if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
             // echo '<ul class="err">';
              foreach($_SESSION['ERRMSG_ARR'] as $msg) {
              echo '<li>',$msg,'</li>'; 
                }
              echo '</ul>';
              unset($_SESSION['ERRMSG_ARR']);
              }
            ?>
  </td>
  </tr>
					<tr>
						<td style="color:#DC5329;font-family:'Raleway',sans-serif;font-size:16px;font-weight:bold;padding-bottom: 1em;padding-left: 3em;">Admin Dashboard Login</td>
					</tr>
					<tr>						
						<td style="padding-bottom: 0.5em;"><input style="width:250px;" type="text" class="txtVal" id="username" name="username" placeholder="Username"></td>
					</tr>	
					<tr>
						<td style="padding-bottom: 0.5em;"><input style="width:250px;" type="password" class="txtVal" id="password" name="password" placeholder="Password"></td>
					</tr>

					<tr>
					
            <td style="padding-left: 2em;"><br/><input type="submit" style="margin-left: 5em;" class="btnVal" id="sumbitForOTP" name="sumbitForOTP"  onclick="generateOTP()" value="Login"></td>
					</tr>
				</table>
				</center>
        </form>
            </div>
            
        
        </div>             
	</div>
	
    <img src="curlayout.png" style="height:450px;margin-top:160px;width:1100px;">
	</div>
  <div class="container">
    <div style="color:white;">
        <p style="margin-top:-10px;margin-left:158px;"><span style="font-size:12px; letter-spacing:4px;">Recap Ventures Private Ltd., #111, Kuppam Main Road, Kottivakkam, Chennai 600 041. </span></p>
      <p style="margin-top:-12px;margin-left:300px;font-size:12px;letter-spacing:2px;"><span style="font-size:17px; color:rgb(84, 177, 228);">✆</span> +91 44 43201717, <span style="font-size:17px; color:rgb(84, 177, 228);">&#128224;</span> +91 44 43201818, <span style="font-size:17px; color:rgb(84, 177, 228);">&#9993;</span> info@recapventures.in</p>
    </div>
    
  </div>
</body>
</html>
