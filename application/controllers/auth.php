<?php
class Auth extends CI_Controller{

	function __contsruct() {
		parent:: __contsruct();
		$this->load->model('model_operation');
	}

	function login()
	{
		if(isset($_POST['submit'])){

			// proses login disini
			$username	=	$this->input->post('username');
			$password	=	$this->input->post('password');
			$hasil=	$this->model_operator->login($username,$password);
			if($hasil==1)
			{
				$this->session->set_userdata(array('status_login'=>'oke'));
				redirect('dashboard');
			}
			else{
				redirect('auth/login');
			}
		}
		else{ 
			$this->load->view('form_login');

		}
	}


	function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}

}