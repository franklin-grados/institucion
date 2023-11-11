
const nav_desac = document.getElementById("nav_desac");
const nav_activ = document.getElementById("nav_activ");
const nav_pincipal = document.getElementById("nav_pincipal");
nav_desac.addEventListener("click", function() {
    if (!nav_pincipal.className.includes("nav-desac")) {
        nav_pincipal.classList.remove("nav-activ");
        nav_pincipal.classList.add("nav-desac");
        nav_pincipal.classList.remove("nav-ini");
        
    }else{
        nav_pincipal.classList.remove("nav-desac");
        nav_pincipal.classList.add("nav-activ");
        nav_pincipal.classList.remove("nav-ini");
    }
});
nav_activ.addEventListener("click", function() {
    if (!nav_pincipal.className.includes("nav-desac")) {
        nav_pincipal.classList.remove("nav-activ");
        nav_pincipal.classList.add("nav-desac");
        nav_pincipal.classList.remove("nav-ini");
    }else{
        nav_pincipal.classList.remove("nav-desac");
        nav_pincipal.classList.add("nav-activ");
        nav_pincipal.classList.remove("nav-ini");
    }
});

const elementosMostrarLista = document.querySelectorAll('.mostrar-lista');
elementosMostrarLista.forEach(function(elemento) {
    elemento.addEventListener('click', function() {

        const listaAsociada = elemento.nextElementSibling;
        const activar = listaAsociada.className.includes("activado");

        cerrarTodasLasListas();
        // Activa el elemento clicado
        if (!activar) {
            listaAsociada.classList.toggle('activado');
            listaAsociada.classList.remove('inactivo');
        }
        
    });
});

function cerrarTodasLasListas() {
    const elementosActivados = document.querySelectorAll('.more-navegacion.activado');
    // Itera sobre cada elemento activado y lo desactiva
    elementosActivados.forEach(function(elemento) {
        elemento.classList.remove('activado');
        elemento.classList.add('inactivo');
    });
}
    
document.addEventListener('DOMContentLoaded', function() {
    const filtroInput = document.getElementById('filtro');
    const items = document.querySelectorAll('.mostrar-lista');
    const items2 = document.querySelectorAll('.one-list');
    
    filtroInput.addEventListener('input', function() {
        const filtro = filtroInput.value.toLowerCase();
    
        items.forEach(function(item) {
        const textoItem = item.innerText.toLowerCase();
        const esVisible = textoItem.includes(filtro);
        item.parentNode.style.display = esVisible ? 'block' : 'none';
        });

        items2.forEach(function(item) {
        const textoItem = item.innerText.toLowerCase();
        const esVisible = textoItem.includes(filtro);
        item.parentNode.style.display = esVisible ? 'block' : 'none';
        });
        
    });
});


var touchstartX = 0;

document.addEventListener('touchstart', function(event) {
    touchstartX = event.touches[0].clientX;
});

document.addEventListener('touchmove', function(event) {
    var touchendX = event.touches[0].clientX;
    handleSwipe(touchstartX, touchendX);
});

function handleSwipe(startX, endX) {
    var threshold = 50; // Puedes ajustar este umbral según tus necesidades
    if (startX - endX > threshold) {
    // Deslizamiento hacia la izquierda
        nav_pincipal.classList.remove("nav-activ");
        nav_pincipal.classList.add("nav-desac");
        nav_pincipal.classList.remove("nav-ini");
    } else if (endX - startX > threshold) {
    // Deslizamiento hacia la derecha
        nav_pincipal.classList.remove("nav-desac");
        nav_pincipal.classList.add("nav-activ");
        nav_pincipal.classList.remove("nav-ini");
    }
}