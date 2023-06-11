<?php

include_once 'header.php';
session_start( );
?>

<style>
form{ float: left; width: 45%;}
</style>


<?php
if( isset($_GET['alta'])){
	echo 'ya podes iniciar sesion';
}
if (isset($_GET['login'])) {
	?>
	<div>
		<p class="mal ingresado los datos">Mal tu usuario o tu clave</p>
	</div>
	<?php  
}
  
//var_dump($_SESSION);
?>
<div id="bajarFormulario">
  <div class="form-container">
    <div class="login">
      <div class="form">
        <h2>Iniciar sesión</h2>
        <form action="login.php" method="post" class="form">
          <input type="email" placeholder="Ingresa tu email" name="email" required="" />
          <input type="password" placeholder="Ingresa tu clave" name="clave" required="" />
          <input class="submit" type="submit" value="INGRESAR" />
        </form>
      </div>
    </div>
  </div>

  <div class="form-container">
    <div class="login2">
      <div class="form">
        <h2>Registrarse</h2>
        <form action="alta.php" method="post" class="form">
          <div><input type="nombre" placeholder="Ingresa tu nombre" name="nombre" required="" /></div>
          <div><input type="apellido" placeholder="Ingresa tu apellido" name="apellido" required="" /></div>
          <div><input type="email" placeholder="Ingresa tu email" name="email" required="" /></div>
          <div><input type="password" placeholder="Ingresa tu clave" name="clave" required="" /></div>
          <input type="submit" class="submit" value="Registrar" />
        </form>
      </div>
    </div>
  </div>
</div>










<div class="feet">
    <div class="col-7">
      <?php
      include_once 'footer.php'
      ?>
    </div>
</div>
