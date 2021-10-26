<?php
include 'mysql.php'; 
include 'user_controller.php';


$obj = new Admin();

if (isset($_GET)) {
 $id = $_GET['id'];
 $result = $obj->fetch_single_event($id);
 $res = $obj->Event_day($id);

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
</head>
<body>
    <h1>Event View Page</h1>
    <label>Event name</label>
    <input type="text"  value="<?php echo  $result['event_name']; ?>" readonly="true">
    <br>
    <label>Event Occurrences</label>

    <table>
      <tr>

        <th>Day Name</th>
        <th>Date</th>
    </tr>
    <tr>
       <?php echo $res;?>
   </tr><br>
   <tr>
       <label>Total Recurrence Event:</label>
       <?php echo  $result['count']; ?> 
   </tr>
   </table>



</body>
</html>