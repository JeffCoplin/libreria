<?php
include 'bd/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Libreria</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        
        <link href="css/styles.css" rel="stylesheet" />
            </style>

            <style>
              
        .table th,
        .table td {
            color: white; 
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 10px 0;
        }
    </style>
    </head>
    <body id="page-top">
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">JCLibreria</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="autores.php">Autores</a></li>
                        <li class="nav-item"><a class="nav-link" href="libros.php">libros</a></li>
                        <li class="nav-item"><a class="nav-link" href="tiendas.php">tiendas</a></li>
                        <li class="nav-item"><a class="nav-link" href="contactanos.php">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1> Libros </h1>
                    <?php
                    $gestionLibreria = new DBGestionLibreria();
                    $libros = $gestionLibreria->getLibros();
                    ?>
                    
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th scope="col">Título</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($libros)): ?>
                                <?php foreach ($libros as $libro): ?>
                                    <tr>
                                        <td><?php echo $libro['titulo']; ?></td>
                                        <td><?php echo $libro['tipo']; ?></td>
                                        <td><?php echo $libro['precio']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3">No hay libros disponibles.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </header>

                    </div>
                </div>
            </div>
        </header>


        </section>
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2023</div></footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

