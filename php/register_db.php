<?php
    include 'conexion_db.php';

    $nombre_usuario =  $_POST['nombre'];
    $correo = $_POST['email'];
    $contrasena = $_POST['password'];

    $query =  "INSERT INTO usuarios(nombre,email,pass) 
               VALUES('$nombre_usuario','$correo','$contrasena')";

    // Funcion para que no se repita el mismo correo en la BD
    $check_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo'"); 

    if(mysqli_num_rows($check_email) > 0){
        echo '
           <script>
              alert("Este correo ya esta en uso por favor utilice otro");
              window.location = "../index.php";          
            </script>
        ';

       exit(); 
    }

    $ejecutar = mysqli_query($conexion,$query);        
    
    //Alertas que salen despues de mandar tus datos
    if($ejecutar){
        header("location: ../index.php");
    }else {
        echo '
           <script>
               alert("Usuario No almacenado, ocurrio un error");
               window.location = "../index.php;
           <script/>
        ';   
    }

    mysqli_close($conexion);

?>