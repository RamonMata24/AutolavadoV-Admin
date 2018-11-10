<?php

// Clase controlador
class Controller{
	
		//funcion para mostrar la pagina
		public function pagina(){
			include('Views/template.php');
		}


		//funcion de enlaces
		public function enlacesPaginasController(){
					// trabajar con los enlaces de las paginas
			//validamos si la variable "action" viene vacia , es decir , cuando se abre la pagina por primera vez se debe cargar la vista index1.php


			if (isset($_GET['action'])) {
				//guardar el valor de la variable action en "Views/modules/navegacion.php en el cual se recibe mediante el metodo GET esa variable "

				$enlacesController = $_GET['action'];

			}else{
				//si viene vacio inicializo con index

				$enlacesController = "index";
			}
			
			$respuesta = Paginas::enlacesPaginasModel($enlacesController);
			include $respuesta;

        }
        

	//funcion obtener usuarios
	public function UserController(){
		if (isset($_POST['registro'])) {
			
			$datos = array(
				'nombre' => $_POST['nombre'],
				'apellidos' => $_POST['apellidos'],
				'edad' => $_POST['edad'],
				'usuario' => $_POST['usuario'],
				'contrasena' => $_POST['contrasena'],
				'correo' => $_POST['correo']
			);

			$respuesta = Datos::UserModel($datos, 'usuarios');

			if($respuesta == "success"){
				header("location:index.php?action=usuarios");
			} else {
				header("location:index.php?action=usuarios");
			}
		}

	}

