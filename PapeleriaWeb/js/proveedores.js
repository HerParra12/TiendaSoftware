//Proveedores
function mostrarFormularioProveedores() {
    const formularioProveedores = document.getElementById("formularioProveedores");
    formularioProveedores.style.display = "block";
  }
  function modificarFormularioProveedores() {
    const modificarProveedores = document.getElementById("modificarProveedores");
    modificarProveedores.style.display = "block";
  }
  function eliminarFormularioProveedores() {
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
	document.getElementById("formularioRegistroProveedor").reset();
  });
  closeButtonModificarProveedores.addEventListener("click", function () {
    cerrarModificarProveedores();
	document.getElementById("formularioModificarProveedor").reset();
  });
  closeButtonEliminarProveedores.addEventListener("click", function(){
	cerrarEliminarProveedores();
	document.getElementById("formularioEliminarProveedor").reset();
  })

  // Event listener para cerrar el formulario al hacer clic fuera del formulario-container
  modificarProveedoresBackground.addEventListener("click", function (event) {
    if (event.target === modificarProveedoresBackground) {
		cerrarModificarProveedores();
    }
  });
  eliminarProveedoresBackground.addEventListener("click", function (event) {
    if (event.target === eliminarProveedoresBackground) {
		cerrarEliminarProveedores();
    }
  });
  formularioBackgroundProveedores.addEventListener("click", function (event) {
    if (event.target === formularioBackgroundProveedores) {
      cerrarFormularioProveedores();
    }
  });

  document.getElementById("formularioRegistroProveedor").addEventListener("submit", function() {
	this.reset();
});

document.getElementById("formularioModificarProveedor").addEventListener("submit", function() {
	this.reset();
});

document.getElementById("formularioEliminarProveedor").addEventListener("submit", function() {
	this.reset();
});
