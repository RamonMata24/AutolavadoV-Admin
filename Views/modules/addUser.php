
<div class="content">
        <div class = "container-fluid">
		  <h1>Dar De Alta un Usuario</h1>
			<div class="box-body">
      		 <div class="form-group">
				<form role="form" method='post'>
                
					<div class="form-group">
						<label>Nombre(s):</label><br>
						<input type="text" class="form-control"  name="nombre" placeholder="Nombre..." required >
					</div>

					<div class="form-group">
						<label>Apellido(s):</label>
						<input type="text" class="form-control" name="apellidos"  placeholder="Apellido..." required >
					</div>

                    <div class="form-group">
						<label>Edad:</label>
						<input type="text" class="form-control" name="edad"  placeholder="Apellido..." required >
					</div>

					<div class="form-group">
						<label>Nickname:</label><br>
						<input type="text" class="form-control" name="usuario"  placeholder="Nickname..." required >
					</div>
                    <div class="form-group">
						<label>Contraseña:</label><br>
						<input type="password" class="form-control"  name="contrasena" placeholder="Password..." required >
					</div>

					<div class="form-group">
						<label>Correo:</label>
						<input type="email" class="form-control" name="correo"  placeholder="Ingrese su correo..." required >
					</div>
					<button type="submit" name="registro" class="btn btn-success">Guardar</button>
				</form>
				</div>
                </div>
            </div>  
</div>

<?php

	// CLASE Y FUNCION DEL CONTROLADOR
    $registro = new Controller();
    $registro->UserController();

	

?>
