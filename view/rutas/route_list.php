<h1 class="page-header">Routes</h1>

<div class="well well-sm text-right">
    <a id="newclient" class="btn btn-primary"  role="button" data-toggle="modal" data-target="#myModal" rel="index.php?c=Route&a=NewCli" >New Client</a> <a class="btn btn-primary" href="index.php?c=Route&a=Agregar">New Route</a>
</div>

<!--href="index.php?c=Route&a=Cli" -->
               	<div class="table-responsive">
 
		<!--<a href="editar_usuario.php" class="btn btn-default" role="button"  href="../../controladores/asignar.php?codigo='.$row["codigo"].'">Agregar Usuario</a>
        <button rel="editar_usuario.php" type="button" class="btn btn-info btn-lg pull-left" data-toggle="modal" data-target="#myModal" >Agregar Usuario</button>-->

		
<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th style="width:100px;">Date</th>
			<th>Propiety</th>
            <th>Adress</th>
			<th>City</th>
            <th>Manager</th>
            <th>Phone</th>
            <th>Tot. Units</th>
            <th>Units Month</th>
            <th>Time</th>
            <th>Confirm?</th>
            <th>Observs</th>
            <th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($this->model->Listar() as $r): ?>      		
      <tr>
			  <td><?php echo $r->dater; ?></td>
			  <td ><?php echo $r->property; ?></td>	
			  <td ><?php echo $r->id; ?></td>
			  <td ><?php echo $r->city; ?></td>
              <td ><?php echo $r->manager; ?></td>
              <td ><?php echo $r->phone; ?></td>
              <td ><?php echo $r->total_units; ?></td>
              <td ><?php echo $r->units_month; ?></td>
              <td ><?php echo $r->tyme; ?></td>
              <td ><?php echo $r->status; ?></td>
              <td ><?php echo $r->observacion; ?></td>              
			  <td align="center"><a href='editar-cargo.php?id=".$id."'><span class="glyphicon glyphicon-pencil"></span></a> - <a href='editar-cargo.php?id=".$id."'><span class="glyphicon glyphicon-trash"></span></a></td>									
		    </tr>
		<?php endforeach; ?>        	                
	</tbody>
	<tfoot>
		<tr>
			<th>Date</th>
			<th>Propiety</th>
            <th>Adress</th>
			<th>City</th>
            <th>Manager</th>
            <th>Phone</th>
            <th>Tot. Units</th>
            <th>Units Month</th>
            <th>Time</th>
            <th>Confirm?</th>
            <th>Observs</th>
            <th>Acciones</th>
		</tr>
	</tfoot>
</table>
			
<!-- Ventana Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ROUTES</h4>
      </div>
      
      <div class="modal-body">
       <!-- CONTENIDO -->
	
       <div class="embed-responsive embed-responsive-4by3">
         <iframe id="iframe" class="embed-responsive-item" src="" frameborder="0" allowfullscreen></iframe>
       </div>       
                

		<!-- fin contenido -->
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
          
 
</div>

  <script>
    $(document).ready(function() {     	 
       $('#newclient').click(function () {
        	var url = $(this).attr('rel');
			
			$('#myModalLabel').html("NEW CLIENT");// attr('src', url);	
			
        	$('#iframe').attr('src', url);
        	$('#iframe').reload();
    	});
	});
	</script>