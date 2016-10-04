<h1 class="page-header">Chemical</h1>

<div class="well well-sm text-right">
    <a id="newChemical" class="btn btn-primary" href="index.php?c=Chemical&a=NewCli" >New Chemical</a>
</div>

<!--href="index.php?c=Route&a=Cli" -->
<div class="table-responsive">
 
		<!--<a href="editar_usuario.php" class="btn btn-default" role="button"  href="../../controladores/asignar.php?codigo='.$row["codigo"].'">Agregar Usuario</a>
        <button rel="editar_usuario.php" type="button" class="btn btn-info btn-lg pull-left" data-toggle="modal" data-target="#myModal" >Agregar Usuario</button>-->

		
<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Id</th>
			<th>Chemical Name</th>
            <th>Quantity</th>
            <th>Acciones</th>                        
		</tr>
	</thead>
	<tbody>
		<?php foreach($this->model->Listar() as $r): ?>      		
      <tr>
			  <td><?php echo $r->id; ?></td>
			  <td ><?php echo $r->name_chemical; ?></td>	
			  <td ><?php echo $r->quantity; ?></td>            
			  <td align="center"><a href='index.php?c=Chemical&a=edit&id=<?php echo $r->id; ?>'><span class="glyphicon glyphicon-pencil"></span></a> - <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="index.php?c=Chemical&a=Eliminar&id=<?php echo $r->id; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>									
		    </tr>
		<?php endforeach; ?>        	                
	</tbody>
	<tfoot>
		<tr>
			<th>Id</th>
			<th>Chemical Name</th>
            <th>Quantity</th>
            <th>Acciones</th>
		</tr>
	</tfoot>
</table>
			
          
 
</div>