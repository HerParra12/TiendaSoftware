//Telefonos
function mostrarFormularioTelefonos() {
    const formularioTelefonos = document.getElementById("formularioTelefonos");
    formularioTelefonos.style.display = "block";
  } 

  function cerrarFormularioTelefonos() {
    formularioTelefonosBackground.style.display = "none";
  }

  const formularioTelefonosBackground = document.getElementById("formularioTelefonos"),
  formularioTelefonosContainer = document.getElementById("formularioTelefonosContainer"),
	closeButtonTelefonos = document.getElementById("close-button-telefonos");
  // Event listener para cerrar el formulario del inventario al hacer clic en el botón de cierre
  closeButtonTelefonos.addEventListener("click", function () {
    cerrarFormularioTelefonos();
	resetFormularioTelefonos();
  });

  // Obtener elementos del DOM
const agregarTelefonoBtn = document.getElementById("agregar-telefono-btn"); // Eliminar
const telefonossContainer = document.querySelector(".formulario-telefonos-container");

// Contador para asignar un ID único a cada div de telefono
let telefonoCount = 1;

  function resetFormularioTelefonos() {
	while (telefonossContainer.children.length > 1) {
		telefonossContainer.removeChild(telefonossContainer.lastChild);
	  }
	  telefonoCount = 1;
	const selectsTelefonos = telefonossContainer.querySelectorAll("select");
  	selectsTelefonos.forEach(function(select) {
    select.selectedIndex = 0;
  });
 }

let numeroTelefonoProveedor = -1
 function eliminarFormularioTelefonos(id) {
    numeroTelefonoProveedor = id
    const eliminarTelefonos = document.getElementById("eliminarTelefonos");
    eliminarTelefonos.style.display = "block";
  }
function cerrarEliminarTelefonos() {
    eliminarTelefonosBackground.style.display = "none";
  }

const 	eliminarTelefonosBackground = document.getElementById("eliminarTelefonos"),
	eliminarTelefonosContainer = document.getElementById("eliminarTelefonosContainer"),
	closeButtonEliminarTelefonos = document.getElementById("close-button-eliminar-telefonos");

closeButtonEliminarTelefonos.addEventListener("click", function(){
	cerrarEliminarTelefonos();
	//document.getElementById("formularioEliminarTelefonos").reset();
  })
eliminarTelefonosBackground.addEventListener("click", function (event) {
    if (event.target === eliminarTelefonosBackground) {
		cerrarEliminarTelefonos();
    }
  });

const consumerTelefono = async ({ request, init }) => {
  init = { method: 'POST', ...init }
  return await fetch(request, init)
    .then(response => response.json())
    .catch(error => console.log('Error', error))
}


document.getElementById("formularioEliminarTelefonos").addEventListener("submit", function (event) {
  const init = {
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ numeroTelefonoProveedor })
  }
  console.log(init)
  consumerTelefono({ request: './eliminar-telefono.php', init }).then(response => console.log(response))
  document.getElementById("eliminarProveedores").style.display = 'none'
  eliminarTelefonosBackground.style.display = 'none'
});
