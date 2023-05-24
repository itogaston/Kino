 
const boton = document.getElementById("activar");
const botonOcultar = document.getElementById("hidebut")
const año = document.getElementById("bus1");
const imdbid = document.getElementById("bus2");


boton.addEventListener('click', function() {
    if ((año.style.display = 'none') && (imdbid.style.display = 'none')) {
        año.style.display= 'block';
        imdbid.style.display= 'block';
        botonOcultar.style.display='block';
    }
});

botonOcultar.addEventListener('click', function() {
    if (año.style.display = 'block'){
        año.style.display= 'none';
        imdbid.style.display= 'none';
        botonOcultar.style.display='none';
    }
});

function changeText(option) {
    boton.textContent = option;
    document.getElementById("opcionBusqueda").value = option;
  }


