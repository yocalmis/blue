<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Help_model extends CI_Model
{
	 function __construct()
     {
         parent::__construct();
         $this->load->database();

		 
     }
	 
	 
	 	 
	 	 	 	 function ayar()
     {
	
	$query =$this->db->query("select * from tkn_mat_options Where id=1");
        if( $query->num_rows() > 0 )
        {
            return $query->result_array();
        }
        else
        {
            return FALSE;
        }
	
	 } 
	 
	 
	 	 
	  	 
		
	 
	  	 function help_bilgi()
     {
	
		$query =$this->db->query("select * from acente_yardim");
        if( $query->num_rows() > 0 )
        {
            return $query->result_array();
        }
        else
        {
            return FALSE;
        }
		
	 } 
	 
	 	 	 	
	 

	 
	
}