<?php
session_start();
//Aqui requerimos los archivos de los modelos para tener acceso a ellos
//require_once "modelo/alumnos_model.php";//Este archivo contiene la clase AlumnosModel
require_once "modelo/profesores_model.php";//Este archivo contiene la clase ProfesoresModel
//require_once "modelo/carreras_model.php";//Este archivo contiene la clase CarrerasModel
//require_once "modelo/carrera_profesor_model.php";//Este archivo contiene la clase CarreraProfesorModel

class ControladorPrincipal{
    public function vista_principal(){ //Crea la función vista principal
        include "vista/menu.php";
    } //Termina la función vista principal

    //metodo para controlar los enlaces del sistema
    public function enlaces(){ //Crea la función enlaces
        if(isset($_GET["registrar"]) || isset($_GET["ver"])){          
            if(isset($_GET["registrar"])){
                $enlaceR = $_GET["registrar"];//guardamos el valor de la peticion
                //If para incluir la pagina solicitada por el usuario
                if($enlaceR == "Alumnos"){
                    include "vista/alumnos.php";
                }else if($enlaceR == "Profesores"){
                    include "vista/profesores.php";
                }else if($enlaceR == "Carreras"){
                    include "vista/carreras.php";
                }else if($enlaceR == "CarreraProfesor"){
                    include "vista/carrera-profesor.php";
                }else if($enlaceR == ""){                    
                    include "vista/menu.php";
                }
            }else if(isset($_GET["ver"])){
               $enlaceV = $_GET["ver"];//guardamos el valor de la peticion
                 //If para incluir la pagina solicitada por el usuario
                if($enlaceV == "Alumnos"){
                    include "vista/alumnos.php";
                }else if($enlaceV == "Profesores"){
                    include "vista/profesores.php";
                }else if($enlaceV == "Carreras"){
                    include "vista/carreras.php";
                }else if($enlaceV == "CarreraProfesor"){
                    include "vista/carrera-profesor.php";
                }else if($enlaceV == ""){                    
                    include "vista/menu.php";
                }
            }else{
                include "vista/menu.php";
            }
    
        }//Termina funcion enlaces()
    }

    public function cantidadRegistros($tabla){
        if($tabla == "p"){
            $cantProfesores = ProfesoresModel::cantidadRegistros("profesores"); 
            return $cantProfesores["num"];
        }/*else if($tabla == "a"){
            $cantAlumnos = AlumnosModel::cantidadRegistros("alumnos"); 
            return $cantAlumnos["num"];
        }else if($tabla == "c"){
            $cantCarreras = CarrerasModel::cantidadRegistros("carreras"); 
            return $cantCarreras["num"];
        }else if($tabla == "cp"){
            $cantCarreraProfesor = CarreraProfesorModel::cantidadRegistros("carrera-profesor"); 
            return $cantCarreraProfesor["num"];
        }*/
    }

    public function RegistrarProfesor(){
        if($_POST["no_empelado"]){//Comprobamos que los datos del formulario sean recibidos
        //Guardamos en un array asociativo los datos del alumno
            $datosProfesor = array(
                "no_empleado" => $_POST["no_empelado"],
                "nombre" => $_POST["nombre"],
                "email" => $_POST["email"],
                "telefono" => $_POST["telefono"],
                "id_carrera" => $_POST["id_carrera"]
            );//Aqui termina la asignacion de los valores del array
          
            //Mandamos los datos al modelo y guardamos la respuesta del metodo
            $respuesta = ProfesorModel::Registrar($datosProfesor,"Profesores");
          
            //se verifica la respuesta del modelo para saber si se realizo con exito el registro
            if($respuesta == "exito"){
           
                return " <div class='alert alert-success' role='alert'>
                                    Se ah Guardado con <strong>Exito</strong> !
                                </div>";
            }else{
                return "<div class='alert alert-danger' role='alert'>
                                No se ah Guardado! [".$respuesta[2].
                                "]</div>";
            }
        }//Temina Primer If
    }//Termina funcion registroAlumnosController

    public function accionesProfesores(){
        if(isset($_GET["ActualizarP"])){
            /*$datos = array("no_empleado" => $_GET["no_empleado"]);
            $respuesta = ProfesorModel::Buscar($datos,"Profesores");*/
            include "vista/profesores.php";
        }
    
        if(isset($_GET["EliminarP"])){
            $datos = array("no_empleado" => $_GET["no_empleado"]);
            $respuesta = ProfesorModel::Eliminar($datos,"profesores");
            if($respuesta == "exito"){
                echo " <div class='alert alert-success' role='alert'>
                                Se ah Eliminado con <strong>Exito</strong> !
                                </div>";
            }else{
                echo "<div class='alert alert-danger' role='alert'>
                                No se ah Eliminado! [".$respuesta[2].
                                "]</div>";
            }
        }
    }//Termina funcion accionesAlumnos
}

    /*class mvcController{
        public function plantilla(){
            include "vista/menu.php";
        }
        public function ruta($url){
            if($url == "alumnos" || $url == "carreras" || $url == "profesores" || $url == "carrera-profesor"){
                include "vista/".$url.".php";
            }
            else{
                include "index.php";
            }
        }
    }*/
?>