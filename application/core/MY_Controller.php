<?php

/**
 * Aplikasi ini dibuat oleh:
 * Akbar Maulana M Tarumadoya (2113191073)
 * untuk memenuhi tugas mata kuliah Sistem Pendukung Keputusan.
 */
class MY_Controller extends CI_Controller
{

	public $data = array();
	public function __construct()
	{
		parent::__construct();

		$this->page->setLoadCss('assets/bootstrap/css/bootstrap.min');
		$this->page->setLoadJs('assets/jquery/jquery-3.2.1.min');
		$this->page->setLoadJs('assets/bootstrap/js/bootstrap.min');
	}
}
