<?php  
   class init_models extends CI_Model  
   {  
      function __construct()  
      {  
			 // Call the Model constructor  
			 parent::__construct();  
			 
			 $this->load->database(); 
      }  
	  
	  
      public function getdata()  
      {  
				//$query = $this->db->get_where('username', array('id' => $id));
				$query = $this->db->query("SELECT * FROM tbl_users WHERE id = 1");
				return $query->row_array();
      }

	  
   }  
?>  