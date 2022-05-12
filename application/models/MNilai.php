<?php

/**
 * Aplikasi ini dibuat oleh:
 * Isep Lutpi Nur (2113191079)
 * untuk memenuhi tugas mata kuliah Sistem Pendukung Keputusan.
 */
class MNilai extends CI_Model
{

	public $kdPuskesmas;
	public $kdKriteria;
	public $nilai;

	public function __construct()
	{
		parent::__construct();
	}

	private function getTable()
	{
		return 'nilai';
	}

	private function getData()
	{
		$data = array(
			'kdPuskesmas' => $this->kdPuskesmas,
			'kdKriteria' => $this->kdKriteria,
			'nilai' => $this->nilai
		);

		return $data;
	}

	public function insert()
	{
		$status = $this->db->insert($this->getTable(), $this->getData());
		return $status;
	}

	public function getNilaiByUniveristas($id)
	{
		$query = $this->db->query(
			'select a.kdPuskesmas, a.puskesmas, b.kdKriteria, b.nilai from puskesmas a join nilai b on a.kdPuskesmas = b.kdPuskesmas where a.kdPuskesmas = ' . $id
		);
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$nilai[] = $row;
			}

			return $nilai;
		}
	}

	public function getNilaiUniveristas()
	{
		$query = $this->db->query(
			'select u.kdPuskesmas, u.puskesmas, k.kdKriteria, k.kriteria ,n.nilai from puskesmas u, nilai n, kriteria k where u.kdPuskesmas = n.kdPuskesmas AND k.kdKriteria = n.kdKriteria '
		);
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$nilai[] = $row;
			}

			return $nilai;
		}
	}

	public function update()
	{
		$get_result = $this->db->get_where($this->getTable(), ['kdPuskesmas' => $this->kdPuskesmas, 'kdKriteria' => $this->kdKriteria])->num_rows();
		if ($get_result) {
			$data = array('nilai' => $this->nilai);
			$this->db->where('kdPuskesmas', $this->kdPuskesmas);
			$this->db->where('kdKriteria', $this->kdKriteria);
			$this->db->update($this->getTable(), $data);
			return $this->db->affected_rows();
		} else {
			return $this->insert();
		}
	}

	public function delete($id)
	{
		$this->db->where('kdPuskesmas', $id);
		return $this->db->delete($this->getTable());
	}
}
