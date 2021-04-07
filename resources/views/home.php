<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
  <header>
      <nav>
          <a href="<?php echo route('home') ?>">Inicio</a>
          <a href="<?php echo route('saludo') ?>">Saludo</a> <!--Recuperamos los alias de las rutas con php y comando route-->
          <a href="<?php echo route('contacto') ?>">Contacto</a>
      </nav>
  </header>
</body>
</html>