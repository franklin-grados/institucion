<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instutucion</title>
    
    <link href="../librari/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/style.css">
  </head>
<body>

<div class="contenedor">
  <button class="btn-nav-activ bs-4" type="button" id="nav_activ">
    <i class="bi bi-menu-button-wide-fill"></i>
  </button>
  <header id="nav_pincipal" class="nav-ini">
    <div class="header_navv">
    <button class="btn-nav bs-4" type="button" id="nav_desac">
    <i class="bi bi-menu-button-wide-fill"></i>
  </button>
    </div>
    <nav class="navegacion ">
      <input type="text" id="filtro" class="input-filtro" placeholder="Buscar...">
      <ul id="lista">
        <li>
          <span class="mostrar-lista">
            <span class="fa fa-home p-isq"></span>
            <div class="texto"> Almacen
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </span>

          <ul class="more-navegacion inactivo">
            <li><a href="productos.php"> Productos</a></li>
            <li><a href="compra.php"> Compras</a></li>

          </ul>
        </li>
        <li>
          <span class="mostrar-lista">
            <span class="fa fa-home p-isq"></span>
            <div class="texto"> Ventas
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </span>

          <ul class="more-navegacion inactivo">
            <li><a href="productos.php"> Productos</a></li>
            <li><a href="compra.php"> Compras</a></li>
            <li><a href="ordenc.php"> Orden de Compra</a></li>
            <li><a href="transferencia.php"> Transferencias</a></li>
            <li><a href="almacen.php"> Almacenes</a></li>
            <li><a href="cierre_inventario.php"> Cierre de Inventario</a></li>
          </ul>
        </li>
        <li>
          <span class="mostrar-lista">
            <span class="fa fa-home p-isq"></span>
            <div class="texto"> Cliente
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </span>

          <ul class="more-navegacion inactivo">
            <li><a href="productos.php"> Productos</a></li>
            <li><a href="compra.php"> Compras</a></li>
            <li><a href="ordenc.php"> Orden de Compra</a></li>
          </ul>
        </li>
        <li>
          <ul class="one-list one-navegacion">
            <li><a href="productos.php"><span class="fa fa-home p-isq"></span> Productos</a></li>
          </ul>
        </li>
        
        
      </ul>


    </nav>
  </header>



