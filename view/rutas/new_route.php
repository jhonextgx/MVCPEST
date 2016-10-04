<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->login : 'New Route'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="index.php?c=Route">Routes</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->login : 'New Routes'; ?></li>
</ol>

<div role="tabpanel">
    <ul class="nav nav-tabs">
        <li role="presentation" class="active">
            <a href="#route" aria-controls="home" role="tab" data-toggle="tab">Route</a>
        </li>
        <li role="presentation">
            <a href="#client" aria-controls="profile" role="tab" data-toggle="tab">Client</a>
        </li>
        <!--<li role="presentation">
            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a>
        </li>-->
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="route">
 <!--init panel route -->       
   <form id="frm-route" action="../rutas/?c=Route&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
     <label>Date</label>
        <input readonly type="text" name="dater" value="<?php echo $alm->dater; ?>" class="form-control datepicker" placeholder="Enter date of the route" data-validacion-tipo="requerido" />        
    </div>
    
    <div class="form-group">
        <label>Prop</label>
        <input type="text" name="prop" value="<?php echo $alm->prop; ?>" class="form-control" placeholder="Enter Prop" data-validacion-tipo="requerido|min:10" />
    </div>
  
      <div class="form-group">
        <label>Total Units</label>
        <input type="text" name="tunits" value="<?php echo $alm->status; ?>" class="form-control" placeholder="Enter Status" data-validacion-tipo="requerido|min:10" />
    </div>  
    
          <div class="form-group">
        <label>Total Units</label>
        <input type="number" name="tunits" value="<?php echo $alm->status; ?>" class="form-control" placeholder="Enter Status" data-validacion-tipo="requerido|min:10" />
    </div> 
        
    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control"> 
            <option <?php echo $alm->status_id == 1 ? 'selected' : ''; ?> value="1">CONFIRM</option>
            <option <?php echo $alm->status_id == 2 ? 'selected' : ''; ?> value="2">CANCELLED</option>
            <option <?php echo $alm->status_id == 3 ? 'selected' : ''; ?> value="2">NO ANSWER</option>
            <option <?php echo $alm->status_id == 4 ? 'selected' : ''; ?> value="2">PENDING</option>
            <option <?php echo $alm->status_id == 5 ? 'selected' : ''; ?> value="2">RESHEDULED</option>
        </select>
    </div>
    
        <div class="form-group">
        <label>Observations</label>
        <input type="text" name="observations" value="<?php echo $alm->observations; ?>" class="form-control" placeholder="Enter Observations" data-validacion-tipo="requerido" />
    </div>    
    <hr />
    
    <div class="text-right">
        <!--<button class="btn btn-success">Guardar</button>-->
        <a href="#client" aria-controls="profile" role="tab" data-toggle="tab">Client</a>
    </div>

  
<!-- end panel route-->        
        </div>
        <div role="tabpanel" class="tab-pane" id="client">
 <!-- init panel client -->
     <div class="form-group">
        <label>Manager</label>
        <input type="text" name="manager" value="<?php echo $alm->manager; ?>" class="form-control" placeholder="Enter Manager" data-validacion-tipo="requerido" />
    </div>
  
      <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" value="<?php echo $alm->phone; ?>" class="form-control" placeholder="Enter phone" data-validacion-tipo="requerido" />
    </div>  
    
          <div class="form-group">
        <label>Adress</label>
        <input type="text" name="adress" value="<?php echo $alm->adress; ?>" class="form-control" placeholder="Enter Adress" data-validacion-tipo="requerido" />
    </div> 
        <div class="form-group">
        <label>City</label>
        <input type="text" name="city" value="<?php echo $alm->city; ?>" class="form-control" placeholder="Enter City" data-validacion-tipo="requerido" />
    </div>
    <button class="btn btn-success">Guardar</button>
 <!-- end panel client -->       
        </div>
        <!--<div role="tabpanel" class="tab-pane" id="messages">...</div>-->
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#frm-route").submit(function(){
            return $(this).validate();
        });
    })
</script>   