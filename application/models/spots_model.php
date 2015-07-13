<?php
class spots_model extends CI_Model {
    private $username;
 
 public function __construct(){
    $this->load->database();     }

   public function addspot() {
        $upload_data = $this->upload->data(); 
        $image =   $upload_data['file_name'];
        $this->load->helper('url');
        $img = base_url("assets/img/".$image); 
      
        $this->load->library('session');
        $user =$this->session->userdata('username');
        $spot = $this->input->post("spot");
        $location = ($this->input->post("location"));
        $price = ($this->input->post("price"));
        $description = ($this->input->post("description"));
    
    
            $sql = "INSERT INTO spot (name,location,price,image,description) " .
            "VALUES (" . $this->db->escape($spot) . ",".$this->db->escape($location) .",".$this->db->escape($price) .","
                .$this->db->escape($image) .",".$this->db->escape($description).")";
            $this->db->query($sql);

           
    }
   
    public function logindetails() {
        $username = $this->input->post("user");
        $query = $this->db->query("select * from user where username = '".$username ."'");
  
            return $query->result_array();
            
    }

    public function count_words(){
       $ch = curl_init();
             $url = "https://api.mongolab.com/api/1/databases/sheng/collections/dictionary?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl";
             
    curl_setopt ($ch, CURLOPT_URL, $url);
    
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $data = curl_exec($ch);
   
    if (curl_errno($ch)) {
    echo curl_error($ch);
    echo "\n<br />";
      $data = '';
    } else {
     curl_close($ch);
    }
    if (!is_string($data) || !strlen($data)) {
    echo "Failed to get contents.";
    $data = '';
    }
  
   
    
        return (count(json_decode($data,true))) ;
    }


    public function count_contributions(){
         $ch = curl_init();
             $url = "https://api.mongolab.com/api/1/databases/sheng/collections/queries?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl";
             
    curl_setopt ($ch, CURLOPT_URL, $url);
    
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $data = curl_exec($ch);
   
    if (curl_errno($ch)) {
    echo curl_error($ch);
    echo "\n<br />";
      $data = '';
    } else {
     curl_close($ch);
    }
    if (!is_string($data) || !strlen($data)) {
    echo "Failed to get contents.";
    $data = '';
    }
  
   
    
        return (count(json_decode($data,true))) ;
    }

    public function count_users(){
        $query = $this->db->query(" SELECT COUNT(*) AS 'all' from user");
        foreach ($query->result() as $row)
            {
            return $row->all;
            }
    }


    public function dictionary() {
            
             $ch = curl_init();
             $url = "https://api.mongolab.com/api/1/databases/sheng/collections/dictionary?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl";
             
    curl_setopt ($ch, CURLOPT_URL, $url);
    
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $data = curl_exec($ch);
   
    if (curl_errno($ch)) {
    echo curl_error($ch);
    echo "\n<br />";
      $data = '';
    } else {
     curl_close($ch);
    }
    if (!is_string($data) || !strlen($data)) {
    echo "Failed to get contents.";
    $data = '';
    }
  
   
    
        return (json_decode($data,true)) ;
    }

    public function contributions() {
            
             $ch = curl_init();
             $url = "https://api.mongolab.com/api/1/databases/sheng/collections/queries?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl";
             
    curl_setopt ($ch, CURLOPT_URL, $url);
    
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $data = curl_exec($ch);
   
    if (curl_errno($ch)) {
    echo curl_error($ch);
    echo "\n<br />";
      $data = '';
    } else {
     curl_close($ch);
    }
    if (!is_string($data) || !strlen($data)) {
    echo "Failed to get contents.";
    $data = '';
    }
  
   
    
        return (json_decode($data,true)) ;
    }


    
}