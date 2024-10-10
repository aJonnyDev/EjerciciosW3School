<?php
function escribirConeccion($user){
    if (file_exists('connection.xml')){
        $conexion = simplexml_load_file('connection.xml');
    }else{
        $conexion = new SimpleXMLElement('<connections><connections>');
    }
    
    $conexiones = $conexion->addChild('connection');
    $conexiones->addChild('user', $user);
    $conexiones->addChild('date',date('Y-m-d H:i:s'));

    $conexion->asXML('connection.xml');
}

function siUsuarioConectado($user,$conexion){
    foreach ($conexion->connection as $conexion){
        if ($conexion->user == $user){
            $tiempo = time();
            $tiempoconex = strtotime($conexion->date);
            $tiempoexpi = $tiempoconex + (5 * 60);

            if ($tiempo < $tiempoexpi){
                return true;
            }
        }
    }
    return false;
}

if (isset($_GET['user']) && isset($_GET['pass'])) {
    $user = $_GET['user'];
    $pass = $_GET['pass'];

    $users = simplexml_load_file('users.xml');

    foreach ($users->user as $us){
        if ($us->username == $user && $us->password == $pass) {
            $conexion = simplexml_load_file('connection.xml');
            if (!siUsuarioConectado($user, $conexion)){
                escribirConeccion($user);
                echo "El usuario $user si pudo conectarse";
            } else {
                echo "El usuario $user ya esta conectado.";
            }
            exit(); 
        }
    }
    echo 'Ingreso un usuario o una contraseña incorrecta';
}else{
    echo 'Debe poner el usuario y la contraseña en la URL';
}
?>