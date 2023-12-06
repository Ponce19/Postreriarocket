<?php
$Nombre=$_POST['Nombre'];
$Postre=$_POST['Postre'];
$Reco=$_POST['Reco'];

$servername="localhost";
$username="root";
$password="";
$database="clientes";

$conn = mysqli_connect($servername,$username,$password,$database);
$enterdataform ="INSERT INTO informacion VALUES('$Nombre','$Postre','$Reco')";
mysqli_query($conn,$enterdataform);
mysqli_close($conn);
?>