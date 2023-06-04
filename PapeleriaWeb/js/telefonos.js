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
const agregarTelefonoBtn = document.getElementById("agregar-telefono-btn");
const telefonossContainer = document.querySelector(".formulario-telefonos-container");

// Contador para asignar un ID único a cada div de telefono
let telefonoCount = 1;

// Agregar un div de telefono al hacer clic en el botón "agregar-telefono-btn"
agregarTelefonoBtn.addEventListener("click", function() {
  // Crea un nuevo div para el telefono
  const nuevoTelefonoDiv = document.createElement("div");
  nuevoTelefonoDiv.classList.add("form-group-telefonos");

  // Crea el input para el telefono
  const telefonoInput = document.createElement("input");
  telefonoInput.type = "tel";
  telefonoInput.placeholder = "Telefono";
  telefonoInput.pattern = "[0-9]{1,10}";
  telefonoInput.title = "Por favor, ingresa el número. No mayor a 10 dígitos, sin espacios, ni guiones o puntos";
  nuevoTelefonoDiv.appendChild(telefonoInput);

  // Crea el botón de eliminar
  const deleteButton = document.createElement("button");
  deleteButton.classList.add("delete-button");
  deleteButton.innerHTML = '<i class="bx bx-trash"></i>';

  // Estilos personalizados para el botón de eliminar
  deleteButton.style.backgroundColor = "transparent";
  deleteButton.style.color = "white";
  deleteButton.style.border = "none";
  deleteButton.style.padding = "5px";
  deleteButton.style.borderRadius = "5px";

  // Evento para eliminar el último div de telefono
  deleteButton.addEventListener("click", function() {
    if (telefonossContainer.children.length > 1) {
        telefonossContainer.removeChild(nuevoTelefonoDiv);
    }
  });

  // Agrega el botón de eliminar al div del nuevo telefono
  nuevoTelefonoDiv.appendChild(deleteButton);

  // Agrega el div del nuevo telefono al contenedor
  telefonossContainer.appendChild(nuevoTelefonoDiv);

  // Incrementa el contador de telefonos
  telefonoCount++;
});

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

 function eliminarFormularioTelefonos() {
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
	document.getElementById("formularioEliminarTelefonos").reset();
  })
eliminarTelefonosBackground.addEventListener("click", function (event) {
    if (event.target === eliminarTelefonosBackground) {
		cerrarEliminarTelefonos();
    }
  });
document.getElementById("formularioEliminarTelefonos").addEventListener("submit", function() {
	this.reset();
});