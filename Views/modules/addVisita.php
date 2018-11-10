
<div class="content">
        <div class = "container-fluid">
		  <h1>Visita</h1>
			<div class="box-body">
      		 <div class="form-group">
				<form role="form" method='post'>
                
					<div class="form-group">
						<label>Id Cliente:</label><br>
						<input type="text" class="form-control"  name="user" placeholder="Cliente..." required >
					</div>

					<div class="form-group">
						<label>Servicio:</label>
						<input type="text" class="form-control" name="servicio"  placeholder="Servicio..." required >
					</div>

                    <div class="form-group">
						<label>Estado:</label>
						<input type="text" class="form-control" name="estado"  placeholder="Estado (Normal o Free)" required >
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
    $registro->VisitaController();


?>