<?php 
session_start();
if (isset($_SESSION['id'])){
    header('Location: principal.php');
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FUERTES CONSTRUCCIONES| LOGIN</title>
        <link type="image/x-icon" href="imagenes/logoFuertesConstructores.png" rel="icon" />
        
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
   <!-- <link href="css/login.css" rel="stylesheet" type="text/css"/>-->

<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="imagenes/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<style type="text/css">
    @font-face {
      font-family: Poppins-Regular;
      src: url('fonts/poppins/Poppins-Regular.ttf'); 
    }

    @font-face {
      font-family: Poppins-Bold;
      src: url('fonts/poppins/Poppins-Bold.ttf'); 
    }

    @font-face {
      font-family: Poppins-Medium;
      src: url('fonts/poppins/Poppins-Medium.ttf'); 
    }

    @font-face {
      font-family: Montserrat-Bold;
      src: url('fonts/montserrat/Montserrat-Bold.ttf'); 
    }
</style>
    <link rel="stylesheet" type="text/css" href="css/login/util.css">
    <link rel="stylesheet" type="text/css" href="css/login/main.css">
<!--===============================================================================================-->
    
     <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    -->
    
    <script>
    $( document ).ready(function() {
    
        $('#botonSignIn').click(function (){
            $('#mensaje').show();
            $('#mensaje').animate({ scrollTop: $('#mensaje')[0].scrollHeight}, 1000); 
            
            var altura = $(document).height();
    	$("html, body").animate({scrollTop:altura+"px"});

        });
     });
    </script>
    </head>
    <body>
        
        <!-- <div class="container" id="loginf" align="center" style=" //border: #6BAF01 solid 3px; margin-top: 100px;"> 
       

        <form id="signin" class="form-signin" role="form" action="return false" onsubmit="return false" method="POST">
            <img src="imagenes/FISHER.jpg" class="img-rounded" title="Empresa" width="200" height="100">
        <h1 align="center">INICIAR SESIÓN</h1>
             <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user text-warning"></i></span>
                <input id="id" type="text" class="form-control" name="id" placeholder="Usuario" autofocus="">                                        
            </div>
        
        
            <div class="input-group" id="Pass">    
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock text-warning"></i></span>
            <input id="pass" type="password" class="form-control" name="pass" placeholder="Contraseña"> 
            </div>
        
        <div class="checkbox" style="margin-bottom: 10px;">
    <label>
        <input type="checkbox" id="mostrarPass" onclick="Cambiar()"> Mostrar contraseña
    </label>
  </div>
        
        <button class="btn btn-success" id="botonSignIn" onclick="Validar(document.getElementById('id').value, document.getElementById('pass').value)" ><font size="+2">ENTRAR</font></button><br><br>
        
        
        <div class="alert alert-danger fade in" id="mensaje" style=" display: none;" align="center">
            
        <strong><div id="mensaje"></div></strong>
        </div>
        </form>
        
    </div>-->
        


    <!--login start-->
    <script src="js/venta.js?v=<?php echo time(); ?>"></script>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt mt-5" data-tilt>
                    <img src="imagenes/logoFuertesConstructores.png" alt="Comercial Zona">
                </div>

                <form class="login100-form validate-form">
                    <span class="login100-form-title">
                        FUERTES CONSTRUCCIONES<BR>
                        INGRESAR AL SISTEMA
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Usuario requerido">
                        <input class="input100" autofocus type="text" name="id" id="id" placeholder="Usuario">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Contraseña requerida">
                        <input class="input100" type="password" name="pass" id="pass" placeholder="Contraseña">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <strong><div style="display: none;" class="alert alert-danger" id="mensaje"></div></strong>
                    
                    <div class="container-login100-form-btn">
                        <button type="button" onclick="Validar(document.getElementById('id').value, document.getElementById('pass').value)" class="login100-form-btn">
                            ENTRAR
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="js/main.js"></script>

    <!--login end -->


        <script>
    
     function Validar(id,pass){
        $.ajax({
            url: 'validarLogin.php',
            type: 'POST',
            data: 'id='+id+'&pass='+pass,
            success: function (resp){
                $('#mensaje').show();
                $('#mensaje').html(resp);
                document.getElementById('pass').value = '';
            }
        });
    }

    function Cambiar()
        {
            if( $('#mostrarPass').prop('checked') ) {
                document.getElementById('pass').type = 'input';
            }else{
                document.getElementById('pass').type = 'password';
            }
        }   
   
    </script>  
    </body>
</html>