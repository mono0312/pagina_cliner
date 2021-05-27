<?php
    include("conexion.php");
    
    if($_POST){
        
        $Nombre = $_POST['Nombre'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Direccion = $_POST['Direccion'];
        $Celular = $_POST['Celular'];
        $Edad = $_POST['Edad'];
        
        if($_POST['Nombre'] == ''){
            exit( "<script type='text/javascript'>
                        swal({
                            title: 'Nombre en blanco!!',
                            text: 'Intente de nuevo, Nombre en blanco',
                            icon: 'error'})
                            .then((value) => {
                                window.location.href='index.php';
                        });
                </script>");
        }
        if($_POST['Email'] == ''){
            exit( "<script type='text/javascript'>
                        swal({
                            title: 'Email en blanco!!',
                            text: 'Intente de nuevo, Email en blanco',
                            icon: 'error'})
                            .then((value) => {
                                window.location.href='index.php';
                        });
                </script>");
        }
        if($_POST['Password'] == ''){
            exit( "<script type='text/javascript'>
                        swal({
                            title: 'Password en blanco!!',
                            text: 'Intente de nuevo, Password en blanco',
                            icon: 'error'})
                            .then((value) => {
                                window.location.href='index.php';
                        });
                </script>");
        }
        if($_POST['Direccion'] == ''){
            exit( "<script type='text/javascript'>
                        swal({
                            title: 'Direccion en blanco!!',
                            text: 'Intente de nuevo, Direccion en blanco',
                            icon: 'error'})
                            .then((value) => {
                                window.location.href='index.php';
                        });
                </script>");
        }
        if($_POST['Celular'] == ''){
            exit( "<script type='text/javascript'>
                        swal({
                            title: 'Celular en blanco!!',
                            text: 'Intente de nuevo, Celular en blanco',
                            icon: 'error'})
                            .then((value) => {
                                window.location.href='index.php';
                        });
                </script>");
        }
        if($_POST['Edad'] == ''){
            exit( "<script type='text/javascript'>
                        swal({
                            title: 'Edad en blanco!!',
                            text: 'Intente de nuevo, Edad en blanco',
                            icon: 'error'})
                            .then((value) => {
                                window.location.href='index.php';
                        });
                </script>");
        }

        $insert = "INSERT INTO user_login (Nombre, Email, Password, Direccion, Celular, Edad, Tipo_User_ID_Tipo_User) VALUES('$Nombre', '$Email', '$Password', '$Direccion', '$Celular', '$Edad', 3)";

        $ejecutar = mysqli_query($conn,$insert);
 
        if(!$ejecutar){
            exit("<script type='text/javascript'>
            swal({
                title: 'ERROR!!',
                text: 'Intente de nuevo o comunicate con el administrador',
                icon: 'error'})
                .then((value) => {
                    window.location.href='index.php';
                 });
            </script>");
        }
            exit("<script type='text/javascript'>
            swal({
                title: 'Muy Bien!!',
                text: 'Registro exitoso',
                icon: 'success'})
                .then((value) => {
                    window.location.href='index.php';
                 });
            </script>");
        
           
    }
?>