<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');


	}
	
	
	public function index() {
		$dados['titulo'] = 'Jm Sports';
        $this->load->view('home.php', $dados);

	}

	public function sobre() {
		$dados['sobre'] = 'Sobre - Jm Sports';
        $this->load->view('about.php', $dados);

	}

	public function contato() {
		$this->load->helper('form');
		$dados['contato'] = 'Contato - Jm Sports';
        $this->load->view('contact.html', $dados);

	}

	public function catalago() {
		$dados['catalago'] = 'Catalago - Jm Sports';
        $this->load->view('shop.html', $dados);

	}

	public function login() {
		$dados['login'] = 'Login - Jm Sports';
        $this->load->view('login2.html', $dados);

	}


}