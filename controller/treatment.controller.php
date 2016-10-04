<?php
require_once 'model/m_treatment.php';
require_once 'model/m_chemical.php';
require_once 'model/m_unity.php';

class Treatment_Controller{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Treatment();
    }
    
    public function Index(){
        require_once 'view/headersystem.php';
        require_once 'view/treatment/tratements_list.php';
        require_once 'view/footer.php';
    }
	
	public function Newtreatment(){
        require_once 'view/headersystem.php';
        require_once 'view/treatment/new_treatements.php';
        require_once 'view/footer.php';
    }
	
    public function edit(){
        $alm = new Treatment();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);		
        }
        
        require_once 'view/headersystem.php';
        require_once 'view/treatment/new_treatments.php';
        require_once 'view/footer.php';
    }
	
	  public function Guardar(){
        $alm = new Treatment();
        
        $alm->id = $_REQUEST['id'];
        $alm->qty_treatment = $_REQUEST['qty_treatment'];
        $alm->cf_chemical = $_REQUEST['cf_chemical'];
        $alm->cf_service = $_REQUEST['cf_service'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php?c=Treatment&a=edit&id='.$alm->id);
    }
    
}