
<div class="content">
        <div class = "container-fluid">
		  <h1>Nueva Promoción</h1>
			<div class="box-body">
      		 <div class="form-group">
				<form role="form" method='post'>
                
					<div class="form-group">
						<label>Promoción:</label><br>
						<input type="text" class="form-control"  name="promo" placeholder="Nombre de la Promoción..." required >
					</div>

					<div class="form-group">
						<label>Fecha de Vencimiento:</label>
						<input type="text" class="form-control" name="fecha"  placeholder="YYY-MM-DD..." required >
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
    $registro->PromoController();


?>