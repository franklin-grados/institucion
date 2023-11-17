<?php

class LoginValidation{
    public function __construct() {

    }

    public function validarDatos($user_login, $user_password) {
        $this->validarEmail($user_login);
        $this->validarPassword($user_password);
    }

    function validarEmail($email) {
        // Patrón de expresión regular para validar una dirección de correo electrónico
        $patron = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        // Usar la función preg_match para realizar la validación
        if (preg_match($patron, $email)) {
            return true; // La dirección de correo electrónico es válida
        } else {
            throw new Exception("La dirección de correo electrónico no es válida"); // La dirección de correo electrónico no es válida
        }
    }

    function validarPassword($password) {

        if (strlen($password) < 8) {
            throw new Exception("La contraseña debe tener al menos 8 caracteres.");
        }
        // La contraseña cumple con los requisitos
        return true;
    }
    
    
}









?>