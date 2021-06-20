<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homecon extends CI_Controller {



	public function index(){
	
		$this->load->view('templates/inicio');
	}

	public function crud(){

	    $this->load->model("home_model");
		$dados["lista"] =$this->home_model->index();
		$this->load->view('templates/home',$dados);
	}

	public function inserir(){

		$dadospost = $_POST;
		$this->load->model("home_model");
		$this->home_model->inserir($dadospost);
		redirect("homecon/crud");

	}
	public function alterar($idcliente){
		
		$this->load->model("home_model");
		$this->load->view('elements/header');
		$dados["infoalterar"] = $this->home_model->alterar($idcliente);
		$this->load->view('templates/crudalter',$dados);
	}

	public function update($idcliente){
		
	   $this->load->model("home_model");
	   $dado = $_POST;
	   $this->home_model->update($idcliente, $dado);
	   redirect("homecon/crud");

	}

	public function delete($idcliente){
		$this->load->model("home_model");
		$this->home_model->delete($idcliente);
		redirect("homecon/crud");
	}



}
