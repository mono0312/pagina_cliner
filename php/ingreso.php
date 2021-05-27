<?php
    include("conexion.php");
  
    session_start();
    
    if($_POST){
     
        $Emailogin = $_POST['Emailogin'];
        $Passwordlogin = $_POST['Passwordlogin'];
        

        if($_POST['Emailogin'] == ''){
            exit( "<script type='text/javascript'>
                        swal({
                            title: 'Email en blanco!!',
                            text: 'Intente de nuevo, Email en blanco',
                            icon: 'error'
                        });
                </script>");
        }
        if($_POST['Passwordlogin'] == ''){
            exit( "<script type='text/javascript'>
                        swal({
                            title: 'Password en blanco!!',
                            text: 'Intente de nuevo, Password en blanco',
                            icon: 'error'
                        });
                </script>");
        }

        $query = "SELECT * FROM user_login WHERE Email = '$Emailogin' AND Password = '$Passwordlogin'";
        $result = $conn ->query($query) or die ($conn->error);
        if($result->num_rows > 0 && $result->num_rows <2){
            $row =$result->fetch_assoc();
            if($row['estado'] == 0){
                if(session_status() !== 2){
                    session_start();
                }
                exit( "<script>
                            swal({
                                title:'Bienvenido!',
                                text:'',
                                icon:'success'})
                                .then((value) => {
                                    window.location.href='app/index-admin.php';
                            });
                        </script> ");
            }else{
                exit( "<script> 
                        swal({
                            title: 'Usuario Bloqueado!!',
                            text: 'El usuario esta bloqueado, por favor comunicarse con el administrador',
                            icon: 'error'})
                            .then((value) => {
                                window.location.href='index.php';
                        });
                    </script> ");
            }
        }else{
            exit( "<script type='text/javascript'>
                        swal({
                            title: 'Usuario o clave erroneas!!',
                            text: 'Intente de nuevo, usuario y clave no son correctas',
                            icon: 'error'})
                            .then((value) => {
                                window.location.href='index.php';
                        });
                </script>");
        }

    }
?>