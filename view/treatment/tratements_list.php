<h1 class="page-header">Treatment</h1>

<div class="well well-sm text-right">
    <a id="newChemical" class="btn btn-primary" href="index.php?c=Treatment&a=Newtreatment" >New Treatment</a>
</div>

<!--href="index.php?c=Route&a=Cli" -->
<div class="table-responsive">
 
		<!--<a href="editar_usuario.php" class="btn btn-default" role="button"  href="../../controladores/asignar.php?codigo='.$row["codigo"].'">Agregar Usuario</a>
        <button rel="editar_usuario.php" type="button" class="btn btn-info btn-lg pull-left" data-toggle="modal" data-target="#myModal" >Agregar Usuario</button>-->

		
<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Id</th>
			<th>Quantity treatment</th>
            <th>Chemical type</th>
            <th>Service type</th>            
            <th>Acciones</th>                        
		</tr>
	</thead>
	<tbody>
		<?php foreach($this->model->Listar() as $r): ?>      		
      <tr>
			  <td><?php echo $r->id; ?></td>
			  <td ><?php echo $r->qty_treatment; ?></td>	
			  <td ><?php echo $this->model->Obtener_chemical($r->cf_chemical)->name_chemical; ?></td> 
              <td ><?php echo $this->model->Obtener_service($r->cf_service)->name_service; ?></td>            
			  <td align="center"><a href='index.php?c=Treatment&a=edit&id=<?php echo $r->id; ?>'><span class="glyphicon glyphicon-pencil"></span></a> - <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="index.php?c=Treatment&a=Eliminar&id=<?php echo $r->id; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>									
		    </tr>
		<?php endforeach; ?>        	                
	</tbody>
	<tfoot>
		<tr>
			<th>Id</th>
			<th>Quantity treatment</th>
            <th>Service type</th>
            <th>Service type</th>             
            <th>Acciones</th>
		</tr>
	</tfoot>
</table>
			
          
 
</div>