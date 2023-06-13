
<?php
    function update_picture($conexion){
        $email=$_SESSION["email"];
        $nombreArchivo = $_FILES['new_prf']['name'];
        $archivoTemp = $_FILES['new_prf']['tmp_name'];
        $rutaDestino = '/opt/lampp/htdocs/images/profile_pics/' . $nombreArchivo;
        
        if (move_uploaded_file($archivoTemp, $rutaDestino)) {
            echo "El archivo se ha subido correctamente.";
            mysqli_query($conexion,"UPDATE cliente SET foto_perfil = '$nombreArchivo' WHERE email = '$email'");
            header("Location:../pag/logged/profile.php");
        } else {
            echo "Error al subir el archivo.";
        }    
    }

?>