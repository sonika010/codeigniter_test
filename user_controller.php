<?php

class Admin
{

    public $db;

    public function __construct()
    {
        global $obj;
        $this->db = $obj;
    }

    //============================================== ======================================================================================

    // add category

    public function Add_event($args)
    {
        if(strtotime($args[start_date]) < strtotime($args[end_date])) {
                    $qry = "INSERT INTO events(event_name,start_date,end_date,recurrence_every,recurrence_calendar)VALUES('$args[event_name]','$args[start_date]','$args[end_date]','$args[recurrence_every]','$args[recurrence_calendar]')";
        
        $data = $this->db->query_execute($qry);
        if ($data == true) {

            echo "<script>alert('Record inserted successfully');</script>";
            // Code for redirection
            echo "<script>window.location.href='event_list.php'</script>";
        }

        return $data;

        } else {
            echo "<script>alert('start date should be less then end date');</script>";
            // Code for redirection
            echo "<script>window.location.href='add_event.php'</script>";

        }


         
    }

    //====================================================================================================================================
    // add product

    //====================================================================================================================================
    // product listing admin page

    public function Event_listing()
    {

        $qry = "SELECT * FROM events";
        $html = '';
        $data = $this->db->select_query_execute($qry);
        foreach ($data as $value) {
            $html .= ('<tr>');
            $html .= '<td>' . $value['event_name'] . '</td>';
            $html .= '<td>' . $value['start_date'] . '</td>';
            $html .= '<td>' . $value['end_date'] . '</td>';
            $html .= '<td>' . $value['recurrence_every'] . '</td>';
           $html .= '<td>' . $value['recurrence_calendar'] . '</td>';
            $html .= ('<td><a href="edit_event.php?id=' . $value['id'] . ' "><button type="button" class="btn btn-info" name="edit" >Edit</button></a></td>');
            $html .= ('<td><a href="event_list.php?id=' . $value['id'] . '"><button type="button" class="btn btn-danger" name="delete" >REMOVE</button></a></td>');
            $html .= ('<td><a href="event_view.php?id=' . $value['id'] . '"><button type="button" class="btn btn-danger" name="delete" >View</button></a></td>');


         

            $html .= ('</tr>');

        }return $html;
    }
    //============================================================================================================================

     //====================================================================================================================================
    // product listing admin page

    public function Event_day($id)
    {

       $qry = "SELECT * FROM events WHERE id='$id'";
        $html = '';
        $data = $this->db->select_query_execute($qry);
        
// Your code here!
          $start_date = $data['start_date'];
           $end_date = $data['end_date'];
           $ar = [];


while (strtotime($start_date) <= strtotime($end_date)) {
    $timestamp = strtotime($start_date);
    $day = date('D', $timestamp);
    array_push($ar, array('day'=> $day, 'new_start_date'=>$start_date));
    $start_date = date ("Y-m-d", strtotime("+1 days", strtotime($start_date)));
}
        foreach ($ar as $value) {
            $html .= ('<tr>');
            $html .= '<td>' . $value['day'] . '</td>';
            $html .= '<td>' . $value['new_start_date'] . '</td>';



         

            $html .= ('</tr>');

        }return $html;
    }
    //============================================================================================================================
    // fetch single record

     public function fetch_single_event($id)
    {

        $qry = "SELECT * FROM events WHERE id='$id'";
        $data = $this->db->select_query_execute($qry);
        $start_date = $data['start_date'];
           $end_date = $data['end_date'];
        $ar= [];
        while (strtotime($start_date) <= strtotime($end_date)) {
    $timestamp = strtotime($start_date);
    $day = date('D', $timestamp);
    array_push($ar, array('day'=> $day, 'new_start_date'=>$start_date));
    $start_date = date ("Y-m-d", strtotime("+1 days", strtotime($start_date)));
}
      $data['count'] = count($ar);
        return $data;

    }
    //============================================================================================================================
    // fetch single record
//====================================================================================================

    //update product

    public function update_event($args)
    {
        $msg = "";
        $qry = "UPDATE `events` SET `event_name`= '$args[event_name]',`start_date`= '$args[start_date]',`end_date`= '$args[end_date]',`recurrence_every`= '$args[recurrence_every]',`recurrence_calendar`= '$args[recurrence_calendar]' WHERE `id` = '$args[id]'";


        $data = $this->db->query_execute($qry);

        if ($data == true) {

            echo "<script>alert('Record Updated successfully');</script>";
            // Code for redirection
            echo "<script>window.location.href='event_list.php'</script>";
        }

        return $data;
    }

    // ====================================================================================================

    //delete record
    public function Delete_event($id)
    {

        $qry = "DELETE FROM events WHERE `id` = '$id'";
        $data = $this->db->query_execute($qry);
        if ($data == true) {

            echo "<script>alert('Record Deleted successfully');</script>";
            // Code for redirection
            echo "<script>window.location.href='event_list.php'</script>";
        }

        return $data;
    }
   // ====================================================================================================

    

    // ====================================================================================================

   

}
