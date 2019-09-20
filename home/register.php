<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://fonts.googleapis.com/css?family=Heebo|Muli|Noto+Sans+KR|Raleway&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>Login register </title>
</head>

<body>

  <div class="contenedor">
    <nav class="navbar">
      <ul class="izquierdo">
        <img class="logo" src="img/beats.png" alt="foto de logo" height=75px; width=4vw;>
      </ul>
      <ul class="derecho">
        <li class="butd"><a href="#">Log in</a>  </li>
        <li class="butd"><a href="#">Nosotros</a> </li>
        <li class="butd"><a href="#"> FAQ</a></li>
      </ul>
    </nav>

    <section class="section1">

      <article class="login">
        <form class="regform col-sm-12" action="index.html" method="post">
          <br>
          <h2 class="tt"><b>Registrarse</b></h2>
          <br>
          <br>
          <p class="tt">
            <label for="nombre"> <b>Nombre</b> </label>
            <br>
            <input type="text" id="Nombre" name="nombre" value="" placeholder="Nombre" required>
          </p>
          <p class="tt">
            <label for="nombre"> <b>Apellido</b> </label>
            <br>
            <input type="text" id="apellido" name="apellido" value="" placeholder="Apellido" required>
          </p>
          <p class="tt">
            <label for="email"> <b>Email</b> </label>
            <br>
            <input type="email" id="Email" name="email" value="" placeholder="Email" required>
          </p>
          <p class="tt">
            <label for="nombre"> <b>Nombre de usuario</b> </label>
            <br>
            <input type="nombre" id="nombre " name="nombre" value="" placeholder="Nombre de usuario" required>
          </p>
          <p class="tt">
            <label for="password"> <b>Contraseña</b> </label>
            <br>
            <input type="password" id="password" placeholder="Password" name="password" value="" required>
          </p>
          <div class="boton">
            <button type="submit" name="button">Listo</button>
          </div>
        </form>
      </article>

      <article class="info">
        <p>Mantenete informado las 24hs sobre los temas que mas te interesan.</p>
      </article>
    </section>

    <footer class="futer">
      <p class="texto">FOOTER</p>
    </footer>
  </div>
</body>

</html>