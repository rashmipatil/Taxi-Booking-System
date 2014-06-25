<!--file simplePHPBookingPage.php -->

<HTML XMLns="http://www.w3.org/1999/xHTML">
 
  <head> 

    <title>Cabs Online</title> 

  </head> 

  <body>

  <H1>Booking a cab</H1>

  <form>
        <p> Please fill the fields below to book a taxi.</p>
        <table>
      		 <tr>	<td>	Passenger Name: </td> <td> <input type="text" name="pname">  </td>   </tr>
         	 <tr>	<td>	Contact phone of the passenger: </td>  <td> <input type="text" name="phone">  </td>  </tr>
                 <tr>	<td>	Pick up address: </td> </tr>
 		 <tr>	<td>	Unit number: </td>  <td> <input type="text" name="unitnum">  </td>  </tr>
		 <tr>	<td>	Street number: </td>  <td> <input type="text" name="streetnum">  </td>  </tr>
		 <tr>	<td>	Street name: </td>  <td> <input type="text" name="streetname">  </td>  </tr>
		 <tr>	<td>	Suburb: </td>  <td> <input type="text" name="sub">  </td>  </tr>
		 <tr>	<td>	Destination Suburb: </td>  <td> <input type="text" name="dest">  </td>  </tr>
 		 <tr>	<td>	Pick up date: </td>  <td> <input type="text" name="date">  </td>  </tr>
		 <tr>	<td>	Pick up time: </td>  <td> <input type="text" name="time">  </td>  </tr>
               	 <tr>	<td>  <input type="submit" value="Book" /> </td> </tr>        	
        </table>
  </form>
  </body> 

<?php 
	// get details from client
	if(isset($_GET['pname']) && isset($_GET['phone']) && isset($_GET['dest']) && isset($_GET['date']) && isset($_GET['time']))
	{
		$name = $_GET['pname'];
		$phone = $_GET['phone'];
                $unitnumber = $_GET['unitnum'];
		$streetnumber = $_GET['streetnum'];
		$streetname = $_GET['streetname'];
		$suburb = $_GET['sub'];
		$destsuburb = $_GET['dest'];
		$dateget = $_GET['date'];
		$timeget = $_GET['time'];                             
                
	}
?>

</HTML>