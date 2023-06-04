//Empleados
function modificarFormularioEmpleados() {
    const modificarEmpleados = document.getElementById("modificarEmpleados");
    modificarEmpleados.style.display = "block";
  }
  function eliminarFormularioEmpleados() {
    const eliminarEmpleados = document.getElementById("eliminarEmpleados");
    eliminarEmpleados.style.display = "block";
  }

  function cerrarModificarEmpleados() {
    modificarEmpleadosBackground.style.display = "none";
  }
  function cerrarEliminarEmpleados() {
    eliminarEmpleadosBackground.style.display = "none";
  }

const modificarEmpleadosBackground = document.getElementById("modificarEmpleados"),
	modificarEmpleadosContainer = document.getElementById("modificarEmpleadosContainer"),
	eliminarEmpleadosBackground = document.getElementById("eliminarEmpleados"),
	eliminarEmpleadosContainer = document.getElementById("eliminarEmpleadosContainer"),
	closeButtonEliminarEmpleados = document.getElementById("close-button-eliminar-empleados"),
	closeButtonModificarEmpleados = document.getElementById("close-button-modificar-empleados");

  // Event listener para cerrar el formulario del empleados al hacer clic en el botón de cierre
  closeButtonModificarEmpleados.addEventListener("click", function () {
    cerrarModificarEmpleados();
	document.getElementById("formularioModificarEmpleados").reset();
  });
  closeButtonEliminarEmpleados.addEventListener("click", function(){
	cerrarEliminarEmpleados();
	document.getElementById("formularioEliminarEmpleados").reset();
  })

  // Event listener para cerrar el formulario al hacer clic fuera del formulario-container
  modificarEmpleadosBackground.addEventListener("click", function (event) {
    if (event.target === modificarEmpleadosBackground) {
		cerrarModificarEmpleados();
    }
  });
  eliminarEmpleadosBackground.addEventListener("click", function (event) {
    if (event.target === eliminarEmpleadosBackground) {
		cerrarEliminarEmpleados();
    }
  });

document.getElementById("formularioModificacionEmpleados").addEventListener("submit", function() {
	this.reset();
});

document.getElementById("formularioEliminacionEmpleados").addEventListener("submit", function() {
	this.reset();
});