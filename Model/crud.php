<?php

    require_once("Model/conexion.php");
    class Datos extends Conexion{

        public static  function  UserModel($datos,$tabla){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,apellidos,edad,usuario,contrasena,correo) VALUES (:nombre,:apellidos,:edad,:usuario,:contrasena,:correo)");
		$stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':apellidos', $datos['apellidos'], PDO::PARAM_STR);
		$stmt->bindParam(':edad', $datos['edad'], PDO::PARAM_INT);
		$stmt->bindParam(':usuario', $datos['usuario'], PDO::PARAM_STR);
		$stmt->bindParam(':contrasena', $datos['contrasena'], PDO::PARAM_STR);
		$stmt->bindParam(':correo', $datos['correo'], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

    }
    

    public static  function  getUsersModel($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();

    }

    //funcion para eliminar usuarios
	public static  function  deleteUserModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}
		
		$stmt->close();
	}

	public static function  getUserModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}

	public static function  updateUser($datos, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellidos = :apellidos , edad = :edad, contrasena = :contrasena , correo = :correo WHERE id = :id");		
		$stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(':apellidos', $datos['apellidos'], PDO::PARAM_STR);
		$stmt->bindParam(':edad', $datos['edad'], PDO::PARAM_INT);
		$stmt->bindParam(':contrasena', $datos['contrasena'], PDO::PARAM_STR);
		$stmt->bindParam(':correo', $datos['correo'], PDO::PARAM_STR);
		$stmt->bindParam(':id', $datos['id'], PDO::PARAM_INT);

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}

	/*
		-- CRUD VISITAS
	*/
	
	public static  function  getVisitasModel($tabla){
       $stmt = Conexion::conectar()->prepare("SELECT v.id , v.fecha , v.user, v.servicio , v.estado
													FROM $tabla v
													INNER JOIN usuarios u on u.id = v.user
													ORDER BY id asc;");
	
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
    }
        
	public static  function  addVisitaModel($datos,$tabla){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (user,servicio,estado) VALUES (:user,:servicio,:estado)");
		$stmt->bindParam(':user', $datos['user'], PDO::PARAM_INT);
        $stmt->bindParam(':servicio', $datos['servicio'], PDO::PARAM_STR);
		$stmt->bindParam(':estado', $datos['estado'], PDO::PARAM_INT);
;
		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}
	
	
	public static function   getVisitaModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}

	public static function  updateVisita($datos, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET fecha = :fecha, user = :user , servicio = :servicio, estado = :estado  WHERE id = :id");		
		$stmt->bindParam(':fecha', $datos['fecha'], PDO::PARAM_STR);
		$stmt->bindParam(':user', $datos['user'], PDO::PARAM_INT);
		$stmt->bindParam(':servicio', $datos['servicio'], PDO::PARAM_STR);
		$stmt->bindParam(':estado', $datos['estado'], PDO::PARAM_STR);
		$stmt->bindParam(':id', $datos['id'], PDO::PARAM_INT);

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}


	//funcion para eliminar usuarios
	public static function  deleteVisitaModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}
		
		$stmt->close();
	}

		/* 

		Promociones

		*/
	public static  function  getPromosModel($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");
		 $stmt->execute();
		 return $stmt->fetchAll();
		 $stmt->close();
	 }


	 public static  function  addPromoModel($datos,$tabla){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (promociones,fecha_vencimiento) VALUES (:promociones,:fecha_vencimiento)");
		$stmt->bindParam(':promociones', $datos['promociones'], PDO::PARAM_STR);
        $stmt->bindParam(':fecha_vencimiento', $datos['fecha_vencimiento'], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}

	//funcion para eliminar usuarios
	public static  function  deletePromoModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}
		
		$stmt->close();
	}

	public static function  getPromoModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}


	public static function  updatePromo($datos, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET promociones = :promociones, fecha_vencimiento = :fecha_vencimiento  WHERE id = :id");		
		$stmt->bindParam(':promociones', $datos['promociones'], PDO::PARAM_STR);
		$stmt->bindParam(':fecha_vencimiento', $datos['fecha_vencimiento'], PDO::PARAM_STR);
		$stmt->bindParam(':id', $datos['id'], PDO::PARAM_INT);

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}


		public static  function  getPremiosModel($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
	}


	public static  function  addPremioModel($datos,$tabla){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (premio,detalles,num_visitas) VALUES (:premio,:detalles,:num_visitas)");
		$stmt->bindParam(':premio', $datos['premio'], PDO::PARAM_STR);
		$stmt->bindParam(':detalles', $datos['detalles'], PDO::PARAM_STR);
		$stmt->bindParam(':num_visitas', $datos['num_visitas'], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}


	//funcion para eliminar premios
	public static  function  deletePremioModel($id, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}
		
		$stmt->close();
	}	


	
	public static function getPremioModel($id, $tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}


	public static function  updatePremios($datos, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET premio = :premio, detalles = :detalles , num_visitas = :num_visitas  WHERE id = :id");		
		$stmt->bindParam(':premio', $datos['premio'], PDO::PARAM_STR);
		$stmt->bindParam(':detalles', $datos['detalles'], PDO::PARAM_STR);
		$stmt->bindParam(':num_visitas', $datos['num_visitas'], PDO::PARAM_STR);
		$stmt->bindParam(':id', $datos['id'], PDO::PARAM_INT);

		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}

		$stmt->close();

	}
		public static function count_usuarios($tabla){
			$model = new Conexion();
			$conexion = $model->conectar();
			$sql = "SELECT COUNT(*) AS total FROM $tabla";
			$stm = $conexion->prepare($sql);
			$stm->execute();
			$results = $stm->fetchall();
			$getCount = $results[0]['total'];
			return $getCount;
			
		}


		public static function count_visitas($tabla){
			$model = new Conexion();
			$conexion = $model->conectar();
			$sql = "SELECT COUNT(*) AS total FROM $tabla";
			$stm = $conexion->prepare($sql);
			$stm->execute();
			$results = $stm->fetchall();
			$getCount = $results[0]['total'];
			return $getCount;
			
			}


			public static function count_promociones($tabla){
				$model = new Conexion();
				$conexion = $model->conectar();
				$sql = "SELECT COUNT(*) AS total FROM $tabla";
				$stm = $conexion->prepare($sql);
				$stm->execute();
				$results = $stm->fetchall();
				$getCount = $results[0]['total'];
				return $getCount;
				
				}

				public static function count_premios($tabla){
					$model = new Conexion();
					$conexion = $model->conectar();
					$sql = "SELECT COUNT(*) AS total FROM $tabla";
					$stm = $conexion->prepare($sql);
					$stm->execute();
					$results = $stm->fetchall();
					$getCount = $results[0]['total'];
					return $getCount;
					
					}




    }



?>