<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
            </scrip>
        ';
        header("location:index.php");
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>ANALITICS SYSTEMS</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/bg10.png" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="admin.php">
       <img src="assets/images/bg10.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">CRM-ANALITICS SYSTEMS</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">NAVEGACIÓN PRINCIPAL</li>
      <li>
        <a href="admin.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <!--<li>
        <a href="icons.html">
          <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
        </a>
      </li>-->
      <li>
        <a href="forms.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Campañas</span>
        </a>
      </li>

      <!--<li>
        <a href="forms.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Formularios</span>
        </a>
      </li>-->

      <li>
        <a href="tablesadmin.php">
          <i class="zmdi zmdi-grid"></i> <span>Tablas</span>
        </a>
      </li>

      <li>
        <a href="calendaradmin.php">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendario</span>
          <small class="badge float-right badge-light">Nuevo</small>
        </a>
      </li>

      <li>
        <a href="perfiladmin.php">
          <i class="zmdi zmdi-face"></i> <span>Perfil</span>
        </a>
      </li>
      <li>
        <a href="php/cerrar_session.php" target="_blank">
          <i class="icon-power mr-2"></i> <span>Cerrar cesión</span>
        </a>
      </li>
      <!--<li>
        <a href="login.html" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Login</span>
        </a>
      </li>

       <li>
        <a href="register.html" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
        </a>
      </li>-->

      <li class="sidebar-header">ETIQUETAS</li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Importante</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Advertencia</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Información</span></a></li>


    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
      <li class="dropdown-item"> <i class="flag-icon flag-icon-ec"></i> Español</li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Byron Cobos</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Privado</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Cuenta</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Ajuste</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item">
          <a href="php/cerrar_session.php" target="_blank">        
          <i class="icon-power mr-2"></i> Cerrar sesión</a>
        </li>
          
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Ingreso de Venta</div>
           <hr>
            <form>
            <div class="col-lg-9">
                <input class="form-control" type="text" value="" placeholder="Ingrese el número de documento">
                <select>
                <option></option>
                <option>Cedula de identidad</option>
                <option>RUC Natural</option>
                <option>RUC Jurídico</option>
                <option>Pasaporte</option>
                </select>
            </div>
            <div class="form-group">
            <label for="input-3">Año de Expedición de la Cédula</label>
            <input type="date" class="form-control" id="input-3" placeholder="Ingrese el año de Expedición de la Cédula">
           </div>
           <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Subir documento de identidad</label>
                <div class="col-lg-9">
                <input class="form-control" type="file">
                </div>
            </div>
            <div class="form-group">
            <label for="input-1">Primer Nombre</label>
            <input type="text" class="form-control" id="input-1" placeholder="Ingrese primer nombre">
           </div>
           <div class="form-group">
            <label for="input-1">Segundo Nombre</label>
            <input type="text" class="form-control" id="input-1" placeholder="Ingrese segundo nombre">
           </div>
           <div class="form-group">
            <label for="input-2">Apellido Paterno</label>
            <input type="text" class="form-control" id="input-2" placeholder="Ingrese el apellido paterno">
           </div>
           <div class="form-group">
            <label for="input-2">Apellido Materno</label>
            <input type="text" class="form-control" id="input-2" placeholder="Ingrese el apellido materno">
           </div>
           <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nacionalidad</label>
                            <div class="col-lg-9">
                            <form class="controls">
                                    <h1></h1>
                                    <select>
                                        <option></option>
                                        <option>Ecuatoriana</option>
                                        <option>Venezolana</option>
                                        <option>Colombiana</option>
                                        <option>Peruana</option>
                                        <option>Española</option>
                                        <option>Otra</option>
                                    </select>
                            </form>
                            </div>                        
            </div>
            <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Estado Civil</label>
                            <div class="col-lg-9">
                            <form class="controls">
                                    <h1></h1>
                                    <select>
                                        <option></option>
                                        <option>Solter@</option>
                                        <option>Casad@</option>
                                        <option>Divorciad@</option>
                                        <option>Viudo@</option>
                                        <option>Unión de hecho</option>
                                    </select>
                            </form>
                            </div>                        
            </div>
           <div class="form-group">
            <label for="input-3">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="input-3" placeholder="Ingrese la fecha de nacimiento">
           </div>
           <div class="form-group">
            <label for="input-2">Correo electrónico </label>
            <input type="email" class="form-control" id="input-2" placeholder="Ingrese el correo electrónico ">
           </div>
           <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Dirección de domicilio</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Calle principal">
                            </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" value="" placeholder="Numeración">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="Calle secundaria">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="Manzana">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="Villa">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="Parroquia">
                            </div>
                        </div>
            </div>
            <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Seleccione provincia</label>
                            <div class="col-lg-9">
                            <form class="controls">                                  
                                    <select>
                                    <option></option>
                                    <option>AZUAY</option>
                                    <option>BOLIVAR</option>
                                    <option> CAÑAR</option>
                                    <option>CARCHI</option>
                                    <option> COTOPAXI</option>
                                    <option>CHIMBORAZO</option>
                                    <option>EL ORO</option>
                                    <option>ESMERALDAS</option>
                                    <option>GUAYAS</option>
                                    <option>IMBABURA</option>
                                    <option>LOJA </option>
                                    <option>LOS RIOS</option>
                                    <option>MANABI</option>
                                    <option> MORONA SANTIAGO</option>
                                    <option> NAPO</option>
                                    <option> PASTAZA</option>
                                    <option>PICHINCHA</option>
                                    <option>TUNGURAHUA</option>
                                    <option> ZAMORA CHINCHIPE</option>
                                    <option> GALAPAGOS</option>
                                    <option>SUCUMBIOS</option>
                                    <option>ORELLANA</option>
                                    <option>SANTO DOMINGO DE LOS TSACHILAS</option>
                                    <option>SANTA ELENA</option>
                                    </select>
                            </form>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Seleccione ciudad</label>
                            <div class="col-lg-9">
                            <form class="controls">
                                        <select>
                                        <option></option>
                                        <option>GUAYAQUIL</option>
                                        <option>CUENCA</option>
                                        <option>GIRON</option>
                                        <option>GUALACEO</option>
                                        <option> NABON</option>
                                        <option>PAUTE</option>
                                        <option> PUCARA</option>
                                        <option> SAN FERNANDO</option>
                                        <option> SANTA ISABEL</option>
                                        <option> SIGSIG</option>
                                        <option> OÑA</option>
                                        <option>CHORDELEG</option>
                                        <option> EL PAN</option>
                                        <option> SEVILLA DE ORO</option>
                                        <option> GUACHAPALA</option>
                                        <option>CAMILO PONCE ENRIQUEZ</option>
                                        <option> GUARANDA</option>
                                        <option> CHILLANES</option>
                                        <option> CHIMBO</option>
                                        <option> ECHEANDIA</option>
                                        <option>SAN MIGUEL</option>
                                        <option> CALUMA </option>
                                        <option> LAS NAVES</option>
                                        <option>AZOGUES</option>
                                        <option> BIBLIAN</option>
                                        <option>CAÑAR</option>
                                        <option> LA TRONCAL</option>
                                        <option>EL TAMBO </option>
                                        <option> DELEG</option>
                                        <option>SUSCAL</option>
                                        <option> TULCAN</option>
                                        <option> BOLIVAR</option>
                                        <option> ESPEJO</option>
                                        <option> MIRA</option>
                                        <option>MONTUFAR</option>
                                        <option> SAN PEDRO DE HUACA</option>
                                        <option>LATACUNGA</option>
                                        <option>LA MANA</option>
                                        <option>PANGUA</option>
                                        <option> PUJILI</option>
                                        <option> SALCEDO</option>
                                        <option>SAQUISILI</option>
                                        <option>SIGCHOS</option>
                                        <option>RIOBAMBA</option>
                                        <option>ALAUSI</option>
                                        <option> COLTA</option>
                                        <option>CHAMBO</option>
                                        <option>CHUNCHI</option>
                                        <option>GUAMOTE</option>
                                        <option>GUANO</option>
                                        <option>PALLATANGA</option>
                                        <option> PENIPE</option>
                                        <option>CUMANDA</option>
                                        <option>MACHALA</option>
                                        <option>ARENILLAS</option>
                                        <option>ATAHUALPA</option>
                                        <option>BALSAS</option>
                                        <option>CHILLA</option>
                                        <option>EL GUABO</option>
                                        <option>HUAQUILLAS</option>
                                        <option>MARCABELI</option>
                                        <option>PASAJE</option>
                                        <option>PIÑAS</option>
                                        <option>PORTOVELO</option>
                                        <option>SANTA ROSA</option>
                                        <option>ZARUMA</option>
                                        <option>LAS LAJAS</option>
                                        <option> ESMERALDAS</option>
                                        <option>ELOY ALFARO</option>
                                        <option>MUISNE</option>
                                        <option>QUININDE</option>
                                        <option>SAN LORENZO</option>
                                        <option>ATACAMES</option>
                                        <option>RIOVERDE</option>
                                        <option>LA CONCORDIA</option>
                                        <option>ALFREDO BAQUERIZO MORENO (JUJAN)</option>
                                        <option>BALAO</option>
                                        <option>BALZAR</option>
                                        <option>COLIMES</option>
                                        <option>DAULE</option>
                                        <option>DURAN</option>
                                        <option> EL EMPALME</option>
                                        <option>EL TRIUNFO</option>
                                        <option> MILAGRO</option>
                                        <option>NARANJAL</option>
                                        <option>NARANJITO</option>
                                        <option>PALESTINA</option>
                                        <option>PEDRO CARBO</option>
                                        <option>SAMBORONDON</option>
                                        <option> SANTA LUCIA</option>
                                        <option>SALITRE (URBINA JADO)</option>
                                        <option>SAN JACINTO DE YAGUACHI</option>
                                        <option> PLAYAS</option>
                                        <option>SIMON BOLIVAR</option>
                                        <option>CORONEL MARCELINO MARIDUEÑA</option>
                                        <option>LOMAS DE SARGENTILLO</option>
                                        <option>NOBOL</option>
                                        <option>GENERAL ANTONIO ELIZALDE </option>
                                        <option>ISIDRO AYORA </option>
                                        <option> IBARRA</option>
                                        <option>ANTONIO ANTE</option>
                                        <option>COTACACHI</option>
                                        <option>OTAVALO</option>
                                        <option>PIMAMPIRO</option>
                                        <option>SAN MIGUEL DE URCUQUI</option>
                                        <option> LOJA</option>
                                        <option>CALVAS</option>
                                        <option>CATAMAYO</option>
                                        <option>CELICA</option>
                                        <option>CHAGUARPAMBA</option>
                                        <option> ESPINDOLA</option>
                                        <option> GONZANAMA</option>
                                        <option>MACARA</option>
                                        <option>PALTAS</option>
                                        <option> PUYANGO</option>
                                        <option>SARAGURO</option>
                                        <option>SOZORANGA</option>
                                        <option>ZAPOTILLO</option>
                                        <option> PINDAL</option>
                                        <option>QUILANGA</option>
                                        <option>OLMEDO</option>
                                        <option>BABAHOYO</option>
                                        <option>BABA</option>
                                        <option> MONTALVO</option>
                                        <option>PUEBLOVIEJO</option>
                                        <option>QUEVEDO</option>
                                        <option>URDANETA</option>
                                        <option>VENTANAS</option>
                                        <option>VINCES</option>
                                        <option>PALENQUE</option>
                                        <option>BUENA FE</option>
                                        <option>VALENCIA</option>
                                        <option> MOCACHE</option>
                                        <option>QUINSALOMA</option>
                                        <option>PORTOVIEJO</option>
                                        <option>BOLIVAR</option>
                                        <option>CHONE</option>
                                        <option>EL CARMEN</option>
                                        <option> FLAVIO ALFARO</option>
                                        <option> JIPIJAPA</option>
                                        <option>JUNIN</option>
                                        <option> MANTA</option>
                                        <option> MONTECRISTI   </option>
                                        <option>PAJAN</option>
                                        <option> PICHINCHA</option>
                                        <option>ROCAFUERTE</option>
                                        <option>SANTA ANA</option>
                                        <option> SUCRE</option>
                                        <option> TOSAGUA</option>
                                        <option>24 DE MAYO</option>
                                        <option> PEDERNALES</option>
                                        <option>PUERTO LOPEZ</option>
                                        <option> JAMA</option>
                                        <option> JARAMIJO</option>
                                        <option>SAN VICENTE</option>
                                        <option>MORONA</option>
                                        <option> GUALAQUIZA</option>
                                        <option>LIMON INDANZA</option>
                                        <option>PALORA</option>
                                        <option>SANTIAGO</option>
                                        <option>SUCUA</option>
                                        <option> HUAMBOYA</option>
                                        <option>SAN JUAN BOSCO </option>
                                        <option>TAISHA </option>
                                        <option>LOGROÑO </option>
                                        <option>PABLO SEXTO</option>
                                        <option>CANTON TIWINTZA</option>
                                        <option>TENA</option>
                                        <option>ARCHIDONA</option>
                                        <option>EL CHACO</option>
                                        <option>QUIJOS</option>
                                        <option> CARLOS JULIO AROSEMENA TOLA</option>
                                        <option>PASTAZA</option>
                                        <option>MERA</option>
                                        <option> SANTA CLARA</option>
                                        <option> ARAJUNO</option>
                                        <option>QUITO</option>
                                        <option>CAYAMBE</option>
                                        <option> MEJIA</option>
                                        <option> PEDRO MONCAYO</option>
                                        <option>RUMIÑAHUI</option>
                                        <option> SAN MIGUEL DE LOS BANCOS</option>
                                        <option> PEDRO VICENTE MALDONADO</option>
                                        <option>PUERTO QUITO</option>
                                        <option>AMBATO</option>
                                        <option>BAÑOS DE AGUA SANTA</option>
                                        <option> CEVALLOS</option>
                                        <option> MOCHA</option>
                                        <option> PATATE</option>
                                        <option> QUERO</option>
                                        <option>SAN PEDRO DE PELILEO</option>
                                        <option>SANTIAGO DE PILLARO</option>
                                        <option>TISALEO</option>
                                        <option>ZAMORA</option>
                                        <option> CHINCHIPE</option>
                                        <option> NANGARITZA</option>
                                        <option> YACUAMBI</option>
                                        <option> YANTZAZA (YANZATZA)</option>
                                        <option> EL PANGUI</option>
                                        <option> CENTINELA DEL CONDOR</option>
                                        <option>PALANDA</option>
                                        <option>PAQUISHA </option>
                                        <option> SAN CRISTOBAL</option>
                                        <option> ISABELA</option>
                                        <option> SANTA CRUZ</option>
                                        <option> LAGO AGRIO</option>
                                        <option> GONZALO PIZARRO</option>
                                        <option> PUTUMAYO</option>
                                        <option>SHUSHUFINDI</option>
                                        <option> SUCUMBIOS</option>
                                        <option>CASCALES</option>
                                        <option>CUYABENO</option>
                                        <option>ORELLANA</option>
                                        <option>AGUARICO</option>
                                        <option> LA JOYA DE LOS SACHAS</option>
                                        <option> LORETO</option>
                                        <option>SANTO DOMINGO</option>
                                        <option> SANTA ELENA</option>
                                        <option> LA LIBERTAD</option>
                                        <option>SALINAS</option>
                                        <option>ZONAS NO DELIMITADAS</option>
                                    </select>
                                </form>
                            </div>
                        </div>
           <div class="form-group">
            <label for="input-2">Producto</label>
                <ul class="Menuprodcuto">
                <li>
                    <a href="">Internet Fijo</a>
                    <form>
                        <div class="col-lg-9">
                        <input class="form-control" type="text" value="" placeholder="Ingrese el número de documento">
                        </div>
                    </form>
                </li>
                <li>Internet Móvil</li>
                </ul>
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Guardar</button>
          </div>
          </form>
         </div>
         </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Round Vertical Form</div>
           <hr>
            <form>
           <div class="form-group">
            <label for="input-6">Name</label>
            <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Name">
           </div>
           <div class="form-group">
            <label for="input-7">Email</label>
            <input type="text" class="form-control form-control-rounded" id="input-7" placeholder="Enter Your Email Address">
           </div>
           <div class="form-group">
            <label for="input-8">Mobile</label>
            <input type="text" class="form-control form-control-rounded" id="input-8" placeholder="Enter Your Mobile Number">
           </div>
           <div class="form-group">
            <label for="input-9">Password</label>
            <input type="text" class="form-control form-control-rounded" id="input-9" placeholder="Enter Password">
           </div>
           <div class="form-group">
            <label for="input-10">Confirm Password</label>
            <input type="text" class="form-control form-control-rounded" id="input-10" placeholder="Confirm Password">
           </div>
           <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox2" checked=""/>
            <label for="user-checkbox2">I Agree Terms & Conditions</label>
            </div>
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Register</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2022 CRM-ANALITICS SYSTEMS
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>