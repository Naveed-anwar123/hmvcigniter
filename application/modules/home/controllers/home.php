<?php



	class Home extends CI_Controller{
	
		
		public function index(){
			//echo "Index mehtod";
			$this->load->view('header_view');
			$this->load->view('home_view');
			$this->load->view('footer_view');
		}
		
		
		
	}
		

?>