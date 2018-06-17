<?php
    session_start();
    include("Conexao\conexao.php");

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        // Pega os dados do formulario usuario e senha metodo post
        $user = mysqli_real_escape_string($dbconfing,$_POST['nome']);
        $pass = mysqli_real_escape_string($dbconfing, $_POST['senha']);

        //realiza uma consulta no banco de dados e valida os dados
        $sql_query = "SELECT id FROM usuario WHERE nome='$user' and senha= '$pass'";
        $result = mysqli_query($dbconfing, $sql_query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        //se o resultado da consulta usuario e senha for verdadeiro valida
        if($count == 1){
            $_SESSION['login_user']= $user;
            header("location: home.php");
        }
        else{
            $erro = "Usuario ou senha invalidos!";
        }
    }
?>