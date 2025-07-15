<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"  style="background:#06368b">
           <div class="modal-header">
               <center><h5 class="modal-title" id="exampleModalLabel"></h5><font color="white">Agregar nuevo registro de solicitud de libro</font></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="white">×</font></span>
                    </button>
            </div>
            <div class="modal-body" style="background:#FFFF">
			<div class="container-fluid">
			<form method="POST" action="AgregarNuevoDato.php">
                
                  <div class="form-row">
					<div class="col-md-4">
						<label>categoria:</label>
						<select class="form-control" name="categoria" required>
                    <option>alumno</option>
                            <option>profesor</option>
                            </select>
					       </div>
				
                 <div class="col-md-4">
						<label>Fecha de registro:</label>
						<input type="date" class="form-control" name="fecha" required>
					</div>
			
				<div class="col-md-4">
						<label>Apellidos:</label>
						<input type="text" class="form-control" name="apellidos" required>
				</div>
                      
					<div class="col-md-4">
						<label>Nombres:</label>
						<input type="text" class="form-control" name="nombres" required>
				</div>
                      
					<div class="col-md-4">
						<label>Grado:</label>
						<select class="form-control" name="grado" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
					</div>
                    	
                      	<div class="col-md-4">
						<label >Seccion:</label>
						<select class="form-control" name="seccion" required>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                            <option>E</option>
                            </select>
				</div>
                      
                      	<div class="col-md-4">
						<label>Correo:</label>
						<input type="text" class="form-control" name="correo" required>
				</div>
                      
			                      	<div class="col-md-4">
						<label>Nombre del ibro:</label>
						<input type="text" class="form-control" name="nombrelibro" required>
					</div>
				
                        <div class="col-md-4">
						<label >Fecha de devoluvion:</label>
						<input type="date" class="form-control" name="fecha_devo" required>
				</div>
                      
                      
                        <div class="col-md-4">
						<label >estado:</label>
						<select class="form-control" name="estado" required>
                <option>prestado</option>
                            <option>devuelto</option>
</select>
					</div>
                </div>
         
           <br>    
           
            <div class="modal-footer" style="background:#FFFF">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-success" ><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
                </div>    
                 </form>
		 	</div>

        </div>
    </div>
</div>

</div>
    