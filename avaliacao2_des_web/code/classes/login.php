<?php
session_start();

class Login
{
    private $name = 'admin';
    private $password = 'admin';

    public function verificar_credenciais($name, $password)
    {
        if ($name == $this->name && $password === $this->password) {
            $_SESSION["logged_in"] = TRUE;
            $_SESSION["user"] = $this->name;
            return TRUE;

        }
        return FALSE;
    }

    public function verificar_logado()
    {
        if (
            isset($_SESSION["logged_in"]) && $_SESSION['logged_in'] === true &&
            isset($_SESSION['user']) && $_SESSION['user'] === $this->name
        ) {
            return TRUE;
        }
        $this->logout();
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    }
}



?>