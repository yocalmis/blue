<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model
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
	 
	 
		 	 	 	 function ara($word,$sorgu,$bas_t,$bit_t)
     {

	
	$query =$this->db->query("select * from acente_tur Where (adi LIKE '%".$word."%' or aciklama LIKE '%".$word."%' and tam_aciklama LIKE '%".$word."%')".$sorgu);       
        if( $query->num_rows() > 0 )
        {
            return $query->result_array();
        }
        else
        {
            return FALSE;
        }
		
	
	 }  	

	  	 	 	 function kat_getir($kat_id)
     {

	
	$query =$this->db->query("select * from acente_category Where id=".$kat_id."");       
        if( $query->num_rows() > 0 )
        {
            
										foreach ($query->result_array() as $row)
										{
											return $row['adi'];
		  
										}
			
			
        }
        else
        {
            return FALSE;
        }
		
	
	 }
	 
	 
	 
	  	 function fyt($kod)
     {

	
	$query =$this->db->query("select * from acente_tur_detay Where tur_kod=".$kod." order by yetiskin_fiyat asc limit 0 , 1");       
        if( $query->num_rows() > 0 )
        {
            
										foreach ($query->result_array() as $row)
										{
											return $row['yetiskin_fiyat'];
		  
										}
			
			
        }
        else
        {
            return FALSE;
        }
		
	
	 }
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 	 	 function tur_yorum($t_id)
     {
	
	$query =$this->db->query("select * from acente_yorumlar Where tur_id=".$t_id." and durum=1");
        return $query->num_rows();
	
	 } 
	 
	 
	 	 
	 	 	 function tur_puan_guven($kod)
     {
	$total=0;
	$adet=0;
	$query =$this->db->query("select * from acente_puan_guv Where tur_kod='$kod'");
        if( $query->num_rows() > 0 )
        {
         
		        foreach ($query->result_array() as $row)
										{
											$total=$total+$row['puan'];
		                                    $adet=$adet+1;
										}
		 
		 return $total/$adet;
        }
        else
        {
            return FALSE;
        }
	
	 } 
	 
	 
		 	 function tur_puan_org($kod)
     {
	$total=0;
	$adet=0;
	$query =$this->db->query("select * from acente_puan_org Where tur_kod='$kod'");
        if( $query->num_rows() > 0 )
        {
         
		        foreach ($query->result_array() as $row)
										{
											$total=$total+$row['puan'];
		                                    $adet=$adet+1;
										}
		 
		 return $total/$adet;
        }
        else
        {
            return FALSE;
        }
	
	 }  
	 
		 	 function tur_puan_para($kod)
     {
	$total=0;
	$adet=0;
	$query =$this->db->query("select * from acente_puan_para Where tur_kod='$kod'");
        if( $query->num_rows() > 0 )
        {
         
		        foreach ($query->result_array() as $row)
										{
											$total=$total+$row['puan'];
		                                    $adet=$adet+1;
										}
		 
		 return $total/$adet;
        }
        else
        {
            return FALSE;
        }
	
	 }  
	 
	 
	 
	 	 function tur_puan_servis($kod)
     {
	$total=0;
	$adet=0;
	$query =$this->db->query("select * from acente_puan_servis Where tur_kod='$kod'");
        if( $query->num_rows() > 0 )
        {
         
		        foreach ($query->result_array() as $row)
										{
											$total=$total+$row['puan'];
		                                    $adet=$adet+1;
										}
		 
		 return $total/$adet;
        }
        else
        {
            return FALSE;
        }
	
	 } 	 
	 
	 
	 
	 
	 	 	 	 function ara_anakat($word,$sorgu,$bas_t,$bit_t)
     { 


	$query =$this->db->query("select * from acente_one_category Where adi='$word'");       
	return $query->num_rows();


	 } 
	 
	 
		 
	 	 	 	 	 function ara_anakat_kat_getir($word,$sorgu,$bas_t,$bit_t)
     { 


	$query =$this->db->query("select * from acente_one_category Where adi='$word'");       
  if( $query->num_rows() > 0 )
        {
         
		        foreach ($query->result_array() as $row)
										{
											 $id=$row['id'];
		                                    
										}
										
										
	$query2 =$this->db->query("select * from acente_category Where ust_kategori_id=".$id.""); 			
		     if( $query2->num_rows() > 0 )	
			 {
				 $n=0;
			     foreach ($query2->result_array() as $row2)
										{
											 $kat_id[$n]=$row2['id'];
										$n=$n+1;
										}
		 return $kat_id;
			 }

		 
		   else
        {
            return FALSE;
        }


        }
        else
        {
            return FALSE;
        }


	 } 
	 
	 	 	 	 	 	 function ara_anakat_kat_tur_getir($ara_anakat_kat_getir,$sorgu,$bas_t,$bit_t)
     { 
   
      $say=count($ara_anakat_kat_getir);
	  $don=$say-1;
	  $sql="";
	  for($n=0; $n<=$don; $n++){
		  if($n==0){$sql.=  " kat_id=".$ara_anakat_kat_getir[$n];}
		  else{$sql.=  " or kat_id=".$ara_anakat_kat_getir[$n];}
		 
		  
	  }
	  


	   $sql="select * from acente_tur Where (".$sql.") ".$sorgu;
	//	$sql="select * from acente_tur Where ( kat_id=4 or kat_id=5 or kat_id=6 or kat_id=7 or kat_id=8 or kat_id=22) and hizli_giris=1";

	
	$query =$this->db->query($sql);       
	    if( $query->num_rows() > 0 )
        {
            return $query->result_array();
        }
        else
        {
            return FALSE;
        }


	 } 
	 
	 
	 
		 
	 	 	 	 	 function ara_kat($word,$sorgu,$bas_t,$bit_t)
     { 


	$query =$this->db->query("select * from acente_category Where adi='$word'");       
	return $query->num_rows();


	 }  
	 
	 
	 
	 
	 	 	 function ara_kat_tur_getir($word,$sorgu,$bas_t,$bit_t)
     { 
   
  	$query =$this->db->query("select * from acente_category Where adi='$word'");       
	foreach ($query->result_array() as $row)
										{
											  $id=$row['id'];
		                                    
										}


	   $sql="select * from acente_tur Where kat_id=".$id." ".$sorgu;	
	   
	$query =$this->db->query($sql);       
	    if( $query->num_rows() > 0 )
        {
            return $query->result_array();
        }
        else
        {
            return FALSE;
        }


	 } 
	 
	 
	 
	 	 	 function tur_fyt_uygun($kod,$f1,$f2)
     {
		 
	$query =$this->db->query("select * from acente_tur_detay Where tur_kod=".$kod." and durum=1");
	        if( $query->num_rows() == 0 )
        {
         
		         $yetiskin_fiyat=0;
				 
			if(($yetiskin_fiyat>=$f1)and($yetiskin_fiyat<=$f2)){
				return 1;
			}	 
				 

        }
		 
		 
	
	$query =$this->db->query("select * from acente_tur_detay Where tur_kod=".$kod." and durum=1 and yetiskin_fiyat>='".$f1."' and yetiskin_fiyat<='".$f2."'");
        if( $query->num_rows() > 0 )
        {
         
		            return 1;

        }
        else
        {
            return 0;
        }
	
	 } 	 
	 
	 
	 
	 
	
}