<?php

/**
 * Aplikasi ini dibuat oleh:
 * Isep Lutpi Nur (2113191079)
 * untuk memenuhi tugas mata kuliah Sistem Pendukung Keputusan.
 */

class MPuskesmas extends CI_Model
{

	public $kdPuskesmas;
	public $puskesmas;

	public function __construct()
	{
		parent::__construct();
	}

	private function getTable()
	{
		return 'puskesmas';
	}

	private function getData()
	{
		$data = array(
			'puskesmas' => $this->puskesmas
		);

		return $data;
	}

	public function getAll()
	{
		$puskesmas = array();
		$query = $this->db->get($this->getTable());
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$puskesmas[] = $row;
			}
		}
		return $puskesmas;
	}


	public function insert()
	{
		$this->db->insert($this->getTable(), $this->getData());
		return $this->db->insert_id();
	}

	public function update($where)
	{
		$status = $this->db->update($this->getTable(), $this->getData(), $where);
		return $status;
	}

	public function delete($id)
	{
		$this->db->where('kdPuskesmas', $id);
		return $this->db->delete($this->getTable());
	}

	public function getLastID()
	{
		$this->db->select('kdPuskesmas');
		$this->db->order_by('kdPuskesmas', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get($this->getTable());
		return $query->row();
	}
}
