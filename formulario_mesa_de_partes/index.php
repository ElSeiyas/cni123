<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include('conexion.php');

$tmp = array();
$res = array();

$sel = $con->query("SELECT * FROM mesa_partes");
while ($row = $sel->fetch_assoc()) {
    $tmp = $row;
    array_push($res, $tmp);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>archivos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    </head>
    <body>
      
	<div class="limiter" style="width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
 background-image: url(img/entrada_cni.jpg);
 background-size: cover;
     background-position: center center;
     background-repeat: no-repeat;
    background-attachment: fixed;">

			<div class="container" style="width: 960px;
  background: #06368b;
  border-radius: 10px;
  overflow: hidden;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 30px 70px 30px 50px;"> 
                  <div class="container">
                <h1 align="center"><font color ="white">FORMULARIO DE MESA DE PARTES</font></h1>
                  </div>
                       <form enctype="multipart/form-data" id="form1">
                             <br>
                           <div class="form-row">
					<div class="col-md-4">
                        <br>
                                <label for="fecha"><font color="white">Fecha de registro:</font></label>
                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                  
                            </div>
                            	<div class="col-md-4">
                                    <br>
                                <label for="nombres"><font color="white">Nombres:</font></label>
                                <input type="text" class="form-control" id="nombres" name="nombres" required>
                            </div>
                          	<div class="col-md-4">
                                <br>
                                <label for="apellidos"><font color="white">Apellidos:</font></label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                            </div>
                           	<div class="col-md-4">
                                <br>
                                <label for="correo"><font color="white">Correo:</font></label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                               	<div class="col-md-4">
                                    <br>
                                <label for="celular"><font color="white">Celular:</font></label>
                                <input type="number" class="form-control" id="celular" name="celular" required>
                            </div> 
                               
                               <div class="col-md-4">
                                   <br>
						<label  for="estado"><font color="white">Estado:</font></label>
                            
                            <input type="text" name="estado" id="estado" value="PENDIENTE" readonly="" style="color: rgb(25,25,51); background-color: rgb(255,255,255);solid 5px;color:#9B0000; text-align:center;font-weight: bold;" class="form-control">
                            
                            
                            
						
					</div>
                               
                               <br>
                               <br>
                          	
                                <label for="description"><font color="white">Archivo:</font></label>
                                  <br>
                                <input type="file"  class="form-control" id="file" name="file" required>
                              
 	
                  
                      <br>
      <br>

                    
                        <div class="container">
      <div class="row">
                    <div class="col text-center">
                <button type="button" class="btn btn-success btn-lg btn-responsive" onclick="onSubmitForm()">Registrar</button>
 </div>
          </div>
              </div>
                           </div>
                    </form> 
                  
                </div>
       
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                         
        <script>
                            function onSubmitForm() {
                                var frm = document.getElementById('form1');
                                var data = new FormData(frm);
                                var xhttp = new XMLHttpRequest();
                               Swal.fire({
  position: 'right-end',
  icon: 'success',
  title: 'Registro Exitoso!',
  showConfirmButton: false,
  timer: 2000
})
                                xhttp.open("POST", "upload.php", true);
                                xhttp.send(data);
                                $('#form1').trigger('reset');
                            }
        </script>

    </body>
</html>
