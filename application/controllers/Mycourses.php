<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycourses extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Mycourses');
	}
	
	public function details()
	{
	    switch ($course_id) {
		   case 1 : $course_name = "PHP";
		   break;
		   
		   case 2 : $course_name = "Java";
		   break;
		   
		   case 3 : $course_name = "Java script";
		   break;
		   
		   case 4 : $course_name = "Python";
		   break; 
		   
		   case 5 : $course_name = "Bigdata";
		   break;
		   
		   case 6 : $course_name = "Web Design";
		   break;
        }
		
		$data['course_id'] = $course_id;
		$data['course_name'] = $course_name;
		
		$this->load->view('course-detail',$data);
	    $this->load->view('mycourses_details');
	}
	
	public function take_exam()
	{
		$this->load->view('take_exam');
	}
	
	public function quiz_result()
	{
		  $count = 0;
	      foreach($_POST as $key => $val){
		      if('first' ==  $key && $val == 1){
			     $count = $count + 1;
			  }
			  if('second' ==  $key && $val == 3){
			     $count = $count + 1;
			  }
			  
			  if('third' ==  $key && $val == 4){
			     $count = $count + 1;
			  }
			  
			  if('four' ==  $key && $val == 2){
			     $count = $count + 1;
			  }
		  }
		  $data['myscore'] = (($count/4)* 100);
		  
	      $this->load->view('quiz_result',$data);
	}
}
