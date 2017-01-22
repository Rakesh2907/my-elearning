<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

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
		$this->load->view('courses');
	}
	
	public function details($course_id)
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
	}
}
