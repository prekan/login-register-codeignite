<?php


class Form_model extends CI_model
{

    public function __construct()
    {
        parent::__construct();

    }
	
	function insert($data)
	{
		$this->db->insert('crud', $data);

		echo "You have register successfully";
		
	}

    function login($k,$m)
    {   
        
        // $username= $this->security->xss_clean($this->input->post('username'));
        // $password=$this->security->xss_clean($this->input->post('password'));

        $this->db->select('*');
        
        $this->db->where('username',$k);
        $this->db->where('password',$m);

        $query= $this->db->get('crud');
        // print_r($query);exit();

        return $query->result();


    }
    function select(){
        // $id=$this->session->userdata('id');
        // $this->db->select('*');
        // $this->db->where('id',$k);
        // $query= $this->db->get('crud');
        // $row = $query->row();
        $query=$this->db->query("select * from crud");

        // print_r($query);exit();
       return $query->result();
    }

       // function displayrecords($k,$m){

           

       //     $query = $this->db->query(' SELECT * FROM crud WHERE username = '$k' AND password='$m' ');
           


       //     // return $query->sep();
       //     print_r($query->num_rows());exit();
           

       // }
    function updaterecords()
    {   
        $query=$this->db->replace('crud');
           // redirect('/select_ctrl/selectdata');
          // header('location:selectdata');

           
        if ($query) {
            
                echo "record updated successfully";
            }
    
            else{
                echo "Record Updated Successfully"    ;
            }
        
    }
    
}


?>