<?php 
  
  
$conexion = mysqli_connect('localhost' ,'id20108471_admin','%i@8781<~uYHVm<y','id20108471_usuarios' );
    
if($conexion){
    echo 'conectado con exito';
}else {
    echo 'conexión fallida';
}
?>
