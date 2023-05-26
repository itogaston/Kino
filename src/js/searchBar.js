 
const boton = document.getElementById("activar");
const botonOcultar = document.getElementById("hidebut")
const año = document.getElementById("bus1");
const imdbid = document.getElementById("bus2");
var homeButton = document.getElementById("homeButton");

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

  function goTo(page, action) {
    window.location.href = "http://eim-alu-69044.lab.unavarra.es/grupo-ocelote/src/index.php?page=" + page + "&action=" + action;
}

homeButton.addEventListener("mouseover", (event) => {
    homeButton.style.cursor = "pointer";
    var homeImg = document.getElementById("homeImg"); 
    homeImg.src = "../assets/glue_2.svg";
});

homeButton.addEventListener("mouseout", (event) => {
    var homeImg = document.getElementById("homeImg"); 
    homeImg.src = "../assets/glue.svg";
});


