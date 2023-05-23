
var carousel = document.querySelector('.carousel');
var intervalo = 2000;
var imagenes = carousel.getElementsByTagName('img');
var totalImagenes = imagenes.length;
var indiceImagenActual = 0;


function cambiarImagen() {

  imagenes[indiceImagenActual].style.display = 'none';
  indiceImagenActual++;

  if (indiceImagenActual >= totalImagenes) {
     indiceImagenActual = 0;
  }

  imagenes[indiceImagenActual].style.display = 'block';
}
 
cambiarImagen();
setInterval(cambiarImagen, intervalo);