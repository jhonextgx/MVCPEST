<?php
require_once 'model/m_routes.php';

class Route_Controller{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Rutas();
    }
    
    public function Index(){
        require_once 'view/headersystem.php';
        require_once 'view/rutas/route_list.php';
        require_once 'view/footer.php';
    }
	

    
}