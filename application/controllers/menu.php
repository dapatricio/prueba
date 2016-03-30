<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{
	public function __construct() {
        parent::__construct();
    }

    public function index(){
    	$result["menus"] = $this->generic_model->get_all("menus");
    	//$result["noticias"] = $this->generic_model->get_all("noticias");
    	$this->load->view("view_menu",$result);
    }
    // public function inicio(){
    	
    // }
    public function contacto(){
        $result["menus"] = $this->generic_model->get_all("menus");
        //$result["noticias"] = $this->generic_model->get_all("noticias");
        $this->load->view("contacto",$result);
    }

    public function proyectos(){
        $result["menus"] = $this->generic_model->get_all("menus");
        //$result["noticias"] = $this->generic_model->get_all("noticias");
        $this->load->view("proyectos",$result);
    }
    public function clientes(){
        $result["menus"] = $this->generic_model->get_all("menus");
        //$result["noticias"] = $this->generic_model->get_all("noticias");
        $this->load->view("clientes",$result);
    }
    public function admin(){
        $result["menus"] = $this->generic_model->get_all("menus");
        //$result["noticias"] = $this->generic_model->get_all("noticias");
        $this->load->view("admin",$result);
    }
}