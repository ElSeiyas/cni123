<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="edit_<?php echo $row['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"  style="background:#06368b">
           <div class="modal-header">
               <center><h5 class="modal-title" id="exampleModalLabel"></h5><font color="white">Editar usuario</font></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="white">×</font></span>
                    </button>
            </div>
        <div class="modal-body" style="background:#FFFF">
			<div class="container-fluid">
			<form method="POST" action="Editar_Registro.php?id=<?php echo $row['codigo']; ?>" enctype="multipart/form-data">
				
                   <div class="form-row">

					<div class="col-md-4">
						<label class="control-label" style="position:relative; top:7px;">Nombres:</label>
				
						<input type="text" class="form-control" name="nombres" value="<?php echo $row['nombres']; ?>">
					</div>
			
					<div class="col-md-4">
					
						<label class="control-label" style="position:relative; top:7px;">Apellidos:</label>
			
						<input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>">
					</div>
		



				
				<div class="col-md-4">
						<label class="control-label" style="position:relative; top:7px;">DNI:</label>
			
						<input type="text" class="form-control" name="dni" value="<?php echo $row['dni']; ?>">
					</div>
				
			<div class="col-md-4">
						<label class="control-label" style="position:relative; top:7px;">Celular:</label>
					
						<input type="text" class="form-control" name="celular" value="<?php echo $row['celular']; ?>">
					</div>
		



		<div class="col-md-4">
						<label class="control-label" style="position:relative; top:7px;">Usuario:</label>
					
						<input type="text" class="form-control" name="usuario" value="<?php echo $row['usuario']; ?>">
					</div>
			
	<div class="col-md-4">
				
						<label class="control-label" style="position:relative; top:7px;">Password:</label>
				
				
						<input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
					
				</div>


	<div class="col-md-4">
				
						<label class="control-label" style="position:relative; top:7px;">Cargo:</label>
					
						<input type="text" class="form-control" name="cargo" value="<?php echo $row['cargo']; ?>">
					</div>
                       
               
	
			
			
                       
            </div>
                       
		
                <br>
              <div class="modal-footer" style="background:#FFFF">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success" onclick="confirmar()"><span class="glyphicon glyphicon-check"></span> Actualizar Ahora</button>
                     </div>
			</form>
            </div>
        </div>
    </div>
</div>
</div>    
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    function confirmar(){
Swal.fire({
  position: 'right-end',
  icon: 'success',
  title: 'Datos Actualizado!',
  showConfirmButton: false,
  timer: 1600
})


    };
</script>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content" style="background:#06368b">
            <div class="modal-header">
                <center><h5 class="modal-title" id="exampleModalLabel"></h5><font color="white">Borrar usuario</font></center>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="white">×</font></span>
                    </button>
            </div>
 <div class="modal-body" style="background:#FFFF">		
            	<p class="text-center">¿Esta seguro de borrar el usuario?</p>
				<h2 class="text-center"><?php echo $row['codigo'].' '.$row['apellidos']; ?></h2>
			</div>
           <div class="modal-footer" style="background:#FFFF">
                <button type="button" class="btn btn-dark" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="BorrarRegistro.php?id=<?php echo $row['codigo']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>