<?php
include 'db.php';

$sql ="SELECT id, nombre, apellido ,email,direccion, telefono FROM empleados";
$result = $conn->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "id: ". $row["id"]. " - Nombre: ". $row["nombre"]." - Apellido: ". $row["Apellido"]." -  Email: ". $row["email"]. " - Direccion: " . $row["direccion"]."  Telefono: ". $row["Telefono"]." <br>";
    }
 } else {
    echo "0 results";
}
$conn->close();
?>