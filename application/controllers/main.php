<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function login_validation()
	{
		$this->load->library("form_validation");

		$this->form_validation->set_rules("email", "メール", "required|trim|xss_clean");
		$this->form_validation->set_rules("password", "パスワード", "required|md5|trim|callback_validate_credentials");

		if ($this->form_validation->run()) {
			redirect("main/members");
		} else {
			$this->load->view("login");
		}
		#echo $_POST["email"];
		#echo $this->input->post("email");
	}

	public function validate_credentials()
	{
		$this->load->model("model_users");

		if ($this->model_users->can_log_in()) {
			return true;
		} else {
			$this->form_validation->set_message("validate_credentials", "ユーザー名かパスワードが異なります。");
			return false;			
		}
	}

	public function members() 
	{
		$this->load->view("members");
	}
}
?>