//Compras
function modificarFormularioCompras() {
    const modificarCompras = document.getElementById("modificarCompras");
    modificarCompras.style.display = "block";
  }

function cerrarModificarCompras() {
    modificarComprasBackground.style.display = "none";
  }

  const modificarComprasBackground = document.getElementById("modificarCompras"),
  modificarComprasContainer = document.getElementById("modificarComprasContainer"),
  closeButtonModificarCompras = document.getElementById("close-button-modificar-compras");

// Event listener para cerrar el formulario del inventario al hacer clic en el botón de cierre
closeButtonModificarCompras.addEventListener("click", function () {
	cerrarModificarCompras();
	document.getElementById("formularioModificarCompra").reset();
});

// Event listener para cerrar el formulario al hacer clic fuera del formulario-container
modificarComprasBackground.addEventListener("click", function (event) {
  if (event.target === modificarComprasBackground) {
	cerrarModificarCompras();
  }
}); 

document.getElementById("formularioModificarCompra").addEventListener("submit", function() {
	this.reset();
});
