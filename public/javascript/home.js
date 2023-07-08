var categorias = document.querySelectorAll('.category');

categorias.forEach(function(categoria) {
  var imagen = categoria.querySelector('img');
  var imagenNormal = imagen.src;
  var imagenHover = categoria.dataset.hoverImage;

  categoria.addEventListener('mouseover', function() {
    imagen.src = imagenHover; /* cambia la imagen al hacer hover */
  });

  categoria.addEventListener('mouseout', function() {
    imagen.src = imagenNormal; /* restaura la imagen original al quitar el mouse */
  });
});