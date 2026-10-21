# IZANAMI098532.github.io
<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>Gundaku Shop</title>
   <!-- <link rel="stylesheet" href="../VISTA/CSS/estilos.css">-->
    <link rel="icon" type="image/JPG" href="../VISTA/IMG/favicon_gundaku.JPG">
</head>

<body>
    <header class="encabezado">
        <img src="../VISTA/IMG/Logo_Gundaku.png" class="logo"> 
    </header>

    <!-- Menu principal -->
    <nav class="menu">
            <a>Inicio </a>
            <a>Iniciar Sesión </a>
            <a>Registrar</a>
            <a> Acerca de</a>
            <a>Ayuda </a>
    </nav>

     <!-- Boton de tema -->
    <button id="themeBtn" class="toggle-btn">
        <span class="moon">🌙</span>
        <span class="sun">☀️</span>
    </button>
    
    <!-- Menu secundario -->
    <ul class="menu_sec">
        <button class="menu_btn"><a>Inicio </a></button>
        <button class="menu_btn"><a>Iniciar Sesión </a></button>
        <button class="menu_btn"><a>  </a></button>
        <button class="menu_btn"><a>  </a></button>
        <button class="menu_btn"><a>  </a></button>
    </ul>

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
             


    <!-- Pie de página -->
    <footer class="pie_pagina">
        <h4> Siguenos en nuestras redes sociales </h4>
        <a href="https://www.instagram.com/gundaku_shop?stkn=MXJzZm8yMmNhYnZvdw==", target="_blank"> <img src="../VISTA/IMG/Instagram3.png" class="insta"> </a>
        
        <p> 2026 Gundaku Shop. Todos los derechos reservados.</p>
    </footer>
   <!-- <script src="../VISTA/JS/JavaScript.js"></script>-->

    <style>/*--ESTILOS--*/

/*colores principales*/
:root {
    --fondo:#F8FAFC;
    --acento:#d5d7da;
    --acento2:#89898b;
    --azul:#0757AD;
    --borde-azul:#004d9f;
    --amarillo:#F5E52B;
    --borde-am:#baad1c;
    --texto:#000000;
}

/*colores modo oscuro  */
[data-theme="dark"] {
    --fondo:#111827;
    --acento:#1a1f30;
    --acento2:#0c1016;
    --azul:#1b3686;
    --borde-azul:#033365;
    --amarillo:#b9a602;
    --borde-am:#967e02;
    --texto:#FFFFFF;
}

body {
    background-color: var(--fondo);
    color: var(--texto);
    transition: all 0.4s ease;
    flex-wrap: wrap;
}

@media (max-width: 768px) {
    body {
        display: flex;
        background-color: var(--fondo);
        color: var(--texto);
        transition: all 0.4s ease;
        flex-wrap: wrap;
        box-sizing: border-box;
        max-width: 50%;
    }
}

/*encabezado*/
.encabezado {
    display: flex;
    background: var(--azul);
    align-items: center;
    font-family: Arial, sans-serif;
    font-size: x-large;
    padding: 1rem;
}

/*logo*/
.logo {
    width: 40%;
    height: auto;
    margin-right: auto;
    margin-left: auto;
    border-radius: 1%;
}



/* estilos para los enlaces */
a{
    text-decoration:none;
    color: var(--texto);
}

/*menu*/
.menu {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    background-color: var(--amarillo);
    gap: 12%;
    padding: 1%;
    font-size: 150%;
    font-family:sans-serif,Arial;
    border-bottom: 10px solid var(--borde-am);
}   

/*botones del menú principal*/
.btn-menu-p {
    border-radius: 5%;
    &:hover {
        background-color: var(--borde-am);
    }
}

/*menu secundario*/
.menu_sec {
    position: sticky;
    top:7%;
    background: var(--azul);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 3%;
    margin-right: 1%;
    margin-left: 85%;
    margin-top: 3%;
    border-bottom: 10px solid var(--borde-azul);
    border-left: 10px solid var(--borde-azul);
    border-radius: 3px;

}

/*botones del menú secundario  */
.menu_btn {
    background-color: var(--amarillo);
    padding: 0.5rem 1rem;
    width: 100%;
    border: none;
    border-bottom: 5px solid var(--borde-am);
    border-left: 5px solid var(--borde-am);
    border-radius: 3px;
    margin: 0.2rem;

    &:hover {
        transform: scale(1.1);
    }
}

/* CARRUSEL */
.carrusel {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 70%;
    margin: 50px auto;
    gap: 15px;
}

.carrusel_contenedor {
    width: 80%;
    overflow: hidden;
}

@media (max-width: 768px) {
    .carrusel_contenedor {
    max-width: 50%;
    max-height: auto;
    overflow: hidden;
}

}

.carrusel_imagenes {
    display: flex;
    transition: transform 0.5s ease;
    
}

