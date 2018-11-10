<div class="content">
        <div class = "container-fluid">
		  <h1>Nuevo Premio </h1>
			<div class="box-body">
      		 <div class="form-group">
				<form role="form" method='post'>
                
					<div class="form-group">
						<label>Premio:</label><br>
						<input type="text" class="form-control"  name="premio" placeholder="Nombre del Premio..." required >
					</div>

					<div class="form-group">
						<label>Detalles:</label>
						<input type="text" class="form-control" name="detalles"  placeholder="Detalles del Premio..." required >
					</div>

                    <div class="form-group">
						<label>Visitas Requeridas:</label>
						<input type="text" class="form-control" name="num_visitas"  placeholder="Requiere N Visitas..." required >
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
    $registro->PremiosController();


?>