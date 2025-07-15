<!-- Agregar Nuevos Registros -->
<div class="modal fade bd-example-modal"  id="addnew" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background:#06368b">
            <div class="modal-header">
                <center><h5 class="modal-title" id="exampleModalLabel"></h5><font color="white">Agregar nuevo usuario</font></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="white">×</font></span>
                    </button>
            </div>
            <div class="modal-body"  style="background:#FFFF">
			<div class="container-fluid">
			<form method="POST" action="Agregar_Nuevo.php" enctype="multipart/form-data">
				<div class="form-row">
					   <div class="col-md-6 mb-3">
						<label >nombres:</label>
					
				
						<input type="text" class="form-control" name="nombres" required>
					
				</div>
				
					 <div class="col-md-6 mb-3">
						<label >apellidos:</label>
					
						<input type="text" class="form-control" name="apellidos" required>
                    </div>
			
				 <div class="col-md-6 mb-3">
						<label >dni:</label>
				
				
						<input type="number" class="form-control" name="dni" required>
					</div>
					 <div class="col-md-6 mb-3">
				
						<label>celular</label>
					
						<input type="number" class="form-control" name="celular" required>
					</div>
				
                <div class="col-md-6 mb-3">
                	
						<label >usuario</label>
					
						<input type="text" class="form-control" name="usuario" required>
					</div>
				 <div class="col-md-6 mb-3">
						<label >Contraseña</label>
					
						<input type="text" class="form-control" name="password" required>
					</div>
				<div class="col-md-6 mb-3">
						<label >Cargo</label>					
						<input type="text" class="form-control" name="cargo" required>
					
				</div>
               <div class="col-md-6 mb-3">
						<label >Foto de perfil:</label>
				
                <input  type="file" name="foto" accept="image/*" required> 
				</div>
                    
                    
                    
				</div>
                	
           <div class="modal-footer" style="background:#FFFF">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Usuario</button>
                </div>

        </form>
                </div>
    </div>
        
        </div>
    </div>
</div>