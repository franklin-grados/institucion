<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title id="title"></title>
    
    <link href="../librari/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../librari/bootstrap/font/node_modules/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="../librari/fontawesome/node_modules/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
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
      <img src="../librari/images/university.png" class="img-nav" alt="">
    
    </div>
    <nav class="navegacion ">
      <input type="text" id="filtro" class="input-filtro" placeholder="Buscar...">
      <ul id="lista">
        
        <li>
          <ul class="one-list one-navegacion">
            <li><a href="start.php"><span class="fa fa-home p-isq"></span>  University Page</a></li>
          </ul>
        </li>

        <li>
          <ul class="one-list one-navegacion">
            <li><a href="profile.php"><span class="fa fa-user p-isq"></span>  <?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']?></a></li>
          </ul>
        </li>

        <li>
          <ul class="one-list one-navegacion">
            <li><a href="courses.php"><span class="fa fa-book p-isq"></span>  Courses</a></li>
          </ul>
        </li>

        <li>
          <span class="mostrar-lista">
            <span class="fa fa-home p-isq"></span>
            <div class="texto"> Otros
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </span>

          <ul class="more-navegacion inactivo">
            <li><a href="productos.php"> Option-1</a></li>
            <li><a href="compra.php"> Option-2</a></li>
            <li><a href="ordenc.php"> Option-3</a></li>
          </ul>
        </li>        
      </ul>


    </nav>
  </header>

  <div class="close-session"><i class="fa-solid fa-power-off off-session" title="Sign off" onclick="closeSession()"></i></div>



