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
			$data['error_terkecil'] = $this->input->post('error_terkecil');
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

	public function perhitungan_fcm($error_terkecil = null, $max_iterasi = null)
	{

		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['baris'] = $this->M_siswa->CountRow();
			$data['bobot'] = $this->M_siswa->bobot();
			$data['random'] = $this->M_siswa->getRandom();
			$data['error_terkecil'] = $this->M_siswa->getRandom();
			if ($error_terkecil == null) {
				$data['error_terkecil'] = $this->input->post('error_terkecil');
			}
			if ($max_iterasi == null) {
				$data['max_iterasi'] = $this->input->post('max_iterasi');
			}
			if ($error_terkecil != null) {
				$data['error_terkecil'] = $error_terkecil;
			}
			if ($max_iterasi != null) {
				$data['max_iterasi'] = $max_iterasi;
			}
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

	public function tabel_literasi($error_terkecil = null, $max_iterasi = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			if ($error_terkecil == null) {
				$data['error_terkecil'] = $this->input->post('error_terkecil');
			}
			if ($max_iterasi == null) {
				$data['max_iterasi'] = $this->input->post('max_iterasi');
			}
			if ($error_terkecil != null) {
				$data['error_terkecil'] = $error_terkecil;
			}
			if ($max_iterasi != null) {
				$data['max_iterasi'] = $max_iterasi;
			}

			$data['literasi'] = $this->M_siswa->literasi($data['error_terkecil'], $data['max_iterasi']);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index4', $data);
			$this->load->view('templates/footer');
		}
	}

	public function literasi($error_terkecil, $max_iterasi, $i)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['error_terkecil'] = $error_terkecil;
			$data['max_iterasi'] = $max_iterasi;
			$data['key'] = $i;
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['baris'] = $this->M_siswa->countRow();
			$data['bobot'] = $this->M_siswa->bobot();
			$data['literasi'] = $this->M_siswa->literasi($error_terkecil, $data['max_iterasi'], $i);
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

	public function fungsi_objektif($error_terkecil, $max_iterasi, $key)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['key'] = $key;
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['baris'] = $this->M_siswa->countRow();
			$data['error_terkecil'] = $error_terkecil;
			$data['max_iterasi'] = $max_iterasi;
			$data['literasi'] = $this->M_siswa->literasi($error_terkecil, $max_iterasi, $key);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index6', $data);
			$this->load->view('templates/footer');
		}
	}

	public function memperbaharui_n_u($error_terkecil, $max_iterasi, $key)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['key'] = $key;
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['baris'] = $this->M_siswa->countRow();
			$data['error_terkecil'] = $error_terkecil;
			$data['max_iterasi'] = $max_iterasi;
			$data['literasi'] = $this->M_siswa->literasi($error_terkecil, $max_iterasi, $key);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index7', $data);
			$this->load->view('templates/footer');
		}
	}

	public function matrix_u_baru($error_terkecil, $max_iterasi, $key)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['key'] = $key;
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['baris'] = $this->M_siswa->countRow();
			$data['error_terkecil'] = $error_terkecil;
			$data['max_iterasi'] = $max_iterasi;
			$data['literasi'] = $this->M_siswa->literasi($error_terkecil, $max_iterasi, $key);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index8', $data);
			$this->load->view('templates/footer');
		}
	}

	public function kesimpulan($error_terkecil, $max_iterasi)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['title'] = "Perhitungan CMEANS";
			$data['sidebar'] = 'home';
			$data['siswa'] = $this->M_siswa->semuaDataArray();
			$data['baris'] = $this->M_siswa->countRow();
			$data['error_terkecil'] = $error_terkecil;
			$data['max_iterasi'] = $max_iterasi;
			$data['literasi'] = $this->M_siswa->literasi($error_terkecil, $max_iterasi);
			$data['j_c1'] = 0;
			$data['j_c2'] = 0;

			$i = 0;
			for ($p = 0; $p < $data['baris']; $p++) {
				if ($data['literasi']['39'][$i] / $data['literasi']['48'][$i] > $data['literasi']['45'][$i] / $data['literasi']['48'][$i]) {
					$data['j_c1']++;
				}

				if ($data['literasi']['39'][$i] / $data['literasi']['48'][$i] < $data['literasi']['45'][$i] / $data['literasi']['48'][$i]) {
					$data['j_c2']++;
				}
				$i++;
			}

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('submit/index9', $data);
			$this->load->view('templates/footer');
		}
	}
}