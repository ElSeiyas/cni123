

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background:#06368b">
            <div class="modal-header">
                <center><h5 class="modal-title" id="exampleModalLabel"></h5><font color="white">Borrar registro de solicitud de libro</font></center>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="white">×</font></span>
                    </button>
            </div>
            <div class="modal-body" style="background:#FFFF">	
            	<p class="text-center">¿Esta seguro de Borrar el registro de la solicitud de libro?</p>
				<h2 class="text-center"><?php echo $row['nombres'].' '.$row['apellidos']; ?></h2>
			</div>
            <div class="modal-footer" style="background:#FFFF">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="Borrar_Registro.php?id=<?php echo $row['codigo']; ?>" class="btn btn-danger" onclick="confirmar1()"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>
   <!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="edit_<?php echo $row['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"  style="background:#06368b">
           <div class="modal-header">
               <center><h5 class="modal-title" id="exampleModalLabel"></h5><font color="white">Editar registro de solicitud de libro</font></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="white">×</font></span>
                    </button>
            </div>
           <div class="modal-body" style="background:#FFFF">
			<div class="container-fluid">
			<form method="POST" action="EditarDato.php?id=<?php echo $row['codigo']; ?>">
				<div class="form-row">
                    
                    
                      <div class="col-md-4">
						<label >categoria:</label>
						<select class="form-control" name="categoria"  value="<?php echo $row['categoria']; ?>">
                <option>alumno</option>
                            <option>profesor</option>
</select>
					</div>
                     <div class="col-md-4">
						<label>Fecha de registro:</label>
						<input type="date" class="form-control" name="fecha" value="<?php echo $row['fecha']; ?>">
					</div>
                    
                    <div class="col-md-4">
						<label>Apellidos:</label>
						<input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>">
				</div>
                    
				  <div class="col-md-4">
						<label>Nombres:</label>
						<input type="text" class="form-control" name="nombres" value="<?php echo $row['nombres']; ?>">
					</div>
			
				 <div class="col-md-4">
						<label >Grado:</label>
                     <select class="form-control" name="grado" value="<?php echo $row['grado']; ?>">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
				</div>
              
                     <div class="col-md-4">
						<label>Seccion:</label>
                         <select class="form-control" name="seccion" value="<?php echo $row['seccion']; ?>">
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                            <option>E</option>
                            </select>
					</div>
				
                <div class="col-md-4">
                    <label>Correo:</label>
						<input type="text" class="form-control" name="correo" value="<?php echo $row['correo']; ?>">
				</div>
				
                     <div class="col-md-4">
						<label>Nombre Libro:</label>
						<input type="text" class="form-control" name="nombrelibro" value="<?php echo $row['nombrelibro']; ?>">
					</div>
			
                	 <div class="col-md-4">
						<label>fecha de devolucion:</label>
						<input type="date" class="form-control" name="fecha_devo" value="<?php echo $row['fecha_devo']; ?>">
					</div>
                         <div class="col-md-4">
						<label >estado:</label>
						<select class="form-control" name="estado"  value="<?php echo $row['estado']; ?>">
                <option>prestado</option>
                            <option>devuelto</option>
</select>
					</div>
			</div>
                <br>
            <div class="modal-footer" style="background:#FFFF">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="editar" class="btn btn-success" onclick="confirmar3()"><span class="glyphicon glyphicon-check"></span> Actualizar Ahora</button>
                </div>
			</form>
            </div>

        </div>
    </div>
</div>
    
    

 