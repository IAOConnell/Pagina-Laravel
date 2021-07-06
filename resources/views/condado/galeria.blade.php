<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Parcial</title>

    <!--Bootstrap y CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilotres.css">

    <!-- JS-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

<!-- Fuentes -->
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">


</head>
<body class="pb-5">
    <nav class="navbar bg-primary navbar-expand-lg navbar-dark navbar-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>   
        </button>
        
       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav mr-auto">
            <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="<?= url("/"); ?>">Inicio</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= url("/galeria"); ?>">Galeria</a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="<?= route("condados.index"); ?>">Panel</a>
            </li>

        </ul>
            </ul>
            
            
            

                <ul class="navbar-nav mr-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Registrarse</a>
                    </li>
                
                    <li class="nav-item">
                        <a href="#" class="nav-link">Conectarse</a>
                    </li>
                </ul>

                <ul class="navbar-nav mr-0">
                    <li class="nav-item">
                        <span class="nav-link">"usuario"</span>
                    </li>
                    
                     <li class="nav-item">
                            <a href="#" class="nav-link">Panel de Control</a>
                        </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Salir</a>
                    </li>

                </ul>   

            
            
        </div>
            
    </nav>
    
    <header>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-2 my-4">
                    <a href="index.php"><img src="imagen/general/logoir.png" alt="logo" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </header>

    <!--- CONTENIDO ---->
<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 id="galeria">Galería</h1>
            </div>
        </div>


        <div class="row">
            <div class="col-12 col-md-3 my-3">
                <div class="card-deck">
                    <div class="card border-default">
                        <div class="card-body">
                            <img src="imagen/galeria/11.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-3 my-3">
                <div class="card-deck">
                    <div class="card border-default">
                        <div class="card-body">
                            <img src="imagen/galeria/22.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-3 my-3">
                <div class="card-deck">
                    <div class="card border-default">
                        <div class="card-body">
                            <img src="imagen/galeria/33.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-12 col-md-3 my-3">
                <div class="card-deck">
                    <div class="card border-default">
                        <div class="card-body">
                            <img src="imagen/galeria/44.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-3 my-3">
                <div class="card-deck">
                    <div class="card border-default">
                        <div class="card-body">
                            <img src="imagen/galeria/55.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-3 my-3">
                <div class="card-deck">
                    <div class="card border-default">
                        <div class="card-body">
                            <img src="imagen/galeria/66.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-12 col-md-3 my-3">
                <div class="card-deck">
                    <div class="card border-default">
                        <div class="card-body">
                            <img src="imagen/galeria/77.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-3 my-3">
                <div class="card-deck">
                    <div class="card border-default">
                        <div class="card-body">
                            <img src="imagen/galeria/88.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 my-3">
                <div class="card-deck">
                    <div class="card border-default">
                        <div class="card-body">
                            <img src="imagen/galeria/99.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
            

        </div>

        
    </div>
 <div class="col-sm-6"><p class="text-right"><?php
    echo date('l jS \of F Y h:i:s A');
                    ?></div>
    
<!---------------FIN CONTENIDO -------------------->
    

    <div class="container-fluid px-0">
        <footer class="page-footer font-small blue">

    <div> <p>Redes sociales</p>  
        <img src="imagen/general/facebook.png" alt="facebook logo"> 
    <img src="imagen/general/twitter.png" alt="twitter logo">
    <img src="imagen/general/instagram.png" alt="instagram logo">
    <img src="imagen/general/tumblr.png" alt="tumblr logo"></div> 
    <div class="footer"></div>
</footer>
    </div>
</body>
</html>