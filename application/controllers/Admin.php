<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index_admin()
	{
		$data['sidebar'] = 'home';
		$data['title'] = "Home";
		$data['siswa'] = $this->M_siswa->SemuaData();
		$data['admin'] = $this->M_siswa->semuaDataAdmin();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar');
		$this->load->view('admin/index_admin', $data);
		$this->load->view('templates/footer');
	}

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

	public function index_data_kelas($nama = null)
	{
		$data['sidebar'] = 'index_data_kelas';
		$data['title'] = "Data Kelas";
		// $data['kelas'] = $this->M_siswa->SemuaData();
		$data['nama'] = $nama;

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar');
		$this->load->view('admin/index_data_kelas', $data);

		$this->load->view('templates/footer');
	}

	public function index_data_siswa($nama = null)
	{
		$data['sidebar'] = 'index_data_siswa';
		$data['title'] = "Data Siswa";
		$data['siswa'] = $this->M_siswa->SemuaData();
		$data['nama'] = $nama;

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar');
		$this->load->view('admin/index_data_siswa', $data);
		$this->load->view('templates/footer');
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

	public function index_input($nama = null)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$this->form_validation->set_rules('name', 'Nama', 'trim|xss_clean|is_unique[siswa.nama]|required');
			$this->form_validation->set_rules('nis', 'NIS', 'trim|xss_clean|is_unique[siswa.nis]|required');
			$this->form_validation->set_rules('kelas', 'Kelas', 'trim|xss_clean|required');
			$this->form_validation->set_rules('tahunAngkatan', 'Tahun Angkatan', 'trim|xss_clean|required');
			$this->form_validation->set_rules('namaBeasiswa', 'Beasiswa', 'trim|xss_clean|required');
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
				'password' => md5($password)
			);
			$query = $this->M_siswa->inputDataAkun($data);
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
			$kelas = $this->input->post('kelas');
			$tahunAngkatan = $this->input->post('tahunAngkatan');
			$namaBeasiswa = $this->input->post('namaBeasiswa');
			$tahunBeasiswa = preg_replace('/\D/', '', $this->input->post('tahunBeasiswa'));
			$tanggunganOrtu = preg_replace('/\D/', '', $this->input->post('tanggunganOrtu'));
			$penghasilanOrtu = preg_replace('/\D/', '', $this->input->post('penghasilanOrtu'));
			$tagihanAir = preg_replace('/\D/', '', $this->input->post('tagihanAir'));
			$tagihanListrik = preg_replace('/\D/', '', $this->input->post('tagihanListrik'));
			$nilaiRaport = $this->input->post('nilaiRaport');

			$data = array(
				'nama' => $name,
				'jk' => $jk,
				'nis' => $nis,
				'kelas' => $kelas,
				'tahun_angkatan' => $tahunAngkatan,
				'nama_beasiswa' => $namaBeasiswa,
				'tahun_beasiswa' => $tahunBeasiswa,
				'tanggungan_ortu' => $tanggunganOrtu,
				'penghasilan_ortu' => $penghasilanOrtu,
				'tagihan_air' => $tagihanAir,
				'tagihan_listrik' => $tagihanListrik,
				'nilai_raport' => $nilaiRaport,
				'tanggungan_ortu' => $tanggunganOrtu,
				'penghasilan_ortu' => $penghasilanOrtu,
				'tagihan_air' => $tagihanAir,
				'tagihan_listrik' => $tagihanListrik,
				'nilai_raport' => $nilaiRaport
			);
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
			if ($this->input->post('kelas') != $siswa_id->kelas) {
				$this->form_validation->set_rules('kelas', 'Kelas', 'trim|xss_clean|required');
			}
			if ($this->input->post('tahunAngkatan') != $siswa_id->tahun_angkatan) {
				$this->form_validation->set_rules('tahunAngkatan', 'Tahun Angkatan', 'trim|xss_clean|numeric|required');
			}
			if ($this->input->post('namaBeasiswa') != $siswa_id->nama_beasiswa) {
				$this->form_validation->set_rules('namaBeasiswa', 'Beasiswa', 'trim|xss_clean|required');
			}
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
				$data_id = array('siswa' => $siswa_id);
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar');
				$this->load->view('templates/topbar');
				$this->load->view('ubah/index', $data_id);
				$this->load->view('templates/footer');
			} else {
				$this->edit_data();
			}
		}
	}

	public function index_ubah_data_akun($id)
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$akun = $this->M_siswa->semuaDataAkun($id);
			// var_dump($akun);
			// die;
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

	public function edit_data()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$id = $this->input->post('id');
			$nis = preg_replace('/\D/', '', $this->input->post('nis'));
			$nama = $this->input->post('name');
			$jk = $this->input->post('jk');
			$kelas = $this->input->post('kelas');
			$tahunAngkatan = preg_replace('/\D/', '', $this->input->post('tahunAngkatan'));
			$namaBeasiswa = $this->input->post('namaBeasiswa');
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
				'kelas' => $kelas,
				'tahun_angkatan' => $tahunAngkatan,
				'nama_beasiswa' => $namaBeasiswa,
				'tahun_beasiswa' => $tahunBeasiswa,
				'tanggungan_ortu' => $tanggunganOrtu,
				'penghasilan_ortu' => $penghasilanOrtu,
				'tagihan_air' => $tagihanAir,
				'tagihan_listrik' => $tagihanListrik,
				'nilai_raport' => $nilaiRaport
			);
			$this->M_siswa->editDataSiswa($dataUpdate, $id);
			// redirect(base_url('Admin/index_admin'));
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
				'password' => md5($password)
			);

			$this->M_siswa->editDataAkun($dataUpdate, $id);
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

	public function index_print()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('Autentifikasi/index_login');
		} else {
			$data['siswa'] = $this->M_siswa->semuaDataArray();
			$data['literasi'] = $this->M_siswa->literasi();
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

			// print_r($tanggal . ' ' . $waktu);

			// $this->load->view('user/index_print', $data);

			$data['tahun'] = $tahun;
			$data['tanggal'] = $tanggal;
			$data['waktu'] = $waktu;
			$data['title'] = "Halaman Print";
			$this->load->view('templates/header', $data);
			$this->load->view('print/index_print', $data);
			$this->load->view('templates/footer');
		}
	}
}