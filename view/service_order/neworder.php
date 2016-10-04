<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->login : 'New Service'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="index.php?c=Serviceorder">Service</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->login : 'New Service'; ?></li>
</ol>
     <!--init panel chemical -->       

     <form id="frm-chemical" action="index.php?c=Serviceorder&a=Guardar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
          <div class="form-group">
               <label>Name Chemical</label>
               <input type="text" name="name_service" value="<?php echo $alm->name_service; ?>" class="form-control" placeholder="Enter the name Chemical" data-validacion-tipo="requerido" />        
          </div>
    
            <div class="form-group">
                <label>Quantity</label>
                <input type="text" name="quantity" value="<?php echo $alm->quantity; ?>" class="form-control" placeholder="Enter Quantity" data-validacion-tipo="requerido|min:1" />
            </div>      
    
          <div class="form-group">
            <label>Unity</label>
            <input type="text" name="cf_unity_d" value="<?php echo $alm->cf_unity; ?>" class="form-control" placeholder="Enter Status" data-validacion-tipo="requerido|min:1" />
          </div>        
    
            <div class="form-group">
            
                <label>Unity Test</label>
                <select name="cf_unity" class="form-control">
                 <?php foreach($this->model->Listar_unitys() as $r): ?>
                   <option  <?php echo $alm->cf_unity == $r->id ? 'selected' : ''; ?> value="<?php echo $r->id; ?>" ><?php echo $r->name_unity; ?></option>
                 <?php endforeach;	 ?>
                </select>
            </div>      
    
      
            <div class="text-right">
                <!--<button class="btn btn-success">Guardar</button>-->
                 <button class="btn btn-success">Guardar</button>
            </div>      
    
    
    </form>

    

		<script>
        $(document).ready(function(){
            $("#frm-chemical").submit(function(){
                return $(this).validate();
            });
        })
        </script> 
    </body>
</html>