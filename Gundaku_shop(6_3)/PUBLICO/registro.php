<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Gundaku Shop</title>
    <link rel="stylesheet" href="../VISTA/CSS/estilos.css">
    <link rel="icon" type="image/jpg" href="../VISTA/IMG/favicon_gundaku.jpg">
</head>

<body>
    <!-- encabezado-->
    <?php include "../VISTA/encabezado.php" ?>
    
    <!-- Menu principal -->
   <?php include "../VISTA/menuprinc.php" ?>

     <!-- Boton de tema -->
    <?php include "../VISTA/btntema.php" ?>
    
    <!-- Menu secundario -->
   <?php include "../VISTA/menusec.php" ?>

     <!----------- Zona de registro / Sin logica programada solicitada para los botones aún------------>
     <form action="../CONTROLADOR/guardar.php" method="POST" class="cont-registro">
         <h2>Unete al ejercito de la federacion</h2>

         <div class="campos">
             
             <label for="nombre">Nombre:</label>
             <input type="text" id="Nombre" name="nombre" required>

             <label for="usuario">Nombre de usuario:</label>
             <input type="text" id="Usuario" name="usuario" required>

             <label for="Email">Correo electronico:</label>
             <input type="email" id="Email" name="email" required>

             <label for="pasword">Contraseña:</label>
             <input type="password" id="Pasword" name="pasword" required>

             <label for="telefono">Numero telefono:</label>
             <input type="tel" id="Telefono" name="telefono" required>
        </div>

         <button type="submit" class="btn-registro"><img src="../VISTA/IMG/guardar.png" alt="Guardar" class="btn-guardar"></button>
     </form>

    <!-- Pie de página -->
   <?php include "../VISTA/pie.php"?>
   
    <script src="../VISTA/JS/JavaScript.js"></script>
</body>
</html>