<?php   
    $servername = "localhost";
    $username = "bauldeco_saraidz";
    $password = "y)U&!@XvN,NR"; 
    $dbname = "bauldeco_saraidzambrano";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
 
    $sql = "SELECT * FROM botellas";
    $result = $conn->query($sql);
 
    $conn->close();      
?>

<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="header.js" ></script>
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

<h1>Nuestros Productos (haz clic en el que desees para obtener mayor informaciòn):</h1>

<style type="text/css">
        
        table{ border-collapse: collapse; aling:center; font-size:20px;}
        table td{ padding: 10px; border-collapse: collapse; font-size:20px;  font-family: Arial, "MS Trebuchet", sans-serif;}
        img{ width: 100px; }

    </style>
    <div class="tabla">

<table border="0">
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
           
            <td><?php echo utf8_encode($row['nombre_producto']); ?></td>
            <td><a href="verde.html"><img src="productos/<?php echo $row['imagen']; ?>"/></td>   
            <td>$<?php echo $row['precio']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    </div>

<footer>
<a href="index.html"><img src="icono.png">
PRODUCTO PARA MAYORES DE 21 AÑOS. POR FAVOR BEBE RESPONSABLEMENTE. CUANDO TOMES, NO MANEJES</footer>
</body>
</html>