<?php
require_once 'model/m_servicetype.php';

class Service_Controller{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Servicetype();
    }
    
    public function Index(){
        require_once 'view/headersystem.php';
        require_once 'view/service/list_service.php';
        require_once 'view/footer.php';
    }
	
	public function NewService(){
        require_once 'view/headersystem.php';
        require_once 'view/service/new_service.php';
        require_once 'view/footer.php';
    }
	
    public function edit(){
        $alm = new Servicetype();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);		
        }
        
        require_once 'view/headersystem.php';
        require_once 'view/service/new_service.php';
        require_once 'view/footer.php';
    }
	
	  public function Guardar(){
        $alm = new Servicetype();
        
        $alm->id = $_REQUEST['id'];
        $alm->name_service = $_REQUEST['name_service'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php?c=Service&a=edit&id='.$alm->id);
    }
    
}