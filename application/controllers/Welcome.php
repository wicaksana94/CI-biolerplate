<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		redirect('/welcome/name', 'refresh');
	}
	
	public function name()
	{
		$this->load->view('new_user_form/name.php');
	}

	public function process_name()
	{
		// $this->load->library('encrypt');
		// $password = $this->encrypt->encode($_POST['password']);

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$insert_data = array(
			'name' => $name,
			'email' => $email,
			'password' => $password
		);

		$this->db->insert('user', $insert_data);
		// redirect('/welcome/contact');
		$data['id'] = $this->db->select('id_user')->where('email', $email)->get('user')->row()->id_user;

		$this->load->view('new_user_form/contact', $data);
	}

	public function contact()
	{
		$this->load->view('new_user_form/contact.php');
	}

	public function process_contact($id)
	{
		// var_dump($id);
		$phone = $_POST['phone'];
		$address = $_POST['address'];

		$update_data = array(
			'phone' => $phone,
			'address' => $address
		);

		$this->db->where('id_user', $id);
		$this->db->update('user', $update_data);
		// redirect('/welcome/');
	}
}
