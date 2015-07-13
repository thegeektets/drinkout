<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class spots extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model('users_model');
     $this->load->model('spots_model');
     $this->load->helper('user');
    $this->load->helper('url');
       
    }


	public function register()
	{

	 $this->load->helper(array('form', 'url'));
     $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username ', 'required'); 
            $this->form_validation->set_rules('email', 'Email ', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'Password  ', 'required'); 
                       
    if ($this->form_validation->run() == FALSE){
 
    	echo 0;
    }
    else {
     $data['success']= ("Registration success") ;
     $this->users_model->registeruser();
        echo 1;
       
    }
  }

  public function login(){

         $this->load->library('session');
           
        if($this->session->userdata('logged_in') == "TRUE") {
            
           echo 1;
     
        }
        else{
          $this->load->helper(array('form', 'url'));
          $this->load->library('form_validation');  
          $this->form_validation->set_rules('user', 'Username ', 'required'); 
          $this->form_validation->set_rules('pass', 'Password  ', 'required'); 
                          
        if ($this->form_validation->run() == FALSE){
     
                echo 3;
        }
        else {
           $passw = $this->users_model->logindetails();

           if(md5($this->input->post("pass")) == $passw['0']['password']){
              $this->load->library('session');
              
              $newdata = array(
                    'username'  => $this->input->post("user"),
                    'status'  => $passw['0']['status'],
                    'logged_in' => TRUE
                   );
            $this->session->set_userdata($newdata);
            $users = $this->session->all_userdata();
                     echo 1;
            }
        
            else{
                
                  echo 0;
                 
              }
            
          }
        }   
      }
    //logs out the user and re initializes the session varibles
    public function logout(){
         $this->load->helper('url');
        $this->load->library('session');
        $newdata = array(
        'logged_in' => FALSE);
        $this->session->set_userdata($newdata);
        
        redirect('welcome');
     
      }
    public function dashboard(){

        $this->load->library('session');

        $data['words'] = $this->users_model->count_words();
        $data['contributions'] = $this->users_model->count_contributions();
        $data['users'] = $this->users_model->count_users();


           if($this->session->userdata('logged_in') == "TRUE") {
                     $this->load->view('includes/dashheader');
                     $this->load->view('dashboard/index' , $data);
                     $this->load->view('includes/dashfooter');
            
            
             }
             else{
                     $this->load->view('includes/header');
                     $this->load->view('index',$data);
                     $this->load->view('includes/footer');
             }
    }

    public function dictionary(){
                    $data['dictionary'] = $this->users_model->dictionary();


                     $this->load->library('session');
                    
                     $this->load->view('includes/dashheader');
                     $this->load->view('dashboard/dictionary' , $data);
                     $this->load->view('includes/dashfooter');
    }

    public function contributions(){
                    $data['queries'] = $this->users_model->contributions();


                     $this->load->library('session');
                    
                     $this->load->view('includes/dashheader');
                     $this->load->view('dashboard/contributions' , $data);
                     $this->load->view('includes/dashfooter');
    }

    public function add_new(){

                    $this->load->library('session');
                    
                     $this->load->view('includes/dashheader');
                     $this->load->view('dashboard/add_new');
                     $this->load->view('includes/dashfooter');
    }

    public function newspot(){
             $this->load->helper(array('form', 'url'));
             $config['upload_path'] = './assets/img/';
             $config['allowed_types'] = 'gif|jpg|png';
             $config['max_size'] = '10000';
             $config['max_width']  = '10240';
             $config['max_height']  = '7680';
             $config['overwrite'] = FALSE; 
             $this->load->library('upload', $config);
             $this->upload->initialize($config);
          $this->load->library('form_validation');  
          $this->form_validation->set_rules('spot', 'Spot ', 'required'); 
          //$this->form_validation->set_rules('image', 'image  ', 'required'); 
          $this->form_validation->set_rules('location', 'location', 'required'); 
          $this->form_validation->set_rules('price', 'price', 'required'); 
          $this->form_validation->set_rules('description', 'description', 'required'); 

        if ($this->form_validation->run() == FALSE){
     
                echo 3;
        }
        else{
             
             $image  = 'image';
             if($this->upload->do_upload($image)){
              
                 $this->spots_model->addspot();
             echo 1;
            }
            else{
                   $error = $this->upload->display_errors();
                   echo $error;
            }
        }   
    }

    public function contribute(){
                     $this->load->library('session');
                    
                     $this->load->view('includes/dashheader');
                     $this->load->view('dashboard/contribute');
                     $this->load->view('includes/dashfooter');
    }
 



    
}

