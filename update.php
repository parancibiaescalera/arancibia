<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
    $nombre = $_POST['nombre']; 
    $apellido = $_POST['apellido'];
    $email = $_POST['email']; 
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];   

    $sql="UPDATE empleados SET nombre='$nombre', apellido='$apellido',email='$email' , direccion='$direccion', telefono='$telefono' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit(); 
    } else {
        echo "Error updating record: " . $conn->error; 
    }
    
}
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT id,nombre,apellido,email,direccion,telefono FROM empleados WHERE id=$id";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
    }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
    
</head>
<body>
    <div class="container">
        <h1>Actualizar Datos</h1>
        <form method="post" action="">
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre </label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?php echo $row['apellido']; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion" value="<?php echo $row['direccion']; ?>">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="number" class="form-control" name="telefono" value="<?php echo $row['telefono']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a> 
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</body>
</html>