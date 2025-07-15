<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                   <center><h5 class="modal-title" id="exampleModalLabel"></h5>Agregar nuevo registro</center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form action="AgregarNuevo_mesa.php" enctype="multipart/form-data">
				
				<div class="form-group">
					
						<label>Nombres:</label>
                  
				
						<input type="text" class="form-control" name="nombres" required>
					
                    </div>
                     <div class="form-group">
			
						<label>Apellidos:</label>
                      
						<input type="text" class="form-control" name="apellidos" required>
                
				</div>
				<div class="form-group">
				
						<label>DNI:</label>
					
					
						<input type="text" class="form-control" name="dni" required>

				</div>

				<div class="form-group">
					
						<label >Descripcion:</label>
				
						<textarea  class="form-control" name="descripcion" required></textarea>
					
					</div>

               <div class="form-group">
					
						<label>
				
						<input required="" type="file" name="file" id="exampleInputFile"></label>
					
					</div>

				
           
   
		
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
                    </div>
			     </form>
        

        </div>
    </div>
</div>