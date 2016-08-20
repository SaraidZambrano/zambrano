<!DOCTYPE html>
<html>
<head>
  <title>Registrate</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="header.js" ></script>
  <script src="csscarru.js" ></script>
</head>
<body> 


<header>
    <div class="wrapper">
  <div class="logo"> 
  <a href="index.html"><img src="logo.png">
    <nav>
    <a href="index.html">Inicio</a>
    <a href="productos.php">Productos</a>
    <a href="Conocenos.html">Conocenos</a>
    <a href="registro.php">Registro</a>
    </nav>
    </div>
    </div>
</header>


<?php
if (!isset($_POST['email'])) {
?>
 <div class="Formulario">
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label>
      Nombre:
      <input name="nombre" type="text" /><br><br>
    </label>
    <label>
      Teléfono:
      <input name="telefono" type="text" /><br><br>
    </label>
    <label>
      Email:
      <input name="email" type="text" /><br><br>
    </label>
    <label>
      Mensaje:
      <textarea name="mensaje" rows="6" cols="50"></textarea><br><br>
    </label>    
    

    <input style="color: black; background-color: #019101"  type="submit" value="Enviar" /><br><br>
  </form>
  </div>
 
<?php
}else{
   $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "chinitaloqita@hotmail.com";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <p><strong>Mensaje enviado.</strong></p>
<?php
}
?>
<footer>
<a href="index.html"><img src="icono.png">
PRODUCTO PARA MAYORES DE 21 AÑOS. POR FAVOR BEBE RESPONSABLEMENTE. CUANDO TOMES, NO MANEJES</footer>
</body>
</html>