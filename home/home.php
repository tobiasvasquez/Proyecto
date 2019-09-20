<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Heebo|Muli|Noto+Sans+KR|Raleway&display=swap" rel="stylesheet"> 

    <title>Registrarse</title>
  </head>
  <body>
    <div class="container-fluid w-100 p-0 h-100 overflow-hidden _contenedor">
        <main class="main">
            <header class="">
                    <nav class="navbar  _navbar">
                        <div class=" _logo">
                            <a class="navbar-brand " href="#" >logo</a>
                        </div>
                        <div class="botonIngresar">
                            <a class="" href="../log-in/login.php" >Ingresar</a>
                        </div>
                        
                    </nav>


            </header>
            <section class="row d-flex justify-content-center p-5 mt-lg-3  mt-md-5 ">
                
                    <form class="col-xl-4 col-lg-5 col-md-5 col-sm-8 ml-lg-5 " method="POST" action="">
                            <h2>Registrarse</h2>
                            <br>
                            <div class="form-group">
                              <label for="Nombre">Nombre y Apellido</label>
                              <input type="text" class="form-control" id="nombre" placeholder="Nombre y Apellido" name="nombre">
                            </div>
                            <div class="form-group">
                              <label for="Email">Email</label>
                              <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                              <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                              <label for="Password">Contraseña</label>
                              <input type="password" class="form-control" id="Password" placeholder="Password" name="contrasenia">
                            </div>
                            <div class="form-group">
                              <label for="Password2">Repetir contraseña</label>
                              <input type="password" class="form-control" id="Password2" placeholder="Password" name="contrasenia2">
                            </div>
                           <button type="submit" class="btn _boton">Registrarse</button>
                    </form>
                    <article class="texto">
                      <h2>Mantenete informado las 24hs sobre los temas que mas te interesan.</h2>
                    </article>
            </section>
        </main>
        
        <footer class="row _contenedorFooter">
            <div class="col-12 _footer">
                <ul class="menusFooter">
                    <li><a href="../contacto/contacto.php">Contacto</a></li>
                    <li><a href="">Nosotros</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
