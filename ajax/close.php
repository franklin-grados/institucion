<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);



try {
    
session_start();

// Destruye todas las variables de sesión
$_SESSION = array();

// Si estás utilizando cookies de sesión, las destruye
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Finalmente, destruye la sesión
session_destroy();
echo json_encode("1");

} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

?>