	//funcion controller para obtener los usuarios
	public function getUsers(){
		$respuesta = Datos::getUsersModel('usuarios');
		foreach ($respuesta as $usuario) {
			echo '<tr>
				<td>'.$usuario["id"].'</td>
				<td>'.$usuario["nombre"].'</td>
				<td>'.$usuario["apellidos"].'</td>
				<td>'.$usuario["edad"].'</td>
				<td>'.$usuario["usuario"].'</td>
				<td>'.$usuario["contrasena"].'</td>
                <td>'.$usuario["correo"].'</td>
                <td class="td-actions">
                <a href="index.php?action=editarUser&id='.$usuario["id"].'"><i class="la la-edit edit"></i></a>
                <a href="index.php?action=eliminarUser&id='.$usuario["id"].'"><i class="la la-close delete"></i></a>
            </tr>';
		}		
	}


	
	//funcion controller para borrar un usuario
	public function deleteUserController(){
		
		if (isset($_GET['id'])) {
			$respuesta = Datos::deleteUserModel($_GET['id'], 'usuarios');

			if($respuesta == "success"){
				header("location:index.php?action=usuarios");
			} else {
				echo "Error al eliminar '<script>alert('Error al eliminar')";
			}
		}
	}

		
			//funcion controller para cargar los jugadores al momento de querer actualizar
			public function getUserController(){
				//se obtiene el id del jugador mediante el get 
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					//hacemos la consulta rapida mediante el metodo getJugador y el nombre de la tabla
					$respuesta = Datos::getUserModel($id, 'usuarios');
					//en la tabla traemos los valores con la variable respuesta 
					echo '
					<div class="widget has-shadow">
                         <div class="widget-header bordered no-actions d-flex align-items-center">
                            
                    </div>
                     <div class="widget-body">
                         <div class="table-responsive">
                            <table class="table mb-0">	
							
							<input type="hidden" name="id" value="'.$respuesta["id"].'">
							
							<div class="form-group">
								<label>Nombre(s):</label><br>
								<input type="text" class="form-control"  name="nombre"  value="'.$respuesta["nombre"].'" >
							</div>

							<div class="form-group">
								<label>Apellido(s):</label>
								<input type="text" class="form-control" name="apellidos"   value="'.$respuesta["apellidos"].'" >
							</div>

							<div class="form-group">
								<label>Edad:</label>
								<input type="text" class="form-control" name="edad"   value="'.$respuesta["edad"].'" >
							</div>

							<div class="form-group">
								<label>Nickname:</label>
								<input type="text" class="form-control" name="usuario"   value="'.$respuesta["usuario"].'" >
							</div>

							<div class="form-group">
								<label>Contraseña:</label>
								<input type="text" class="form-control" name="contrasena"   value="'.$respuesta["contrasena"].'" >
							</div>

							<div class="form-group">
								<label>Correo:</label>
								<input type="email" class="form-control" name="correo"  value="'.$respuesta["correo"].'"   >
							</div>				
							<input type="submit" class="btn btn-success" value = "Actualizar">
						
						</div>
						</div>
					</div>  
			</div>                    
						';
				
				}

				
			}
			
				//funcion controller para actualizar un jugador
				public function editarUserController(){
					//mediante el id recibido 
					if (isset($_POST['id'])) {
						//mandamos los datos del post en el array 
						$datos = array(
							'id' => $_POST['id'],
							'nombre' => $_POST['nombre'],
							'apellidos' => $_POST['apellidos'],
							'edad' => $_POST['edad'],
							'usuario' => $_POST['usuario'],
							'contrasena' => $_POST['contrasena'],
							'correo' => $_POST['correo']
						);
						//hacemos uso de la funcion updateJugador mandando dos parametros los datos y el nombre de la tabla
						$respuesta = Datos::updateUser($datos, 'usuarios');
						// condicion para la correcta ejecucion del update
						if($respuesta == "success"){
							header("location:index.php?action=usuarios");
						} else {
							 echo "error!";
						}
					}
						
				}




		/* 
		-- VISITAS
		*/

			
		
	//funcion controller para obtener las visitas
	public function getVisitas(){
		$respuesta = Datos::getVisitasModel('visitas');
		foreach ($respuesta as $datos) {
			echo '<tr>
				<td>'.$datos["id"].'</td>
				<td>'.$datos["fecha"].'</td>
				<td>'.$datos["user"].'</td>
				<td>'.$datos["servicio"].'</td>
				<td>'.$datos["estado"].'</td>
                <td class="td-actions">
                <a href="index.php?action=editarVisita&id='.$datos["id"].'"><i class="la la-edit edit"></i></a>
                <a href="index.php?action=eliminarVisita&id='.$datos["id"].'"><i class="la la-close delete"></i></a>
            </tr>';
		}		
	}


	//funcion obtener usuarios
	public function VisitaController(){
		if (isset($_POST['registro'])) {
			
			$datos = array(
				'user' => $_POST['user'],
				'servicio' => $_POST['servicio'],
				'estado' => $_POST['estado']
			);
			$respuesta = Datos::addVisitaModel($datos, 'visitas');

			if($respuesta == "success"){
				header("location:index.php?action=visitas");
			} else {
				header("location:index.php?action=visitas");
			}
		}

	}


	
			//funcion controller para cargar lasvisitas al momento de querer actualizar
			public function getVisitaController(){
				//se obtiene el id del jugador mediante el get 
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					//hacemos la consulta rapida mediante el metodo getVisitas y el nombre de la tabla
					$respuesta = Datos::getVisitaModel($id, 'visitas');
					//en la tabla traemos los valores con la variable respuesta 
					echo '
					<div class="widget has-shadow">
                         <div class="widget-header bordered no-actions d-flex align-items-center">
                            
                    </div>
                     <div class="widget-body">
                         <div class="table-responsive">
                            <table class="table mb-0">	
							
							<input type="hidden" name="id" value="'.$respuesta["id"].'">

							<div class="form-group">
								<label>Fecha:</label>
								<input type="text" class="form-control" name="fecha"   value="'.$respuesta["fecha"].'" >
							</div>
							
							<div class="form-group">
								<label>User:</label><br>
								<input type="text" class="form-control"  name="user"  value="'.$respuesta["user"].'" >
							</div>

							<div class="form-group">
								<label>Servicio:</label>
								<input type="text" class="form-control" name="servicio"   value="'.$respuesta["servicio"].'" >
							</div>

							<div class="form-group">
								<label>Estado:</label>
								<input type="text" class="form-control" name="estado"   value="'.$respuesta["estado"].'" >
							</div>				
							<input type="submit" class="btn btn-success" value = "Actualizar">
						
						</div>
						</div>
					</div>  
			</div>                    
						';
				
				}

				
			}
			
				//funcion controller para actualizar un jugador
				public function editarVisitaController(){
					//mediante el id recibido 
					if (isset($_POST['id'])) {
						//mandamos los datos del post en el array 
						$datos = array(
							'id' => $_POST['id'],
							'fecha' => $_POST['fecha'],
							'user' => $_POST['user'],
							'servicio' => $_POST['servicio'],
							'estado' => $_POST['estado']
						);
						//hacemos uso de la funcion updateJugador mandando dos parametros los datos y el nombre de la tabla
						$respuesta = Datos::updateVisita($datos, 'visitas');
						// condicion para la correcta ejecucion del update
						if($respuesta == "success"){
							header("location:index.php?action=visitas");
						} else {
							 echo "error!";
						}
					}
						
				}



				//funcion controller para borrar un usuario
	public function deleteVisitaController(){
		
		if (isset($_GET['id'])) {
			$respuesta = Datos::deleteVisitaModel($_GET['id'], 'visitas');

			if($respuesta == "success"){
				header("location:index.php?action=visitas");
			} else {
				echo "Error al eliminar '<script>alert('Error al eliminar')";
			}
		}
	}


	/*
	
	-- Promociones
	
	*/
			
	//funcion controller para obtener las visitas
	public function getPromociones(){
		$respuesta = Datos::getPromosModel('promociones');
		foreach ($respuesta as $datos) {
			echo '<tr>
				<td>'.$datos["id"].'</td>
				<td>'.$datos["promociones"].'</td>
				<td>'.$datos["fecha_vencimiento"].'</td>
                <td class="td-actions">
                <a href="index.php?action=editarPromo&id='.$datos["id"].'"><i class="la la-edit edit"></i></a>
                <a href="index.php?action=eliminarPromo&id='.$datos["id"].'"><i class="la la-close delete"></i></a>
            </tr>';
		}		
	}

	//funcion obtener usuarios
	public function PromoController(){
		if (isset($_POST['registro'])) {
			
			$datos = array(
				'promociones' => $_POST['promo'],
				'fecha_vencimiento' => $_POST['fecha']
			);
			$respuesta = Datos::addPromoModel($datos, 'promociones');

			if($respuesta == "success"){
				header("location:index.php?action=promociones");
			} else {
				header("location:index.php?action=promociones");
			}
		}

	}



				//funcion controller para borrar un usuario
				public function deletePromoController(){
		
					if (isset($_GET['id'])) {
						$respuesta = Datos::deletePromoModel($_GET['id'], 'promociones');
			
						if($respuesta == "success"){
							header("location:index.php?action=promociones");
						} else {
							echo "Error al eliminar '<script>alert('Error al eliminar')";
						}
					}
				}


				

				
			//funcion controller para cargar lasvisitas al momento de querer actualizar
			public function getPromoController(){
				//se obtiene el id del jugador mediante el get 
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					//hacemos la consulta rapida mediante el metodo getVisitas y el nombre de la tabla
					$respuesta = Datos::getPromoModel($id, 'promociones');
					//en la tabla traemos los valores con la variable respuesta 
					echo '
					<div class="widget has-shadow">
                         <div class="widget-header bordered no-actions d-flex align-items-center">
                            
                    </div>
                     <div class="widget-body">
                         <div class="table-responsive">
                            <table class="table mb-0">	
							
							<input type="hidden" name="id" value="'.$respuesta["id"].'">

							<div class="form-group">
								<label>Promociones:</label>
								<input type="text" class="form-control" name="promociones"   value="'.$respuesta["promociones"].'" >
							</div>
							
							<div class="form-group">
								<label>Fecha Vencimiento</label><br>
								<input type="text" class="form-control"  name="fecha_vencimiento"  value="'.$respuesta["fecha_vencimiento"].'" >
							</div>			
							<input type="submit" class="btn btn-success" value = "Actualizar">
						
						</div>
						</div>
					</div>  
			</div>                    
						';
				
				}

				
			}
			
				//funcion controller para actualizar un jugador
				public function editarPromoController(){
					//mediante el id recibido 
					if (isset($_POST['id'])) {
						//mandamos los datos del post en el array 
						$datos = array(
							'id' => $_POST['id'],
							'promociones'=>$_POST['promociones'],
							'fecha_vencimiento'=>$_POST['fecha_vencimiento']
						);
						//hacemos uso de la funcion updateJugador mandando dos parametros los datos y el nombre de la tabla
						$respuesta = Datos::updatePromo($datos, 'promociones');
						// condicion para la correcta ejecucion del update
						if($respuesta == "success"){
							header("location:index.php?action=promociones");
						} else {
							 echo "error!";
						}
					}
						
				}


			//funcion controller para obtener los usuarios
			public function getPremios(){
				$respuesta = Datos::getPremiosModel('premios');
				foreach ($respuesta as $dato) {
					echo '<tr>
						<td>'.$dato["id"].'</td>
						<td>'.$dato["premio"].'</td>
						<td>'.$dato["detalles"].'</td>
						<td>'.$dato["num_visitas"].'</td>
						<td class="td-actions">
						<a href="index.php?action=editarPremio&id='.$dato["id"].'"><i class="la la-edit edit"></i></a>
						<a href="index.php?action=eliminarPremio&id='.$dato["id"].'"><i class="la la-close delete"></i></a>
						</td>
					</tr>';
				}		
			}



						//funcion obtener usuarios
				public function PremiosController(){
					if (isset($_POST['registro'])) {
						
						$datos = array(
							'premio' => $_POST['premio'],
							'detalles' => $_POST['detalles'],
							'num_visitas' => $_POST['num_visitas']
						);
						$respuesta = Datos::addPremioModel($datos, 'premios');

						if($respuesta == "success"){
							header("location:index.php?action=premios");
						} else {
							header("location:index.php?action=premios");
						}
					}
				}
				
				//funcion controller para borrar un usuario
				public function deletePremioController(){
		
					if (isset($_GET['id'])) {
						$respuesta = Datos::deletePremioModel($_GET['id'], 'premios');
			
						if($respuesta == "success"){
							header("location:index.php?action=premios");
						} else {
							echo "Error al eliminar '<script>alert('Error al eliminar')";
						}
					}
				}


				

				
			//funcion controller para cargar lasvisitas al momento de querer actualizar
			public function getPremiosController(){
				//se obtiene el id del jugador mediante el get 
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					//hacemos la consulta rapida mediante el metodo getVisitas y el nombre de la tabla
					$respuesta = Datos::getPremioModel($id,'premios');
					//en la tabla traemos los valores con la variable respuesta 
					echo '
					<div class="content">
        <div class = "container-fluid">
		  <h1>Editar Premio </h1>
			<div class="box-body">
			   <div class="form-group">
			   
			   <input type="hidden" name="id" value="'.$respuesta["id"].'">
				
					<div class="form-group">
						<label>Premio:</label><br>
						<input type="text" class="form-control"  name="premio" value="'.$respuesta["premio"].'"  >
					</div>

					<div class="form-group">
						<label>Detalles:</label>
						<input type="text" class="form-control" name="detalles" value="'.$respuesta["detalles"].'" >
					</div>

                    <div class="form-group">
						<label>Visitas Requeridas:</label>
						<input type="text" class="form-control" name="num_visitas" value="'.$respuesta["num_visitas"].'"   >
					</div>
					<button type="submit" name="registro" class="btn btn-success">Guardar</button>
				</form>
				</div>
                </div>
            </div>  
</div>                 
						';
				
				}

				
			}
			
				//funcion controller para actualizar un premio
				public function editarPremiosController(){
					//mediante el id recibido 
					if (isset($_POST['id'])) {
						//mandamos los datos del post en el array 
						$datos = array(
							'id' => $_POST['id'],
							'premio'=>$_POST['premio'],
							'detalles'=>$_POST['detalles'],
							'num_visitas'=>$_POST['num_visitas']
						);
						//hacemos uso de la funcion updateJugador mandando dos parametros los datos y el nombre de la tabla
						$respuesta = Datos::updatePremios($datos, 'premios');
						// condicion para la correcta ejecucion del update
						if($respuesta == "success"){
							header("location:index.php?action=premios");
						} else {
							 echo "error!";
						}
					}
						
				}



				public function usuarios(){

					$count = Datos::count_usuarios('usuarios');
					echo ($count);	
				
					}

					public function visitas(){

						$count = Datos::count_visitas('visitas');
						echo ($count);	
					
						}
						public function premios(){

							$count = Datos::count_premios('premios');
							echo ($count);	
						
							}
							public function promociones(){

								$count = Datos::count_promociones('promociones');
								echo ($count);	
							
								}


    }

?>



















