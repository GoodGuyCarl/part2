<?php

class Assignments extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Assignment');
	}
	
	public function index() {
		$data = [
			'title' => 'All Assignments',
			'view' => 'assignments/index',
			'assignments' => $this->Assignment->all(),
			'rows' => 10,

		];
		$this->load->view('layout', $data);
	}

	public function show($num) {
		$data = [
			'title' => 'All Assignments',
			'view' => 'assignments/index',
			'assignments' => $this->Assignment->all($num),
			'rows' => $this->Assignment->getRows($num),
		];
		$this->load->view('layout', $data);
	}
}
