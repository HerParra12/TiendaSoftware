//Sidebar
const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});

//Toggle sidebar
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})

//Search button
const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})


//Resize window
if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})


//Change theme
const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})

//Actual date
window.onload = function() {
	// Obtener el elemento del párrafo donde se mostrará la fecha
	var fechaElement = document.getElementById("fecha");

	// Obtener la fecha actual
	var fechaActual = new Date();

	// Obtener los componentes de la fecha (día, mes, año)
	var dia = fechaActual.getDate();
	var mes = fechaActual.getMonth() + 1; // Se suma 1 ya que los meses en JavaScript van de 0 a 11
	var año = fechaActual.getFullYear();

	// Mostrar la fecha actual en el elemento del párrafo
	fechaElement.innerHTML = dia + "/" + mes + "/" + año;
};

//crea un recordatorio semanal y mensual en el sistema
function createTodoLi(text) {
    const li = document.createElement("li");
    li.classList.add("not-completed");
    li.innerHTML = `
      <p>${text}</p>
      <i class='bx bx-dots-vertical-rounded'></i>
    `;
    return li;
  }

  function addTodoLiEverySunday() {
    const today = new Date();
    const dayOfWeek = today.getDay();

    if (dayOfWeek === 0) { // Domingo
      const todoList = document.getElementById("todo-list");
      const newLi = createTodoLi("Cosas por hacer (Domingo)");
      todoList.appendChild(newLi);
    }
  }

  function addTodoLiLastDayOfMonth() {
    const today = new Date();
    const lastDayOfMonth = new Date(today.getFullYear(), today.getMonth() + 1, 0).getDate();
    const currentDay = today.getDate();

    if (currentDay === lastDayOfMonth) {
      const todoList = document.getElementById("todo-list");
      const newLi = createTodoLi("Cosas por hacer (Último día del mes)");
      todoList.appendChild(newLi);
    }
  }

  // Ejecutar las funciones al cargar la página
  addTodoLiEverySunday();
  addTodoLiLastDayOfMonth();

//Permite marcar 1 vez una tarea como hecha
const todoList = document.querySelector('.todo-list');
const listItems = todoList.querySelectorAll('li');

listItems.forEach((item) => {
  item.addEventListener('click', function() {
    if (this.classList.contains('not-completed')) {
      this.classList.remove('not-completed');
      this.classList.add('completed');
    } else {
      //this.classList.remove('completed');
      //this.classList.add('not-completed');
    }
  });
});

//Cambiar de modulos
const inventarioLink = document.getElementById('inventario'),
  		inicioLink = document.getElementById('inicio'),
		ventasLink = document.getElementById('ventas'),
		comprasLink = document.getElementById('compras'),
		pedidosLink = document.getElementById('pedidos'),
		proveedoresLink = document.getElementById('proveedores'),
        empleadosLink = document.getElementById('empleados'),
		dashboardContainer = document.querySelector('.dashboard-container'),
		inventarioContainer = document.querySelector('.inventario-container'),
		ventasContainer = document.querySelector('.ventas-container'),
		comprasContainer = document.querySelector('.compras-container'),
		pedidosContainer = document.querySelector('.pedidos-container'),
		proveedoresContainer = document.querySelector('.proveedores-container'),
        empleadosContainer = document.querySelector('.empleados-container');

inicioLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'block';
	inventarioContainer.style.display = 'none';
	ventasContainer.style.display = 'none';
	comprasContainer.style.display = 'none';
	pedidosContainer.style.display = 'none';
	proveedoresContainer.style.display = 'none';
    empleadosContainer.style.display = 'none';
});

inventarioLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	inventarioContainer.style.display = 'block';
	ventasContainer.style.display = 'none';
	comprasContainer.style.display = 'none';
	pedidosContainer.style.display = 'none';
	proveedoresContainer.style.display = 'none';
    empleadosContainer.style.display = 'none';
});

ventasLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	inventarioContainer.style.display = 'none';
	ventasContainer.style.display = 'block';
	comprasContainer.style.display = 'none';
	pedidosContainer.style.display = 'none';
	proveedoresContainer.style.display = 'none';
    empleadosContainer.style.display = 'none';
});

comprasLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	inventarioContainer.style.display = 'none';
	ventasContainer.style.display = 'none';
	comprasContainer.style.display = 'block';
	pedidosContainer.style.display = 'none';
	proveedoresContainer.style.display = 'none';
    empleadosContainer.style.display = 'none';
});

pedidosLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	inventarioContainer.style.display = 'none';
	ventasContainer.style.display = 'none';
	comprasContainer.style.display = 'none';
	pedidosContainer.style.display = 'block';
	proveedoresContainer.style.display = 'none';
    empleadosContainer.style.display = 'none';
});

proveedoresLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	inventarioContainer.style.display = 'none';
	ventasContainer.style.display = 'none';
	comprasContainer.style.display = 'none';
	pedidosContainer.style.display = 'none';
	proveedoresContainer.style.display = 'block';
    empleadosContainer.style.display = 'none';
});

empleadosLink.addEventListener('click', function(event) {
	event.preventDefault(); // Evita el comportamiento predeterminado del enlace
	dashboardContainer.style.display = 'none';
	inventarioContainer.style.display = 'none';
	ventasContainer.style.display = 'none';
	comprasContainer.style.display = 'none';
	pedidosContainer.style.display = 'none';
	proveedoresContainer.style.display = 'none';
    empleadosContainer.style.display = 'block';
});

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

  document.getElementById("formularioRegistroInventario").addEventListener("submit", function() {
	this.reset();
});

document.getElementById("formularioModificacionInventario").addEventListener("submit", function() {
	this.reset();
});

document.getElementById("formularioEliminacionInventario").addEventListener("submit", function() {
	this.reset();
});

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
deleteButton.style.backgroundColor = "transpare";
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
 
//Compras
function modificarFormularioCompras() {
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
	document.getElementById("formularioModificarCompra").reset();
});

// Event listener para cerrar el formulario al hacer clic fuera del formulario-container
modificarComprasBackground.addEventListener("click", function (event) {
  if (event.target === modificarComprasBackground) {
	cerrarModificarCompras();
  }
}); 

document.getElementById("formularioModificarCompra").addEventListener("submit", function() {
	this.reset();
});
 
//Pedidos
function mostrarFormularioPedidos() {
    const formularioPedidos = document.getElementById("formularioPedidos");
    formularioPedidos.style.display = "block";
  } 

  function cerrarformularioPedidos() {
    formularioPedidosBackground.style.display = "none";
  }

  const formularioPedidosBackground = document.getElementById("formularioPedidos"),
  formularioPedidosContainer = document.getElementById("formularioPedidosContainer"),
	closeButtonPedidos = document.getElementById("close-button-pedidos");
  // Event listener para cerrar el formulario del inventario al hacer clic en el botón de cierre
  closeButtonPedidos.addEventListener("click", function () {
    cerrarformularioPedidos();
	resetFormulario();
  });


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
	document.getElementById("formularioModificarEmpleado").reset();
  });
  closeButtonEliminarEmpleados.addEventListener("click", function(){
	cerrarEliminarEmpleados();
	document.getElementById("formularioEliminarEmpleado").reset();
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

  document.getElementById("formularioModificarEmpleado").addEventListener("submit", function() {
	this.reset();
});

document.getElementById("formularioEliminarEmpleado").addEventListener("submit", function() {
	this.reset();
});
