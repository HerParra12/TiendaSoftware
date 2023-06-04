//Ventas
function mostrarFormularioVentas() {
    const formularioVentas = document.getElementById("formularioVentas");
    formularioVentas.style.display = "block";
  } 

  function cerrarFormularioVentas() {
    formularioVentasBackground.style.display = "none";
  }

  const formularioVentasBackground = document.getElementById("formularioVentas"),
  formularioVentasContainer = document.getElementById("formularioVentasContainer"),
	closeButtonVentas = document.getElementById("close-button-ventas");
  // Event listener para cerrar el formulario del inventario al hacer clic en el botón de cierre
  closeButtonVentas.addEventListener("click", function () {
    cerrarFormularioVentas();
	resetFormulario();
  });

 //Agregar más divs de ventas
 const agregarProductoBtn = document.getElementById("agregar-btn");
 const productosContainer = document.getElementById("productos-container");
 
 agregarProductoBtn.addEventListener("click", function() {
   // Crea un nuevo elemento div para el nuevo producto
   const nuevoProductoDiv = document.createElement("div");
   nuevoProductoDiv.classList.add("form-group");
 
   // Crea el elemento label para el nombre del producto
   const nombreProductoLabel = document.createElement("label");
   nombreProductoLabel.textContent = "Nombre del Producto";
   nuevoProductoDiv.appendChild(nombreProductoLabel);
 
   // Crea el elemento select para las opciones de productos
   const productoSelect = document.createElement("select");
   productoSelect.classList.add("opciones");
   productoSelect.name = "producto";
   productoSelect.required = true;
 
   // Agrega las opciones de productos al select
   const opcionesProductos = ["-- Selecciona un producto --","Producto 1", "Producto 2", "Producto 3"];
   opcionesProductos.forEach(function(opcion) {
	 const option = document.createElement("option");
	 option.value = opcion;
	 option.textContent = opcion;
	 productoSelect.appendChild(option);
   });
 
   // Agrega el select al div del nuevo producto
   nuevoProductoDiv.appendChild(productoSelect);
 
   // Crea el elemento label para la cantidad
   const cantidadLabel = document.createElement("label");
   cantidadLabel.textContent = "Cantidad";
   nuevoProductoDiv.appendChild(cantidadLabel);
 
   // Crea el elemento select para las opciones de cantidad
   const cantidadSelect = document.createElement("select");
   cantidadSelect.classList.add("opciones");
   cantidadSelect.name = "cantidad";
   cantidadSelect.required = true;
 
   // Agrega las opciones de cantidad al select
   const opcionesCantidad = ["-- Selecciona una opción --","1", "2", "3", "4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20"];
   opcionesCantidad.forEach(function(opcion) {
	 const option = document.createElement("option");
	 option.value = opcion;
	 option.textContent = opcion;
	 cantidadSelect.appendChild(option);
   });
   

   // Agrega el select al div del nuevo producto
   nuevoProductoDiv.appendChild(cantidadSelect);

   // Crea el botón de eliminar
   const deleteButton = document.createElement("button");
deleteButton.classList.add("delete-button");
deleteButton.innerHTML = '<i class="bx bx-trash"></i>'; // Agrega el icono de la papelera

// Estilos personalizados para el botón de eliminar
deleteButton.style.backgroundColor = "transparent";
deleteButton.style.color = "white";
deleteButton.style.border = "none";
deleteButton.style.padding = "5px";
deleteButton.style.borderRadius = "5px";

// Evento para eliminar el formulario
deleteButton.addEventListener("click", function() {
  nuevoProductoDiv.remove();
});

 
   // Agrega el botón de eliminar al div del nuevo producto
   nuevoProductoDiv.appendChild(deleteButton);
 
   // Agrega el div del nuevo producto al contenedor
   productosContainer.appendChild(nuevoProductoDiv);

   
 });
//resetea el form al salir o al hacer submit
 const formularioVentas = document.getElementById("formularioVentas");
 const ventasForm = document.getElementById("ventas-form");
 const productoSelect = document.querySelector("#formularioVentas select[name='producto']");
 const cantidadSelect = document.querySelector("#formularioVentas select[name='cantidad']");
  
 ventasForm.addEventListener("submit", function(event) {
   event.preventDefault();
   cerrarFormularioVentas();
   resetFormulario();
 });
 
 function resetFormulario() {
	while (productosContainer.children.length > 2) {
		productosContainer.removeChild(productosContainer.lastChild);
	  }
	  formCount = 2;
	const selects = productosContainer.querySelectorAll("select");
  	selects.forEach(function(select) {
    select.selectedIndex = 0;
  });
 }
