<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gateway extends CI_Controller {
	//functions
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->view('gateway.php');
		}
 }
