

<!-- Ventana Editar Registros CRUD -->
<div class="modal fade bd-example-modal-lg" id="edit_<?php echo $row['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"  style="background:#06368b">
           <div class="modal-header">
               <center><h5 class="modal-title" id="exampleModalLabel"></h5><font color="white">Editar registro de libro</font></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="white">×</font></span>
                    </button>
            </div>
            <div class="modal-body" style="background:#FFFF">
			<div class="container-fluid">
			<form method="POST" action="EditarRegistro.php?id=<?php echo $row['codigo']; ?>">
				<div class="form-row">
					<div class="col-md-4">
						<label >Codigo patrimonial:</label>
					
						<input type="number" class="form-control" name="codigo_patrimonial" value="<?php echo $row['codigo_patrimonial']; ?>">
					</div>
				
			
					<div class="col-md-4">
						<label>Descripcion del Bien:</label>
					
						<input type="text" class="form-control" name="descripcion_bien" value="<?php echo $row['descripcion_bien']; ?>">
					</div>
				
					<div class="col-md-4">
						<label>Fecha de adquisicion:</label>
					
						<input type="text" class="form-control" name="fecha_adquisicion" value="<?php echo $row['fecha_adquisicion']; ?>">
					</div>
				
						<div class="col-md-4">
						<label>Estado de conservacion:</label>
			
					
						<input type="text" class="form-control" name="estado_conservacion" value="<?php echo $row['estado_conservacion']; ?>">
					</div>
				
					<div class="col-md-4">
						<label>Medida:</label>
					
						<input type="text" class="form-control" name="medida" value="<?php echo $row['medida']; ?>">
					</div>
				
                    <div class="col-md-4">
						<label>Marca:</label>
					
						<input type="text" class="form-control" name="marca" value="<?php echo $row['marca']; ?>">
					</div>
				  <div class="col-md-4">
						<label>Modelo:</label>
				
						<input type="text" class="form-control" name="modelo" value="<?php echo $row['modelo']; ?>">
					</div>
				  <div class="col-md-4">
						<label>Serie:</label>
					
						<input type="text" class="form-control" name="serie" value="<?php echo $row['serie']; ?>">
					</div>
				  <div class="col-md-4">
						<label class="control-label" style="position:relative; top:7px;">Color:</label>
				
						<input type="text" class="form-control" name="color" value="<?php echo $row['color']; ?>">
					</div>
				  <div class="col-md-4">
						<label >Documemnto de origen:</label>
					
						<input type="text" class="form-control" name="documento_origen" value="<?php echo $row['documento_origen']; ?>">
					</div>
				  <div class="col-md-4">
						<label>Institucion que entrega:</label>

						<input type="text" class="form-control" name="institucion_entrega" value="<?php echo $row['institucion_entrega']; ?>">
					</div>
				  <div class="col-md-4">
						<label>Cantidad:</label>
				
						<input type="number" class="form-control" name="cantidad" value="<?php echo $row['cantidad']; ?>">
					</div>
			 <div class="col-md-4">
						<label>Valor unitario:</label>
				
						<input type="text" class="form-control" name="valor_unitario" value="<?php echo $row['valor_unitario']; ?>">
					</div>
				 <div class="col-md-4">
						<label>Total activo:</label>
					
						<input type="text" class="form-control" name="total_actualizado" value="<?php echo $row['total_actualizado']; ?>">
					</div>
				 <div class="col-md-4">
						<label>Area_Nivel:</label>
				
						<input type="text" class="form-control" name="area_nivel" value="<?php echo $row['area_nivel']; ?>">
					</div>
		<div class="col-md-4">
						<label>Oficina:</label>
				
						<input type="text" class="form-control" name="oficina" value="<?php echo $row['oficina']; ?>">
					
				</div>

			 </div>
                <br>
           <div class="modal-footer" style="background:#FFFF">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="editar" class="btn btn-success" onclick="confirmar1()">Actualizar</button>
            </div>
                   
                </form>
   </div>
    </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content" style="background:#06368b">
            <div class="modal-header">
                <center><h5 class="modal-title" id="exampleModalLabel"></h5><font color="white">Borrar registro de libro</font></center>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="white">×</font></span>
                    </button>
            </div>
            <div class="modal-body" style="background:#FFFF">	
            	<p class="text-center">¿Esta seguro de Borrar el registro del libro?</p>
				<h2 class="text-center"><?php echo $row['descripcion_bien']; ?></h2>
			</div>
         <div class="modal-footer" style="background:#FFFF">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="BorrarRegistro.php?id=<?php echo $row['codigo']; ?>" class="btn btn-danger" onclick="confirmar2()"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>





