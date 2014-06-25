<!--file simplePHPLoginPage.php -->

<HTML XMLns="http://www.w3.org/1999/xHTML">
 
  <head>
 
    <title>Cabs Online</title>
 
  </head> 

  <body>

  <H1>Login in to CabsOnline</H1>

  <form>
        <p> Please fill the fields below to complete your registeration.</p>
        <table>
      		 <tr>	<td>	Email: </td> <td> <input type="text" name="email">  </td>   </tr>
         	 <tr>	<td>	Password: </td>  <td> <input type="text" name="pwd">  </td>  </tr>
               	 <tr>	<td>  <input type="submit" value="Login" /> </td> </tr>        	
        </table>
  </form>
  
  <p> <b>New member? </b> <a href='register.php'>Register now</a> </p>
  </body> 

<?php 
	if(isset($_GET['email']) && isset($_GET['pwd']))
	{
	
	$email = ($_GET['email']);
	$password = ($_GET['pwd']);

	// make a sql connection
	$DBConnect = @mysqli_connect("mysql.ict.swin.edu.au", "s1784757","181086", "s1784757_db")
	 Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". mysqli_connect_errno().": ". mysqli_connect_error()). "</p>";

	$SQLstring = "SELECT COUNT(*) FROM CUSTOMER WHERE EMAIL = '$email'  AND PASSWORD = '$password' ";        
	
	$queryResult = @mysqli_query($DBConnect, $SQLstring)
			Or die("<p>Unable to login.</p>"."<p>Error code ". mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect)). "</p>";
	

	$row = mysqli_fetch_row($queryResult);
	$VARI = $row[0];

	if($VARI > 0)
 	{
	echo "<p>Successfully logged in !</p>";
	//ECHO COUNT($row);
	}
        else
	{
	echo "<p> Please enter correct email and password! </p> ";
	}

	mysqli_close($DBConnect);

	}
?>

</HTML>