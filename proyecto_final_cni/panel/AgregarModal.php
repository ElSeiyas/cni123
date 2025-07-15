<!-- Agregar Nuevos Registros -->
<div class="modal fade bd-example-modal"  id="addnew" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background:#06368b">
            <div class="modal-header">
                <center><h5 class="modal-title" id="exampleModalLabel"></h5><font color="white">Agregar Nuevo Registro</font></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="white">×</font></span>
                    </button>
            </div>

            <div class="modal-body"  style="background:#FFFF">
			<div class="container-fluid">
			<form method="POST" action="AgregarNuevo.php">
				<div class="form-row">
					<div class="col-md-4">
						<label>Codigo patrimonial:</label>
					
						<input type="number" class="form-control" name="codigo_patrimonial" required>
					
				</div>
				
					 <div class="col-md-4">
						<label >Descripcion del Bien:</label>
				
					
						<input type="text" class="form-control" name="descripcion_bien" required>
					
				</div>
				
					 <div class="col-md-4">
						<label >Fecha de adquisicion:</label>
						<input type="number" class="form-control" name="fecha_adquisicion" required>
					</div>
			
					 <div class="col-md-4">
						<label>Estado de conservacion:</label>
				
						<input type="text" class="form-control" name="estado_conservacion" required>
					</div>
			
					 <div class="col-md-4">
						<label >Medida:</label>
				
						<input type="text" class="form-control" name="medida" required>
					</div>
			
					<div class="col-md-4">
						<label >Marca:</label>
					
						<input type="text" class="form-control" name="marca" required>
					</div>
				<div class="col-md-4">
						<label >Modelo:</label>
					
						<input type="text" class="form-control" name="modelo" required>
					</div>
				
            <div class="col-md-4">
						<label>Serie:</label>
				
						<input type="text" class="form-control" name="serie" required>
					
                    </div>
                         <div class="col-md-4">
						<label >Color:</label>
				
						<input type="text" class="form-control" name="color" required>
					
				</div>
                 <div class="col-md-4">
						<label>Documento de origen:</label>
					
						<input type="text" class="form-control" name="documento_origen" required>
					
				</div>
                    <div class="col-md-4">
						<label >Institucion de entrega:</label>
				
						<input type="text" class="form-control" name="institucion_entrega" required>
					</div>
			   <div class="col-md-4">
						<label>Cantidad:</label>
				
						<input type="number" class="form-control" name="cantidad" required>
					</div>
				   <div class="col-md-4">
						<label >Valor Unitario:</label>
			
						<input type="text" class="form-control" name="valor_unitario" required>
					</div>
			  <div class="col-md-4">
						<label>Total activo:</label>
				
						<input type="number_format" class="form-control" name="total_actualizado" required>
					</div>
				  <div class="col-md-4">
						<label>Area Nivel:</label>
					
						<input type="text" class="form-control" name="area_nivel" required>
					</div>
		<div class="col-md-4">
						<label>Oficina:</label>
					
						<input type="text" class="form-control" name="oficina" required>
					</div>
				</div> 
                <br>
            <div class="modal-footer" style="background:#FFFF">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
			
            </div>

        </form>
                </div>
    </div>
        
        </div>
    </div>
</div>