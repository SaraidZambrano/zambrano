<?php 
if($_POST[edad] > 18){ 
	
header('location:productos.php');
  
}else{ 
echo"<script type=\"text/javascript\">alert('Lo siento eres menor de edad'); window.location='buchanas.html';</script>"; 
}  
?> 
