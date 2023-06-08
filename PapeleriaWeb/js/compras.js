let idCompra = -1
//Compras
function modificarFormularioCompras(id) {
    idCompra = id
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
	//document.getElementById("formularioModificarCompra").reset();
});

// Event listener para cerrar el formulario al hacer clic fuera del formulario-container
modificarComprasBackground.addEventListener("click", function (event) {
  if (event.target === modificarComprasBackground) {
	cerrarModificarCompras();
  }
});

const consumerCompras = async ({ request, init }) => {
  init = { method: 'POST', ...init  }
  return await fetch(request, init)
    .then(response => response.json())
    .catch(error => console.log('Chispas', error))
}

document.getElementById("formularioModificarCompraEstado").addEventListener("submit", function(event) {
  event.preventDefault()
  const formData = new FormData(event.target)
  formData.append('id', idCompra)
  for(const [key, value] of formData.entries()) {
    console.log(`key: ${key}, value: ${value}`)
  }
  consumerCompras({ request: './actualizar-compra.php', init: { body: formData } }).then(response => console.log(response))
  location.reload()
});
