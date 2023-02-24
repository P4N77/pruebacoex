<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataCredito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">
</head>

<body>

<main class="container row">
        <div class="contenedor1 col-3">
            <div class="imagen" id="imagen_contenedor">
                <svg id="usuario_logo" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
                  <p class="usuario_titulo">Admin</p>
            </div>
            <div class="botonInicio">
                <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                  </svg> <span>Inicio</span></a>
            </div>

            <div class="botonClientes">
                <a href="index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                      </svg>
                      </svg> <span>Clientes</span>
                </a>
            </div>
            <div class="botonCreditos">
                <a href="">                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                    <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                  </svg>
                  </svg> <span>Creditos</span></a>


            </div>
            
            <div class="botonCerrar">
                <a href="" class="salir">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                        <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                        <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
                      </svg>
                      <span>cerrar secion</span>
                </a>
              </div>
        </div>
        <div class="contenedor2 col-9" >
            <div class="row">
            <div class="titulo">CLIENTES</div>
			<div>
			<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$id = mysqli_real_escape_string($mysqli, $_POST['id_usu']);
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nom_usu']);
	$apellido = mysqli_real_escape_string($mysqli, $_POST['ape_usu']);
	$ciudad = mysqli_real_escape_string($mysqli, $_POST['ciu_usu']);
	$telefono = mysqli_real_escape_string($mysqli, $_POST['tel_usu']);
	$direccion = mysqli_real_escape_string($mysqli, $_POST['dir_usu']);
	$cupoDisponible = mysqli_real_escape_string($mysqli, $_POST['cup_dis_usu']);
	$cupoTotal = mysqli_real_escape_string($mysqli, $_POST['cup_tot_usu']);
	$dias = mysqli_real_escape_string($mysqli, $_POST['dia_usu'])
	;
		
	if(empty($id) || empty($nombre) || empty($apellido) || empty($ciudad) || empty($telefono) || empty($direccion) || empty($cupoDisponible) || empty($cupoTotal) || empty($dias)) {
				
		if(empty($id)) {
			echo "<font color='red'>el campo nit/CC esta vacio</font><br/>";
		}
		if(empty($nombre)) {
			echo "<font color='red'>el campo nombre esta vacio</font><br/>";
		}
		if(empty($apellido)) {
			echo "<font color='red'>el campo apellido esta vacio</font><br/>";
		}
		if(empty($ciudad)) {
			echo "<font color='red'>el campo ciudad esta vacio</font><br/>";
		}
		if(empty($telefono)) {
			echo "<font color='red'>el campo telefono esta vacio</font><br/>";
		}
		if(empty($direccion)) {
			echo "<font color='red'>el campo direccion esta vacio</font><br/>";
		}
		if(empty($cupoDisponible)) {
			echo "<font color='red'>el campo cupo disponible esta vacio</font><br/>";
		}
		if(empty($cupoTotal)) {
			echo "<font color='red'>el campo cupo total esta vacio</font><br/>";
		}
		if(empty($dias)) {
			echo "<font color='red'>el campo dias de gracia esta vacio</font><br/>";
		}
		
	
		echo "<br/><a href='javascript:self.history.back();'>Atras</a>";
	} else { 
	
				
		$result = mysqli_query($mysqli, "INSERT INTO tbl_usuarios(id_usu,nom_usu,ape_usu,ciu_usu,tel_usu,dir_usu,cup_dis_usu,cup_tot_usu,dia_usu) VALUES('$id','$nombre','$apellido','$ciudad','$telefono','$direccion','$cupoDisponible','$cupoTotal','$dias')");
		
		echo "<font color='green'>Cliente agregado correctamente.";
		echo "<br/><a href='index.php'>
        <svg xmlns='http://www.w3.org/2000/svg'width='16' height='16' fill='currentColor' class='bi bi-box-arrow-left' viewBox='0 0 16 16'>
  <path fill-rule='evenodd' d='M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z'/>
  <path fill-rule='evenodd' d='M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z'/>
</svg>Volver</a>";
	}
}
?>
			</div>
        </div>
    </div>


    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
