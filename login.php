<?php
session_start();

    if($_POST){

        if( ($_POST['usuario']=="carlos") && ( $_POST['contrasena']=="12345") ){
            $_SESSION['usuario']="carlos";

          header("location:index.php");

        }else{
            echo "<script> alert ('Usuario o contraseña incorrecta');</script>";
        }

    }
?>


<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

        <div class="row ">
            <div class="col-md-4 ">
    
        </div>
             <div class="col-md-4  ">
                 <div class="container">
                 <br/>
                    <div class="card">
                     
                     <div class="card-header">
                          Iniciar Session
                        </div>
                            <div class="card-body">

                                <form action="login.php" method="post">
    
                                 Usuario: <input class="form-control" type="text" name="usuario" id="">
                                <br/>
                                Contraseña: <input class="form-control" type="password" name="contrasena" id="">
                                <br/>
                                <button   class="btn btn-success" type="submit">Entrar al portafolio</button>
                                <br/>
                                </form>
                              </div>
                              
                                <div class="card-footer text-muted">
                                 
                       </div>
                    </div>
                </div>
             </div>
         <div class="col-md-4  ">
    
          </div>
    </div>

   
</body>

</html>