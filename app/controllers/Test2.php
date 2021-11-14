<?php

class Test2 extends Controller {

	public function index()
	{
		$data['title'] = 'Halaman Test 2';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('test2/index', $data);
		$this->view('templates/footer');
	}
}