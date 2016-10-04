<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->login : 'New Service Type'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="index.php?c=Service">Service</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->login : 'New Service Type'; ?></li>
</ol>
     <!--init panel chemical -->       

     <form id="frm-service" action="../services/index.php?c=Service&a=Guardar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
          <div class="form-group">
               <label>Name Service Type</label>
               <input type="text" name="name_service" value="<?php echo $alm->name_service; ?>" class="form-control" placeholder="Enter the name Service" data-validacion-tipo="requerido" />        
          </div>
            
          <div class="text-right">
                <!--<button class="btn btn-success">Guardar</button>-->
                 <button class="btn btn-success">Guardar</button>
          </div>              
    </form>
    
		<script>
        $(document).ready(function(){
            $("#frm-service").submit(function(){
                return $(this).validate();
            });
        })
        </script> 
    </body>
</html>