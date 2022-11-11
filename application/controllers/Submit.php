<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Submit extends CI_Controller
{
	public function index()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['siswa'] = $this->M_siswa->SemuaData();
			$this->M_siswa->random();
			$this->M_siswa->random2();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index', $data);
			$this->load->view('templates/footer');
		}
	}

	public function hasil_pembobotan()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['baris'] = $this->M_siswa->CountRow();
			$data['bobot'] = $this->M_siswa->bobot();
			// $this->M_siswa->random();
			// $this->M_siswa->random2();
			// $this->M_siswa->cobaRandom();
			// $this->M_siswa->cobaRandom2();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index2', $data);
			$this->load->view('templates/footer');
		}
	}

	public function perhitungan_fcm()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['baris'] = $this->M_siswa->CountRow();
			$data['bobot'] = $this->M_siswa->bobot();
			$data['random'] = $this->M_siswa->getRandom();
			// print_r($data['random']);
			// die;
			// $data['random'] = [
			//   'random' => $this->M_siswa->cobaRandom(),
			//   'random2' => $this->M_siswa->cobaRandom2()
			// ];
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index3', $data);
			$this->load->view('templates/footer');
		}
	}

	public function tabel_literasi()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['literasi'] = $this->M_siswa->literasi();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index4', $data);
			$this->load->view('templates/footer');
		}
	}

	public function literasi($i)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['key'] = $i;
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['baris'] = $this->M_siswa->countRow();
			$data['bobot'] = $this->M_siswa->bobot();
			$data['literasi'] = $this->M_siswa->literasi($i);
			$data['random'] = [
				'random' => $this->M_siswa->cobaRandom(),
				'random2' => $this->M_siswa->cobaRandom2()
			];

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index5', $data);
			$this->load->view('templates/footer');
		}
	}

	public function fungsi_objektif($key)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['key'] = $key;
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['baris'] = $this->M_siswa->countRow();
			$data['literasi'] = $this->M_siswa->literasi($key);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index6', $data);
			$this->load->view('templates/footer');
		}
	}

	public function memperbaharui_n_u($key)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['key'] = $key;
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['baris'] = $this->M_siswa->countRow();
			$data['literasi'] = $this->M_siswa->literasi($key);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index7', $data);
			$this->load->view('templates/footer');
		}
	}

	public function matrix_u_baru($key)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['key'] = $key;
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['baris'] = $this->M_siswa->countRow();
			$data['literasi'] = $this->M_siswa->literasi($key);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index8', $data);
			$this->load->view('templates/footer');
		}
	}

	public function kesimpulan()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['siswa'] = $this->M_siswa->semuaDataArray();
			$data['baris'] = $this->M_siswa->countRow();
			$data['literasi'] = $this->M_siswa->literasi();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index9', $data);
			$this->load->view('templates/footer');
		}
	}
}