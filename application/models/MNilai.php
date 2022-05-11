<?php

/**
 * Aplikasi ini dibuat oleh:
 * Akbar Maulana M Tarumadoya (2113191073)
 * untuk memenuhi tugas mata kuliah Sistem Pendukung Keputusan.
 */
class MNilai extends CI_Model
{

	public $kdUniversitas;
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
			'kdUniversitas' => $this->kdUniversitas,
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
			'select a.kdUniversitas, a.universitas, b.kdKriteria, b.nilai from universitas a join nilai b on a.kdUniversitas = b.kdUniversitas where a.kdUniversitas = ' . $id
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
			'select u.kdUniversitas, u.universitas, k.kdKriteria, k.kriteria ,n.nilai from universitas u, nilai n, kriteria k where u.kdUniversitas = n.kdUniversitas AND k.kdKriteria = n.kdKriteria '
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
		$get_result = $this->db->get_where($this->getTable(), ['kdUniversitas' => $this->kdUniversitas, 'kdKriteria' => $this->kdKriteria])->num_rows();
		if ($get_result) {
			$data = array('nilai' => $this->nilai);
			$this->db->where('kdUniversitas', $this->kdUniversitas);
			$this->db->where('kdKriteria', $this->kdKriteria);
			$this->db->update($this->getTable(), $data);
			return $this->db->affected_rows();
		} else {
			return $this->insert();
		}
	}

	public function delete($id)
	{
		$this->db->where('kdUniversitas', $id);
		return $this->db->delete($this->getTable());
	}
}
