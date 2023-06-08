//Empleados
let idEmpleado = -1
function modificarFormularioEmpleados(id) {
    idEmpleado = id
    const modificarEmpleados = document.getElementById("modificarEmpleados");
    modificarEmpleados.style.display = "block";
  }
  function eliminarFormularioEmpleados(id) {
    idEmpleado = id
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
	//document.getElementById("formularioModificarEmpleados").reset();
  });
  closeButtonEliminarEmpleados.addEventListener("click", function(){
	cerrarEliminarEmpleados();
	//document.getElementById("formularioEliminarEmpleados").reset();
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

const consumerEmpleado = async ({ request, init }) => {
  init = { method: 'POST', ...init  }
  return await fetch(request, init)
    .then(response => response.json())
    .catch(() => console.log('Chispas'))
}

document.getElementById("formularioModificarEmpleadoUsuario").addEventListener("submit", function(event) {
  const formData = new FormData(event.target)
  formData.append('id', idEmpleado)
  consumerEmpleado({ request: './actualizar-empleado.php', init: { body: formData } }).then(response => console.log(response))
});

document.getElementById("formularioEliminarEmpleado").addEventListener("submit", function(event) {
  const init = {
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ idEmpleado })
  }
  consumerEmpleado({ request: './eliminar-empleado.php', init }).then(response => console.log(response))
});

