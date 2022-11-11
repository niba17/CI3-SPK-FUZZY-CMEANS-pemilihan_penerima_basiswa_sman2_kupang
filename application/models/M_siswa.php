<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Model
{

	public function semuaData()
	{
		return $this->db->get('siswa')->result();
	}

	public function semuaDataAkun()
	{
		return $this->db->get('admin')->result();
	}

	public function semuaDataAdmin()
	{
		return $this->db->get('admin')->result();
	}

	public function getRandom()
	{
		return [
			'random' => $this->db->get('random')->result_array(),
			'random2' =>  $this->db->get('random2')->result_array()
		];
	}

	public function semuaDataArray()
	{
		return $this->db->get('siswa')->result_array();
	}

	public function inputDataAkun($data)
	{
		$query = $this->db->insert('admin', $data);
		if ($query == true) {
			$this->session->set_flashdata('success_message', '<div class="alert alert-success" role="alert">Sukses!</div>');
			redirect(base_url('Admin/index_data_akun/' . $data['nama']));
		} else {
			$this->session->set_flashdata('error_message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
			redirect(base_url('Admin/index_input/' . $data['nama']));
		}
	}

	public function inputDataSiswa($data)
	{
		$query = $this->db->insert('siswa', $data);
		if ($query == true) {
			$this->session->set_flashdata('success_message', '<div class="alert alert-success" role="alert">Sukses!</div>');
			redirect(base_url('Admin/index_data_siswa/' . $data['nama']));
		} else {
			$this->session->set_flashdata('error_message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
			redirect(base_url('Admin/index_input/' . $data['nama']));
		}
	}

	public function editDataSiswa($dataUpdate, $id)
	{
		$this->db->where('id_siswa', $id);
		$query = $this->db->update('siswa', $dataUpdate);

		if ($query == true) {
			$this->session->set_flashdata('success_up_message', '<div class="alert alert-success" role="alert">Sukses!</div>');
			redirect(base_url('Admin/index_data_siswa/' . $dataUpdate['nama']));
		} else {
			$this->session->set_flashdata('error_up_message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
			redirect(base_url('Admin/index_ubah_data/' . $id));
		}
	}

	public function editDataAkun($dataUpdate, $id)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('admin', $dataUpdate);
		if ($query == true) {
			$this->session->set_flashdata('acc_success_up_message', '<div class="alert alert-success" role="alert">Sukses!</div>');
			redirect(base_url('Admin/index_data_akun/' . $dataUpdate['name']));
		} else {
			$this->session->set_flashdata('acc_error_up_message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
			redirect(base_url('Admin/index_ubah_akun/' . $id));
		}
	}

	public function getDataSiswaDetail($id)
	{
		$this->db->where('id_siswa', $id);
		return $this->db->get('siswa')->row();
	}

	public function hapusDataSiswa($id, $nama)
	{
		$this->db->where('id_siswa', $id);
		$query = $this->db->delete('siswa');
		if ($query == true) {
			$this->session->set_flashdata('delete_message', '<div class="alert alert-success" role="alert">Berhasil!</div>');
			redirect(base_url('Admin/index_data_siswa/' . $nama));
		}
	}

	public function hapusDataAkun($id, $nama)
	{
		$this->db->where('id', $id);
		$query = $this->db->delete('admin');
		if ($query == true) {
			$this->session->set_flashdata('acc_delete_message', '<div class="alert alert-success" role="alert">Berhasil!</div>');
			redirect(base_url('Admin/index_data_akun/' . $nama));
		}
	}

	public function CountRow()
	{
		return $this->db->count_all('siswa');
	}

	public function bobot()
	{
		$data['siswa'] = $this->M_siswa->SemuaData();
		$data['baris'] = $this->M_siswa->CountRow();
		$data['bobot_jt_ortu'] = [];
		$data['bobot_p_ortu'] = [];
		$data['bobot_ta'] = [];
		$data['bobot_tl'] = [];
		$data['bobot_nr'] = [];

		for ($i = 0; $i < $data['baris']; $i++) {
			if ($data['siswa'][$i]->tanggungan_ortu == 1) {
				$data['bobot_jt_ortu'][$i] = 0;
			}
			if ($data['siswa'][$i]->tanggungan_ortu == 2) {
				$data['bobot_jt_ortu'][$i] = 0.25;
			}
			if ($data['siswa'][$i]->tanggungan_ortu == 3) {
				$data['bobot_jt_ortu'][$i] = 0.5;
			}
			if ($data['siswa'][$i]->tanggungan_ortu == 4) {
				$data['bobot_jt_ortu'][$i] = 0.75;
			}
			if ($data['siswa'][$i]->tanggungan_ortu > 4) {
				$data['bobot_jt_ortu'][$i] = 1;
			}
			if ($data['siswa'][$i]->penghasilan_ortu >= 5000000) {
				$data['bobot_p_ortu'][$i] = 0;
			}
			if ($data['siswa'][$i]->penghasilan_ortu >= 3000000 && $data['siswa'][$i]->penghasilan_ortu < 5000000) {
				$data['bobot_p_ortu'][$i] = 0.25;
			}
			if ($data['siswa'][$i]->penghasilan_ortu >= 1500000 && $data['siswa'][$i]->penghasilan_ortu < 3000000) {
				$data['bobot_p_ortu'][$i] = 0.5;
			}
			if ($data['siswa'][$i]->penghasilan_ortu >= 1000000 && $data['siswa'][$i]->penghasilan_ortu < 1500000) {
				$data['bobot_p_ortu'][$i] = 0.75;
			}
			if ($data['siswa'][$i]->penghasilan_ortu < 1000000) {
				$data['bobot_p_ortu'][$i] = 1;
			}

			if ($data['siswa'][$i]->tagihan_air >= 300000) {
				$data['bobot_ta'][$i] = 0;
			}
			if ($data['siswa'][$i]->tagihan_air >= 200000 && $data['siswa'][$i]->tagihan_air < 300000) {
				$data['bobot_ta'][$i] = 0.25;
			}
			if ($data['siswa'][$i]->tagihan_air >= 100000 && $data['siswa'][$i]->tagihan_air < 200000) {
				$data['bobot_ta'][$i] = 0.5;
			}
			if ($data['siswa'][$i]->tagihan_air >= 50000 && $data['siswa'][$i]->tagihan_air < 100000) {
				$data['bobot_ta'][$i] = 0.75;
			}
			if ($data['siswa'][$i]->tagihan_air < 50000) {
				$data['bobot_ta'][$i] = 1;
			}

			if ($data['siswa'][$i]->tagihan_listrik >= 300000) {
				$data['bobot_tl'][$i] = 0;
			}
			if ($data['siswa'][$i]->tagihan_listrik >= 200000 && $data['siswa'][$i]->tagihan_listrik < 300000) {
				$data['bobot_tl'][$i] = 0.25;
			}
			if ($data['siswa'][$i]->tagihan_listrik >= 100000 && $data['siswa'][$i]->tagihan_listrik < 200000) {
				$data['bobot_tl'][$i] = 0.5;
			}
			if ($data['siswa'][$i]->tagihan_listrik >= 50000 && $data['siswa'][$i]->tagihan_listrik < 100000) {
				$data['bobot_tl'][$i] = 0.75;
			}
			if ($data['siswa'][$i]->tagihan_listrik < 50000) {
				$data['bobot_tl'][$i] = 1;
			}


			if ($data['siswa'][$i]->nilai_raport <= 60) {
				$data['bobot_nr'][$i] = 0;
			}
			if ($data['siswa'][$i]->nilai_raport > 60 && $data['siswa'][$i]->nilai_raport <= 69.99) {
				$data['bobot_nr'][$i] = 0.25;
			}
			if ($data['siswa'][$i]->nilai_raport > 69.99 && $data['siswa'][$i]->nilai_raport <= 79.99) {
				$data['bobot_nr'][$i] = 0.5;
			}
			if ($data['siswa'][$i]->nilai_raport > 79.99 && $data['siswa'][$i]->nilai_raport <= 89.99) {
				$data['bobot_nr'][$i] = 0.75;
			}
			if ($data['siswa'][$i]->nilai_raport > 89.99 && $data['siswa'][$i]->nilai_raport <= 100) {
				$data['bobot_nr'][$i] = 1;
			}
		}

		$data1 = array();
		for ($i = 0; $i < $data['baris']; $i++) {
			if ($i == 0) {
				$this->db->empty_table('kriteria');
			}
			$data1 = array(
				'tanggungan_ortu' => $data['bobot_jt_ortu'][$i],
				'penghasilan_ortu' => $data['bobot_p_ortu'][$i],
				'tagihan_air' => $data['bobot_ta'][$i],
				'tagihan_listrik' => $data['bobot_tl'][$i],
				'nilai_raport' => $data['bobot_nr'][$i]
			);
			$this->db->where('id_kriteria');
			$this->db->insert('kriteria', $data1);
		}
		return array(
			'0' => $data['bobot_jt_ortu'],
			'1' => $data['bobot_p_ortu'],
			'2' => $data['bobot_ta'],
			'3' => $data['bobot_tl'],
			'4' => $data['bobot_nr']
		);
	}

	public function random()
	{
		$data['random'] = [];
		$data['baris'] = $this->M_siswa->CountRow();
		for ($i = 0; $i < $data['baris']; $i++) :
			$data['random'][$i] = '0.' . random_string('numeric', 3);
		endfor;
		$data1 = array();
		for ($i = 0; $i < $data['baris']; $i++) {
			if ($i == 0) {
				$this->db->empty_table('random');
			}
			$data1 = array(
				'data' => $data['random'][$i]
			);
			$this->db->where('id');
			$this->db->insert('random', $data1);
		}
		return $data['random'];
	}

	public function random2()
	{
		$data['random2'] = [];
		$data['baris'] = $this->M_siswa->CountRow();
		for ($i = 0; $i < $data['baris']; $i++) :
			1 - $data['random2'][$i] = '0.' . random_string('numeric', 3);
		endfor;
		$data1 = array();
		for ($i = 0; $i < $data['baris']; $i++) {
			if ($i == 0) {
				$this->db->empty_table('random2');
			}
			$data1 = array(
				'data' => $data['random2'][$i]
			);
			$this->db->where('id');
			$this->db->insert('random2', $data1);
		}
		return $data['random2'];
	}

	public function cobaRandom()
	{
		return [
			0 => ['data' => "0.897"],
			1 => ['data' => "0.234"],
			2 => ['data' => "0.546"],
			3 => ['data' => "0.297"],
			4 => ['data' => "0.332"],
			5 => ['data' => "0.734"],
			6 => ['data' => "0.897"],
			7 => ['data' => "0.278"],
			8 => ['data' => "0.556"],
			9 => ['data' => "0.338"]
		];
	}

	public function cobaRandom2()
	{
		return [
			0 => ['data' => "0.103"],
			1 => ['data' => "0.766"],
			2 => ['data' => "0.454"],
			3 => ['data' => "0.703"],
			4 => ['data' => "0.668"],
			5 => ['data' => "0.266"],
			6 => ['data' => "0.103"],
			7 => ['data' => "0.722"],
			8 => ['data' => "0.444"],
			9 => ['data' => "0.662"]
		];
	}

	public function literasi($key = null)
	{
		$data['baris'] = $this->M_siswa->CountRow();
		$data['random'][] = $this->db->get('random')->result_array();
		$data['random2'][] = $this->db->get('random2')->result_array();
		// $data['random'][] = $this->cobaRandom();
		// $data['random2'][] = $this->cobaRandom2();

		// $data['random'] = [];
		// $data['random2'] = [];

		// print_r($data['random']);
		// echo ('<br>');
		// print_r($data['random2']);
		// die;
		$data['bobot'] = $this->M_siswa->bobot();
		$data['x1'] = $data['bobot']['0'];
		$data['x2'] = $data['bobot']['1'];
		$data['x3'] = $data['bobot']['2'];
		$data['x4'] = $data['bobot']['3'];
		$data['x5'] = $data['bobot']['4'];

		$data['P0'] = [];
		$data['P1'] = [];
		$data['P2'] = [];
		$data['P3'] = [];
		$data['P4'] = [];
		$data['P5'] = [];

		$data['P0_2'] = [];
		$data['P1_2'] = [];
		$data['P2_2'] = [];
		$data['P3_2'] = [];
		$data['P4_2'] = [];
		$data['P5_2'] = [];

		$JP0 = 0;
		$JP1 = 0;
		$JP2 = 0;
		$JP3 = 0;
		$JP4 = 0;
		$JP5 = 0;

		$JP0_2 = 0;
		$JP1_2 = 0;
		$JP2_2 = 0;
		$JP3_2 = 0;
		$JP4_2 = 0;
		$JP5_2 = 0;

		$PC1 = 0;
		$PC2 = 0;
		$PC3 = 0;
		$PC4 = 0;
		$PC5 = 0;

		$PC1_2 = 0;
		$PC2_2 = 0;
		$PC3_2 = 0;
		$PC4_2 = 0;
		$PC5_2 = 0;

		$data['C1P1'] = [];
		$data['C1P2'] = [];
		$data['C1P3'] = [];
		$data['C1P4'] = [];
		$data['C1P5'] = [];
		$data['TC1'] = [];

		$data['C2P1'] = [];
		$data['C2P2'] = [];
		$data['C2P3'] = [];
		$data['C2P4'] = [];
		$data['C2P5'] = [];
		$data['TC2'] = [];

		$data['TPC12'] = [];

		$TTPC12 = 0;
		$data['TMNU'] = [];

		$data['error'][0] = 1;
		$data['f0'] = [];
		$literasi = 0;
		$error_terkecil = 0.01;

		if ($key == null) {
			$literasi = 999;
		} else {
			$literasi = $key + 1;
		}

		$literasi2 = 0;
		$index = 0;

		for ($j = 0; $j < $literasi; $j++) :
			$JP0 = 0;
			$JP1 = 0;
			$JP2 = 0;
			$JP3 = 0;
			$JP4 = 0;
			$JP5 = 0;

			$JP0_2 = 0;
			$JP1_2 = 0;
			$JP2_2 = 0;
			$JP3_2 = 0;
			$JP4_2 = 0;
			$JP5_2 = 0;

			$PC1 = 0;
			$PC2 = 0;
			$PC3 = 0;
			$PC4 = 0;
			$PC5 = 0;

			$PC1_2 = 0;
			$PC2_2 = 0;
			$PC3_2 = 0;
			$PC4_2 = 0;
			$PC5_2 = 0;

			$TTPC12 = 0;

			//logika perhitungan fcm
			for ($i = 0; $i < $data['baris']; $i++) :

				//cluster 1
				// $data['P0'][$i] = $data['random'][$index][$i] * $data['random'][$index][$i];
				$data['P0'][$i] = $data['random'][$index][$i]['data'] * $data['random'][$index][$i]['data'];
				$data['P1'][$i] = $data['P0'][$i] * $data['x1'][$i];
				$data['P2'][$i] = $data['P0'][$i] * $data['x2'][$i];
				$data['P3'][$i] = $data['P0'][$i] * $data['x3'][$i];
				$data['P4'][$i] = $data['P0'][$i] * $data['x4'][$i];
				$data['P5'][$i] = $data['P0'][$i] * $data['x5'][$i];
				$JP0 = $JP0 + $data['P0'][$i];
				$JP1 = $JP1 + $data['P1'][$i];
				$JP2 = $JP2 + $data['P2'][$i];
				$JP3 = $JP3 + $data['P3'][$i];
				$JP4 = $JP4 + $data['P4'][$i];
				$JP5 = $JP5 + $data['P5'][$i];

				//cluster 2
				// $data['P0_2'][$i] = $data['random2'][$index][$i] * $data['random2'][$index][$i];
				$data['P0_2'][$i] = $data['random2'][$index][$i]['data'] * $data['random2'][$index][$i]['data'];
				$data['P1_2'][$i] = $data['P0_2'][$i] * $data['x1'][$i];
				$data['P2_2'][$i] = $data['P0_2'][$i] * $data['x2'][$i];
				$data['P3_2'][$i] = $data['P0_2'][$i] * $data['x3'][$i];
				$data['P4_2'][$i] = $data['P0_2'][$i] * $data['x4'][$i];
				$data['P5_2'][$i] = $data['P0_2'][$i] * $data['x5'][$i];
				$JP0_2 = $JP0_2 + $data['P0_2'][$i];
				$JP1_2 = $JP1_2 + $data['P1_2'][$i];
				$JP2_2 = $JP2_2 + $data['P2_2'][$i];
				$JP3_2 = $JP3_2 + $data['P3_2'][$i];
				$JP4_2 = $JP4_2 + $data['P4_2'][$i];
				$JP5_2 = $JP5_2 + $data['P5_2'][$i];
			endfor;

			//pusat cluster 1 & 2
			$PC1 =  $JP1 / $JP0;
			$PC2 =  $JP2 / $JP0;
			$PC3 =  $JP3 / $JP0;
			$PC4 =  $JP4 / $JP0;
			$PC5 =  $JP5 / $JP0;
			$PC1_2 =  $JP1_2 / $JP0_2;
			$PC2_2 =  $JP2_2 / $JP0_2;
			$PC3_2 =  $JP3_2 / $JP0_2;
			$PC4_2 =  $JP4_2 / $JP0_2;
			$PC5_2 =  $JP5_2 / $JP0_2;
			$index++;

			for ($k = 0; $k < $data['baris']; $k++) :

				//fungsi objektif cluster 1 
				$data['C1P1'][$k] = ($data['x1'][$k] - $PC1) * ($data['x1'][$k] - $PC1);
				$data['C1P2'][$k] = ($data['x2'][$k] - $PC2) * ($data['x2'][$k] - $PC2);
				$data['C1P3'][$k] = ($data['x3'][$k] - $PC3) * ($data['x3'][$k] - $PC3);
				$data['C1P4'][$k] = ($data['x4'][$k] - $PC4) * ($data['x4'][$k] - $PC4);
				$data['C1P5'][$k] = ($data['x5'][$k] - $PC5) * ($data['x5'][$k] - $PC5);
				$data['TC1'][$k] = $data['C1P1'][$k] + $data['C1P2'][$k] + $data['C1P3'][$k] + $data['C1P4'][$k] + $data['C1P5'][$k];

				//fungsi objektif cluster 1 
				$data['C2P1'][$k] = ($data['x1'][$k] - $PC1_2) * ($data['x1'][$k] - $PC1_2);
				$data['C2P2'][$k] = ($data['x2'][$k] - $PC2_2) * ($data['x2'][$k] - $PC2_2);
				$data['C2P3'][$k] = ($data['x3'][$k] - $PC3_2) * ($data['x3'][$k] - $PC3_2);
				$data['C2P4'][$k] = ($data['x4'][$k] - $PC4_2) * ($data['x4'][$k] - $PC4_2);
				$data['C2P5'][$k] = ($data['x5'][$k] - $PC5_2) * ($data['x5'][$k] - $PC5_2);
				$data['TC2'][$k] = $data['C2P1'][$k] + $data['C2P2'][$k] + $data['C2P3'][$k] + $data['C2P4'][$k] + $data['C2P5'][$k];

				//total pusat cluster 1&2 
				$data['TPC12'][$k] = ($data['TC1'][$k] * $data['P0'][$k]) + ($data['TC2'][$k] * $data['P0_2'][$k]);

				//fungsi objektif total pusat cluster 1 & 2
				$TTPC12 = $TTPC12 + $data['TPC12'][$k];

				//memperbaharui nilai U
				$data['TMNU'][$k] = $data['C1P1'][$k] + $data['C1P2'][$k] + $data['C1P3'][$k] + $data['C1P4'][$k] + $data['C1P5'][$k] + $data['C2P1'][$k] + $data['C2P2'][$k] + $data['C2P3'][$k] + $data['C2P4'][$k] + $data['C2P5'][$k];

				//nilai u baru
				// $data['random'][$index][$k] = $data['TC1'][$k] / $data['TMNU'][$k];
				// $data['random2'][$index][$k] = $data['TC2'][$k] / $data['TMNU'][$k];
				$data['random'][$index][$k]['data'] = $data['TC1'][$k] / $data['TMNU'][$k];
				$data['random2'][$index][$k]['data'] = $data['TC2'][$k] / $data['TMNU'][$k];
			endfor;

			$data['f0'][$j] = $TTPC12;
			if ($j > 0) {
				$data['error'][$j] = $data['f0'][$j - 1] - $data['f0'][$j];
			}
			$literasi2++;
			if ($data['error'][$j] < $error_terkecil) {
				$literasi = 0;
			}
		endfor;

		$data1 = array();

		for ($i = 0; $i < $data['baris']; $i++) {
			if ($i == 0) {
				$this->db->empty_table('perhitungan');
			}
			$data1 = array(
				'matrix_x' => $data['x1'][$i],
				'matrix_u' => $data['x2'][$i],
				'p_total_f_objektif' => $data['TPC12'][$i],
			);
			$this->db->where('id_perhitungan');
			$this->db->insert('perhitungan', $data1);
		}

		return array(
			'0' => $data['P0'],
			'1' => $data['P1'],
			'2' => $data['P2'],
			'3' => $data['P3'],
			'4' => $data['P4'],
			'5' => $data['P5'],
			'6' => $JP0,
			'7' => $JP1,
			'8' => $JP2,
			'9' => $JP3,
			'10' => $JP4,
			'11' => $JP5,
			'12' => $PC1,
			'13' => $PC2,
			'14' => $PC3,
			'15' => $PC4,
			'16' => $PC5,

			'17' => $data['P0_2'],
			'18' => $data['P1_2'],
			'19' => $data['P2_2'],
			'20' => $data['P3_2'],
			'21' => $data['P4_2'],
			'22' => $data['P5_2'],
			'23' => $JP0_2,
			'24' => $JP1_2,
			'25' => $JP2_2,
			'26' => $JP3_2,
			'27' => $JP4_2,
			'28' => $JP5_2,
			'29' => $PC1_2,
			'30' => $PC2_2,
			'31' => $PC3_2,
			'32' => $PC4_2,
			'33' => $PC5_2,

			'34' => $data['C1P1'],
			'35' => $data['C1P2'],
			'36' => $data['C1P3'],
			'37' => $data['C1P4'],
			'38' => $data['C1P5'],
			'39' => $data['TC1'],

			'40' => $data['C2P1'],
			'41' => $data['C2P2'],
			'42' => $data['C2P3'],
			'43' => $data['C2P4'],
			'44' => $data['C2P5'],
			'45' => $data['TC2'],

			'46' => $data['TPC12'],
			'47' => $TTPC12,
			'48' => $data['TMNU'],
			'49' => $literasi,
			'50' => $literasi2,
			'51' => $data['error'],
			'52' => $data['f0'],
			'53' => $data['random'],
			'54' => $data['random2']
		);
	}
}