.carrusel_item {
    min-width: 100%;
    height: 400px;
    object-fit: contain;
}

.carrusel_btn {
    background-color: var(--azul);
    color: white;
    border: none;
    font-size: 30px;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;

        &:hover {
        transform: scale(1.1);
    }
}

.carrusel_btn:hover {
    background-color: var(--borde-azul);
}

/*botones de cambio de tema*/
.toggle-btn {
    position: sticky;
    display: flex;
    top: 0.5rem auto;
    left:90rem auto;
    font-size: 1.5rem;
    z-index: 100;
    border: none;
    background: none;
    cursor: pointer;
    transition: transform 0.3s;
        &:hover {
        transform: scale(1.15);
    }

    .sun {
        display: none;
    }
    .moon {
        display: inline;
    }

}

[data-theme="dark"] .sun {
    display: inline;
}
[data-theme="dark"] .moon {
    display: none;
}

.insta {
    width: 7%;
    height: auto;
}

#face1 {
    width: 7%;
    height: auto;
}

.pie_pagina{
    background:var(--acento);
}

/*--FORMULARIO DE REGISTRO--*/
.cont-registro{
    box-sizing: border-box;
    position: static;
    background:var(--azul);
    border: 0.2rem solid var(--borde-azul);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: min(100% - 2rem, 24rem);
    padding: 1rem;
    border-radius: 2%;
    margin: 2rem auto;

}

.campos{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 55%;
    padding: 1rem;
    border-color: var(--borde-azul);
}

#Nombre{
    margin-bottom: 1rem;
       &:hover {
        background-color:#d5d7da;
        border-color: var(--borde-azul);
    }

}
#Usuario{
    margin-bottom: 1rem;
       &:hover {
        background-color:#d5d7da;
        border-color: var(--borde-azul);
    }

}
#Email{
    margin-bottom: 1rem;
       &:hover {
        background-color:#d5d7da;
        border-color: var(--borde-azul);
    }

}
#Pasword{
    margin-bottom: 1rem;
       &:hover {
        background-color:#d5d7da;
        border-color: var(--borde-azul);
    }

}
#Telefono{
    margin-bottom: 1rem;
       &:hover {
        background-color:#d5d7da;
        border-color: var(--borde-azul);
    }

}

.btn-registro{
    background-color: var(--amarillo);
    padding: 0.7rem;
    width: 7rem;
    border: var(--acento2);
    border-bottom: 5px solid var(--borde-am);
    border-left: 5px solid var(--borde-am);
    border-radius: 3px;
    margin: 0.2rem;

    &:hover {
        transform: scale(1.1);
    }
}

.btn-guardar{
    width:1.7rem;
    height:auto;
}
/*----FORMULARIO DE LOGGIN--*/
.cont-loggin{
    position:static;
    background:var(--azul);
    border: 0.2rem solid var(--borde-azul);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 15rem;
    padding: 1rem;
    border-radius: 2%;

}

.campos-loggin{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 55%;
    padding: 1rem;
    border-color: var(--borde-azul);
}
#Usuario-loggin{
    margin-bottom: 1rem;
       &:hover {
        background-color:#d5d7da;
        border-color: var(--borde-azul);
    }

}

#Pasword-loggin{
    margin-bottom: 1rem;
       &:hover {
        background-color:#d5d7da;
        border-color: var(--borde-azul);
    }

}

.btn-loggin{
    background-color: var(--amarillo);
    padding: 0.7rem;
    width: 7rem;
    border: var(--acento2);
    border-bottom: 5px solid var(--borde-am);
    border-left: 5px solid var(--borde-am);
    border-radius: 3px;
    margin: 0.2rem;

    &:hover {
        transform: scale(1.1);
    }
}
</style>

<script>
    //carrusel de imagenes
let imagenActual = 0;

function moverCarrusel(direccion) {
    const carrusel = document.querySelector(".carrusel_imagenes");
    const imagenes = document.querySelectorAll(".carrusel_item");

    imagenActual += direccion;

    if (imagenActual < 0) {
        imagenActual = imagenes.length - 1;
    }

    if (imagenActual >= imagenes.length) {
        imagenActual = 0;
    }

    carrusel.style.transform = `translateX(-${imagenActual * 100}%)`;
}

//---modo claro y oscuro---

const html = document.documentElement;
const toggleBtn = document.querySelector("#themeBtn");

const setTheme = (theme) => {
    html.setAttribute("data-theme", theme);
    localStorage.setItem("theme", theme);
    }

    const savedTheme = localStorage.getItem("theme");

    if (savedTheme) {
        setTheme(savedTheme);
    } else {
        setTheme("light");
    }

    toggleBtn.addEventListener("click", () => {
        const currentTheme = html.getAttribute("data-theme");
        const newTheme = currentTheme === "dark" ? "light" : "dark";
        setTheme(newTheme);
    })

</script>
</body>
</html>
