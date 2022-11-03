<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php
        include("menu.php"); 
        echo "<h2>Registro de Usuarios</h2>";
        $nombreUsuarioSolicitado = $_POST['nombreUsuarioSolicitado'];
        $mailUsuarioSolicitado= $_POST['mailUsuarioSolicitado'];
        $documentoUsuarioSolicitado=  $_POST['documentoUsuarioSolicitado'];
        $passwordUsuarioSolicitado= $_POST['passwordUsuarioSolicitado'];

        if(!$nombreUsuarioSolicitado || !$mailUsuarioSolicitado
        || !$documentoUsuarioSolicitado || !$passwordUsuarioSolicitado){
            echo "Ha faltado algun campo";
        };

        $con = mysqli_connect('localhost','root','','ecosoft');
        $sql = "INSERT INTO `registrousuarios` VALUES ('$nombreUsuarioSolicitado', '$mailUsuarioSolicitado', ' $documentoUsuarioSolicitado', '$passwordUsuarioSolicitado')";
        $resultado = mysqli_query($con,$sql);
        mysqli_close($con);
        echo"El nombre del usuario es: ".$nombreUsuarioSolicitado;
        echo"El mail del usuairo es:".$mailUsuarioSolicitado;
        echo"El documento del usuario es: ".$documentoUsuarioSolicitado;
        echo"La contraseña del usuario es: ".$passwordUsuarioSolicitado;
        ?>
    </div>
</body>
</html>