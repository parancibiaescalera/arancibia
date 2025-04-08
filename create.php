<?php
include 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre']; 
    $apellido = $_POST['apellido'];
    $email = $_POST['email']; 
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];   

    $sql = "INSERT INTO empleados (nombre,apellido,email,direccion,telefono) VALUES ('$nombre','$apellido','$email','$direccion','$telefono')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; 
    }
}

$conn->close();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     
</head>
<body>
    <div class="container">
    <h1>Registrar Usuario</h1>
        <form method="post" action="">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Pablo" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Arancibia" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Sacaba" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" placeholder="123123123" required>
            </div>
            <div class="mb-3">
                <input type="submit" value="Crear" class="btn btn-primary">
                <a href="index.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>