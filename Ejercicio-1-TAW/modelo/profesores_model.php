<?php

//Se requiere el archivo de conexion
require_once "conexion.php";//contiene la clase Conexion que tiene el metodo conectar

//Clase ProfesorModel que contendra los metodos de registro, Actualizacion, Listar y Eliminar para los datos de los Profesores hereda los metodos de Conexion
class ProfesorModel extends Conexion{ //Crea la clase ProfesorModel  
  	//Funcion Registrar que tiene los argumentos $datos y $tabla
  	public function Registrar($datos, $tabla){ //Crea la función registrar con sus parámetros
	    $transaccion = Conexion::conectar()->prepare("INSERT INTO $tabla (no_empleado,nombre,email,telefono,id_carrera) VALUES (:num_empleado,:nombre_empleado,:email_empleado,:telefono_empleado,:id_carrera_empleado)"); //Prepara la transaccion para insertar nuevos registros a la tabla en la base de datos
		  $transaccion->bindParam(":num_empleado", 		$datos["no_empleado"], PDO::PARAM_STR); //Asocia los valores del array con los parametrso de transacción
		  $transaccion->bindParam(":nombre_empleado", 	$datos["nombre"], 	   PDO::PARAM_STR); //Asocia los valores del array con los parametrso de transacción
		  $transaccion->bindParam(":email_empleado", 		$datos["email"], 	   PDO::PARAM_STR); //Asocia los valores del array con los parametrso de transacción
		  $transaccion->bindParam(":telefono_empleado", 	$datos["telefono"],    PDO::PARAM_STR); //Asocia los valores del array con los parametrso de transacción
	    $transaccion->bindParam(":id_carrera_empleado", $datos["id_carrera"],  PDO::PARAM_STR); //Asocia los valores del array con los parametrso de transacción

	    $transaccion->close(); //Termina la transacción
      }//Termina funcion Registrar
  
  	public function cantidadRegistros($tabla){
    	$transaccion = Conexion::conectar()->prepare("SELECT COUNT(*) AS num FROM $tabla"); //Prepara la transacción para calcular la cantidad de registros que hay en la tabla
    	$transaccion->execute(); //Ejecuta la transacción
    	return $transaccion -> fetch(); //Regresa el resultado de la transacción
    	$transaccion->close(); //Termina la transacción
  	}
  
  	//Funcion Actualizar que tiene los argumentos $datos y $tabla
  	public function Actualizar($datos, $tabla){ //Crea la función Actualizar con sus parámetros
   		$transaccion = Conexion::conectar()->prepare("UPDATE $tabla SET no_empleado = :num_empleado, nombre = :nombre_empleado, email = :email_empleado, telefono = :telefono_empleado, id_carrera = :id_carrera_empleado WHERE no_empleado = :num_empleado"); //Prepara la transaccion para actualizar los registros ya existentes en la tabla de la base de datos
		$transaccion->bindParam(":num_empleado", 		$datos["no_empleado"], PDO::PARAM_STR); //Asocia los valores del array con los parametrso de transacción
		$transaccion->bindParam(":nombre_empleado", 	$datos["nombre"], 	   PDO::PARAM_STR); //Asocia los valores del array con los parametrso de transacción
		$transaccion->bindParam(":email_empleado", 		$datos["email"], 	   PDO::PARAM_STR); //Asocia los valores del array con los parametrso de transacción
		$transaccion->bindParam(":telefono_empleado", 	$datos["telefono"],    PDO::PARAM_STR); //Asocia los valores del array con los parametrso de transacción
	    $transaccion->bindParam(":id_carrera_empleado", $datos["id_carrera"],  PDO::PARAM_STR); //Asocia los valores del array con los parametrso de transacción

		if($transaccion->execute()){ //Condición para indicar que se ejecuta la transacción
			return "exito"; //Si se ejecuta de manera exitosa la acción
		}else{
       		return $datos -> errorInfo(); //Si no se ejecuta de manera exitosa la acción marca un error
		}
		$transaccion->close(); //Termina la transacción
  	}//Termina funcion Actualizar
  
  	//Funcion Listar que tiene como argumento $tabla y que devuelve un array en la variable $datos
  	public function Listar($tabla){ //Crea la función Listar
    	$transaccion = Conexion::conectar()->prepare("SELECT no_empleado, nombre, email, telefono, id_carrera  FROM $tabla"); //Prepara la transacción para realizar la consulta de selección de todos los registros ya existentes en la tabla
    	$transaccion->execute(); //Ejecuta la transacción
    	return $transaccion->fetchAll(); //Regresa el resultado de la transacción
    	$transaccion->close(); //Termina la transacción
  	}//Termina funcion Listar
  
   //Funcion Buscar que tiene como argumento $tabla y que devuelve un array en la variable $datos
  	public function Buscar($datos,$tabla){ //Crea la función Buscar
    	$transaccion = Conexion::conectar()->prepare("SELECT no_empleado, nombre, email, telefono, id_carrera  FROM $tabla WHERE no_empleado = :num_empleado"); //Prepara la transacción para realizar una consulta de selección dependiendo del identificador del registro de la tabla.
    	$transaccion->bindParam(":num_empleado", $datos["no_empleado"], PDO::PARAM_STR); //Enlaza el valor con el campo para ser guardado
    	$transaccion->execute(); //Ejecuta la transacción
    	return $transaccion->fetch(); //Regresa el resultado de la transacción
		$transaccion->close(); //Termina la transacción
   
  	}//Termina funcion Buscar
  
  
  	//Funcion Eliminar que tiene como argumento las variables $dato y $tabla
  	public function Eliminar($datos, $tabla){ //Crea la función Eliminar
    	$transaccion = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE no_empleado = :num_empleado"); //Prepara la transacción para eliminar un registro ya existente dependiendo del identificador seleccionado
    	$transaccion->bindParam(":num_empleado", $datos["no_empleado"], PDO::PARAM_STR); //Enlaza el valor con el campo para ser guardado
    	if($transaccion->execute()){ //Condición para indicar que se ejecuta la transacción
      		return "exito"; //Si se ejecuta de manera exitosa la acción
    	}else{
      		return $transaccion -> errorInfo(); //Si no se ejecuta de manera exitosa la acción marca un error
    	}
    	$transaccion->close(); //Termina la transacción
  	}//Termina funcion Eliminar
}//Termina clase ProfesorModel
?>