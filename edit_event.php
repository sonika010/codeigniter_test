 <?php
 include 'mysql.php'; 
 include 'user_controller.php';

 $msg ="";

 $obj = new Admin();

 if (isset($_GET)) {
 	$id = $_GET['id'];
    // print_r($id);
	  //$a = $_GET['category'];

 	$result = $obj->fetch_single_event($id);



 	if(isset($_POST['submit']))
 	{
 		
 		$args = array(
 			'id'        =>  $id,
 			'event_name'      => $_POST['event_name'],
 			'start_date'  => $_POST['start_date'],
 			'end_date'  => $_POST['end_date'],
 			'recurrence_every'  => $_POST['recurrence_every'],
 			'recurrence_calendar'  => $_POST['recurrence_calendar'],
 			

 		);

    // $obj->Insert_details($args);
 		$res=  $obj->update_event($args);

 	}
 }

 ?> 

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title></title>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<!--===============================================================================================-->	
 	<!--<link rel="icon" type="image/png" href="images/icons/favicon.png"/>-->
 	<!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
 	<!--===============================================================================================-->
 	<!--<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">-->
 	<!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
 	<!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
 	<link rel="stylesheet" type="text/css" href="css/util.css">
 	<link rel="stylesheet" type="text/css" href="css/main.css">
 	<!--===============================================================================================-->
 </head>
 <form method="post">
 	<h1>Edit Event</h1>
 	<input type="hidden" name="id" value="<?php echo $id;  ?>">
 	<table>

 		<tr>
 			<td>
 				<label>Event title</label>
 			</td>
 			<td>
 				<input type="text" name="event_name" value="<?php echo $result['event_name'];?>">
 			</td>
 		</tr>

 		<tr>
 			<td>
 				<label>Start Date</label>
 			</td>
 			<td>
 				<input type="date" name="start_date" value="<?php echo $result['start_date'];?>">
 			</td>
 		</tr>
 		<tr>
 			<td>
 				<label>End Date</label>
 			</td>
 			<td>
 				<input type="date" name="end_date" value="<?php echo $result['end_date'];?>">
 			</td>
 		</tr>

 		<tr>
 			<td>
 				<label>Reccurance</label>
 			</td>
 			<td>
 				<select name="recurrence_every"> 
 					<option name="every_other" value="every_other">every_other</option>
 					<option name="every_other" value="every_third">every_third</option>
 					<option name="every_other" value="every_fourth">every_fourth</option>
 				</select>

 				<select name="recurrence_calendar"> 
 					<option name="every_week" value="day">Day</option>
 					<option name="every_week" value="week">week</option>
 					<option name="every_week" value="month">month</option>
 					<option name="every_week" value="year">year</option>
 				</select>
 			</td>
 		</tr>
 		<tr>
 			<td>
 				<input type="submit" name="submit">
 			</td>
 		</tr>
 	</table>
 </form>
 

 <!--===============================================================================================-->	
 <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
 <!--===============================================================================================-->
 <script src="vendor/animsition/js/animsition.min.js"></script>
 <!--===============================================================================================-->
 <script src="vendor/bootstrap/js/popper.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
 <!--===============================================================================================-->
 <script>
 	$(".js-select2").each(function(){
 		$(this).select2({
 			minimumResultsForSearch: 20,
 			dropdownParent: $(this).next('.dropDownSelect2')
 		});
 	})
 </script>



</body>
</html>
