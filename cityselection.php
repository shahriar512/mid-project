
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <center> <h1> ONLINE BUS MANAGEMENT SYSTEM </h1></center>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <title> Home Page </title>
</head>
<body>
      <a href="home_page.php" ><span style="color: green ;">   Home </span>: </a> <br>
        <fieldset>
           <legend> <h3>  City selection </h3>  </legend>
                               
    

    <label for="city">city:</label>
        <select id="city">
            <option value="Daka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="chittagong">chittagomg</option>
            <option value="khulna">khulna</option>
            <option value="Bogura">Bogura</option>
            <option value="comilla">comilla</option>
            <option value="Dinajpur">Dinajpur</option>
            <option value="Nuakhali">Nuakhali</option>
            <option value="Borishal">Borishal</option>
            <option value="cox'sBaza">cox'sBazar</option>
            <option value="ponchogar">Ponchogar</option>
            <option value="Jamalpur">Jamalpur</option><br><br>
            


            
 

        
            
            <p> <a href="login.php"><span style="color:red ;">Logout</a></p>
                <br>
                 <input type="submit" name="submit" value="submit">
            
            </fieldset>
         

</body>
</html>

