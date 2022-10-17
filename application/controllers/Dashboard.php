<?php
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		// if (!$this->session->userdata('email')) {
		//     redirect('auth');
		// }
	}

	public function index()
	{
		$data['title'] = 'Halaman Admin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('dashboard/index', $data);
	}
	public function data()
	{
		$data['akun'] = $this->db->get('account')->result();
		$this->load->view('dashboard/data', $data);
	}
	public function data_reward()
	{
		$data['reward'] = $this->db->get('data_submit')->result();
		$this->load->view('dashboard/data_inp', $data);
	}
}
