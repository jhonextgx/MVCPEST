<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sistema de Requisicion de Servicios</title>
        
        <meta charset="utf-8" />
        <link rel="icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	</head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#top">
            <img src="assets/images/logo_thepestprofessional.png" alt="The Pest Professional" title="The Pest Professional">
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">          
          <ul class="nav navbar-nav navbar-right">
 			<li class="active"><a href="index.php?c=Principal&a=Inicia">Home</a></li>
               <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?c=Route">Routes</a></li>
                  <li><a href="index.php?c=Serviceorder">Service Order</a></li>
                  <li><a href="index.php?c=Invoice">Invoice</a></li> 
                </ul>
              </li>
               <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Inventory
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?c=Treatment">Treatemens</a></li>
                  <li><a href="index.php?c=Service">Services</a></li>
                  <li><a href="index.php?c=Chemical">Chemicals</a></li> 
                </ul>
              </li>              
          
<!--            <li><a href="index.php?c=Route">Routes</a></li>
            <li><a href="index.php?c=Serviceorder">Service Order</a></li>
            <li><a href="index.php?c=Invoice">Invoice</a></li> -->
            
            <li><a href="index.php?c=Usuario">Usuarios</a></li>
            <li><a href="index.php?c=Principal&a=Salir">Salir</a></li>                   
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- end navbar -->   
    <div class="container">