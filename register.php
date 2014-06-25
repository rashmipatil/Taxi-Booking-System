<!--file simpleRegisterationPHPpage.php -->

<HTML XMLns="http://www.w3.org/1999/xHTML">
 
  <head> 

    <title>Cabs Online</title> 

  </head> 

  <body>

  <H1>Register to CabsOnline</H1>

  <form>
            <!--form that collects registeration details from users-->

        <p> Please fill the fields below to complete your registeration.</p>

        <table>
       		 
        	 <tr>	<td>	Name:   </td> <td> <input type="text" name="name"> </td>   </tr>
		 <tr>	<td>	Password: </td> <td> <input type="text" name="pwd">  </td>   </tr>
 		 <tr>	<td>	Confirm Password: </td> <td> <input type="text" name="confirmpwd"> </td> </tr>
        	 <tr>	<td>	Email: </td>  <td> <input type="text" name="email">  </td>  </tr>
        	 <tr>	<td>	Phone: </td>  <td> <input type="text" name="phone">  </td>  </tr>
        	 <tr>	<td>  <input type="submit" value="Register" /> </td> </tr>
        	
        </table>

	 <p> <b>Already Registered? </b> <a href='login.php'>Login here</a> </p>
  </body> 

  </form>
  
 

<?php 

	 // make a sql connection
	$DBConnect = @mysqli_connect("mysql.ict.swin.edu.au", "s1784757","181086", "s1784757_db")
	 Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". mysqli_connect_errno().": ". mysqli_connect_error()). "</p>";

	// get password,email passed from client
	if(isset($_GET['name']) && isset($_GET['pwd']) && isset($_GET['confirmpwd']) && isset($_GET['email']) && isset($_GET['phone']))	
	{
		//DOUBLE CHECK PASSWORD AND CONFIRM PASSWORD

		if( $_GET['pwd'] == $_GET['confirmpwd'] )
		{
                  
		$SQLstring = "insert into CUSTOMER(CUSTOMERNAME,PASSWORD,EMAIL,PHONE) values ('".$_GET['name']."','".$_GET['pwd']."','".$_GET['email']."','".$_GET['phone']."');";
		$queryResult = @mysqli_query($DBConnect, $SQLstring)
			Or die ("<p>Unable to insert data into the CUSTOMER table.</p>"."<p>Error code ". mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect)). "</p>";
			echo "<p>Successfully registered the user !</p>";
		}
           else
		{
                    echo("Password and confirm password should be same");
		}
			                            
	}
	        
       mysqli_close($DBConnect);


?>

</HTML>