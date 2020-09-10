<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct(){
        parent::__construct();
        echo "Constructor"."</br>";
    }


	
	public function index()
	{
		echo "Report Index";
    }
    public function _hello()
    {
        echo "</br>"."Hello World";
 }
 public function showname($name="john",$lastname="wick"){ 
     echo "My name is  ".$name. " ".$lastname;
     $this->_hello();
 }
    public function showview(){
        $this->load->view("hello_view");
        $this->load->view("hello_view");
        $this->load->view("hello_view");
    }
    
    public function showuser(){
        $data['name'] = "Mario";
        $data['lastname'] = "Maoloer";
        $data['age'] = 18;
        $this->load->view("user_page",$data);
    }
    public function getuser($p1=null,$p2=null,$p3=null){
        $data['name'] = $p1;
        $data['lastname'] = $p2;
        $data['age'] = $p3;
        $this->load->view("user_page",$data);
}
    public function showbook(){
        $data["book"] = array("Java","Kotlin","PHP");
        $this->load->view("book_page",$data);
    }
}