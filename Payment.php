<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> ONLINE BUS MANAGEMENT SYSTEM  </title>
</head>
<body>
         <h1> Payment</h1>
		 <br>
		 
            <a href="home_page.php" ><span style="color: green ;">   Home </span>: </a> <br>
			
			
	</body>
	
	</html>
	
	
	
	


<?php
   
	$to="";
	$err_to="";
	$amount="";
	$err_amount="";
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	//if(isset($_POST["submit"])){
		if(empty($_POST["to"])){
			$err_to="*mobile no can not empty";
		}
		elseif(strlen($_POST["to"]) < 11){
			$err_uname="mobile  Must be 11 Characters Long";
		}
		
		else{
			$uname=$_POST["to"];
		}
		
	   
		if(empty($_POST["amount"])){
			$err_amount="*amount can not emply ";
		}
		else{
			$amount=$_POST["pass"];
		}
	

   
	}
	
	
	
		
?>





<body>
 <div class="center-login"><h3> Payment : </h3>
   <form action="" method="Post">
   
         <label for="value ">   Select Category :</label>
		              <select id="value">
			          <option value="bkash">Bkash</option>
			          <option value="Roket">Roket</option>
			          <option value="nogod">nogod</option>
			         
					   
		               </select>
           <br><br>
        
		 
		 
		 Amount :<input type="number" name="pass " pattern ="[1>0]">
		 <span style="color: red;"><?php echo $err_amount; ?></span> <br>
		 
		 <input type="submit" name="submit" value="submit">
        
                
   </form>

</body>




</html>
		