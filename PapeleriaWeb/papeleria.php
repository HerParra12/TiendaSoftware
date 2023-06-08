<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylePapeleria.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="icon" href="assets/iconPapeleria.svg">
    <title>La papelería de Rosita</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-store-alt'></i>
            <span class="text">Papeplería de Rosita</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#" id="inicio">
                    <i class='bx bxs-widget'></i>
                    <span class="text">Panel de inicio</span>
                </a>
            </li>
            <li>
                <a href="#" id="inventario">
                    <i class='bx bxs-calculator'></i>
                    <span class="text">Inventario</span>
                </a>
            </li>
            <li>
                <a href="#" id="ventas">
                    <i class='bx bxs-shopping-bag'></i>
                    <span class="text">Ventas</span>
                </a>
            </li>
            <li>
                <a href="#" id="compras">
                    <i class='bx bxs-cart'></i>
                    <span class="text">Compras</span>
                </a>
            </li>
            <li>
                <a href="#" id="pedidos">
                    <i class='bx bxs-detail'></i>
                    <span class="text">Pedidos</span>
                </a>
            </li>
            <li>
                <a href="#" id="proveedores">
                    <i class='bx bxs-group'></i>
                    <span class="text">Proveedores</span>
                </a>
            </li>
            <li>
                <a href="#" id="telefonos">
                    <i class='bx bxs-phone'></i>
                    <span class="text">Telefonos de Proveedores</span>
                </a>
            </li>
            <li>
                <a href="#" id="empleados">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">Empleados</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="ingreso.html" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input" >
                    <input type="search" placeholder="Search">
                    <button type="submit" class="search-btn"><i class='bx bx-search' hidden></i></button>
                </div>
            </form>
            <h3 class="text-h3">¡Hola!</h3>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="dashboard-container">
                <div class="head-title">
                    <div class="left">
                        <h1>Panel de inicio</h1>
                    </div>
                </div>

                <ul class="box-info">
                    <li>
                        <i class='bx bxs-calendar-check'></i>
                        <span class="text">
                            <h3 id="fecha"></h3>
                            <p>Fecha actual</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bxs-group'></i>
                        <span class="text">
                            <h3><?php include 'cant-empleados.php'; ?></h3>
                            <p>Empleados</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="todo">
                        <div class="head">
                            <h3>Actividades por hacer</h3>
                        </div>
                        <ul class="todo-list" id="todo-list">
                            <li class="completed">
                                <p>Descargar reporte general semanal</p>
                            </li>
                            <li class="completed">
                                <p>Descargar reporte general mensual</p>
                            </li>
                            <!-- Los nuevos elementos <li> se generarán aquí -->
                        </ul>
                    </div>
                </div>
            </div>

            <div class="inventario-container">
                <div class="head-title">
                    <div class="left">
                        <h1>Inventario</h1>
                    </div>
                    <a href="#" class="btn-download" id="download-inventario-btn">
                        <i class='bx bxs-cloud-download'></i>
                        <span class="text">Descargar reporte</span>
                    </a>
                </div>

                <ul class="box-info">
                    <li>
                        <i class='bx bx-list-check'></i>
                        <span class="text">
                            <h3>2834</h3>
                            <p>Productos</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Listado de productos</h3>
                            <i class='bx bxs-add-to-queue' onclick="mostrarFormularioInventario()"></i>
                        </div>
                        <table id="tabla-inventario">
                            <thead>
                                <tr>
                                    <th>Acción</th>
                                    <th>Marca del producto</th>
                                    <th>Nombre del producto</th>
                                    <th>Cantidad</th>
                                    <th>Proveedor</th>
                                    <th>Monto (c/u)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button id="modify-fila" style="border: none; background-color: transparent;"
                                            onclick="modificarFormularioInventario()"><i
                                                class='bx bxs-edit-alt'></i></button>
                                        <button id="modify-fila" style="border: none; background-color: transparent;"
                                            onclick="eliminarFormularioInventario()"><i
                                                class='bx bxs-trash'></i></button>
                                    </td>
                                    <td>Marca del producto</td>
                                    <td>Resma de papel</td>
                                    <td>10</td>
                                    <td>Luis Arango</td>
                                    <td>24.000</td>
                                </tr>
                            </tbody>
                        </table>

                        <!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioInventario">
                            <div class="formulario-container" id="formularioInventarioContainer">
                                <button class="close-button" id="close-button-inventario">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form action="registro-inventario.php" method="POST" class="formulario-add" id="formularioRegistroInventario">
                                    <h2 class="create-account">Registra un producto</h2>
                                    <p class="cuenta-gratis">Ingresa los datos del producto</p>
                                    <input type="text" placeholder="Marca del producto" pattern="[A-Za-z\s][0-9]{1,30}"
                                        required title="Por favor, ingresa solo letras, números y espacios">
                                    <input type="text" placeholder="Nombre del producto" pattern="[A-Za-z\s][0-9]{1,30}"
                                        required title="Por favor, ingresa solo letras, números y espacios">
                                    <input type="tel" placeholder="Cantidad" pattern="[0-9]{1,2}" required
                                        title="Por favor, ingresa una cantidad no mayor a 99">
                                    <input type="tel" placeholder="Monto (c/u)" pattern="[0-9]{1,6}" required
                                        title="Por favor, ingresa una cantidad no mayor a $999.999">
                                    <p class="cuenta-gratis">Nombre del proveedor</p>
                                    <select id="opciones" name="proveedoresInventario" required>
                                        <option value="">-- Selecciona una opción --</option>
                                        <?php include 'obtener-proveedores.php';?>
                                    </select>
                                    <input type="submit" value="Registrar producto" id="registrar-producto">
                                </form>
                            </div>
                        </div>
                        <!--FORMULARIO DE MODIFICACIÓN-->
                        <div class="formulario-background" id="modificarInventario">
                            <div class="formulario-container" id="modificarInventarioContainer">
                                <button class="close-button" id="close-button-modificar-inventario">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="formularioModificarInventario">
                                    <h2 class="create-account">Modifica un producto</h2>
                                    <p class="cuenta-gratis">Modifica los datos del producto</p>
                                    <input type="text" placeholder="Marca del producto" readaonly>
                                    <input type="text" placeholder="Nombre del producto" readonly>
                                    <input type="tel" placeholder="Cantidad" pattern="[0-9]{1,2}" required
                                        title="Por favor, ingresa una cantidad no mayor a 99">
                                    <input type="tel" placeholder="Monto (c/u)" pattern="[0-9]{1,6}" required
                                        title="Por favor, ingresa una cantidad no mayor a $999.999">
                                    <p class="cuenta-gratis">Nombre del proveedor</p>
                                    <select id="opciones" name="proveedoresInventario" required>
                                        <option value="">-- Selecciona una opción --</option>
                                        <option value="nombre1">Luis Arango</option>
                                        <option value="nombre2">Camilo Peña</option>
                                    </select>
                                    <input type="submit" value="Modificar producto" id="modificar-producto">
                                </form>
                            </div>
                        </div>
                        <!--FORMULARIO DE ELIMINACIÓN-->
                        <div class="formulario-background" id="eliminarInventario">
                            <div class="formulario-container" id="eliminarInventarioContainer">
                                <button class="close-button" id="close-button-eliminar-inventario">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="formularioEliminarInventario">
                                    <h2 class="create-account">Elimina un producto</h2>
                                    <p class="cuenta-gratis">¿Estás seguro que deseas eliminar el producto?</p>
                                    <input type="submit" value="Eliminar producto" id="eliminar-producto">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ventas-container">
                <div class="head-title">
                    <div class="left">
                        <h1>Ventas</h1>
                    </div>
                    <a href="#" class="btn-download" id="download-ventas-btn">
                        <i class='bx bxs-cloud-download'></i>
                        <span class="text">Descargar reporte</span>
                    </a>
                </div>

                <ul class="box-info">
                    <li>
                        <i class='bx bxs-shopping-bags'></i>
                        <span class="text">
                            <h3>2834</h3>
                            <p>Ventas</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bxs-dollar-circle'></i>
                        <span class="text">
                            <h3>$3'564.256</h3>
                            <p>Monto total</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Historial de ventas</h3>
                            <i class='bx bxs-add-to-queue' onclick="mostrarFormularioVentas()"></i>
                            <i class='bx bx-filter'></i>
                        </div>
                        <table id="tabla-ventas">
                            <thead>
                                <tr>
                                    <th>Nombre del producto</th>
                                    <th>Cantidad</th>
                                    <th>Fecha</th>
                                    <th>Monto total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cartulina en pliego</td>
                                    <td>5</td>
                                    <td>10-05-2023</td>
                                    <td>$ 17.000</td>
                                </tr>
                            </tbody>
                        </table>
                        <!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioVentas">
                            <div class="formulario-container" id="formularioVentasContainer">
                                <button class="close-button" id="close-button-ventas">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="ventas-form">
                                    <h2 class="create-account">Registra una venta</h2>
                                    <p class="cuenta-gratis">Ingresa los datos de la venta</p>
                                    <div id="productos-container">
                                        <div class="form-group">
                                            <label for="producto">Nombre del Producto</label>
                                            <select id="opciones" name="producto" required>
                                                <option value="">-- Selecciona un producto --</option>
                                                <option value="producto1">Producto 1</option>
                                                <option value="producto2">Producto 2</option>
                                                <option value="producto3">Producto 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="cantidad">Cantidad</label>
                                            <select id="opciones" name="cantidad" required>
                                                <option value="">-- Selecciona una opción --</option>
                                                <option value="uno">1</option>
                                                <option value="dos">2</option>
                                                <option value="tres">3</option>
                                                <option value="cuatro">4</option>
                                                <option value="cinco">5</option>
                                                <option value="seis">6</option>
                                                <option value="siete">7</option>
                                                <option value="ocho">8</option>
                                                <option value="nueve">9</option>
                                                <option value="diez">10</option>
                                                <option value="once">11</option>
                                                <option value="doce">12</option>
                                                <option value="trece">13</option>
                                                <option value="catorce">14</option>
                                                <option value="quince">15</option>
                                                <option value="dieciseis">16</option>
                                                <option value="diecisiete">17</option>
                                                <option value="dieciocho">18</option>
                                                <option value="diecinueve">19</option>
                                                <option value="veinte">20</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button id="agregar-btn" type="button"
                                        style="border:none; background-color: transparent;">
                                        <i class='bx bx-plus-circle' style="color: white"></i>
                                    </button>

                                    <div>
                                        <label for="total">Total:</label>
                                        <input type="text" id="totalVenta" name="total" readonly>
                                    </div>

                                    <input type="submit" value="Registrar venta" id="registrar-venta">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="compras-container">
                <div class="head-title">
                    <div class="left">
                        <h1>Compras</h1>
                    </div>
                    <a href="#" class="btn-download" id="download-compras-btn">
                        <i class='bx bxs-cloud-download'></i>
                        <span class="text">Descargar reporte</span>
                    </a>
                </div>

                <ul class="box-info">
                    <li>
                        <i class='bx bxs-shopping-bags'></i>
                        <span class="text">
                            <!--CANTIDAD COMPRA-->
                            <h3><?php include 'cant-compras.php' ?></h3>
                            <p>Compras</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bxs-dollar-circle'></i>
                        <span class="text">
                            <!--MONTO COMPRA-->
                            <h3><?php include 'monto-compras.php'; ?></h3>
                            <p>Monto total de compras</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Historial de compras</h3>
                            <i class='bx bx-filter'></i>
                        </div>
                        <table id="tabla-compras">
                            <thead>
                                <tr>
                                    <th>Acción</th>
                                    <th>N°. Orden de pedido</th>
                                    <th>Fecha</th>
                                    <th>Monto total</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><button id="modify-fila" style="border: none; background-color: transparent;"
                                        onclick="modificarFormularioCompras()"><i
                                            class='bx bxs-edit-alt'></i></button></td>
                                    <!--LISTA COMPRA-->
                                    <?php include 'lista-compra.php'; ?>
                                    <td><span class="status completed">Pagado</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <!--FORMULARIO DE MODIFICACIÓN-->
                        <div class="formulario-background" id="modificarCompras">
                            <div class="formulario-container" id="modificarComprasContainer">
                                <button class="close-button" id="close-button-modificar-compras">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="formularioModificarCompra">
                                    <h2 class="create-account">Modifica una compra</h2>
                                    <label for="estadoCompra">Cambia el estado de tu compra</label>
                                    <select id="opciones" name="estadoCompra" required>
                                        <option value="">-- Selecciona una opción --</option>
                                        <option value="pago">Pago</option>
                                    </select>
                                    <input type="submit" value="Modificar compra" id="modificarCompra">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pedidos-container">
                <div class="head-title">
                    <div class="left">
                        <h1>Pedidos</h1>
                    </div>
                </div>

                <ul class="box-info">
                    <li>
                        <i class='bx bx-receipt'></i>
                        <span class="text">
                            <h3><?php include 'cant-pedidos.php'; ?></h3>
                            <p>Órdenes de pedido</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bxs-dollar-circle'></i>
                        <span class="text">
                            <h3>$3'564.256</h3>
                            <p>Monto total en pedidos</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Órdenes de pedido</h3>
                            <i class='bx bxs-add-to-queue' onclick="mostrarFormularioPedidos()"></i>
                            <i class='bx bx-filter'></i>
                        </div>
                        <table id="tabla-pedidos">
                            <thead>
                                <tr>
                                    <th>Acción</th>
                                    <th>Nombre del producto</th>
                                    <th>Cantidad</th>
                                    <th>Proveedor</th>
                                    <th>Monto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button id="modify-fila" style="border: none; background-color: transparent;" onclick="eliminarFormularioPedidos()"><i
                                                class='bx bxs-trash'></i></button>
                                    </td>
                                    <td>Resma de papel</td>
                                    <td>10</td>
                                    <td>Luis Arango</td>
                                    <td>$ 24.000</td>
                                </tr>                                
                            </tbody>
                        </table>
                        <!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioPedidos">
                            <div class="formulario-container" id="formularioPedidosContainer">
                                <button class="close-button" id="close-button-pedidos">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="pedidos-form">
                                    <h2 class="create-account">Registra un pedido</h2>
                                    <p class="cuenta-gratis">Ingresa los datos para generar la orden de pedido</p>
                                    <label for="productoPedido">Nombre del proveedor</label>
                                    <select id="opciones" name="nombreProveedor" required>
                                        <option value="">-- Selecciona un proveedor --</option>
                                        <option value="proveedor1">Proveedor 1</option>
                                        <option value="proveedor2">Proveedor 2</option>
                                        <option value="proveedor3">Proveedor 3</option>
                                    </select>
                                    <div id="pedido-container">
                                        <div class="form-group-pedido">
                                            <label for="productoPedido">Nombre del producto</label>
                                            <select id="opciones" name="productoPedido" required>
                                                <option value="">-- Selecciona un producto --</option>
                                                <option value="producto1">Producto 1</option>
                                                <option value="producto2">Producto 2</option>
                                                <option value="producto3">Producto 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group-pedido">
                                            <label for="cantidadPedido">Cantidad</label>
                                            <select id="opciones" name="cantidadPedido" required>
                                                <option value="">-- Selecciona una opción --</option>
                                                <option value="uno">1</option>
                                                <option value="dos">2</option>
                                                <option value="tres">3</option>
                                                <option value="cuatro">4</option>
                                                <option value="cinco">5</option>
                                                <option value="seis">6</option>
                                                <option value="siete">7</option>
                                                <option value="ocho">8</option>
                                                <option value="nueve">9</option>
                                                <option value="diez">10</option>
                                                <option value="once">11</option>
                                                <option value="doce">12</option>
                                                <option value="trece">13</option>
                                                <option value="catorce">14</option>
                                                <option value="quince">15</option>
                                                <option value="dieciseis">16</option>
                                                <option value="diecisiete">17</option>
                                                <option value="dieciocho">18</option>
                                                <option value="diecinueve">19</option>
                                                <option value="veinte">20</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button id="agregar-pedido-btn" type="button"
                                        style="border:none; background-color: transparent;">
                                        <i class='bx bx-plus-circle' style="color: white"></i>
                                    </button>

                                    <div>
                                        <label for="total">Total:</label>
                                        <input type="text" id="totalPedido" name="totalPedido" readonly>
                                    </div>
                                    <input type="submit" value="Registrar pedido" id="registrar-pedido">
                                </form>
                            </div>
                        </div>
                        <!--FORMULARIO DE ELIMINACIÓN-->
                        <div class="formulario-background" id="eliminarPedidos">
                            <div class="formulario-container" id="eliminarPedidosContainer">
                                <button class="close-button" id="close-button-eliminar-pedidos">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="formularioEliminarPedidos">
                                    <h2 class="create-account">Elimina un pedido</h2>
                                    <p class="cuenta-gratis">¿Estás seguro que deseas eliminar el pedido?</p>
                                    <input type="submit" value="Eliminar pedidos" id="eliminar-pedido">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="proveedores-container">
                <div class="head-title">
                    <div class="left">
                        <h1>Proveedores</h1>
                    </div>
                </div>

                <ul class="box-info">
                    <li>
                        <i class='bx bxs-group'></i>
                        <span class="text">
                            <h3><?php include 'cant-proveedores.php'; ?></h3>
                            <p>Proveedores</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Listado de proveedores</h3>
                            <i class='bx bxs-add-to-queue' onclick="mostrarFormularioProveedores()"></i>
                            <i class='bx bx-filter'></i>
                        </div>
                        <table id="tabla-proveedores">
                            <thead>
                                <tr>
                                    <th>Acción</th>
                                    <th>NIT</th>
                                    <th>Nombre del proveedor</th>
                                    <th>Dirección</th>
                                    <th>Correo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include 'lista-proveedores.php' ?>
                            </tbody>
                        </table>
                        <!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioProveedores">
                            <div class="formulario-container" id="formularioProveedoresContainer">
                                <button class="close-button" id="close-button-proveedores">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form action="agregar-proveedor.php" method="POST" class="formulario-add" id="formularioRegistroProveedor">
                                    <h2 class="create-account">Registra un proveedor</h2>
                                    <p class="cuenta-gratis">Ingresa los datos del proveedor</p>
                                    <input type="tel" name="nit" placeholder="NIT/CC (Identificación)" pattern="[0-9]{1,10}"
                                        title="Por favor, ingresa el número. No mayor a 13 dígitos, sin espacios, ni guiones o puntos" required>
                                    <input type="text" name="nombre" placeholder="Nombre del proveedor" pattern="[A-Za-z\s]{1,30}" required
                                        title="Por favor, ingresa solo letras, números y espacios">
                                    <input type="text" name="direccion" placeholder="Dirección" pattern="^[a-zA-Z0-9\s\-\#\,\.\']+" required
                                        title="Por favor, ingresa la dirección">
                                    <input type="email" name="correo" placeholder="Correo electrónico" required>
                                    <input type="submit" value="Registrar proveedor" id="registrar-proveedor">
                                </form>
                            </div>
                        </div>
                        <!--FORMULARIO DE MODIFICACIÓN-->
                        <div class="formulario-background" id="modificarProveedores">
                            <div class="formulario-container" id="modificarProveedoresContainer">
                                <button class="close-button" id="close-button-modificar-proveedores">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="formularioModificarProveedor">
                                    <h2 class="create-account">Modifica un proveedor</h2>
                                    <p class="cuenta-gratis">Ingresa los datos del proveedor</p>
                                    <input type="tel" name="nit" placeholder="NIT/CC (Identificación)" pattern="[0-9]{1,10}"
                                        title="Por favor, ingresa el número. No mayor a 13 dígitos, sin espacios, ni guiones o puntos">
                                    <input type="text" name="nombre" placeholder="Nombre del proveedor" pattern="[A-Za-z\s]{1,30}"
                                        required title="Por favor, ingresa solo letras, números y espacios">
                                    <input type="text" name="direccion" placeholder="Dirección" pattern="^[a-zA-Z0-9\s\-\#\,\.\']+"
                                         title="Por favor, ingresa la dirección">
                                    <input type="email" name="correo" placeholder="Correo electrónico" required>
                                    <input type="submit" value="Modificar proveedor" id="modificar-proveedor">
                                </form>
                            </div>
                        </div>
                        <!--FORMULARIO DE ELIMINACIÓN-->
                        <div class="formulario-background" id="eliminarProveedores">
                            <div class="formulario-container" id="eliminarProveedoresContainer">
                                <button class="close-button" id="close-button-eliminar-proveedores">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="formularioEliminarProveedor">
                                    <h2 class="create-account">Elimina un proveedor</h2>
                                    <p class="cuenta-gratis">¿Estás seguro que deseas eliminar el proveedor?</p>
                                    <input type="submit" value="Eliminar proveedor" id="eliminar-proveedor">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="telefonos-container">
                <div class="head-title">
                    <div class="left">
                        <h1>Telefonos</h1>
                    </div>
                </div>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Listado de telefonos de proveedores</h3>
                            <i class='bx bxs-add-to-queue' onclick="mostrarFormularioTelefonos()"></i>
                            <i class='bx bx-filter'></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Acción</th>
                                    <th>Nombre del proveedor</th>
                                    <th>Teléfono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button id="modify-fila" style="border: none; background-color: transparent;" onclick="eliminarFormularioTelefonos()"><i
                                                class='bx bxs-trash'></i></button>
                                    </td>
                                    <td>Camila Londoño</td>
                                    <td>3216547898</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioTelefonos">
                            <div class="formulario-container" id="formularioTelefonosContainer">
                                <button class="close-button" id="close-button-telefonos">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="formularioRegistroTelefonos">
                                    <h2 class="create-account">Registra un telefono del proveedor</h2>
                                    <p class="cuenta-gratis">Ingresa los telefonos del proveedor</p>
                                    <select id="opciones" name="nombreProveedor" required>
                                        <option value="">-- Selecciona un proveedor --</option>
                                        <option value="proveedor1">Proveedor 1</option>
                                        <option value="proveedor2">Proveedor 2</option>
                                        <option value="proveedor3">Proveedor 3</option>
                                    </select>
                                    <div class="formulario-telefonos-container">
                                        <div class="form-group-telefonos">
                                        <input type="tel" placeholder="Telefono" pattern="[0-9]{1,10}"
                                        title="Por favor, ingresa el número. No mayor a 10 dígitos, sin espacios, ni guiones o puntos">
                                        </div>
                                    </div>
                                    <button id="agregar-telefono-btn" type="button"
                                        style="border:none; background-color: transparent;">
                                        <i class='bx bx-plus-circle' style="color: white"></i>
                                    </button>
                                    <input type="submit" value="Registar teléfono" id="registrar-telefono">
                                </form>
                            </div>
                        </div>
                        <!--FORMULARIO DE ELIMINACIÓN-->
                        <div class="formulario-background" id="eliminarTelefonos">
                            <div class="formulario-container" id="eliminarTelefonosContainer">
                                <button class="close-button" id="close-button-eliminar-telefonos">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="formularioEliminarTelefonos">
                                    <h2 class="create-account">Elimina un telefono de proveedor</h2>
                                    <p class="cuenta-gratis">¿Estás seguro que deseas eliminar el teléfono?</p>
                                    <input type="submit" value="Eliminar telefono" id="eliminar-telefono">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="empleados-container">
                <div class="head-title">
                    <div class="left">
                        <h1>Empleados</h1>
                    </div>
                </div>

                <ul class="box-info">
                    <li>
                        <i class='bx bxs-group'></i>
                        <span class="text">
                            <h3><?php include 'cant-empleados.php'; ?></h3>
                            <p>Empleados</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Listado de empleados</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Acción</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Fecha de nacimiento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include 'lista-empleados.php'; ?>
                            </tbody>
                        </table>
                        <!--FORMULARIO DE MODIFICACIÓN-->
                        <div class="formulario-background" id="modificarEmpleados">
                            <div class="formulario-container" id="modificarEmpleadosContainer">
                                <button class="close-button" id="close-button-modificar-empleados">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="formularioModificarEmpleado">
                                    <h2 class="create-account">Modifica un empleado</h2>
                                    <p class="cuenta-gratis">Ingresa los datos del empleado</p>
                                    <input type="text" placeholder="Nombres" pattern="[A-Za-z\s]+" readonly>
                                    <input type="text" placeholder="Apellidos" pattern="[A-Za-z\s]+" readonly>
                                    <input type="email" placeholder="Email" required title="Por favor, ingresa un email valido">
                                    <input type="submit" value="Modificar empleado" id="modificar-empleado">
                                </form>
                            </div>
                        </div>
                        <!--FORMULARIO DE ELIMINACIÓN-->
                        <div class="formulario-background" id="eliminarEmpleados">
                            <div class="formulario-container" id="eliminarEmpleadosContainer">
                                <button class="close-button" id="close-button-eliminar-empleados">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="formularioEliminarEmpleado">
                                    <h2 class="create-account">Elimina un empleado</h2>
                                    <p class="cuenta-gratis">¿Estás seguro que deseas eliminar el empleado?</p>
                                    <input type="submit" value="Eliminar empleado" id="eliminar-empleado">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="js/papeleria.js"></script>
    <script src="js/ventas.js"></script>
    <script src="js/inventario.js"></script>
    <script src="js/pedidos.js"></script>
    <script src="js/compras.js"></script>
    <script src="js/empleados.js"></script>
    <script src="js/proveedores.js"></script>
    <script src="js/telefonos.js"></script>
</body>
</html>