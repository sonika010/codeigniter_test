<?php

include 'mysql.php';
include 'user_controller.php';
$obj = new Admin;
$a = $obj->Event_listing();


if (isset($_GET['id'])) {
    $id	= $_GET['id'];
    

 $result = $obj->fetch_single_event($id);
 $obj->Delete_event($id);
 
 


//print_r($result);
}

?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Event List Page
</h2>

<table>
	<a href="add_event.php">Add New Event</a>
  <tr>
    <th>Title</th>
    <th>Start_date</th>
     <th>End_date</th>
    <th>Reccurance1</th>
    <th>Reccurance2</th>
    <th>Action</th>
  </tr>
  <tr>
   <?php echo $a;?>
  </tr>
 
</table>

</body>
</html>

