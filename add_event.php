<?php
include 'mysql.php'; 
include 'user_controller.php';
$res = "";
$obj = new Admin;

if(isset($_POST['submit']))
{
	$args = array(
		
		'event_name'      => $_POST['event_name'],
		'start_date'  => $_POST['start_date'],
		'end_date'  => $_POST['end_date'],
		'recurrence_every'  => $_POST['recurrence_every'],
		'recurrence_calendar'  => $_POST['recurrence_calendar'],
		

	);

	$res=  $obj->Add_event($args);

}



?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add </title>
	<meta charset="UTF-8">
</head>
<body>
	<form method="post">
		<h1>Add Event</h1>
		<table>

			<tr>
				<td>
					<label>Event title</label>
				</td>
				<td>
					<input type="text" name="event_name">
				</td>
			</tr>

			<tr>
				<td>
					<label>Start Date</label>
				</td>
				<td>
					<input type="date" name="start_date">
				</td>
			</tr>
			<tr>
				<td>
					<label>End Date</label>
				</td>
				<td>
					<input type="date" name="end_date">
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
</body>
</html>
