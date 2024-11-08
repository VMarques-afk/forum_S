<?php
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once 'config.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo "Email: " . $email;
    echo "Senha: " . $senha;
} else {
    header('Location: tela-de-login.php');
    exit(); // Importante: adicione exit() após o redirecionamento
}