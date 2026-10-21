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
