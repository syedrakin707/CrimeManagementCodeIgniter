<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	//functions
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view("index.php");
	}
	public function test1(){
		echo 'test test1 function';
	}
	function login(){
		$data['title'] = 'CodeIgniter Simple Login Form With Sessions';
           $this->load->view("index.php", $data);
	}
	function gateway(){
		$this->load->view('gateway.php');
	}
	function station(){
		$this->load->model("main_model");
    $data["fetch_data"] = $this->main_model->fetch_data_station();
		$this->load->view('station.php', $data);
	}
	function addcomplaint(){
		$this->load->view('addcomplaint.php');
	}
	function addcriminal(){
		$this->load->view('addcriminal.php');
	}
	function addfir(){
		$this->load->view('addfir.php');
	}
	function addpolice(){
		$this->load->view('addpolice.php');
	}
	function addstation(){
		$this->load->view('addstation.php');
	}
	function police(){
		$this->load->model("main_model");
    $data["fetch_data"] = $this->main_model->fetch_data_cop();
		$this->load->view('police.php', $data);
	}
	function complaint(){
		$this->load->model("main_model");
    $data["fetch_data"] = $this->main_model->fetch_data_complaint();
		$this->load->view('complaint.php', $data);
	}
	function criminal(){
		$this->load->model("main_model");
    $data["fetch_data"] = $this->main_model->fetch_data_criminal();
		$this->load->view('criminal.php', $data);
	}
	function fir(){
		$this->load->model("main_model");
    $data["fetch_data"] = $this->main_model->fetch_data_fir();
		$this->load->view('fir.php', $data);
	}
	function copstation(){
		$this->load->view('copstation.php');
	}
	function complaintfir(){
		$this->load->view('complaintfir.php');
	}
	function insertcomplaint(){
		$this->load->model("main_model");
							$data = array(
									 "c_date"=>$this->input->post("c_date"),
									 "description"=>$this->input->post("description"),
									 "complainer"=>$this->input->post("complainer"),
									 "address"=>$this->input->post("address"),
									 "aadhar"=>$this->input->post("aadhar"),
									 "status"=>$this->input->post("status")
							);
							$this->main_model->insert_data_complaint($data);
							redirect(base_url() . "main/complaint");
	}
	function insertcriminal(){
		$this->load->model("main_model");
                $data = array(
                     "cname"=>$this->input->post("cname"),
                     "age"=>$this->input->post("age"),
										 "gender"=>$this->input->post("gender"),
                     "offence"=>$this->input->post("offence"),
										 "offence_date"=>$this->input->post("offence_date"),
                     "place"=>$this->input->post("place"),
										 "description"=>$this->input->post("description")
                );
								$this->main_model->insert_data_criminal($data);
								redirect(base_url() . "main/criminal");
	}
	function insertfir(){
		$this->load->model("main_model");
                $data = array(
									"fnumber"=>$this->input->post("fnumber"),
									"station'"=>$this->input->post("station'"),
									"complaint"=>$this->input->post("complaint"),
									"log_date"=>$this->input->post("log_date"),
									"description"=>$this->input->post("description"),
									"offence_nature"=>$this->input->post("offence_nature"),
									"cop"=>$this->input->post("cop")
                );
								$this->main_model->insert_data_fir($data);
								redirect(base_url() . "main/fir");
	}
	function insertpolice(){
		$this->load->model("main_model");
                $data = array(
									"copname"=>$this->input->post("copname"),
									"designation"=>$this->input->post("designation"),
									"dob"=>$this->input->post("dob"),
									"reportto"=>$this->input->post("reportto"),
									"address"=>$this->input->post("address"),
									"phone"=>$this->input->post("phone"),
									"station"=>$this->input->post("station")
                );
								$this->main_model->insert_data_cop($data);
								redirect(base_url() . "main/police");
	}
	function insertstation(){
		$this->load->model("main_model");
                $data = array(
									"incharge"=>$this->input->post("incharge"),
									"iname"=>$this->input->post("iname"),
									"sname"=>$this->input->post("sname"),
									"location"=>$this->input->post("location"),
									"phone"=>$this->input->post("phone")
                );
								$this->main_model->insert_data_station($data);
								redirect(base_url() . "main/station");
	}

	function updatecomplaint(){
		$user_id = $this->uri->segment(3);
	 	$this->load->model("main_model");
	 	$data["user_data"] = $this->main_model->fetch_single_data_complaint($user_id);
	 	$data["fetch_data"] = $this->main_model->fetch_data_complaint();
	 	$this->load->view("main_view", $data);
	}
	function updatepolice(){
		$user_id = $this->uri->segment(3);
    $this->load->model("main_model");
    $data["user_data"] = $this->main_model->fetch_single_data_police($user_id);
    $data["fetch_data"] = $this->main_model->fetch_data_police();
    $this->load->view("main_view", $data);
	}
	function updatestation(){
		$user_id = $this->uri->segment(3);
		$this->load->model("main_model");
		$data["user_data"] = $this->main_model->fetch_single_data_station($user_id);
		$data["fetch_data"] = $this->main_model->fetch_data_station();
		$this->load->view("main_view", $data);
	}
	function login_validation()
      {
           $this->load->library('form_validation');
           $this->form_validation->set_rules('username', 'Username', 'required');
           $this->form_validation->set_rules('password', 'Password', 'required');
           if($this->form_validation->run())
           {
                //true
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                //model function
                $this->load->model('main_model');
                if($this->main_model->can_login($username, $password))
                {
                     $session_data = array('username'=>$username);
                     $this->session->set_userdata($session_data);
                     redirect(base_url().'main/gateway');
                }
                else
                {
                     $this->session->set_flashdata('error', 'Invalid Username and Password');
                     redirect(base_url().'main/login');
                }
           }
           else
           {
                //false
                $this->login();
           }
      }

      function enter(){
           if($this->session->userdata('username') != '')
           {
                echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';
                echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';
           }
           else
           {
                redirect(base_url() . 'main/login');
           }
      }
      function logout()
      {
           $this->session->unset_userdata('username');
           redirect(base_url() . 'main/login');
      }
 }
