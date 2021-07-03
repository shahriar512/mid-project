
<?php 
	session_start();
	$userId = isset($_SESSION['uid']) ? $_SESSION['uid'] : ""; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<center> <h1> ONLINE BUS MANAGEMENT SYSTEM  </h1></center>
	<title> Home Page </title>
</head>
<body>
        <fieldset>
	       
                               
	<h1>Welcome, <?php echo $userId; ?></h1>

	<p>     <a href="dashboard.php"<span style="color: green;">  Dashboard </a></p>
		 
	<p>  <a href ="cityselection.php"<span style="color: green;">city selection</a><p>

	    <p>  <a href ="Busselection.php"<span style="color: green;">Bus selection</a><p>   
	    	<p>  <a href ="Payment.php"<span style="color: green;">Payment</a><p> 
			    
		 	
			
			  

		      
			<a href="package.php" > <span style="color: green;">Packages</span>: </a>
			<option></option>


			
			<a href="customerfeedback.php" > <span style="color: green ;">Customer Feedback</span>: </a><br>
			
			
            <p> <a href="login.php"><span style="color:red ;">Logout</a></p>
			
			</fieldset>

</body>
</html>

