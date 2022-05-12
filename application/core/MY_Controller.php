<?php

/**
 * Aplikasi ini dibuat oleh:
 * Isep Lutpi Nur (2113191079)
 * untuk memenuhi tugas mata kuliah Sistem Pendukung Keputusan.
 */
class MY_Controller extends CI_Controller
{

	public $data = array();
	public function __construct()
	{
		parent::__construct();
		$this->page->setLoadCss('assets/admin/vendor/fontawesome-free/css/all.min');
		$this->page->setLoadCss('assets/admin/css/sb-admin-2.min');
		$this->page->setLoadCss('assets/admin/vendor/datatables/dataTables.bootstrap4.min');
		$this->page->setLoadJs('assets/admin/vendor/jquery/jquery.min');
		$this->page->setLoadJs('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min');
		$this->page->setLoadJs('assets/admin/vendor/jquery-easing/jquery.easing.min');
		$this->page->setLoadJs('assets/admin/js/sb-admin-2.min');
		$this->page->setLoadJs('assets/admin/vendor/datatables/jquery.dataTables.min');
		$this->page->setLoadJs('assets/admin/vendor/datatables/dataTables.bootstrap4.min');
	}
}
