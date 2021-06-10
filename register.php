<?php
include ('db.php');
//$usuario=$_POST["usuario"];
$usuario=$_POST["usuario"];
$correo=$_POST["correo"];
$contraseña=$_POST["contraseña"];


$insertar="INSERT INTO usuarios(usuario,correo,contraseña)VALUES('$usuario','$correo','$contraseña')";

$resultado=mysqli_query($connexion,$insertar);
if(!$resultado){
    echo'error al registrarse';

}else{
    echo'Usuario correctamente registrado';
}

mysqli_close($connexion);