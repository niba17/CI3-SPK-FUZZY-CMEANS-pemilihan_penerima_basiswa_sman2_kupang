<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentifikasi extends CI_Controller
{
	public function landing()
	{
		$this->load->view('landing/landing');
	}

	public function index_login()
	{
		$this->form_validation->set_rules('name', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_message('required', 'Field harus diisi!');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Halaman Login';
			$this->load->view('templates/header', $data);
			$this->load->view('autentifikasi/index_login');
			$this->load->view('templates/footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$name = $this->input->post('name');
		// $email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('admin', ['name' => $name])->row_array();

		$data = [
			'name' => $name,
			'id' => $user['id']
		];

		if ($name === $user['name']) {
			if (md5($password) === $user['password']) {
				$this->session->set_userdata($data);
				$this->session->set_flashdata('log_succ', '<div class="alert alert-success" role="alert">Selamat Datang Admin !</div>');
				redirect('Admin/index_admin');
			} else {
				$this->session->set_flashdata('log_fail', '<div class="alert alert-danger" role="alert">
            Password Tidak Sesuai!</div>');
				redirect('Autentifikasi/index_login');
			}
		} else {
			$this->session->set_flashdata('log_fail', '<div class="alert alert-danger" role="alert">
      Username Tidak Terdaftar!</div>');
			redirect('Autentifikasi/index_login');
		}
	}

	public function lupa_password()
	{
		// $is_email = $this->form_validation->set_rules('email', 'Email', 'trim|valid_email', ['valid_email' => "Format Email tidak sesuai!"]);
		// $is_numeric = $this->form_validation->set_rules('number', 'no_HP', 'trim|valid_numeric', ['valid_numeric' => "Format Nomer HP tidak sesuai!"]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Halaman Lupa Password';
			$this->load->view('templates/header', $data);
			$this->load->view('autentifikasi/index_lupa_password');
			$this->load->view('templates/footer');
		} else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('admin', ['email' => $email])->row_array();

			if ($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token
				];
				$this->db->insert('token', $user_token);
				$this->_kirim_email($token, 'l_password');
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Cek email untuk Reset Password!</div>');
				redirect(base_url('Autentifikasi/lupa_password'));
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Email tidak terdaftar atau belum diaktifkan!</div>');
				redirect(base_url('Autentifikasi/lupa_password'));
			}
		}
		//  else if ($no_HP = $this->input->post('no_HP')) {
		//   $no_HP = $this->input->post('no_HP');
		//   // $user = $this->db->get_where('admin', ['email' => $email])->row_array();

		//   // if ($user) {
		//   $this->load->helper('string');
		//   $token = random_string('alnum', 4);
		//   $user_token = [
		//     // 'no_HP' => $no_HP,
		//     'token' => $token
		//   ];
		//   $this->db->insert('token', $user_token);
		//   $pesan = 'Token anda adalah : ' . $token;

		//   //Send an SMS using Gatewayapi.com
		//   $url = "https://gatewayapi.com/rest/mtsms";
		//   $api_token = "tDXliSqWSa6oofsN7w4lHn_NBa8wBUA6EzU7H6dU1TXbePyMsiTdz8nQzXDM94ez";

		//   //Set SMS recipients and content
		//   $recipients = [62081226950167];
		//   $json = [
		//     'sender' => 'SPK - Beasiswa',
		//     'message' => $pesan,
		//     'recipients' => [],
		//   ];
		//   foreach ($recipients as $msisdn) {
		//     $json['recipients'][] = ['msisdn' => $msisdn];
		//   }

		//   //Make and execute the http request
		//   //Using the built-in 'curl' library
		//   $ch = curl_init();
		//   curl_setopt($ch, CURLOPT_URL, $url);
		//   curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
		//   curl_setopt($ch, CURLOPT_USERPWD, $api_token . ":");
		//   curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
		//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//   $result = curl_exec($ch);
		//   curl_close($ch);
		//   print($result);
		//   $json = json_decode($result);
		//   print_r($json->ids);
		//   die;

		//   // $this->_kirim_email($token, 'l_password');
		//   $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		//     Masukkan Kode yang dikirimkan untuk Reset Password!</div>');
		//   redirect(base_url('Autentifikasi/lupa_password'));
		//   // } else {
		//   //   $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
		//   //   Email tidak terdaftar atau belum diaktifkan!</div>');
		//   //   redirect(base_url('Autentifikasi/lupa_password'));
		//   // }
		// }
	}

	private function _kirim_email($token, $tipe)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'tiaralivtha@gmail.com',
			'smtp_pass' => 'sejahter4h',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];
		$this->load->library('email', $config);
		$this->email->from('tiaralivtha@gmail.com', 'Aplikasi SPK - Beasiswa');
		$this->email->to($this->input->post('email'));
		if ($tipe == 'verifikasi') {
			$this->email->subject('Verifikasi Akun');
			$this->email->message('Klik tautan ini untuk aktivasi akun anda : <a href="' . base_url() . 'Autentifikasi/verifikasi?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
		} else if ($tipe == 'l_password') {
			$this->email->subject('Reset Password');
			$this->email->message('Klik tautan ini untuk Reset Password anda : <a href="' . base_url() . 'Autentifikasi/reset_password?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
		}
		if (!$this->email->send()) {
			$this->db->empty_table('token');
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Gagal mengirim Email, Aktifkan Akses Aplikasi Kurang Aman di pengaturan Email anda!</div>');
			redirect(base_url('Autentifikasi/index_login'));
		}
	}

	public function verifikasi()
	{
		$user = $this->db->get_where('admin', ['email' => $this->input->get('email')])->row_array();
		if ($user) {
			$user_token = $this->db->get_where('token', ['token' => $this->input->get('token')])->row_array();
			if ($user_token) {
				$this->db->set('status', 1);
				$this->db->where('email', $this->input->get('email'));
				$this->db->update('admin');
				$this->db->delete('token', ['email' => $this->input->get('email')]);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $this->input->get('email') . ' Telah diaktifkan! Silahkan Login</div>');
				redirect(base_url('Autentifikasi/index_login'));
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Token tidak valid!</div>');
				redirect(base_url('Autentifikasi/index_login'));
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Email tidak terdaftar!</div>');
			redirect(base_url('Autentifikasi/index_login'));
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('name');
		redirect('Autentifikasi/landing');
	}
}