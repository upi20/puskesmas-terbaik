<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{
	public function index()
	{
		$this->page->setTitle('SPK Univ Terbaik Metode SAW');
		loadPage('layouts/index');
	}
}
