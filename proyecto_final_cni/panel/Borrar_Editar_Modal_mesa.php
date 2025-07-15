<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $val['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background:#06368b">
            <div class="modal-header">
                <center><h5 class="modal-title" id="exampleModalLabel"></h5><font color="white">Borrar registro </font></center>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="white">×</font></span>
                    </button>
            </div>
               <div class="modal-body" style="background:#FFFF">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $val['apellidos'].' '.$val['nombres']; ?></h2>
			</div>
          <div class="modal-footer" style="background:#FFFF">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="Borrar_Registro_mesa.php?id=<?php echo $val['id']; ?>" class="btn btn-danger" onclick="confirmar2()"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>
<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id= "edit_<?php echo $val['id']; ?>"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
     <div class="modal-content" style="background:#06368b">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><font color="white">Editar registro</font></h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="white">×</font></span>
                    </button>
      </div>
       <div class="modal-body" style="background:#FFFF">	
          <div class="container-fluid">
			<form method="POST" action="Editar_Registro_mesa.php?id=<?php echo $val['id']; ?>" enctype="multipart/form-data">
				 <div class="form-row">

					<div class="col-md-4">
						<label class="control-label">fecha:</label>
					
						<input type="date" class="form-control" name="fecha" value="<?php echo $val['fecha']; ?>">
					
				</div>
                   	<div class="col-md-4">
						<label class="control-label">Nombres:</label>
					
						<input type="text" class="form-control" name="nombres" value="<?php echo $val['nombres']; ?>">
       			</div>
					<div class="col-md-4">
						<label class="control-label">Apellidos:</label>
					
						<input type="text" class="form-control" name="apellidos" value="<?php echo $val['apellidos']; ?>">
					</div>
			
					<div class="col-md-4">
						<label class="control-label">Correo:</label>
				
						<input type="text" class="form-control" name="correo" value="<?php echo $val['correo']; ?>">
					</div>
				<div class="col-md-4">
						<label class="control-label">Celular:</label>
					
						<input type="text" class="form-control" name="celular" value="<?php echo $val['celular']; ?>">
					</div>
                      <div class="col-md-4">
						<label  for="estado">estado:</label>
						<select class="form-control" name="estado"  value="<?php echo $val['estado']; ?>">
                <option>pendiente</option>
                            <option>activo</option>
</select>
					</div>
              </div>
                <br>
     <div class="modal-footer" style="background:#FFFF">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success" onclick="confirmar1()"><span class="glyphicon glyphicon-check"></span> Actualizar Ahora</button>
                </div>
			</form>
            </div>

        </div>
    </div>
</div>
