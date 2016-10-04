<?php
require_once 'model/m_loggin.php';

class Principal_Controller{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Loggin();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/inicia_sesion.php';
        require_once 'view/footer.php';
    }
	
	public function Inicia(){
		
        require_once 'view/headersystem.php';
        require_once 'view/pplsystem.php';
        require_once 'view/footer.php';
    }
	
	public function cargar($user,$pass){	
		if(preg_match("/(^[a-z]{1,20})(?!\s)([\w]{0,20}$)/i",$user)){ 
			$this->user=strtolower(htmlentities(trim(strip_tags($user))));		
			$this->pass=md5($pass);			
			$this->logeate();
		}
		else{			
			$this->retorno="formato_invalido";			
		}	
		return $this->retorno;						
	}
	
	public function Salir(){
        	session_start();
	        session_destroy();
			header('Location: index.php');
			exit(0);            
    }
    
}