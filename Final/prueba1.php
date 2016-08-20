<?php 
if($_POST[edad] > 17){ 
	
header('location:productos.php');
  
}else{ 
	
echo"<script type=\"text/javascript\">alert('Lo siento eres menor de edad'); window.location='index.html';</script>"; 
}  
?> 