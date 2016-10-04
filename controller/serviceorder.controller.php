<?php
//require_once 'model/usuario.php';
class Serviceorder_Controller{
	
   private $model;
    
    public function __CONSTRUCT(){
        //$this->model = new Service_order();
    }
    
    public function Index(){
        require_once 'view/headersystem.php';
        require_once 'view/service_order/list_order.php';
        require_once 'view/footer.php';						
    }
	
	
}

?>