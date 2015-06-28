<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('forum/header');
		$this->load->view('forum/index');
		$this->load->view('forum/footer');
	}

	public function alpha(){
		$this->load->view('forum/header');
		$this->load->view('forum/index_alpha');
		$this->load->view('forum/footer');
	}

	public function forum_kuliah(){
		$this->load->view('forum/header');
		$this->load->view('forum/kuliah');
		$this->load->view('forum/footer');
	}

	public function forum_bebas(){
		$this->load->view('forum/header');
		$this->load->view('forum/bebas');
		$this->load->view('forum/footer');
	}

	public function subforum(){
		$this->load->view('forum/header');
		$this->load->view('forum/subforum');
		$this->load->view('forum/footer');
	}
    
    public function thread(){
		$this->load->view('forum/header');
		$this->load->view('forum/thread');
		$this->load->view('forum/footer');
	}

}
