<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="shortcut icon" href="../img/logocliner2.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos-admin.css">
</head>

<body>
    <div class="contenedor">
         <!-- Navegador -->
         <nav>
            <div class="logo">
                <img src="img/logocliner.png" alt="Logo Empresa" title="Titulo Logo Empresa">
            </div>
            <div class="navega">
                <ul>
                    <li><a href="#Perfil">Perfil</a></li>
                    <li><a href="#Citas Medicas">Citas Medicas</a>      
                        <ul>
                            <li><a href="" id="Agendar" type="button" class="" data-toggle="modal" data-target="#AgendarModal">Agendar</a>
                            </li>
                            <li><a href="">Consultar</a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li><a href="#Historial Clinico">Historial Clinico</a>
                        <ul>
                            <li><a href="">Consultar</a></li>
                            <li><a href="">Imprimir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="ingreso">
                <ul>
                    <li><a href="">yo</a>
                        <ul>
                            <li>
                                <a href="" id="Inicio" type="button" class="" data-toggle="modal" data-target="#InicioModal">Iniciar Sesion</a>
                            </li>
                            <li>
                                <a href="" id="cierre" type="button" class="" data-toggle="modal" data-target="#CierreModal" >Cerrar Sesion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Encabezado -->
        <header>
            <div class="head-opc">
                <img src="../img/kisspng-physicibienvenidos.png" width="600" alt="">
                <h1>Bienvenidos</h1>
            </div>
        </header>

        <!-- Pie de Pagina -->
        <footer></footer>
        <a href="#"><i class="fas fa-arrow-circle-up"></i></a>

    </div>
    
    <!-- Modal Agendamiento -->

    <div class="modal fade" id="AgendarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agendar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="form_agendar" style="background-color: #6e8080;">
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input style="background: #fff;" type="text" name="Nombre" class="form-control" id="Nombre Completo" placeholder="Nombre Completo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input style="background: #fff;" type="text" name="Direccion" class="form-control" id="Direccion" placeholder="Direccion">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input style="background: #fff;" type="text" name="Celular" class="form-control" id="Celular" aria-describedby="" placeholder="Celular">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input style="background: #fff;" type="text" name="Edad" class="form-control" id="Edad" aria-describedby="emailHelp" placeholder="Edad">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input style="background: #fff;" type="email" name="Email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"></label>
                            <input style="background: #fff;" type="password" name="Password" class="form-control" id="Password" placeholder="Password">
                        </div>    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-primary" name="regis" id="Agendar_modal" value="Agendar">
                </div>
            </div>
        </div>
    </div>
</body>

</html>