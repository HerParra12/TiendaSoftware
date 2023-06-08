let idProveedor = -1
//Proveedores
function mostrarFormularioProveedores() {
    const formularioProveedores = document.getElementById("formularioProveedores");
    formularioProveedores.style.display = "block";
  }
  function modificarFormularioProveedores(id) {
    idProveedor = id
    const modificarProveedores = document.getElementById("modificarProveedores");
    modificarProveedores.style.display = "block";
  }

  function eliminarFormularioProveedores(id) {
    idProveedor = id
    const eliminarProveedores = document.getElementById("eliminarProveedores");
    eliminarProveedores.style.display = "block";
  }

function cerrarFormularioProveedores() {
    formularioBackgroundProveedores.style.display = "none";
  }
  function cerrarModificarProveedores() {
    modificarProveedoresBackground.style.display = "none";
  }
  function cerrarEliminarProveedores() {
    eliminarProveedoresBackground.style.display = "none";
  }

const formularioBackgroundProveedores = document.getElementById("formularioProveedores"),
	formularioContainerProveedores = document.getElementById("formularioProveedoresContainer"),
	modificarProveedoresBackground = document.getElementById("modificarProveedores"),
	modificarProveedoresContainer = document.getElementById("modificarProveedoresContainer"),
	eliminarProveedoresBackground = document.getElementById("eliminarProveedores"),
	eliminarProveedoresContainer = document.getElementById("eliminarProveedoresContainer"), 
	closeButtonEliminarProveedores = document.getElementById("close-button-eliminar-proveedores"),
	closeButtonModificarProveedores = document.getElementById("close-button-modificar-proveedores"),
	closeButtonProveedores = document.getElementById("close-button-proveedores");

  // Event listener para cerrar el formulario del proveedores al hacer clic en el botón de cierre
  closeButtonProveedores.addEventListener("click", function () {
    cerrarFormularioProveedores();
  });
  closeButtonModificarProveedores.addEventListener("click", function () {
    cerrarModificarProveedores();
	//document.getElementById("formularioModificarProveedor").reset();
  });
  closeButtonEliminarProveedores.addEventListener("click", function(){
	cerrarEliminarProveedores();
  })

  // Event listener para cerrar el formulario al hacer clic fuera del formulario-container
  modificarProveedoresBackground.addEventListener("click", function (event) {
    if (event.target === modificarProveedoresBackground) {
		cerrarModificarProveedores();
    }
  });
  eliminarProveedoresBackground.addEventListener("click", function (event) {
    if (event.target === eliminarProveedoresBackground) {
		//cerrarEliminarProveedores();
    }
  });
  formularioBackgroundProveedores.addEventListener("click", function (event) {
    if (event.target === formularioBackgroundProveedores) {
      cerrarFormularioProveedores();
    }
  });

const consumer = async ({ request, init }) => {
  init = { method: 'POST', ...init  }
  return await fetch(request, init)
    .then(response => response.json())
    .catch(error => console.log('Error', error))
}


document.addEventListener('submit', event => {
  const target = event.target
  if (target.matches('form#formularioEliminarProveedor')) {
    event.preventDefault()
    const init = {
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ idProveedor })
    }
    consumer({ request: './eliminar-proveedor.php', init }).then(response => console.log(response))
    document.getElementById("eliminarProveedores").style.display = 'none'
    location.reload()
  } else if (target.matches('form#formularioModificarProveedor')) {
    event.preventDefault()
    const formData = new FormData(event.target)
    formData.append('id', idProveedor)
    consumer({ request: './actualizar-proveedor.php', init: { body: formData } }).then(response => console.log(response))
    document.getElementById("modificarProveedores").style.display = 'none'
    location.reload()
  }else if(target.matches('form#formularioRegistroProveedor')) {
    event.preventDefault()
    const formData = new FormData(event.target)
    consumer({ request: './agregar-proveedor.php', init: { body: formData } }).then(response => console.log(response))
    formularioBackgroundProveedores.style.display = 'none'
    location.reload()
  }
})