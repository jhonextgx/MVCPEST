<?php
require_once 'model/m_chemical.php';
require_once 'model/m_unity.php';

class Chemical_Controller{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Chemical();
    }
    
    public function Index(){
        require_once 'view/headersystem.php';
        require_once 'view/chemical/chemical_list.php';
        require_once 'view/footer.php';
    }
	
	public function NewCli(){
        require_once 'view/headersystem.php';
        require_once 'view/chemical/new_che.php';
        require_once 'view/footer.php';
    }
	
    public function edit(){
        $alm = new Chemical();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);		
        }
        
        require_once 'view/headersystem.php';
        require_once 'view/chemical/new_che.php';
        require_once 'view/footer.php';
    }
	
	  public function Guardar(){
        $alm = new Chemical();
        
        $alm->id = $_REQUEST['id'];
        $alm->name_chemical = $_REQUEST['name_chemical'];
        $alm->quantity = $_REQUEST['quantity'];
        $alm->cf_unity = $_REQUEST['cf_unity'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php?c=Chemical&a=edit&id='.$alm->id);
    }
    
}