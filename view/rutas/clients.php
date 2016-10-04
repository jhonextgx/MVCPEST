<!DOCTYPE html>
<html lang="es">
	<head>      
        <meta charset="utf-8" />
        <link rel="icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	</head>
    <body>
        <form class="form-horizontal">
        <fieldset>
        
        <!-- Form Name 
        <legend>Clients</legend>-->
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Manager</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" type="text" placeholder="manager name" class="form-control input-md" required="">
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="phone">Phone</label>  
          <div class="col-md-4">
          <input id="phone" name="phone" type="text" placeholder="+800 000 00 00" class="form-control input-md" required="">
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="adress">Adress</label>  
          <div class="col-md-4">
          <input id="adress" name="adress" type="text" placeholder="0000 street 0000" class="form-control input-md" required="">
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="name_city">City</label>
          <div class="col-md-4">
            <select id="name_city" name="name_city" class="form-control">
              <option value="1">California</option>
              <option value="2">Angels</option>
            </select>
          </div>
        </div>
        
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="name_estate">Estate</label>
          <div class="col-md-4">
            <select id="name_estate" name="name_estate" class="form-control">
              <option value="1">The Angeles</option>
              <option value="2">Florida</option>
            </select>
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="property">Property</label>  
          <div class="col-md-4">
          <input id="property" name="property" type="text" placeholder="0000" class="form-control input-md" required="">
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="enviar"></label>
          <div class="col-md-4">
            <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/js/ini.js"></script>
        <script src="assets/js/jquery.anexsoft-validator.js"></script>
    </body>
</html>