<h1 class="page-header">Usuarios</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="index.php?c=Usuario&a=Agregar">Nuevo Usuario</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Email</th>
            <th>Login</th>          
            <th style="width:120px;">Estatus</th>
            <th style="width:120px;">Tipo Usuario</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->email; ?></td>
            <td><?php echo $r->login; ?></td>
            <td><?php echo $r->status_id == 1 ? 'Activo' : 'Inactivo'; ?></td>
            <td><?php echo $r->user_type == 1 ? 'Admin' : 'Basic'; ?></td>
            <td>
                <a href="index.php?c=Usuario&a=Agregar&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="index.php?c=Usuario&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
