<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/style.css">
</head>

<body>
<header>
    <nav class="navbar navbar-default" style="background:#355C7D;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">EJERCICIO 2</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" >
              <?php 
               
                if(!isset($_SESSION['validar'])){
              ?>
              <li ><a href="index.php?m=login">Iniciar sesion</a></li>

              <?php
                }else{ 
              ?>
              <li ><a class="link" href="index.php?m=estudiante"> Registrar Alumno</a></li>
              <li ><a class="link" href="index.php?m=carrera">Registrar carrera</a></li>
              <li ><a class="link" href="index.php?m=universidad">Registrar universidad</a></li>


              

              <li >
                <a class="link" href="index.php"aria-haspopup="true" >Lista de estudiantes</a>
              </li>

              <li >
                <a class="link" href="index.php?m=carreraTable"  aria-expanded="false">Lista de carreras</a>
              </li>


              <li >
                <a class="link" href="index.php?m=universidadTable" >Lista de universidades</a>
              </li>
                  
               <li ><a class="link" href="index.php?m=salir">Cerrar Sesion</a></li>
              <?php
                }
              ?>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
</header>