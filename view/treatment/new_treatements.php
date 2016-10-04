<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->login : 'New Treatements'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="index.php?c=Treatment">Treatements</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->login : 'New Treatement'; ?></li>
</ol>
     <!--init panel chemical -->       

     <form id="frm-treatment" action="index.php?c=Treatment&a=Guardar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
          <!--<div class="form-group">
               <label>Name Treatement</label>
               <input type="text" name="name_chemical" value="<?php echo $alm->name_Treatement; ?>" class="form-control" placeholder="Enter the name Treatement" data-validacion-tipo="requerido" />        
          </div>-->
    
            <div class="form-group">
                <label>Quantity</label>
                <input type="text" name="qty_treatment" value="<?php echo $alm->qty_treatment; ?>" class="form-control" placeholder="Enter Quantity" data-validacion-tipo="requerido|min:1" />
            </div>      
    
            <div class="form-group">            
                <label>Chemical to Apply</label>
                <select name="cf_chemical" class="form-control">
                 <?php foreach($this->model->Listar_chemicals() as $r): ?>
                   <option  <?php echo $alm->cf_chemical == $r->id ? 'selected' : ''; ?> value="<?php echo $r->id; ?>" ><?php echo $r->name_chemical; /*echo $r->name_chemical;*/ ?></option>
                 <?php endforeach;	 ?>
                </select>
            </div>            
    
            <div class="form-group">
            
                <label>Service Type</label>
                <select name="cf_service" class="form-control">
                 <?php foreach($this->model->Listar_services() as $r): ?>
                   <option  <?php echo $alm->cf_service == $r->id ? 'selected' : ''; ?> value="<?php echo $r->id; ?>" ><?php echo $r->name_service; ?></option>
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
            $("#frm-treatment").submit(function(){
                return $(this).validate();
            });
        })
        </script> 
    </body>
</html>