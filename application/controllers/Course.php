<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();

	}

	public function list_()
	{
		$data = array(
				'title'    => 'List of Courses',
				'content'  => 'course/list_view',
			);

		$this->load->view('include/template', $data);
	}

	public function modal_content()
	{
		$data = array(
				'title'    => '',
				'filename' => 'sample_module.pdf'
			);

		$this->load->view('course/doc_content_view', $data);
	}

	public function exam_content()
	{
		$data = array(
				'title' => 'Sample Exam'
			);

		$this->load->view('course/exam_view', $data);
	}
}