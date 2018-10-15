<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Form extends CI_controller
{
  public function __construct()
    {
        parent::__construct();
        $this->load->model('form_model');
    }
	
	public function index()
	{
		$this->load->view('Mysite/header');
		$this->load->view('Mysite/content');
		$this->load->view('Mysite/footer');
   
    // $this->form_model->displayrecords();
	}

	
	public function Register()
	{ 
   
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$email=$this->input->post('email');
		$birthday=$this->input->post('birthday');
		$mobile=$this->input->post('mobile');
		$gender=$this->input->post('gender');
		

		$data=array(

          
           'username'=>$username,
           'password'=>$password,
           'email'=>$email,
           'birthday'=>$birthday,
           'mobile'=>$mobile,
           'gender'=>$gender,


        );
        // print_r($data);exit();
        $this->load->model('form_model');
        $this->form_model->insert($data);
    }

    function process()
    {
    	
		//     $username=$this->input->POST('username');      //get input fields
		//     $email=$this->input->POST('email');
		//     $password=$this->input->POST('password');
		//     // $age=$this->input->POST('age');
		//     // $mobile=$this->input->POST('mobile');


		// $data=array(
			      
  //           'username'=>$username,
  //           'email'=>$email,
  //           'password'=>$password,
  //           'age'=>$age,
  //           'mobile'=>$mobile

		// );
		    // print_r($data);exit();
      $username=$this->input->post('username');
      $password=$this->input->post('password');
          
          // print_r($username);exit();

		    $this->load->model('form_model');
        $login_id=$this->form_model->login($username,$password);

        // print_r($logindata);exit();

        if ($login_id) {
          $this->session->set_userdata('id',$login_id);
          header('location:http://localhost/mvc/index.php/form/profile');
        }

        else
        {
          echo "details not matched";
        }
        // $result = $this->form_model->login($data['username'],$data ['password']);
            
        // $this->session->set_userdata($data);
        // $this->load->view('user_profile',$data);

       // if (isset($)) {
       //   # code...
       // }


       // $this->user_profile('$data'); 
        // print_r();exit;
       
    }

    // function display(){

      
    //   $this->load->model('form_model');
    //   $this->form_model->select($_SESSION['id']);
    //   print_r($this->session);exit;
    //   $row = $query->row();
    //   $this->load->view('display_view',$row);
    // }


    function profile(){
       $this->load->model('form_model');
       $result['datap']=$this->form_model->select('login_id');
       $p=$this->load->view('user_profile',$result);
       // $result['datap']=$this->insert_model->displayrecords();
    }

     function logout()

      {
        $this->session->unset_userdata('$data');
       header('location:http://localhost/mvc/index.php/form');
        
      }

    //   function update()
    // {
        
    //           // print_r($data);exit();
    //          // $data=array(
    //          //      'id'=>$id,
    //          //      'username'=>$username,
    //          //      'password'=>$password
    //          //      // 'email'=>$email, 
    //          //      'birthday'=>$birthday,     
    //          //      'mobile'=>$mobile , 
    //          //      'gender'=>$gender,

    //          //  );
              
    //         // $this->input->post('#update'); 
    //         $this->load->model('form_model');
    //         $this->form_model->updaterecords();



    //     }

    
}

?>