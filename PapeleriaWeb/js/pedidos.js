//Pedidos
function mostrarFormularioPedidos() {
    const formularioPedidos = document.getElementById("formularioPedidos");
    formularioPedidos.style.display = "block";
  } 

  function cerrarFormularioPedidos() {
    formularioPedidosBackground.style.display = "none";
  }

  const formularioPedidosBackground = document.getElementById("formularioPedidos"),
  formularioPedidosContainer = document.getElementById("formularioPedidosContainer"),
	closeButtonPedidos = document.getElementById("close-button-pedidos");
  // Event listener para cerrar el formulario del inventario al hacer clic en el botón de cierre
  closeButtonPedidos.addEventListener("click", function () {
    cerrarFormularioPedidos();
	resetFormularioPedidos();
  });

 //Agregar más divs de pedidos
 const agregarPedidosBtn = document.getElementById("agregar-pedido-btn");
 const pedidossContainer = document.getElementById("pedido-container");
 
 agregarPedidosBtn.addEventListener("click", function() {
   // Crea un nuevo elemento div para el nuevo pedidos
   const nuevoPedidosDiv = document.createElement("div");
   nuevoPedidosDiv.classList.add("form-group-pedido");
 
   // Crea el elemento label para el nombre del pedidos
   const nombrePedidosLabel = document.createElement("label");
   nombrePedidosLabel.textContent = "Nombre del producto";
   nuevoPedidosDiv.appendChild(nombrePedidosLabel);
 
   // Crea el elemento select para las opciones de pedidoss
   const pedidosSelect = document.createElement("select");
   pedidosSelect.classList.add("opciones");
   pedidosSelect.name = "pedidos";
   pedidosSelect.required = true;
 
   // Agrega las opciones de pedidoss al select
   const opcionesPedidos = ["-- Selecciona un producto --","Producto 1", "Producto 2", "Producto 3"];
   opcionesPedidos.forEach(function(opcion) {
	 const optionPedidos = document.createElement("option");
	 optionPedidos.value = opcion;
	 optionPedidos.textContent = opcion;
	 pedidosSelect.appendChild(optionPedidos);
   });
 
   // Agrega el select al div del nuevo pedidos
   nuevoPedidosDiv.appendChild(pedidosSelect);
 
   // Crea el elemento label para la cantidad
   const cantidadPedidosLabel = document.createElement("label");
   cantidadPedidosLabel.textContent = "Cantidad";
   nuevoPedidosDiv.appendChild(cantidadPedidosLabel);
 
   // Crea el elemento select para las opciones de cantidad
   const cantidadPedidosSelect = document.createElement("select");
   cantidadPedidosSelect.classList.add("opciones");
   cantidadPedidosSelect.name = "cantidadPedidos";
   cantidadPedidosSelect.required = true;
 
   // Agrega las opciones de cantidad al select
   const opcionesCantidad = ["-- Selecciona una opción --","1", "2", "3", "4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20"];
   opcionesCantidad.forEach(function(opcion) {
	 const option = document.createElement("option");
	 option.value = opcion;
	 option.textContent = opcion;
	 cantidadPedidosSelect.appendChild(option);
   });
   

   // Agrega el select al div del nuevo pedidos
   nuevoPedidosDiv.appendChild(cantidadPedidosSelect);

   // Crea el botón de eliminar
   const deletePedidosButton = document.createElement("button");
deletePedidosButton.classList.add("delete-pedidos-button");
deletePedidosButton.innerHTML = '<i class="bx bx-trash"></i>'; // Agrega el icono de la papelera

// Estilos personalizados para el botón de eliminar
deletePedidosButton.style.backgroundColor = "transparent";
deletePedidosButton.style.color = "white";
deletePedidosButton.style.border = "none";
deletePedidosButton.style.padding = "5px";
deletePedidosButton.style.borderRadius = "5px";

// Evento para eliminar el formulario
deletePedidosButton.addEventListener("click", function() {
  nuevoPedidosDiv.remove();
});

 
   // Agrega el botón de eliminar al div del nuevo pedidos
   nuevoPedidosDiv.appendChild(deletePedidosButton);
 
   // Agrega el div del nuevo pedidos al contenedor
   pedidossContainer.appendChild(nuevoPedidosDiv);

   
 });
//resetea el form al salir o al hacer submit
 const formularioPedidos = document.getElementById("formularioPedidos");
 const pedidosForm = document.getElementById("pedidos-form");
 const pedidosSelect = document.querySelector("#formularioPedidos select[name='productoPedido']");
 const cantidadPedidosSelect = document.querySelector("#formularioPedidos select[name='cantidadPedido']");
  
 pedidosForm.addEventListener("submit", function(event) {
   event.preventDefault();
   cerrarFormularioPedidos();
   resetFormularioPedidos();
 });
 
 function resetFormularioPedidos() {
	while (pedidossContainer.children.length > 2) {
		pedidossContainer.removeChild(pedidossContainer.lastChild);
	  }
	  formCount = 2;
	const selectsPedidos = pedidossContainer.querySelectorAll("select");
  	selectsPedidos.forEach(function(select) {
    select.selectedIndex = 0;
  });
 }

 function eliminarFormularioPedidos() {
    const eliminarPedidos = document.getElementById("eliminarPedidos");
    eliminarPedidos.style.display = "block";
  }
function cerrarEliminarPedidos() {
    eliminarPedidosBackground.style.display = "none";
  }

const 	eliminarPedidosBackground = document.getElementById("eliminarPedidos"),
	eliminarPedidosContainer = document.getElementById("eliminarPedidosContainer"),
	closeButtonEliminarPedidos = document.getElementById("close-button-eliminar-pedidos");

closeButtonEliminarPedidos.addEventListener("click", function(){
	cerrarEliminarPedidos();
	document.getElementById("formularioEliminarPedidos").reset();
  })
eliminarPedidosBackground.addEventListener("click", function (event) {
    if (event.target === eliminarPedidosBackground) {
		cerrarEliminarPedidos();
    }
  });
document.getElementById("formularioEliminarPedidos").addEventListener("submit", function() {
	this.reset();
});
