
<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
            </script>
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
  <title>ANALYTICS SYSTEMS-CONSOLE</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/bg10.png" type="image/x-icon">
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

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="consola.php">
       <img src="assets/images/bg9.jpeg" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">ANALYTICS SYSTEMS</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">Editar perfil</li>
      <li>
        
      <li>
        <a href="calendar.php">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendario</span>
          <small class="badge float-right badge-light">Nuevo</small>
        </a>
      </li>

      <li>
        <a href="consola.php">
          <i class="zmdi zmdi-face"></i> <span>Perfil</span>
        </a>
      </li>

      <li>
        <a href="php/cerrar_session.php" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Cerrar cesión</span>
        </a>
      </li>
        
      
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
            <h6 class="mt-2 user-title">Cobos Byron</h6>
            <p class="user-subtitle">bcobosy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Notificaciones</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Configuraciones</li>
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
        <div class="col-lg-4">
           <div class="card profile-card-2">
            <div class="card-img-block">
                <img class="img-fluid" src="https://via.placeholder.com/800x500" alt="Card image cap">
            </div>
            <div class="card-body pt-5">
                <img src="https://via.placeholder.com/110x110" alt="profile-image" class="profile">
                <h5 class="card-title">Byron Cobos</h5>
                <p class="card-text">"El talento gana partidos, pero el trabajo en equipo y la inteligencia ganan campeonatos." Michael Jordan.</p>
            </div>

            
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Perfil</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Mensajes</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Editar información </span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">Información de perfil</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Conocimientos </h6>
                            <p>
                                Técnica de ventas
                            </p>
                            <h6>Pasatiempos</h6>
                            <p>
                                Escuchar música, lectura.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Recent badges</h6>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">codeply</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">angularjs</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">jquery</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">bootstrap</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">responsive-design</a>
                            <hr>
                            <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                            <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                            <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Activides recientes</h5>
                             <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissible" role="alert">
				   <button type="button" class="close" data-dismiss="alert">&times;</button>
				    <div class="alert-icon">
					 <i class="icon-info"></i>
				    </div>
				    <div class="alert-message">
				      <span><strong>Info!</strong> Lorem Ipsum is simply dummy text.</span>
				    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros. 
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="edit">
                    <form>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nombres Completos</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Ejemplo: Byron Xavier">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Apellidos</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Ejemplo: Cobos Mazón">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Foto de perfil</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Seleccione el tipo de documento de identidad e ingrese su valor</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Ejemplo: 1722304506">
                                <select>
                                        <option></option>
                                        <option>Cedula</option>
                                        <option>RUC</option>
                                        <option>Pasaporte</option>
                                </select>
                            </div>
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
                            <label class="col-lg-3 col-form-label form-control-label">Fecha de nacimiento</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" value="">
                            </div>                        
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Dirección de domicilio</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Calle principal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" value="" placeholder="Numeración">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="Calle secundaria">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Referencia del domicilio</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Ejemplo: casa de 2 pisos blanca frende a Mall del sol.">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Cordenadas del domiciolio</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" value="" placeholder="Ejemplo: -2.166207, -79.911218">
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
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Número de Teléfono Celular </label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" value="" placeholder="Ejemplo: +593983362460">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Número de Whatsapp </label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" value="" placeholder="Ejemplo: +593983362460">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Número de Telefono Fijo</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" value="" placeholder="Ejemplo: +59322507716">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Referencia Personal 1</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Juan Ramos">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Número de referencia 1</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" value="" placeholder="Ejemplo: +593983362460">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Referencia Personal 2</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="David Cobos">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Número de referencia 2</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" value="" placeholder="Ejemplo: +593983362460">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Seleccione forma de pago</label>
                            <div class="col-lg-9">
                            <form class="controls">
                                    <h1></h1>
                                    <select>
                                        <option></option>
                                        <option>Tranferencia</option>
                                        <option>Cheque</option>
                                    </select>
                            </form>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Seleccione tipo de cuenta</label>
                            <div class="col-lg-9">
                            <form class="controls">
                                    <h1></h1>
                                    <select>
                                        <option></option>
                                        <option>Ahorros</option>
                                        <option>Corriente</option>
                                    </select>
                            </form>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Seleccione entidad financiera</label>
                            <div class="col-lg-9">
                            <form class="controls">
                                    <h1></h1>
                                    <select>
                                        <option></option>
                                        <option>BANCO CENTRAL DEL ECUADOR</option>
                                        <option>BANCO PICHINCHA C.A.</option>
                                        <option>BANCO DE GUAYAQUIL S.A</option>
                                        <option>BANCO CITY BANK</option>
                                        <option>BANCO MACHALA</option>
                                        <option>BANCO DE LOJA</option>
                                        <option>BANCO DEL PACIFICO</option>
                                        <option>BANCO INTERNACIONAL</option>
                                        <option>BANCO AMAZONAS</option>
                                        <option>BANCO DEL AUSTRO</option>
                                        <option>PRODUBANCO / PROMERICA</option>
                                        <option>BANCO BOLIVARIANO</option>
                                        <option>BANCO COMERCIAL DE MANABI</option>
                                        <option>BANCO GENERAL RUMINAHUI S.A.</option>
                                        <option>BANCO DEL LITORAL S.A.</option>
                                        <option>BANCO SOLIDARIO</option>
                                        <option>BANCO PROCREDIT S.A.</option>
                                        <option>BANCO CAPITAL</option>
                                        <option>BANCO DESARROLLO DE LOS PUEBLOS S.A.</option>
                                        <option>BANECUADOR B.P.</option>
                                        <option>COOP. AHORRO Y CREDITO 15 DE ABRIL LTDA</option>
                                        <option>COOP. JARDIN AZUAYO</option>
                                        <option>COOP.DE AHORRO Y CREDITO POLICIA NACIONAL</option>
                                        <option>FINANCOOP</option>
                                        <option>BANCO DELBANK S.A.</option>
                                        <option>BANCO ECUATORIANO DE LA VIVIENDA</option>
                                        <option>CACPECO LTDA</option>
                                        <option>C.PEQ.EMPRESA DE PASTAZA</option>
                                        <option>COOP. AHORRO Y CREDITO 23 DE JULIO</option>
                                        <option>COOP. AHORRO Y CREDITO 29 DE OCTUBRE</option>
                                        <option>COOP. AHORRO Y CREDITO ANDALUCIA</option>
                                        <option>COOP. AHORRO Y CREDITO COTOCOLLAO</option>
                                        <option>COOP. AHORRO Y CREDITO EL SAGRARIO</option>
                                        <option>COOP. AHORRO Y CREDITO GUARANDA LTDA</option>
                                        <option>COOP. JUVENTUD ECUATORIANA PROGRESISTA LTDA.</option>
                                        <option>COOP. AHORRO Y CREDITO MANUEL</option>
                                        <option>COOP. AHORRO Y CREDITO OSCUS</option>
                                        <option>COOP. AHORRO Y CREDITO PABLO MUNOZ VEGA</option>
                                        <option>COOP. AHORRO Y CREDITO PROGRESO</option>
                                        <option>COOP. AHORRO Y CREDITO RIOBAMBA</option>
                                        <option>COOP. AHORRO Y CREDITO SAN FRANCISCO</option>
                                        <option>COOP. AHORRO Y CREDITO TULCAN</option>
                                        <option>COOP. DE AHORRO Y CREDITO ATUNTAQUI LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO COMERCIO LTDA PORTOVIEJO</option>
                                        <option>COOP. DE AHORRO Y CREDITO LA DOLOROSA LTDA</option>
                                        <option>COOP. PREVISION AHORRO Y DESARROLLO</option>
                                        <option>COOP.AHORRO Y CREDITO ALIANZA DEL VALLE LTDA</option>
                                        <option>COOP AHORRO Y CREDITO CONSTRC COMERCIO Y PRODUC</option>
                                        <option>COOP.AHORRO Y CREDITO CHONE LTDA</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO SANTA ANA LTDA</option>
                                        <option>FINANCIERA - DINERS CLUB DEL ECUADOR</option>
                                        <option>MUTUALISTA AMBATO</option>
                                        <option>MUTUALISTA AZUAY</option>
                                        <option>MUTUALISTA IMBABURA</option>
                                        <option>MUTUALISTA PICHINCHA</option>
                                        <option>COOP DE A. Y C. CORPORACION CENTRO LTDA.</option>
                                        <option>COOP. DE A. Y C. CORDILLERA DE LOS ANDES LTDA.</option>
                                        <option>COOP. DE A. Y C. PUERTO FRANCISCO DE ORELLANA</option>
                                        <option>COOP. DE A Y C. LUZ DEL VALLE</option>
                                        <option>COOP. DE A Y C. ESPERANZA Y PROGRESO DEL VALLE</option>
                                        <option>COOP. DE A. Y C. CHOCO TUNGURAHUA RUNA LTDA</option>
                                        <option>COOP. DE A. Y C. COOPARTAMOS LTDA</option>
                                        <option>COOP. DE A. Y C. EMPRENDEDORES COOPEMPRENDER LTDA.</option>
                                        <option>COOP. DE A. Y C. NUEVA LOJA LTDA.</option>
                                        <option>COOP. DE A. Y C. PICHNCHA LTDA.</option>
                                        <option>COOP. CREDITO Y AHORRO SAN FRANCISCO DE ASIS</option>
                                        <option>COOP.DE AHORRO Y CREDITO CACEC LTDA. (COTOPAXI)</option>
                                        <option>COOP.DE A. Y C. VENCEDORES DE PICHINCHA LTDA.</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO SAN BARTOLO LTDA</option>
                                        <option>COOP. DE A. Y C. DEL EMIGRANTE ECUATORIANO Y SU FA</option>
                                        <option>COOP. AHORRO Y CREDITO LA LIBERTAD LTDA</option>
                                        <option>COAC CUNA DE LA NACIONALIDAD LTDA.</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO MACODES LTDA</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO SANTA ISABEL LTDA.</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO GANANSOL LTDA</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO DEL AZUAY</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO DEL COLEGIO DE ARQ</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO NUKANCHIK</option>
                                        <option>COOP DE AHORRO Y CREDITO SANTA ANA CUENCA</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO MULTIEMPRESARIAL L</option>
                                        <option>COAC DEL SINDICATO DE CHOFERES PROFESIONALES DEL A</option>
                                        <option>COOP. AHORRO Y CREDITO JUAN DE SALINAS LTDA.</option>
                                        <option>COOP. AHORRO Y CREDITO PUELLARO LTDA</option>
                                        <option>COOP. AHORRO Y CREDITO NUEVA JERUSALEN</option>
                                        <option>COOP. AHORRO Y CREDITO MALCHINGUI LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO CHOLA CUENCANA LTDA.</option>
                                        <option>COOP. AHORRO Y CREDITO TENA LTDA.</option>
                                        <option>COOP. AHORRO Y CREDITO DE LA PEQUENA EMPRESA GUALA</option>
                                        <option>COOP. AHORRO Y CREDITO ALIANZA MINAS LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO PEDRO MONCAYO LTDA.</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO PROVIDA</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO SAN JOSE S.J.</option>
                                        <option>COOP. AHORRO Y CREDITO SENOR DE GIRON</option>
                                        <option>COOP. DE AHORRO Y CREDITO EDUC.DEL TUNGURAHUA LTDA</option>
                                        <option>COOPERATIVA 15 DE AGOSTO PILACOTO</option>
                                        <option>COOP. DE AHORRO Y CREDITO CRISTO REY</option>
                                        <option>COOP. DE AHORRO Y CREDITO EDUCADORES DE CHIMBORAZO</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO MINGA LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO 4 DE OCTUBRE LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO CREDI FACIL LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO ALFONSO JARAMILLO C.C.C.</option>
                                        <option>COOP. DE A. Y C. INDIGENA SAC PELILEO</option>
                                        <option>COOP. DE A. Y C. INTERCULTURAL TAWANTINSUYU LTDA.</option>
                                        <option>COOP. DE A. Y C. OCIPSA</option>
                                        <option>COOP. DE A. Y C. 21 DE NOVIEMBRE LTDA.</option>
                                        <option>COOP. DE A. Y C. LA FLORESTA LTDA.</option>
                                        <option>COOP. DE A. Y C. CORP. ORG. CAMPESINAS DE QUISAPIN</option>
                                        <option>COOP. DE A. Y C. MULTICULTURAL BANCO INDIGENA LTDA</option>
                                        <option>COOP DE A. Y C. CRECER WINARI LTDA.</option>
                                        <option>COOP. DE A. Y C. BANOS DE AGUA SANTA LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO 1 DE JULIO</option>
                                        <option>COOP. DE A. Y C. SUMAK NAN LTDA.</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO CANAR LTDA.</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO SAN ANTONIO LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO FUNDAR</option>
                                        <option>COOP. AHORRO Y CREDITO METROPOLIS LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO EL CAFETAL</option>
                                        <option>COOP.DE AHORRO Y CREDITO MICROEMPRESARIAL SUCRE</option>
                                        <option>COOP. DE A. Y C. AFROECUATORIANA DE LA PEQ. EMP. L</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO JOYOCOTO LTDA.</option>
                                        <option>COOP. AHORRO Y CREDITO SAN ANTONIO LTDA.</option>
                                        <option>COOP. DE A. Y C. UNIOTAVALO LTDA.</option>
                                        <option>COOP. DE A. Y C. UNION EL EJIDO</option>
                                        <option>COOP. DE A. Y C. GENESIS LTDA.</option>
                                        <option>COOP. DE A Y C. MARIA AUXILIADORA DE QUIROGA LTDA</option>
                                        <option>COOP. DE A. Y C. FORTALEZA</option>
                                        <option>BANCO PARA LA ASISTENCIA COMUNITARIA FINCA S.A.</option>
                                        <option>COOP. CALCETA LTDA</option>
                                        <option>COOP. AHORRO Y CREDITO 9 DE OCTUBRE LTDA</option>
                                        <option>COOP. AHORRO Y CREDITO D LA PEQ EMPR CACPE BIBLIAN</option>
                                        <option>COOP. AHORRO Y CREDITO SAN GABRIEL LTDA.</option>
                                        <option>COOP. AHORRO Y CREDITO SAN JOSE LTDA</option>
                                        <option>COOP. AHORRO Y CREDITO SAN MIGUEL DE LOS BANCOS</option>
                                        <option>COOP. AHORRO Y CREDITO SEMILLA DEL PROGRESO LTDA</option>
                                        <option>COOP. AHORRO. Y CREDI. MUJERES UNIDAS TANTANAKUSHK</option>
                                        <option>COOP. DE AHORRO Y CRED. SANTA ROSA LTDA</option>
                                        <option>COOP. DE AHORRO Y CREDITO ONCE DE JUNIO</option>
                                        <option>COOP. DE A. Y C. PUJILI LTDA</option>
                                        <option>COOP. DE A. Y C. CREDIL LTDA.</option>
                                        <option>COOP. DE A. Y C. MUSHUK PAKARI LTDA.</option>
                                        <option>COOP. DE A. Y C. UNIBLOCK Y SERVICIOS LTDA.</option>
                                        <option>COOP. DE A. Y C. SAN FERNANDO LIMITADA</option>
                                        <option>COOP. DE A. Y C. FUTURO LAMANENSE</option>
                                        <option>COOP. DE A. Y C. SAQUISILI LTDA.</option>
                                        <option>COOP. DE A. Y C. INNOVACION ANDINA LTDA.</option>
                                        <option>COOP.DE A.Y C. EL COMERCIANTE LTDA (MIES)</option>
                                        <option>COOP. DE A. Y C. MUSHUK WASI LTDA ( MIES )</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO SOLIDARIA LTDA</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO LLANGANATES</option>
                                        <option>INTERDIN S.A.</option>
                                        <option>COOP.AHO Y CREDITO DE LA PEQ. EMP. DE LOJA CACPE</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO ECONOMIA DEL SUR C</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO MIGRANTES Y EMPREN</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO SAN SEBASTIAN</option>
                                        <option>COOP. DE A. Y C. DEL SINDICATO DE CHOFERES PROFESI</option>
                                        <option>COOP.DE AHORRO Y CREDITO 29 DE ENERO</option>
                                        <option>COOP. AHORRO Y CREDITO AGRARIA MUSHUK KAWSAY LTDA.</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO RUNA SHUNGO LTDA.</option>
                                        <option>COOP. DE A. Y C. SAN MARCOS</option>
                                        <option>COOP. DE A. Y C. ANTORCHA LTDA.</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO SOCIO AMIGO</option>
                                        <option>COOP. DE A. Y C. INDIGENAS GALAPAGOS LTDA.</option>
                                        <option>COOP. AHORRO Y CREDITO CAMARA DE COMERCIO DEL CANT</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO LA BENEFICA LTDA.</option>
                                        <option>COOP.DE AHORRO Y CREDITO ABDON CALDERON LTDA.</option>
                                        <option>COOP. A Y C CAMARA DE COMERCIO CANTON -EL CARMEN L</option>
                                        <option>COOP.DE AHORRO Y CREDITO AGROPRODUCTIVA MANABI LTD</option>
                                        <option>COOP. DE AHORRO Y CRED. LA INMACULADA DE SAN PLACI</option>
                                        <option>COOP. AHORRO Y CREDITO CACPE MANABI</option>
                                        <option>COOP.AHORRO Y CREDITO MAGISTERIO MANABITA LIMITADA</option>
                                        <option>COAC TIENDA DE DINERO LTDA.</option>
                                        <option>COOP.A.Y C. SANTA MARIA DE LA MANGA DEL CURA LTDA.</option>
                                        <option>COOP. AHORRO Y CREDITO CAMARA DE COMERCIO INDIGENA</option>
                                        <option>COOP. DE A. Y C. GUAMOTE LTDA.</option>
                                        <option>COOP. DE A.Y C. PRODUC. AHORRO INVERS. SERVICIO P.</option>
                                        <option>COOP. DE A. Y C. FRANDESC LTDA.</option>
                                        <option>COOP. DE A. Y C. NUKA LLAKTA LTDA.</option>
                                        <option>COOP. DE A Y C. CAMARA DE COMERCIO RIOBAMBA</option>
                                        <option>COOP. DE A. Y C. BASHALAN LTDA.</option>
                                        <option>COOP. DE A. Y C. CAMARA DE COMERCIO SANTO DOMINGO</option>
                                        <option>COOP. DE A. Y C. EDUCADORES TULCAN LTDA.</option>
                                        <option>COOP. WARMIKUNAPAK RIKCHARI</option>
                                        <option>COOP AHORRO Y CREDITO MI TIERRA</option>
                                        <option>COOP AHORRO Y CREDITO DE LA PEQ EMP CACPE YANZATZA</option>
                                        <option>COOP AHORRO Y CREDITO FUNDESARROLLO</option>
                                        <option>CAJA ECUAESPANA</option>
                                        <option>COOP DE AHORRO Y CREDITO NUEVA HUANCAVILCA</option>
                                        <option>COOP DE AHORRO Y CREDITO ERCO LTDA</option>
                                        <option>COOP  AHORRO Y CREDITO CAMARA COMERCIO DE AMBATO</option>
                                        <option>COOP AHORRO Y CREDITO MUSHUC RUNA LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO AMBATO LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO DORADO LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO NUESTROS ABUELOS LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO ARTESANOS  LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO SANTA ANITA LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO HUAYCO PUNGO LTDA</option>
                                        <option>COOP MANUEL ESTEBAN GODOY ORTEGA LTDA COOPMEGO</option>
                                        <option>COOP AHORRO Y CREDITO PADRE JULIAN LORENTE LTDA</option>
                                        <option>COOP AHORRO Y CREDITO CARIAMANGA LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO MARCABELI LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO AGRICOLA JUNIN LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO PUERTO LOPEZ LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO NUEVA ESPERANZA</option>
                                        <option>COOP DE AHORRO Y CREDITO SAN JORGE LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO FERNANDO DAQUILEMA</option>
                                        <option>COOP DE A Y C EDUCADORES DE PASTAZA LTDA</option>
                                        <option>COOP. A. Y C. DE LA PEQ. EMP. CACPE ZAMORA LTDA</option>
                                        <option>COOP. DE A. Y C. DESARROLLO INTEGRAL LTDA</option>
                                        <option>COOP. DE AHORRO Y CREDITO EL CALVARIO LTDA</option>
                                        <option>COOP. DE A. Y C. JUAN PIO DE MORA LTDA</option>
                                        <option>COOP. DE AHORRO Y CREDITO PILAHUIN</option>
                                        <option>COOP. DE AHORRO Y CREDITO PUCARA LTDA</option>
                                        <option>COOP. A. Y C. CAMARA DE COMERCIO DE PINDAL CADECOP</option>
                                        <option>BANCO DEL INSTITU ECUATORIANO DE SEGURIDAD SOCIAL</option>
                                        <option>COOP DE A Y C DE SERV PUBL DEL MIN EDUCACION Y CUL</option>
                                        <option>COOP DE A Y C 23 DE MAYO LTDA</option>
                                        <option>COOP DE A Y C COCA LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO PILAHUIN TIO LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO HUAICANA LTDA</option>
                                        <option>COOP DE A Y C CREDISUR LTDA</option>
                                        <option>FONDO DE CESANTIA DEL MAGISTERIO ECUAT FCME-FCPC</option>
                                        <option>COOP DE AHORRO Y CREDITO HUAQUILLAS LTDA</option>
                                        <option>COOP DE A Y C BANOS LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO CAC-CICA MIES</option>
                                        <option>COOP DE A Y C VENCEDORES DE TUNGURAHUA</option>
                                        <option>COOP A Y C ECUAFUTURO LTDA</option>
                                        <option>COOP DE A Y C MAQUITA CUSHUN LTDA</option>
                                        <option>COOP DE A Y C VALLES DEL LIRIO</option>
                                        <option>COOP ESFUERZO UNIDO PARA EL DESARR DEL CHILCO</option>
                                        <option>COOP A Y C CARROCEROS DE TUNGURAHUA</option>
                                        <option>COOP DE AHORRO Y CREDITO SIMIATUG LTDA</option>
                                        <option>COOP DE A Y C SINCHI RUNA LTDA</option>
                                        <option>COOP DE A Y C SANTA ROSA DE PAUTAN LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO SAN MIGUEL DE SIGCHOS</option>
                                        <option>COOP DE A Y C SIERRA CENTRO LTDA</option>
                                        <option>COOP DE A Y C GONZANAMA MIES</option>
                                        <option>COOP DE AHORRO Y CREDITO QUILANGA LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO 27 DE ABRIL LOJA</option>
                                        <option>COOP DE A Y C CREDIAMIGO LTDA LOJA MIES</option>
                                        <option>COOP DE AHORRO Y CREDITO FORTUNA MIES</option>
                                        <option>COOP A Y C PROFESIONALES DEL VOLANTE UNION LTDA</option>
                                        <option>COOP DE AHORRO Y CREDITO CACPE CELICA</option>
                                        <option>COOP DE A Y C FUTURO Y PROGRESO DE GALAPAGOS LTDA</option>
                                        <option>COOP DE A Y C SUMAC LLACTA LTDA</option>
                                        <option>COOP DE A Y C LUCHA CAMPESINA LTDA</option>
                                        <option>COOP DE A Y C MAQUITA CUSHUNCHIC LTDA</option>
                                        <option>COOP A Y C FOCLA</option>
                                        <option>COOP DE A Y C CASAG LTDA</option>
                                        <option>BANCO D MIRO SA</option>
                                        <option>COOP DE A Y C GENERAL RUMINAHUI</option>
                                        <option>COOP DE A Y C FINANCIERA INDIGENA LTDA</option>
                                        <option>COOP A Y C 20 FEBRERO LTDA</option>
                                        <option>COOP DE A Y C  DEL COL. FISC. VICENTE ROCAFUERTE</option>
                                        <option>COOP DE A Y C JADAN LTDA (MIES)</option>
                                        <option>COOP DE A Y C INKA KIPU LTDA</option>
                                        <option>COOP DE A Y C ACCION TUNGURAHUA LTDA</option>
                                        <option>COOP DE A Y C PIJAL</option>
                                        <option>COOP DE A Y C ESCENCIA INDIGENA LTDA</option>
                                        <option>COOP DE A Y C UNION MERCEDARIA LTDA</option>
                                        <option>COOP DE A Y C CATAMAYO LTDA</option>
                                        <option>COOP DE A Y C DE LA PEQ EMPRESA CACPE MACARA</option>
                                        <option>COOP A Y C NUEVOS HORIZONTES EL ORO LTDA</option>
                                        <option>BANCO COOPNACIONAL SA</option>
                                        <option>COOP DE A Y C 16 DE JUNIO</option>
                                        <option>COOP A Y C ESC SUP POLITEC AGROP DE MANABI MANUEL</option>
                                        <option>COOP DE AHORRO Y CREDITO FASAYNAN LTDA</option>
                                        <option>COOP CACIQUE GURITAVE</option>
                                        <option>COOP SOLIDARIDAD Y PROGRESO ORIENTAL</option>
                                        <option>COOP. DE AHO Y CRED LOS ANDES LATINOS LTDA.</option>
                                        <option>C. DE A. Y C COOPAC AUSTRO LTDA (MIESS)</option>
                                        <option>COOP. DE A. Y C. SALASACA</option>
                                        <option>COOP. DE A. Y C. SUMAK SAMY LTDA.</option>
                                        <option>C.  A. Y C. INTERCULT. TARPUK RUNA LTDA.</option>
                                        <option>COOP. DE A. Y C. VIRGEN DEL CISNE</option>
                                        <option>C. DE A Y C EDUCAD. DE ZAMORA CHINCHIPE</option>
                                        <option>C. DE AH. Y CREDITO LAS LAGUNAS (MIESS)</option>
                                        <option>C. DE A Y C. EDUCADORES DE EL ORO LTD</option>
                                        <option>C  DE A Y C EMPLEAD BANCAR DEL ORO LTDA</option>
                                        <option>COOPERATIVA DE AH. Y CREDITO RIOCHICO</option>
                                        <option>C. DE A. Y C. SAN MARTIN DE TISALEO LTDA.</option>
                                        <option>COOP. DE A. Y C. ALLI TARPUC LTDA.</option>
                                        <option>C. DE A Y C. SAN MIGUEL DE PALLATANGA</option>
                                        <option>COOP DE A Y C FENIX</option>
                                        <option>COOP.DE AHORRO Y CREDITO CAMARA DE COMERCIO DE LOJ</option>
                                        <option>COOP.DE A. Y C. DE CRECIMIENTO ECONOMICO RENTABLE</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO SANTIAGO LTDA</option>
                                        <option>COOP.DE A. Y C. POPULAR Y SOLIDARIA</option>
                                        <option>COOP.DE AHORRO Y CREDITO SAN PLACIDO LTDA.</option>
                                        <option>COOP.DE AHORRO Y CREDITO CIUDAD DE ZAMORA</option>
                                        <option>COOP. DE A Y C DE LA PEQUENA EMPRESA DE PALORA</option>
                                        <option>COOP. DE A. Y C. INDIGENA ALFA Y OMEGA LTDA</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO CREA LTDA ( MIES)</option>
                                        <option>COOP. DE A. Y C. CHIBULEO LTDA.</option>
                                        <option>COOP. DE A. Y C. EL TESORO PILLARENO</option>
                                        <option>COOP. DE A. Y C. KISAPINCHA LTDA.</option>
                                        <option>COOP. DE A. Y C. JUVENTUD UNIDA LTDA.</option>
                                        <option>COOP. DE A. Y C. UNION QUISAPINCHA LTDA.</option>
                                        <option>COOP. DE A. Y C. 13 DE ABRIL LTDA</option>
                                        <option>COOP. DE A. Y C. SALINAS LTDA.</option>
                                        <option>COOP. DE A. Y C. SAN PEDRO LTDA.</option>
                                        <option>COOP. DE A. Y C. LOS CHASQUIS PASTOCALLE LTDA.</option>
                                        <option>COOP. DE A. Y C. COOPINDIGENA LTDA.</option>
                                        <option>COOP. DE A. Y C. LA UNION LTDA.</option>
                                        <option>COOP. DE A. Y C. PADRE VICENTE PONCE RUBIO</option>
                                        <option>COOP. DE A. Y C. MUSHUG CAUSAY LTDA.</option>
                                        <option>COOP. DE A. Y C. 29 DE AGOSTO</option>
                                        <option>COOP. DE A. Y C. CREDISOCIO</option>
                                        <option>COOP. DE A. Y C. FONDO PARA EL DESARROLLO Y LA VID</option>
                                        <option>COOPERATIVA DE A Y C NUEVA VISION</option>
                                        <option>COOP. DE AHORRO Y CREDITO FOCASH LTDA.</option>
                                        <option>COOP. DE A. Y C. SAN VICENTE DEL SUR LTDA.</option>
                                        <option>COOP. DE A. Y C. PARA LA VIVIENDA ORDEN Y SEGURIDA</option>
                                        <option>COOP DE A. Y C. CAMARA DE COMERCIO JOYA DE LOS SAC</option>
                                        <option>COOP. DE A. Y C. FOCAP</option>
                                        <option>COOP. DE A. Y C. 18 DE NOVIEMBRE</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO DR. CORNELIO SAENZ</option>
                                        <option>COOP DE A. Y C. EDUCADORES DEL AZUAY</option>
                                        <option>COOP. DE A. Y C. INDIGENA SAC LTDA</option>
                                        <option>COOP. DE A. Y C. CREDI YA LTDA</option>
                                        <option>COOP. DE A. Y C. SAN BARTOLOME LTDA</option>
                                        <option>COOP. DE AHORRO Y CREDITO MUSHUK YUYAY</option>
                                        <option>COOP DE A. Y C. SISAY KANARI</option>
                                        <option>COOPERATIVA DE A Y C ACCION IMBABURAPAK LTDA.</option>
                                        <option>COOP DE A. Y C. HERMES GAIBOR VERDESOTO</option>
                                        <option>COOP. DE A. Y C. SEMILLAS DE PANGUA</option>
                                        <option>COOPERATIVA DE A Y C MUSHUK SOLIDARIA</option>
                                        <option>COOP DE A. Y C. PANAMERICANA LTDA</option>
                                        <option>COOP. DE A. Y C. VILCABAMBA CACVIL</option>
                                        <option>COOP. DE A. Y C. FAMILIA SOLIDARIA</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO EL PARAISO MANGA D</option>
                                        <option>COAC DE LOS PROFESORES EMPLEADOS Y TRABAJADORES DE</option>
                                        <option>COAC. SANTA ROSA DE SAN CARLOS LTDA.</option>
                                        <option>COOP. DE A. Y C. CONSTRUCTOR DEL DESARROLLO SOLIDA</option>
                                        <option>COOP DE A. Y C. MUSHUK YUYAY LTDA</option>
                                        <option>CORPORACION FINANCIERA</option>
                                        <option>COOP. DE A. Y C. ALIANZA SOCIAL ECU. ALSEC</option>
                                        <option>COOP. DE A. Y C. RENOVADORA ECU</option>
                                        <option>COOP. DE A. Y C. MUSHUK YUYAY - NAPO</option>
                                        <option>COOP. DE A. Y C. SANTA ANA DE NAYON</option>
                                        <option>COOP. DE A. Y C. EDUCADORES DEL NAPO</option>
                                        <option>COOPERATIVA DE A. Y C. TEXTIL 14 DE MARZO</option>
                                        <option>COOP. DE A Y C SAN CARLOS LTDA.</option>
                                        <option>COAC A Y C ESPERANZA DE VALLE DE LA VIRGEN LTDA.</option>
                                        <option>COAC A Y C ZONA DE CAPITAL CORCIMOL</option>
                                        <option>COOP.DE A. Y C. ARTESANAL DEL AZUAY</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO SUMAK SISA</option>
                                        <option>COOP. DE A. Y C. REY DAVID LTDA</option>
                                        <option>COOP. DE A. Y C. KULLKI WASI LTDA.</option>
                                        <option>COOP DE A. Y C. SINCHI CODEFIS</option>
                                        <option>COOP. DE A. Y C. FUERZA DE LOS ANDES</option>
                                        <option>COOP DE A. Y C. CAMINO DE LUZ LTDA.</option>
                                        <option>COAC A Y C EDUCADORES DE BOLIVAR</option>
                                        <option>COAC SAN MIGUEL LTDA.</option>
                                        <option>COOP. DE A. Y C. SALINERITA</option>
                                        <option>COOP. DE A. Y C. BOLA AMARILLA</option>
                                        <option>COOP A Y C VISION DE LOS ANDES VISANDES</option>
                                        <option>COOP. DE A. Y C. SENOR DEL ARBOL</option>
                                        <option>COOP. DE A. Y C. CAMARA DE COMERCIO DE LA MANA</option>
                                        <option>COOP DE A. Y C. EDUCADORES DE LOJA</option>
                                        <option>COOP DE A. Y C. INDIGENA SAC LATACUNGA LTDA</option>
                                        <option>COOP DE A.Y C. CADECOG GONZANAMA</option>
                                        <option>COAC COOPYMEC MACARA</option>
                                        <option>COAC CADECOM  MACARA</option>
                                        <option>COOP DE A. Y C. 22 DE JUNIO-ORIANGA</option>
                                        <option>COOP. A.YC.SAGRADA FAMILIA SOLIDARIDAD</option>
                                        <option>COOP. DE A. Y C. NAUPA KAUSAY</option>
                                        <option>CCOP A Y C DE APECAP CAC APECAP</option>
                                        <option>COOP DE A. Y C. SAN JUAN DE COTOGCHOA</option>
                                        <option>COOP DE AHORRO Y CREDITO LA MERCED</option>
                                        <option>COOP. DE A. Y C. COOPTOPAXI LTDA.</option>
                                        <option>COOP. DE A. Y C. GRAMEEN AMAZONAS</option>
                                        <option>COOP. DE A. Y C. EL TRANSPORTISTA CACET</option>
                                        <option>COOP. DE A Y C. SERVIDORES MUNICIPALES DE CUENCA</option>
                                        <option>COOP. DE AHORRO Y CREDITO PROFUTURO LTDA.</option>
                                        <option>COOP. DE A. Y C. ILINIZA LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO SARAGUROS</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO INTI WASI LTDA.</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO SAN ISIDRO LTDA.</option>
                                        <option>COOP. DE A. Y C. EMPRESAS COMUNITARIAS COOCREDITO</option>
                                        <option>SILVERCROSS S.A CASA DE VALORES SCCV</option>
                                        <option>REAL CASA DE VALORES DE GUAYAQUIL S.A.</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO ETAPA</option>
                                        <option>COOP. AHORRO Y CREDITO MASCOOP</option>
                                        <option>COOP. DE A. Y C. SAINT MICHEL LTDA.</option>
                                        <option>COOP. AHORRO Y CREDITO MANANTIAL DE ORO LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO ANDINA LTDA.</option>
                                        <option>COOP. DE AHORRO Y CREDITO ACCION Y DESARROLLO LTDA</option>
                                        <option>COOP. DE A. Y C. UNION Y DESARROLLO</option>
                                        <option>COOP. DE A. Y C. ESPERANZA DEL FUTURO LTDA.</option>
                                        <option>COOP. DE A. Y C. 17 DE MARZO LTDA</option>
                                        <option>COOP. DE A. Y C. CATAR LTDA</option>
                                        <option>COOP. DE A. Y C. DE ACCION POPULAR</option>
                                        <option>COOP. DE A. Y C. ALLI TARPUK LTDA</option>
                                        <option>COOP. DE A. Y C. 16 DE JULIO LTDA</option>
                                        <option>COOP. DE A. Y C. SUBOFICIALES DE LA POLICIA NACION</option>
                                        <option>COOP. DE A. Y C. POLITECNICA LTDA.</option>
                                        <option>COOP. DE A. Y C. NACIONAL LLANO GRANDE LTDA.</option>
                                        <option>COOP. DE A. Y C. SAN VALENTIN</option>
                                        <option>COOP. DE A. Y C. TOTALIFE LTDA</option>
                                        <option>ACCIONES VALORES CASA DE VALORES S.A. ACCIVAL</option>
                                        <option>SANTA FE CASA DE VALORES S.A. SANTAFEVALORES</option>
                                        <option>PICAVAL CASA DE VALORES S.A</option>
                                        <option>ANALYTICA SECURTIES C.A. CASA DE VALORES</option>
                                        <option>ORION CASA DE VALORES S.A</option>
                                        <option>STRATEGA CASA DE VALORES S.A.</option>
                                        <option>ECOFSA CASA DE VALORES S.A.</option>
                                        <option>MERCHANTVALORES CASA DE VALORES S.A.</option>
                                        <option>CASA DE VALORES VALUE S.A.</option>
                                        <option>INMOVALOR CASA DE VALORES S.A.</option>
                                        <option>ECUABURSATIL CASA DE VALORES S.A.</option>
                                        <option>PLUS VALORES CASA DE VALORES S.A.</option>
                                        <option>MERCAPITAL CASA DE VALORES S.A.</option>
                                        <option>PORTAFOLIO CASA DE VALORES S.A. PORTAVALOR</option>
                                        <option>METROVALORES CASA DE VALORES S.A.</option>
                                        <option>VECTORGLOBAL WMG CASA DE VALORES S.A.</option>
                                        <option>HOLDUNPARTNERS CASA DE VALORES S.A.</option>
                                        <option>COOP. DE AHORRO Y CREDITO BASE DE TAURA</option>
                                        <option>CASA DE VALORES BANRIO S.A.</option>
                                        <option>ALBION CASA DE VALORES S.A.</option>
                                        <option>MASVALORES CASA DE VALORES S.A CAVAMASA</option>
                                        <option>CASA DE VALORES DEL PACIFICO (VALPACIFICO) S.A.</option>
                                        <option>CASA DE VALORES ADVFIN S.A.</option>
                                        <option>KAPITAL ONE CASA DE VALORES S.A. KAOVALSA</option>
                                        <option>PLUSBURSATIL CASA DE VALORES S.A</option>
                                        <option>ACTIVA ASES.E INTERMED.VALORES ACTIVALORES CASA DE</option>
                                        <option>CITADEL CASA DE VALORES S.A.</option>
                                        <option>DECEVALE S.A.</option>
                                        <option>COOP. DE A. Y C. SANTA LUCIA LTDA</option>
                                        <option>COOP. DE A. Y C. PRODUACTIVA LTDA</option>
                                        <option>COOP. DE A. Y C. TAMBOLOMA LTDA.</option>
                                        <option>COOP DE A. Y C. PUSHAK RUNA HOMBRE LIDER</option>
                                        <option>COOP. DE A. Y C. 15 DE AGOSTO LTDA.</option>
                                        <option>COOP. DE A. Y C. MIGRANTES DEL ECUADOR LTDA</option>
                                        <option>COOPERATIVA DE AHORRO Y CREDITO WUAMANLOMA LTDA.</option>
                                        <option>COOP. DE A. Y C. SALATE LTDA.</option>
                                        <option>COOP. DE A. Y C. UNION POPULAR LTDA.</option>
                                        <option>COAC ACHIK INTI LTDA</option>
                                        <option>COAC EL MIGRANTE SOLIDARIO</option>
                                        <option>COOP AC LAS NAVES</option>
                                        <option>COOP. DE A. Y C. DE IMBABURA AMAZONAS</option>
                                        <option>COOP. A. Y C. DE INDIGENAS CHUCHUQUI LTDA</option>
                                        <option>COOP. AHORRO Y CREDITO FOCAZSUM LTDA.</option>
                                        <option>COOP. DE A. Y C. SOLIDARIA LTDA.- COTOPAXI</option>
                                        <option>COOP. DE A. Y C. UNIDAD Y PROGRESO</option>
                                        <option>COAC LOJA INTERNACIONAL LTDA.</option>
                                        <option>COAC 23 DE ENERO</option>
                                        <option>COAC OBRAS PUBLICAS FISCALES DE LOJA Y ZAMORA</option>
                                        <option>COAC DEL SIND CHOF PROF VIRGEN DEL CISNE</option>
                                        <option>COAC SAN MIGUEL DE CHIRIJOS LTDA</option>
                                        <option>COOP. AHORRO Y CREDITO QUEVEDO LTDA.</option>
                                        <option>COOP. DE A. Y C. EL ALTAR LTDA.</option>
                                        <option>COOP. DE A. Y C. NUEVA ALIANZA DE CHIMBORAZO LTDA</option>
                                        <option>COOP. DE A. Y C. LUIS FELIPE DUCHICELA XXVII</option>
                                        <option>COOP. DE A. Y C. NIZAG LTDA.</option>
                                        <option>COOP. DE A. Y C. MAKITA KUNCHIK</option>
                                        <option>COOP. DE A. Y C. CERRADA MANUELA LEON</option>
                                        <option>COOP. DE A. Y C. EL BUEN SEMBRADOR LTDA.</option>
                                        <option>COAC SINDICATO DE CHOFERES PROFESIONALES DE YANTZA</option>
                                        <option>COOP. DE A. Y C. 5 DE MAYO DE SANTA MARTHA DE CUBA</option>
                                    </select>
                            </form>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Número de Cuenta</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" value="" placeholder="Ejemplo: 220000000000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Suba su documento de Identidad</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Suba su hoja de vida</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Suba la planilla de servicios básicos</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Borrar">
                                <input type="button" class="btn btn-primary" value="Guardar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>

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