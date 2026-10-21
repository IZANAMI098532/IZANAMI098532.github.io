<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Gundaku Shop</title>
    <link rel="stylesheet" href="../VISTA/CSS/estilos.css">
    <link rel="icon" type="image/jpg" href="../VISTA/IMG/favicon_gundaku.jpg">
     <?php include "../MODELO/conexiondb.php" ?>
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

     <!---------------- CARRUSEL------------>
<div class="carrusel">
    <button class="carrusel_btn anterior" onclick="moverCarrusel(-1)">
        &#10094;
    </button>

    <div class="carrusel_contenedor">
        <div class="carrusel_imagenes">
            <img src="../VISTA/IMG/gnd_miku.jpg" alt="Gundam Miku" class="carrusel_item">
            <img src="../VISTA/IMG/gundam.jpg" alt="Gundam" class="carrusel_item">
            <img src="../VISTA/IMG/gdn_Strike.jpg" alt="Gundam Strike" class="carrusel_item">
            <img src="../VISTA/IMG/gelgoog.jpg" alt="Gelgoog" class="carrusel_item">
            <img src="../VISTA/IMG/gnd_alex.jpg" alt="Gundam Alex" class="carrusel_item">
            <img src="../VISTA/IMG/gnd_freddom.png" alt="Gundam Freedom" class="carrusel_item">
            <img src="../VISTA/IMG/gnd_hell.jpg" alt="Gundam Hell" class="carrusel_item">
            <img src="../VISTA/IMG/zaku.jpg" alt="Zaku II" class="carrusel_item">
        </div>
    </div>

    <button class="carrusel_btn siguiente" onclick="moverCarrusel(1)">
        &#10095;
    </button>
</div>
             


    <!-- Pie de pagina -->
   <?php include "../VISTA/pie.php"?>
   
    <script src="../VISTA/JS/JavaScript.js"></script>
</body>
</html>