//Inventario
function mostrarFormularioInventario() {
    const formularioInventario = document.getElementById("formularioInventario");
    formularioInventario.style.display = "block";
  }
  function modificarFormularioInventario() {
    const modificarInventario = document.getElementById("modificarInventario");
    modificarInventario.style.display = "block";
  }
  function eliminarFormularioInventario() {
    const eliminarInventario = document.getElementById("eliminarInventario");
    eliminarInventario.style.display = "block";
  }

function cerrarFormularioInventario() {
    formularioBackgroundInventario.style.display = "none";
  }
  function cerrarModificarInventario() {
    modificarInventarioBackground.style.display = "none";
  }
  function cerrarEliminarInventario() {
    eliminarInventarioBackground.style.display = "none";
  }

const formularioBackgroundInventario = document.getElementById("formularioInventario"),
	formularioContainerInventario = document.getElementById("formularioInventarioContainer"),
	modificarInventarioBackground = document.getElementById("modificarInventario"),
	modificarInventarioContainer = document.getElementById("modificarInventarioContainer"),
	eliminarInventarioBackground = document.getElementById("eliminarInventario"),
	eliminarInventarioContainer = document.getElementById("eliminarInventarioContainer"),
	closeButtonEliminarInventario = document.getElementById("close-button-eliminar-inventario"),
	closeButtonModificarInventario = document.getElementById("close-button-modificar-inventario"),
	closeButtonInventario = document.getElementById("close-button-inventario");

  // Event listener para cerrar el formulario del inventario al hacer clic en el botón de cierre
  closeButtonInventario.addEventListener("click", function () {
    cerrarFormularioInventario();
	document.getElementById("formularioRegistroInventario").reset();
  });
  closeButtonModificarInventario.addEventListener("click", function () {
    cerrarModificarInventario();
	document.getElementById("formularioModificarInventario").reset();
  });
  closeButtonEliminarInventario.addEventListener("click", function(){
	cerrarEliminarInventario();
	document.getElementById("formularioEliminarInventario").reset();
  })

  // Event listener para cerrar el formulario al hacer clic fuera del formulario-container
  modificarInventarioBackground.addEventListener("click", function (event) {
    if (event.target === modificarInventarioBackground) {
		cerrarModificarInventario();
    }
  });
  eliminarInventarioBackground.addEventListener("click", function (event) {
    if (event.target === eliminarInventarioBackground) {
		cerrarEliminarInventario();
    }
  });
  formularioBackgroundInventario.addEventListener("click", function (event) {
    if (event.target === formularioBackgroundInventario) {
      cerrarFormularioInventario();
    }
  });


