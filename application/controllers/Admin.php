<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	//home

	public function index_admin()
	{
		$data['sidebar'] = 'home';
		$data['title'] = "Home";
		$data['siswa'] = $this->M_siswa->SemuaData();
		$data['admin'] = $this->M_siswa->semuaDataAdmin();
		$data['kelas'] = $this->M_siswa->data('kelas');

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar');
		$this->load->view('admin/index_admin', $data);
		$this->load->view('templates/footer');
	}

	public function index_print($error_terkecil, $max_iterasi)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['error_terkecil'] = $error_terkecil;
			$data['max_iterasi'] = $max_iterasi;
			$data['siswa'] = $this->M_siswa->SemuaData();
			$data['baris'] = $this->M_siswa->countRow();
			$data['literasi'] = $this->M_siswa->literasi($data['error_terkecil'], $data['max_iterasi']);
			$data['kelas'] = $this->M_siswa->data('kelas');
			$tz = 'Asia/Jakarta';
			$timestamp = time();
			$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
			$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
			$dt = $dt->format('d.m.Y, H:i:s');

			$dt = explode(",", $dt);
			$tanggal = explode('.', $dt[0]);
			$tahun = $tanggal[2];
			$tanggal = implode(' - ', $tanggal);
			$waktu = $dt[1];
			$jam = explode(":", $waktu);
			$jam[0] = $jam[0] + 1;
			if ($jam[0] < 10) {
				$jam[0] = '0' . $jam[0];
			}
			$waktu = implode(':', $jam);

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

			$data['kelas'] = $this->M_siswa->data('kelas');
			$data['tingkat'] = $this->M_siswa->data('tingkat');
			$data['jurusan'] = $this->M_siswa->data('jurusan');
			$data['nama_kelas'] = $this->M_siswa->data('nama_kelas');

			$data['kelas_fix'] = [];
			$i = 0;
			foreach ($data['kelas'] as $key => $value) {
				$tingkat = [];
				$jurusan = [];
				$nama_kelas = [];
				foreach ($data['tingkat'] as $key2 => $value2) {
					if ($value->tingkat_id == $value2->id) {
						$tingkat = [
							'tingkat_id' => $value2->id,
							'tingkat' => $value2->nama,
						];
					}
				}
				foreach ($data['jurusan'] as $key2 => $value2) {
					if ($value->jurusan_id == $value2->id) {
						$jurusan = [
							'jurusan_id' => $value2->id,
							'jurusan' => $value2->nama,
						];
					}
				}
				foreach ($data['nama_kelas'] as $key3 => $value3) {
					if ($value->nama_kelas_id == $value3->id) {
						$nama_kelas = [
							'nama_kelas_id' => $value3->id,
							'nama_kelas' => $value3->nama,
						];
					}
				}
				$data['kelas_fix'][$i] = [
					'id' => $value->id,
					'tingkat_id' => $tingkat['tingkat_id'],
					'tingkat' => $tingkat['tingkat'],
					'jurusan_id' => $jurusan['jurusan_id'],
					'jurusan' => $jurusan['jurusan'],
					'nama_kelas_id' => $nama_kelas['nama_kelas_id'],
					'nama_kelas' => $nama_kelas['nama_kelas'],
				];
				$i++;
			}

			foreach ($data['siswa']  as $key => $value) {
				foreach ($data['kelas_fix']  as $key2 => $value2) {
					if ($value->kelas_id == $value2['id']) {
						$value->kelas = $value2;
					}
				}
			}

			$data['tahun'] = $tahun;
			$data['tanggal'] = $tanggal;
			$data['waktu'] = $waktu;
			$data['title'] = "Halaman Print";
			$this->load->view('templates/header', $data);
			$this->load->view('print/index_print', $data);
			$this->load->view('templates/footer');
		}
	}

	//akun

	public function index_data_akun($nama = null)
	{
		$data['sidebar'] = 'index_data_akun';
		$data['title'] = "Data Akun";
		$data['akun'] = $this->M_siswa->semuaDataAkun();
		$data['nama'] = $nama;

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar');
		$this->load->view('admin/index_data_akun', $data);
		$this->load->view('templates/footer');
	}

	public function index_input_akun($nama = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$this->form_validation->set_rules('name', 'Nama', 'trim|xss_clean|is_unique[admin.name]|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required');
			$this->form_validation->set_message('is_unique', 'Data sudah ada!');
			$this->form_validation->set_message('required', 'Field harus diisi!');
			$this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');
			$this->form_validation->set_message('matches', 'Konfirmasi Password tidak sesuai!');
			if ($this->form_validation->run() == false) {
				$data['sidebar'] = 'index_data_akun';
				$data['title'] = "Tambah Akun";
				$data['nama'] = $nama;
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar');
				$this->load->view('input/index_tambah_akun', $data);
				$this->load->view('templates/footer');
			} else {
				$this->input_data_akun();
			}
		}
	}

	public function input_data_akun()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {

			$name = $this->input->post('name');
			$password = $this->input->post('password');

			$data = array(
				'name' => $name,
				'password' => md5($password),
			);
			$query = $this->M_siswa->inputDataAkun($data);
		}
	}

	public function index_ubah_data_akun($id)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$akun = $this->M_siswa->semuaDataAkun($id);

			if ($this->input->post('name') != $akun[0]->name) {
				$this->form_validation->set_rules('name', 'Nama', 'trim|xss_clean|is_unique[admin.name]|required');
				$this->form_validation->set_message('is_unique', 'Username sudah ada!');
			} else {
				$this->form_validation->set_rules('name', 'Nama', 'trim|xss_clean|required');
			}

			if (md5($this->input->post('password')) != md5($akun[0]->password)) {
				$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required');
			} else {
				$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required');
			}

			$this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');

			$this->form_validation->set_message('matches', 'Konfirmasi Password tidak sesuai!');
			$this->form_validation->set_message('required', 'Field harus diisi!');

			if ($this->form_validation->run() == false) {
				$data['title'] = "Ubah Data";
				$data['sidebar'] = 'index_data_akun';
				$data['akun'] = $akun;
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar');
				$this->load->view('templates/topbar');
				$this->load->view('ubah/index_ubah_akun', $data);
				$this->load->view('templates/footer');
			} else {
				$this->edit_data_akun();
			}
		}
	}

	public function edit_data_akun()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$id = $this->input->post('id');
			$nama = $this->input->post('name');
			$password = $this->input->post('password');

			$dataUpdate = array(
				'name' => $nama,
				'password' => md5($password),
			);

			$this->M_siswa->editDataAkun($dataUpdate, $id);
		}
	}

	//kelas

	public function index_data_kelas($nama = null)
	{
		$data['sidebar'] = 'index_data_kelas';
		$data['title'] = "Data Kelas";
		$data['kelas'] = $this->M_siswa->data('kelas');
		$data['tingkat'] = $this->M_siswa->data('tingkat');
		$data['jurusan'] = $this->M_siswa->data('jurusan');
		$data['nama_kelas'] = $this->M_siswa->data('nama_kelas');

		$data['kelas_fix'] = [];
		$i = 0;
		foreach ($data['kelas'] as $key => $value) {
			$tingkat = [];
			$jurusan = [];
			$nama_kelas = [];
			foreach ($data['tingkat'] as $key2 => $value2) {
				if ($value->tingkat_id == $value2->id) {
					$tingkat = [
						'tingkat_id' => $value2->id,
						'tingkat' => $value2->nama,
					];
				}
			}
			foreach ($data['jurusan'] as $key2 => $value2) {
				if ($value->jurusan_id == $value2->id) {
					$jurusan = [
						'jurusan_id' => $value2->id,
						'jurusan' => $value2->nama,
					];
				}
			}
			foreach ($data['nama_kelas'] as $key3 => $value3) {
				if ($value->nama_kelas_id == $value3->id) {
					$nama_kelas = [
						'nama_kelas_id' => $value3->id,
						'nama_kelas' => $value3->nama,
					];
				}
			}
			$data['kelas_fix'][$i] = [
				'id' => $value->id,
				'tingkat_id' => $tingkat['tingkat_id'],
				'tingkat' => $tingkat['tingkat'],
				'jurusan_id' => $jurusan['jurusan_id'],
				'jurusan' => $jurusan['jurusan'],
				'nama_kelas_id' => $nama_kelas['nama_kelas_id'],
				'nama_kelas' => $nama_kelas['nama_kelas'],
			];
			$i++;
		}

		$data['nama'] = $nama;
		$data['tabel'] = 'kelas';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar');
		$this->load->view('admin/index_data_kelas', $data);

		$this->load->view('templates/footer');
	}

	//siswa

	public function index_data_siswa($nama = null)
	{
		$data['sidebar'] = 'index_data_siswa';
		$data['title'] = "Data Siswa";
		$data['siswa'] = $this->M_siswa->SemuaData();
		$data['nama'] = $nama;

		$data['kelas'] = $this->M_siswa->data('kelas');
		$data['tingkat'] = $this->M_siswa->data('tingkat');
		$data['jurusan'] = $this->M_siswa->data('jurusan');
		$data['nama_kelas'] = $this->M_siswa->data('nama_kelas');

		$data['kelas_fix'] = [];
		$i = 0;
		foreach ($data['kelas'] as $key => $value) {
			$tingkat = [];
			$jurusan = [];
			$nama_kelas = [];
			foreach ($data['tingkat'] as $key2 => $value2) {
				if ($value->tingkat_id == $value2->id) {
					$tingkat = [
						'tingkat_id' => $value2->id,
						'tingkat' => $value2->nama,
					];
				}
			}
			foreach ($data['jurusan'] as $key2 => $value2) {
				if ($value->jurusan_id == $value2->id) {
					$jurusan = [
						'jurusan_id' => $value2->id,
						'jurusan' => $value2->nama,
					];
				}
			}
			foreach ($data['nama_kelas'] as $key3 => $value3) {
				if ($value->nama_kelas_id == $value3->id) {
					$nama_kelas = [
						'nama_kelas_id' => $value3->id,
						'nama_kelas' => $value3->nama,
					];
				}
			}
			$data['kelas_fix'][$i] = [
				'id' => $value->id,
				'tingkat_id' => $tingkat['tingkat_id'],
				'tingkat' => $tingkat['tingkat'],
				'jurusan_id' => $jurusan['jurusan_id'],
				'jurusan' => $jurusan['jurusan'],
				'nama_kelas_id' => $nama_kelas['nama_kelas_id'],
				'nama_kelas' => $nama_kelas['nama_kelas'],
			];
			$i++;
		}

		foreach ($data['siswa']  as $key => $value) {
			foreach ($data['kelas_fix']  as $key2 => $value2) {
				if ($value->kelas_id == $value2['id']) {
					$value->kelas = $value2;
				}
			}
		}

		// var_dump($data['siswa']);
		// die;

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar');
		$this->load->view('admin/index_data_siswa', $data);
		$this->load->view('templates/footer');
	}

	public function index_input($nama = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$this->form_validation->set_rules('name', 'Nama', 'trim|xss_clean|is_unique[siswa.nama]|required');
			$this->form_validation->set_rules('nis', 'NIS', 'trim|xss_clean|is_unique[siswa.nis]|required');
			$this->form_validation->set_rules('jk', 'Jenis Kelasmin', 'trim|xss_clean|required');
			$this->form_validation->set_rules('kelas_id', 'Kelas', 'trim|xss_clean|required');
			$this->form_validation->set_rules('tahunAngkatan', 'Tahun Angkatan', 'trim|xss_clean|required');
			// $this->form_validation->set_rules('namaBeasiswa', 'Beasiswa', 'trim|xss_clean|required');
			$this->form_validation->set_rules('tahunBeasiswa', 'Tahun Beasiswa', 'trim|xss_clean|required');
			$this->form_validation->set_rules('tanggunganOrtu', 'Tanggungan Ortu', 'trim|xss_clean|required');
			$this->form_validation->set_rules('penghasilanOrtu', 'Penghasilan Ortu', 'trim|xss_clean|required');
			$this->form_validation->set_rules('tagihanAir', 'Tagihan Air', 'trim|xss_clean|required');
			$this->form_validation->set_rules('tagihanListrik', 'Tagihan Listrik', 'trim|xss_clean|required');
			$this->form_validation->set_rules('nilaiRaport', 'Nilai Raport', 'trim|xss_clean|required');
			$this->form_validation->set_message('is_unique', 'Data sudah ada!');
			$this->form_validation->set_message('required', 'Field harus diisi!');
			if ($this->form_validation->run() == false) {
				$data['sidebar'] = 'index_data_siswa';
				$data['title'] = "Tambah Siswa";
				$data['nama'] = $nama;
				$data['kelas'] = $this->M_siswa->data('kelas');
				$data['tingkat'] = $this->M_siswa->data('tingkat');
				$data['jurusan'] = $this->M_siswa->data('jurusan');
				$data['nama_kelas'] = $this->M_siswa->data('nama_kelas');

				$data['kelas_fix'] = [];
				$i = 0;
				foreach ($data['kelas'] as $key => $value) {
					$tingkat = [];
					$jurusan = [];
					$nama_kelas = [];
					foreach ($data['tingkat'] as $key2 => $value2) {
						if ($value->tingkat_id == $value2->id) {
							$tingkat = [
								'tingkat_id' => $value2->id,
								'tingkat' => $value2->nama,
							];
						}
					}
					foreach ($data['jurusan'] as $key2 => $value2) {
						if ($value->jurusan_id == $value2->id) {
							$jurusan = [
								'jurusan_id' => $value2->id,
								'jurusan' => $value2->nama,
							];
						}
					}
					foreach ($data['nama_kelas'] as $key3 => $value3) {
						if ($value->nama_kelas_id == $value3->id) {
							$nama_kelas = [
								'nama_kelas_id' => $value3->id,
								'nama_kelas' => $value3->nama,
							];
						}
					}
					$data['kelas_fix'][$i] = [
						'id' => $value->id,
						'tingkat_id' => $tingkat['tingkat_id'],
						'tingkat' => $tingkat['tingkat'],
						'jurusan_id' => $jurusan['jurusan_id'],
						'jurusan' => $jurusan['jurusan'],
						'nama_kelas_id' => $nama_kelas['nama_kelas_id'],
						'nama_kelas' => $nama_kelas['nama_kelas'],
					];
					$i++;
				}

				// var_dump($data['kelas_fix']);
				// die;

				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar');
				$this->load->view('input/index', $data);
				$this->load->view('templates/footer');
			} else {
				$this->input_data();
			}
		}
	}

	public function input_data()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {

			$name = $this->input->post('name');
			$jk = $this->input->post('jk');
			$nis = preg_replace('/\D/', '', $this->input->post('nis'));
			$kelas = $this->input->post('kelas_id');
			$tahunAngkatan = $this->input->post('tahunAngkatan');
			// $namaBeasiswa = $this->input->post('namaBeasiswa');
			$tahunBeasiswa = preg_replace('/\D/', '', $this->input->post('tahunBeasiswa'));
			// $tanggunganOrtu = preg_replace('/\D/', '', $this->input->post('tanggunganOrtu'));
			// $penghasilanOrtu = preg_replace('/\D/', '', $this->input->post('penghasilanOrtu'));
			// $tagihanAir = preg_replace('/\D/', '', $this->input->post('tagihanAir'));
			// $tagihanListrik = preg_replace('/\D/', '', $this->input->post('tagihanListrik'));
			// $nilaiRaport = $this->input->post('nilaiRaport');

			$data = array(
				'nama' => $name,
				'jk' => $jk,
				'nis' => $nis,
				'kelas_id' => $kelas,
				'tahun_angkatan' => $tahunAngkatan,
				// 'nama_beasiswa' => $namaBeasiswa,
				'tahun_beasiswa' => $tahunBeasiswa,
				'tanggungan_ortu' => $this->input->post('tanggunganOrtu'),
				'penghasilan_ortu' => $this->input->post('penghasilanOrtu'),
				'tagihan_air' => $this->input->post('tagihanAir'),
				'tagihan_listrik' => $this->input->post('tagihanListrik'),
				'nilai_raport' => $this->input->post('nilaiRaport')
			);

			// $dataUp = [];
			// $semuaData = $this->M_siswa->semuaData();
			// $i = 0;
			// foreach ($semuaData as $key => $value) {
			// 	$dataUp['id_siswa'] = $value->id_siswa;
			// 	$dataUp['nama'] = $value->nama;
			// 	$dataUp['jk'] = $value->jk;
			// 	$dataUp['nis'] = $value->nis;
			// 	$dataUp['kelas_id'] = $value->kelas_id;
			// 	$dataUp['tahun_angkatan'] = $value->tahun_angkatan;
			// 	$dataUp['tahun_beasiswa'] = $value->tahun_beasiswa;
			// 	if ($value->tanggungan_ortu == 1) {
			// 		$dataUp['tanggungan_ortu'] = 0;
			// 	}
			// 	if ($value->tanggungan_ortu == 2) {
			// 		$dataUp['tanggungan_ortu'] = 0.25;
			// 	}
			// 	if ($value->tanggungan_ortu == 3) {
			// 		$dataUp['tanggungan_ortu'] = 0.5;
			// 	}
			// 	if ($value->tanggungan_ortu == 4) {
			// 		$dataUp['tanggungan_ortu'] = 0.75;
			// 	}
			// 	if ($value->tanggungan_ortu > 4) {
			// 		$dataUp['tanggungan_ortu'] = 1;
			// 	}

			// 	if ($value->penghasilan_ortu >= 5000000) {
			// 		$dataUp['penghasilan_ortu'] = 0;
			// 	}
			// 	if ($value->penghasilan_ortu >= 3000000 && $value->penghasilan_ortu < 5000000) {
			// 		$dataUp['penghasilan_ortu'] = 0.25;
			// 	}
			// 	if ($value->penghasilan_ortu >= 1500000 && $value->penghasilan_ortu < 3000000) {
			// 		$dataUp['penghasilan_ortu'] = 0.5;
			// 	}
			// 	if ($value->penghasilan_ortu >= 1000000 && $value->penghasilan_ortu < 1500000) {
			// 		$dataUp['penghasilan_ortu'] = 0.75;
			// 	}
			// 	if ($value->penghasilan_ortu < 1000000) {
			// 		$dataUp['penghasilan_ortu'] = 1;
			// 	}

			// 	if ($value->tagihan_air >= 300000) {
			// 		$dataUp['tagihan_air'] = 0;
			// 	}
			// 	if ($value->tagihan_air >= 200000 && $value->tagihan_air < 300000) {
			// 		$dataUp['tagihan_air'] = 0.25;
			// 	}
			// 	if ($value->tagihan_air >= 100000 && $value->tagihan_air < 200000) {
			// 		$dataUp['tagihan_air'] = 0.5;
			// 	}
			// 	if ($value->tagihan_air >= 50000 && $value->tagihan_air < 100000) {
			// 		$dataUp['tagihan_air'] = 0.75;
			// 	}
			// 	if ($value->tagihan_air < 50000) {
			// 		$dataUp['tagihan_air'] = 1;
			// 	}

			// 	if ($value->tagihan_listrik >= 300000) {
			// 		$dataUp['tagihan_listrik'] = 0;
			// 	}
			// 	if ($value->tagihan_listrik >= 200000 && $value->tagihan_listrik < 300000) {
			// 		$dataUp['tagihan_listrik'] = 0.25;
			// 	}
			// 	if ($value->tagihan_listrik >= 100000 && $value->tagihan_listrik < 200000) {
			// 		$dataUp['tagihan_listrik'] = 0.5;
			// 	}
			// 	if ($value->tagihan_listrik >= 50000 && $value->tagihan_listrik < 100000) {
			// 		$dataUp['tagihan_listrik'] = 0.75;
			// 	}
			// 	if ($value->tagihan_listrik < 50000) {
			// 		$dataUp['tagihan_listrik'] = 1;
			// 	}

			// 	if ($value->nilai_raport <= 60) {
			// 		$dataUp['nilai_raport'] = 0;
			// 	}
			// 	if ($value->nilai_raport > 60 && $value->nilai_raport <= 69.99) {
			// 		$dataUp['nilai_raport'] = 0.25;
			// 	}
			// 	if ($value->nilai_raport > 69.99 && $value->nilai_raport <= 79.99) {
			// 		$dataUp['nilai_raport'] = 0.5;
			// 	}
			// 	if ($value->nilai_raport > 79.99 && $value->nilai_raport <= 89.99) {
			// 		$dataUp['nilai_raport'] = 0.75;
			// 	}
			// 	if ($value->nilai_raport > 89.99 && $value->nilai_raport <= 100) {
			// 		$dataUp['nilai_raport'] = 1;
			// 	}
			// 	$this->db->where('id_siswa', $value->id_siswa);
			// 	$this->db->update('siswa', $dataUp);
			// 	$i++;
			// }
			// die;

			// if ($this->input->post('tanggunganOrtu') == 1) {
			// 	$data['tanggungan_ortu'] = 0;
			// } else if ($this->input->post('tanggunganOrtu') == 2) {
			// 	$data['tanggungan_ortu'] = 0.25;
			// } else if ($this->input->post('tanggunganOrtu') == 3) {
			// 	$data['tanggungan_ortu'] = 0.5;
			// } else if ($this->input->post('tanggunganOrtu') == 4) {
			// 	$data['tanggungan_ortu'] = 0.75;
			// } else if ($this->input->post('tanggunganOrtu') > 4) {
			// 	$data['tanggungan_ortu'] = 1;
			// }

			// if ($this->input->post('penghasilanOrtu') == '>= 5000000') {
			// 	$data['penghasilan_ortu'] = 0;
			// } else if ($this->input->post('penghasilanOrtu') == '>= 3000000 & < 5000000') {
			// 	$data['penghasilan_ortu'] = 0.25;
			// } else if ($this->input->post('penghasilanOrtu') == '>= 1500000 & < 3000000') {
			// 	$data['penghasilan_ortu'] = 0.5;
			// } else if ($this->input->post('penghasilanOrtu') == '>= 1000000 & < 1500000') {
			// 	$data['penghasilan_ortu'] = 0.75;
			// } else if ($this->input->post('penghasilanOrtu') == '< 1000000') {
			// 	$data['penghasilan_ortu'] = 1;
			// }

			// if ($this->input->post('tagihanAir') == '>= 300000') {
			// 	$data['tagihan_air'] = 0;
			// } else if ($this->input->post('tagihanAir') == '>= 200000 & < 300000') {
			// 	$data['tagihan_air'] = 0.25;
			// } else if ($this->input->post('tagihanAir') == '>= 100000 & < 200000') {
			// 	$data['tagihan_air'] = 0.5;
			// } else if ($this->input->post('tagihanAir') == '>= 50000 & < 100000') {
			// 	$data['tagihan_air'] = 0.75;
			// } else if ($this->input->post('tagihanAir') == '< 50000') {
			// 	$data['tagihan_air'] = 1;
			// }

			// if ($this->input->post('tagihanListrik') == '>= 300000') {
			// 	$data['tagihan_listrik'] = 0;
			// } else if ($this->input->post('tagihanListrik') == '>= 200000 & < 300000') {
			// 	$data['tagihan_listrik'] = 0.25;
			// } else if ($this->input->post('tagihanListrik') == '>= 100000 & < 200000') {
			// 	$data['tagihan_listrik'] = 0.5;
			// } else if ($this->input->post('tagihanListrik') == '>= 50000 & < 100000') {
			// 	$data['tagihan_listrik'] = 0.75;
			// } else if ($this->input->post('tagihanListrik') == '< 50000') {
			// 	$data['tagihan_listrik'] = 1;
			// }

			// if ($this->input->post('nilaiRaport') == '<= 60') {
			// 	$data['nilai_raport'] = 0;
			// } else if ($this->input->post('nilaiRaport') == '> 60 & <= 69.99') {
			// 	$data['nilai_raport'] = 0.25;
			// } else if ($this->input->post('nilaiRaport') == '> 69.99 & <= 79.99') {
			// 	$data['nilai_raport'] = 0.5;
			// } else if ($this->input->post('nilaiRaport') == '> 79.99 & <= 89.99') {
			// 	$data['nilai_raport'] = 0.75;
			// } else if ($this->input->post('nilaiRaport') == '> 89.99 & <= 100') {
			// 	$data['nilai_raport'] = 1;
			// }

			$query = $this->M_siswa->inputDataSiswa($data);
		}
	}

	public function index_ubah_data($id)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$siswa_id = $this->M_siswa->getDataSiswaDetail($id);

			if ($this->input->post('name') != $siswa_id->nama) {
				$this->form_validation->set_rules('name', 'Nama', 'trim|xss_clean|is_unique[siswa.nama]|required');
				$this->form_validation->set_message('is_unique', 'Nama sudah ada!');
			} else {
				$this->form_validation->set_rules('name', 'Nama', 'trim|xss_clean|required');
			}
			if ($this->input->post('nis') != $siswa_id->nis) {
				$this->form_validation->set_rules('nis', 'NIS', 'trim|xss_clean|is_unique[siswa.nis]|numeric|required');
				$this->form_validation->set_message('is_unique', 'NIS sudah ada!');
			} else {
				$this->form_validation->set_rules('nis', 'NIS', 'trim|xss_clean|numeric|required');
			}
			if ($this->input->post('jk') != $siswa_id->jk) {
				$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|xss_clean|required');
			}
			if ($this->input->post('kelas_id') != $siswa_id->kelas_id) {
				$this->form_validation->set_rules('kelas_id', 'Kelas', 'trim|xss_clean|required');
			}
			if ($this->input->post('tahunAngkatan') != $siswa_id->tahun_angkatan) {
				$this->form_validation->set_rules('tahunAngkatan', 'Tahun Angkatan', 'trim|xss_clean|numeric|required');
			}
			// if ($this->input->post('namaBeasiswa') != $siswa_id->nama_beasiswa) {
			// 	$this->form_validation->set_rules('namaBeasiswa', 'Beasiswa', 'trim|xss_clean|required');
			// }
			if ($this->input->post('tahunBeasiswa') != $siswa_id->tahun_beasiswa) {
				$this->form_validation->set_rules('tahunBeasiswa', 'Tahun Beasiswa', 'trim|xss_clean|numeric|required');
			}
			if ($this->input->post('tanggunganOrtu') != $siswa_id->tanggungan_ortu) {
				$this->form_validation->set_rules('tanggunganOrtu', 'Tanggungan Ortu', 'trim|xss_clean|numeric|required');
			}
			if ($this->input->post('penghasilanOrtu') != $siswa_id->penghasilan_ortu) {
				$this->form_validation->set_rules('penghasilanOrtu', 'Penghasilan Ortu', 'trim|xss_clean|numeric|required');
			}
			if ($this->input->post('tagihanAir') != $siswa_id->tagihan_air) {
				$this->form_validation->set_rules('tagihanAir', 'Tagihan Air', 'trim|xss_clean|numeric|required');
			}
			if ($this->input->post('tagihanListrik') != $siswa_id->tagihan_listrik) {
				$this->form_validation->set_rules('tagihanListrik', 'Tagihan Listrik', 'trim|xss_clean|numeric|required');
			}
			if ($this->input->post('nilaiRaport') != $siswa_id->nilai_raport) {
				$this->form_validation->set_rules('nilaiRaport', 'Nilai Raport', 'trim|xss_clean|numeric|required');
			}
			$this->form_validation->set_message('required', 'Field harus diisi!');
			$this->form_validation->set_message('numeric', 'Field harus diisi karakter angka!');

			if ($this->form_validation->run() == false) {
				$data['title'] = "Ubah Data";
				$data['sidebar'] = 'index_data_siswa';

				$data['kelas'] = $this->M_siswa->data('kelas');
				$data['tingkat'] = $this->M_siswa->data('tingkat');
				$data['jurusan'] = $this->M_siswa->data('jurusan');
				$data['nama_kelas'] = $this->M_siswa->data('nama_kelas');

				$data['kelas_fix'] = [];
				$i = 0;
				foreach ($data['kelas'] as $key => $value) {
					$tingkat = [];
					$jurusan = [];
					$nama_kelas = [];
					foreach ($data['tingkat'] as $key2 => $value2) {
						if ($value->tingkat_id == $value2->id) {
							$tingkat = [
								'tingkat_id' => $value2->id,
								'tingkat' => $value2->nama,
							];
						}
					}
					foreach ($data['jurusan'] as $key2 => $value2) {
						if ($value->jurusan_id == $value2->id) {
							$jurusan = [
								'jurusan_id' => $value2->id,
								'jurusan' => $value2->nama,
							];
						}
					}
					foreach ($data['nama_kelas'] as $key3 => $value3) {
						if ($value->nama_kelas_id == $value3->id) {
							$nama_kelas = [
								'nama_kelas_id' => $value3->id,
								'nama_kelas' => $value3->nama,
							];
						}
					}
					$data['kelas_fix'][$i] = [
						'id' => $value->id,
						'tingkat_id' => $tingkat['tingkat_id'],
						'tingkat' => $tingkat['tingkat'],
						'jurusan_id' => $jurusan['jurusan_id'],
						'jurusan' => $jurusan['jurusan'],
						'nama_kelas_id' => $nama_kelas['nama_kelas_id'],
						'nama_kelas' => $nama_kelas['nama_kelas'],
					];
					$i++;
				}
				$data['siswa_id'] = $siswa_id;
				$data_id = array('siswa' => $siswa_id);
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar');
				$this->load->view('templates/topbar');
				$this->load->view('ubah/index', $data_id, $data);
				$this->load->view('templates/footer');
			} else {
				$this->edit_data();
			}
		}
	}

	public function edit_data()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$id = $this->input->post('id');
			$nis = preg_replace('/\D/', '', $this->input->post('nis'));
			$nama = $this->input->post('name');
			$jk = $this->input->post('jk');
			$kelas = $this->input->post('kelas_id');
			$tahunAngkatan = preg_replace('/\D/', '', $this->input->post('tahunAngkatan'));
			// $namaBeasiswa = $this->input->post('namaBeasiswa');
			$tahunBeasiswa = preg_replace('/\D/', '', $this->input->post('tahunBeasiswa'));
			$tanggunganOrtu = preg_replace('/\D/', '', $this->input->post('tanggunganOrtu'));
			$penghasilanOrtu = preg_replace('/\D/', '', $this->input->post('penghasilanOrtu'));
			$tagihanAir = preg_replace('/\D/', '', $this->input->post('tagihanAir'));
			$tagihanListrik = preg_replace('/\D/', '', $this->input->post('tagihanListrik'));
			$nilaiRaport = $this->input->post('nilaiRaport');

			$dataUpdate = array(
				'nama' => $nama,
				'jk' => $jk,
				'nis' => $nis,
				'kelas_id' => $kelas,
				'tahun_angkatan' => $tahunAngkatan,
				// 'nama_beasiswa' => $namaBeasiswa,
				'tahun_beasiswa' => $tahunBeasiswa,
				'tanggungan_ortu' => $tanggunganOrtu,
				'penghasilan_ortu' => $penghasilanOrtu,
				'tagihan_air' => $tagihanAir,
				'tagihan_listrik' => $tagihanListrik,
				'nilai_raport' => $nilaiRaport,
			);
			$this->M_siswa->editDataSiswa($dataUpdate, $id);
			// redirect(base_url('Admin/index_admin'));
		}
	}

	public function index_detail_data($id)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['title'] = "Detail Data";
			$data['sidebar'] = 'index_data_siswa';
			$data['detail'] = $this->M_siswa->getDataSiswaDetail($id);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('detail/index', $data);
			$this->load->view('templates/footer');
		}
	}

	// tingkat

	public function index_data_tingkat($nama = null, $tabel = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['sidebar'] = 'index_data_kelas';
			$data['title'] = "Tambah Kelas";
			$data['tingkat'] = $this->M_siswa->data('tingkat');
			$data['nama'] = $nama;
			$data['tabel'] = $tabel;

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar');
			$this->load->view('admin/index_data_tingkat', $data);
			$this->load->view('templates/footer');
		}
	}

	public function index_input_tingkat($nama = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean|is_unique[tingkat.nama]|required');
			$this->form_validation->set_message('is_unique', 'Nama tingkat sudah ada!');
			if ($this->form_validation->run() == false) {
				$data['sidebar'] = 'index_data_kelas';
				$data['title'] = "Tambah Tingkat";
				$data['nama'] = $nama;
				$data['tabel'] = 'tingkat';
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar');
				$this->load->view('input/index_tambah_tingkat', $data);
				$this->load->view('templates/footer');
			} else {
				$this->input_data_tingkat();
			}
		}
	}

	public function input_data_tingkat()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {

			$nama = $this->input->post('nama');

			$data = array(
				'nama' => $nama,
			);
			$query = $this->M_siswa->inputDataTingkat($data);
		}
	}

	public function index_ubah_data_tingkat($id, $tabel = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$tingkat = $this->M_siswa->getDataDetail($id, 'tingkat');

			if ($this->input->post('nama') != $tingkat->nama) {
				$this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean|is_unique[tingkat.nama]|required');
				$this->form_validation->set_message('is_unique', 'Nama tingkat sudah ada!');
			} else {
				$this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean|required');
			}

			$this->form_validation->set_message('required', 'Field harus diisi!');

			if ($this->form_validation->run() == false) {
				$data['title'] = "Ubah Data";
				$data['sidebar'] = 'index_data_kelas';
				$data['tingkat'] = $tingkat;
				$data['tabel'] = $tabel;
				$data['nama'] = $tingkat->nama;
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar');
				$this->load->view('templates/topbar');
				$this->load->view('ubah/index_ubah_tingkat', $data);
				$this->load->view('templates/footer');
			} else {
				$this->edit_data_tingkat();
			}
		}
	}

	public function edit_data_tingkat()
	{

		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');

			$dataUpdate = array(
				'nama' => $nama,
			);

			$this->M_siswa->editDataTingkat($dataUpdate, $id);
		}
	}

	//jurusan

	public function index_data_jurusan($nama = null, $tabel = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['sidebar'] = 'index_data_kelas';
			$data['title'] = "Tambah Jurusan";
			$data['jurusan'] = $this->M_siswa->data('jurusan');
			$data['nama'] = $nama;
			$data['tabel'] = $tabel;

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar');
			$this->load->view('admin/index_data_jurusan', $data);
			$this->load->view('templates/footer');
		}
	}

	public function index_input_jurusan($nama = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean|is_unique[jurusan.nama]|required');
			$this->form_validation->set_message('is_unique', 'Nama jurusan sudah ada!');
			if ($this->form_validation->run() == false) {
				$data['sidebar'] = 'index_data_kelas';
				$data['title'] = "Tambah Jurusan";
				$data['nama'] = $nama;
				$data['tabel'] = 'jurusan';
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar');
				$this->load->view('input/index_tambah_jurusan', $data);
				$this->load->view('templates/footer');
			} else {
				$this->input_data_jurusan();
			}
		}
	}

	public function input_data_jurusan()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {

			$nama = $this->input->post('nama');

			$data = array(
				'nama' => $nama,
			);
			$query = $this->M_siswa->inputDataJurusan($data);
		}
	}

	public function index_ubah_data_jurusan($id, $tabel = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$jurusan = $this->M_siswa->getDataDetail($id, 'jurusan');

			if ($this->input->post('nama') != $jurusan->nama) {
				$this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean|is_unique[jurusan.nama]|required');
				$this->form_validation->set_message('is_unique', 'Nama jurusan sudah ada!');
			} else {
				$this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean|required');
			}

			$this->form_validation->set_message('required', 'Field harus diisi!');

			if ($this->form_validation->run() == false) {
				$data['title'] = "Ubah Data";
				$data['sidebar'] = 'index_data_kelas';
				$data['jurusan'] = $jurusan;
				$data['tabel'] = $tabel;
				$data['nama'] = $jurusan->nama;
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar');
				$this->load->view('templates/topbar');
				$this->load->view('ubah/index_ubah_jurusan', $data);
				$this->load->view('templates/footer');
			} else {
				$this->edit_data_jurusan();
			}
		}
	}

	public function edit_data_jurusan()
	{

		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');

			$dataUpdate = array(
				'nama' => $nama,
			);

			$this->M_siswa->editDataJurusan($dataUpdate, $id);
		}
	}

	//nama kelas

	public function index_data_nama_kelas($nama = null, $tabel = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['sidebar'] = 'index_data_kelas';
			$data['title'] = "Tambah Nama Kelas";
			$data['nama_kelas'] = $this->M_siswa->data('nama_kelas');
			$data['nama'] = $nama;
			$data['tabel'] = $tabel;

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar');
			$this->load->view('admin/index_data_nama_kelas', $data);
			$this->load->view('templates/footer');
		}
	}

	public function index_input_nama_kelas($nama = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean|is_unique[nama_kelas.nama]|required');
			$this->form_validation->set_message('is_unique', 'Nama Kelas sudah ada!');
			if ($this->form_validation->run() == false) {
				$data['sidebar'] = 'index_data_kelas';
				$data['title'] = "Tambah Nama Kelas";
				$data['nama'] = $nama;
				$data['tabel'] = 'nama_kelas';
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar');
				$this->load->view('input/index_tambah_nama_kelas', $data);
				$this->load->view('templates/footer');
			} else {
				$this->input_data_nama_kelas();
			}
		}
	}

	public function input_data_nama_kelas()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {

			$nama = $this->input->post('nama');

			$data = array(
				'nama' => $nama,
			);
			$query = $this->M_siswa->inputDataNamaKelas($data);
		}
	}

	public function index_ubah_data_nama_kelas($id, $tabel = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$nama_kelas = $this->M_siswa->getDataDetail($id, 'nama_kelas');

			if ($this->input->post('nama') != $nama_kelas->nama) {
				$this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean|is_unique[nama_kelas.nama]|required');
				$this->form_validation->set_message('is_unique', 'Nama nama_kelas sudah ada!');
			} else {
				$this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean|required');
			}

			$this->form_validation->set_message('required', 'Field harus diisi!');

			if ($this->form_validation->run() == false) {
				$data['title'] = "Ubah Data";
				$data['sidebar'] = 'index_data_kelas';
				$data['nama_kelas'] = $nama_kelas;
				$data['tabel'] = $tabel;
				$data['nama'] = $nama_kelas->nama;
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar');
				$this->load->view('templates/topbar');
				$this->load->view('ubah/index_ubah_nama_kelas', $data);
				$this->load->view('templates/footer');
			} else {
				$this->edit_data_nama_kelas();
			}
		}
	}

	public function edit_data_nama_kelas()
	{

		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');

			$dataUpdate = array(
				'nama' => $nama,
			);

			$this->M_siswa->editDataNamaKelas($dataUpdate, $id);
		}
	}

	//kelas

	public function index_input_kelas()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$this->form_validation->set_rules('tingkat_id', 'Tingkat', 'trim|xss_clean|required');
			$this->form_validation->set_rules('jurusan_id', 'Jurusan', 'trim|xss_clean|required');
			$this->form_validation->set_rules('nama_kelas_id', 'Nama', 'trim|xss_clean|required');
			$this->form_validation->set_message('is_unique', 'Nama sudah ada!');
			$this->form_validation->set_message('required', 'Field harus Diisi!');
			if ($this->form_validation->run() == false) {
				$data['sidebar'] = 'index_data_kelas';
				$data['title'] = "Tambah Kelas";
				$data['tingkat'] = $this->M_siswa->data('tingkat');
				$data['jurusan'] = $this->M_siswa->data('jurusan');
				$data['nama_kelas'] = $this->M_siswa->data('nama_kelas');

				// var_dump($tingkat);die;
				// $data['detail'] = $detail;
				$data['tabel'] = 'kelas';
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar');
				$this->load->view('input/index_tambah_kelas', $data);
				$this->load->view('templates/footer');
			} else {
				$this->input_data_kelas();
			}
		}
	}

	public function input_data_kelas()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$tingkat_id = $this->input->post('tingkat_id');
			$jurusan_id = $this->input->post('jurusan_id');
			$nama_kelas_id = $this->input->post('nama_kelas_id');

			$kelas = $this->M_siswa->data('kelas');
			// var_dump($kelas);
			// die;

			$data = array(
				'tingkat_id' => $tingkat_id,
				'jurusan_id' => $jurusan_id,
				'nama_kelas_id' => $nama_kelas_id,
			);

			foreach ($kelas as $key => $value) {
				if ($data['tingkat_id'] == $value->tingkat_id && $data['jurusan_id'] == $value->jurusan_id && $data['nama_kelas_id'] == $value->nama_kelas_id) {
					$this->session->set_flashdata('class_add_err_message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
					redirect(base_url('Admin/index_input_kelas'));
				}
			}

			$query = $this->M_siswa->inputDataKelas($data);
		}
	}

	public function index_ubah_data_kelas($id, $tabel = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {

			$kelas = $this->M_siswa->getDataDetail($id, 'kelas');
			$tingkat = $this->M_siswa->data('tingkat');
			$jurusan = $this->M_siswa->data('jurusan');
			$nama_kelas = $this->M_siswa->data('nama_kelas');

			if ($this->input->post('tingkat_id') != $kelas->tingkat_id) {
				$this->form_validation->set_rules('tingkat_id', 'Tingkat', 'trim|xss_clean|required');
			} else {
				$this->form_validation->set_rules('tingkat_id', 'Tingkat', 'trim|xss_clean|required');
			}

			if ($this->input->post('jurusan_id') != $kelas->jurusan_id) {
				$this->form_validation->set_rules('jurusan_id', 'Jurusan', 'trim|xss_clean|required');
			} else {
				$this->form_validation->set_rules('jurusan_id', 'Jurusan', 'trim|xss_clean|required');
			}

			if ($this->input->post('nama_kelas_id') != $kelas->nama_kelas_id) {
				$this->form_validation->set_rules('nama_kelas_id', 'Tingkat', 'trim|xss_clean|required');
			} else {
				$this->form_validation->set_rules('nama_kelas_id', 'Nama Kelas', 'trim|xss_clean|required');
			}

			$this->form_validation->set_message('required', 'Field harus diisi!');

			if ($this->form_validation->run() == false) {
				$data['title'] = "Ubah Data";
				$data['sidebar'] = 'index_data_kelas';
				$data['kelas'] = $kelas;
				$data['tabel'] = $tabel;
				// $data['nama'] = $kelas->nama;
				$data['tingkat'] = $tingkat;
				$data['jurusan'] = $jurusan;
				$data['nama_kelas'] = $nama_kelas;
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar');
				$this->load->view('templates/topbar');
				$this->load->view('ubah/index_ubah_kelas', $data);
				$this->load->view('templates/footer');
			} else {
				$this->edit_data_kelas($id);
			}
		}
	}

	public function edit_data_kelas($id)
	{

		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$id = $id;
			$tingkat_id = $this->input->post('tingkat_id');
			$jurusan_id = $this->input->post('jurusan_id');
			$nama_kelas_id = $this->input->post('nama_kelas_id');




			$kelas = $this->M_siswa->data('kelas');
			// var_dump($kelas);
			// die;

			$dataUpdate = array(
				'tingkat_id' => $tingkat_id,
				'jurusan_id' => $jurusan_id,
				'nama_kelas_id' => $nama_kelas_id,
			);

			// var_dump($dataUpdate);
			// die;

			foreach ($kelas as $key => $value) {
				if ($id != $value->id) {
					if ($dataUpdate['tingkat_id'] == $value->tingkat_id && $dataUpdate['jurusan_id'] == $value->jurusan_id && $dataUpdate['nama_kelas_id'] == $value->nama_kelas_id) {
						$this->session->set_flashdata('class_add_err_message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
						redirect(base_url('Admin/index_ubah_data_kelas/' . $id));
					}
				}
			}

			$this->M_siswa->editDataKelas($dataUpdate, $id);
		}
	}

	public function hapus($id, $nama)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$this->M_siswa->hapusDataSiswa($id, $nama);
		}
	}

	public function hapus_akun($id, $nama)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$this->M_siswa->hapusDataAkun($id, $nama);
		}
	}

	public function hapus_kelas($id, $nama, $tabel)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$this->M_siswa->hapusDataKelas($id, $nama, $tabel);
		}
	}

	public function hapus_data_kelas($id)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$this->M_siswa->hapusKelas($id);
		}
	}
}