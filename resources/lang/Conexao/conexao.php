<?php
    $bd = new mysqli('localhost', 'root', '','MyBlog');
    if($bd->connect_errno){
        throw new Exception('Erro na Conexão'. $conexao->connect_error);
    }
    $bd->set_charset("utf-8");
?>