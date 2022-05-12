<?php

/**
 * Aplikasi ini dibuat oleh:
 * Isep Lutpi Nur (2113191079)
 * untuk memenuhi tugas mata kuliah Sistem Pendukung Keputusan.
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Puskesmas extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->page->setTitle('Puskesmas | SPK Metode SAW');
		$this->load->model('MKriteria');
		$this->load->model('MSubKriteria');
		$this->load->model('MPuskesmas');
		$this->load->model('MNilai');
		$this->page->setLoadJs('assets/js/puskesmas');
	}

	public function index()
	{
		$data['puskesmas'] = $this->MPuskesmas->getAll();
		loadPage('puskesmas/index', $data);
	}

	public function tambah($id = null)
	{

		if ($id == null) {
			if (count($_POST)) {
				$this->form_validation->set_rules('puskesmas', '', 'trim|required');
				if ($this->form_validation->run() == false) {
					$errors = $this->form_validation->error_array();
					$this->session->set_flashdata('errors', $errors);
					redirect(current_url());
				} else {

					$puskesmas = $this->input->post('puskesmas');
					$nilai = $this->input->post('nilai');
					$this->MPuskesmas->puskesmas = $puskesmas;
					if ($this->MPuskesmas->insert() == true) {
						$success = false;
						$kdPuskesmas = $this->MPuskesmas->getLastID()->kdPuskesmas;
						foreach ($nilai as $item => $value) {
							$this->MNilai->kdPuskesmas = $kdPuskesmas;
							$this->MNilai->kdKriteria = $item;
							$this->MNilai->nilai = $value;
							if ($this->MNilai->insert()) {
								$success = true;
							}
						}
						if ($success == true) {
							$this->session->set_flashdata('message', 'Berhasil menambah data.');
							redirect('puskesmas');
						} else {
							echo 'gagal';
						}
					}
				}
				//-----
			} else {
				$data['dataView'] = $this->getDataInsert();
				loadPage('puskesmas/tambah', $data);
			}
		} else {
			if (count($_POST)) {
				$kdPuskesmas = $this->uri->segment(3, 0);
				if ($kdPuskesmas > 0) {
					$puskesmas = $this->input->post('puskesmas');
					$puskesmas_asal = $this->input->post('puskesmas_asal');
					$nilai = $this->input->post('nilai');
					$where = array('kdPuskesmas' => $kdPuskesmas);
					$this->MPuskesmas->puskesmas = $puskesmas;
					if ($this->MPuskesmas->update($where) == true) {
						$success = false;
						foreach ($nilai as $item => $value) {
							$this->MNilai->kdPuskesmas = $kdPuskesmas;
							$this->MNilai->kdKriteria = $item;
							$this->MNilai->nilai = $value;
							if ($this->MNilai->update()) {
								$success = true;
							}
						}
						if ($success == true || $puskesmas_asal != $puskesmas) {
							$this->session->set_flashdata('message', 'Berhasil mengubah data.');
							redirect('puskesmas');
						} else {
							echo '<div class="container"><div class="alert alert-danger" role="alert"><strong>Gagal</strong>  Tidak ada data yang diubah.</div></div>';
						}
					}
				}
			}
			$data['dataView'] = $this->getDataInsert();
			$data['nilaiPuskesmas'] = $this->MNilai->getNilaiByUniveristas($id);
			loadPage('puskesmas/tambah', $data);
		}
	}

	private function getDataInsert()
	{
		$dataView = array();
		$kriteria = $this->MKriteria->getAll();
		foreach ($kriteria as $item) {
			$this->MSubKriteria->kdKriteria = $item->kdKriteria;
			$dataView[$item->kdKriteria] = array(
				'nama' => $item->kriteria,
				'data' => $this->MSubKriteria->getById()
			);
		}

		return $dataView;
	}

	public function delete($id)
	{
		if ($this->MNilai->delete($id) == true) {
			if ($this->MPuskesmas->delete($id) == true) {
				$this->session->set_flashdata('message', 'Berhasil menghapus data.');
				echo json_encode(array("status" => 'true'));
			}
		}
	}
}
