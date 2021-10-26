<?php
 ini_set('display_errors',1);

class Mysql{
  
	public $conn;
    public $host = 'localhost';
    public $user = 'root';
    public $password = '';
    public $db = 'tatva_test';
    var $qry, $result;

    public function __construct(){
       session_start();
      
    	$this->conn = mysqli_connect($this->host,$this->user,$this->password,$this->db) or die(mysqli_error($this->conn));

       }
   
   // ===================================================================================================================================================
       // Execute all query


    public function query_execute($qry){
                $this->qry = $qry;
                $this->result = mysqli_query($this->conn,$this->qry);
                return $this->result;
       }

     //=============================================================================================================================================================
    public function last_insert_id($qry){
                $this->qry = $qry;
                $this->result = mysqli_query($this->conn,$this->qry);
                $this->count  = mysqli_insert_id($this->conn);
        
                return $this->count;
       }

// =====================================================


  // select query with count
 

       public function select_count($qry){
           $this->qry    = $qry;
           $this->result = mysqli_query($this->conn,$this->qry) or die (mysqli_error($this->conn));
           $this->count  = mysqli_num_rows($this->result);
           return $this->count;
           //print_r($this->count);
   
       }
// // ======================================================================================================================================================
         public function single_row_fetch($qry){

           $this->qry    = $qry;
           $this->result = mysqli_query($this->conn,$this->qry) or die (mysqli_error($this->conn));
           $this->res  = mysqli_fetch_assoc($this->result);
           return $this->res;
           //print_r($this->count);
   
       }
  // ===================================================================================================================================
      
      //select query with associate array, array ,object
 

       public function select_query_execute($qry)
        {
      
            $this->qry   = $qry;
            $this->result  = mysqli_query($this->conn,$this->qry);
            // print_r($this->result);die;
            $count= mysqli_num_rows($this->result);
           
            if($count > 1)
            {
              while($arr_data= mysqli_fetch_assoc($this->result))
              {
                   $row[]= $arr_data ;
                  
              }

            }else{ 
            	$row = mysqli_fetch_assoc($this->result);
            
             }

           return $row; 
              
          
       } 

//         ======================================================================================================================================
      
      //update query with affected row

      // public function update_query_execute($qry)
      //  {
      // 	  $this->qry    = $qry;
      //     $this->result = mysqli_query($this->conn,$this->qry);
      //     return $this->result;

      //  }



   // ======================================================================================================================================================
      
      //delete query with affected row

      public function delete_query_execute($qry)
       {
      	  $this->qry    = $qry;
          $this->result = mysqli_query($this->conn,$this->qry) or die (mysqli_error($this->conn));
          $this->row  = mysqli_affected_rows($this->result);
          return $this->row;

       }
       public function User_info($qry)
       {
          $this->qry    = $qry;
          print_r($this->qry);die;
          $this->result = mysqli_query($this->conn,$this->qry);
          print_r($this->result);die;

          // $this->row  = mysqli_affected_rows($this->result);
          // return $this->row;

       }

 //==========================================================================================================================================
       //connection close

       public function connection_close($conn)
       {
       	mysqli_close($this->conn);
       }

      //===============================================================================================================================
    
      
}

 $obj = new Mysql;
 //  $qry = "SELECT * FROM product";
 //  $a= $obj->select_query_execute($qry);
 // print_r($a);


