<?php

function conecta() : mysqli
{
    $servidor = 'localhost';
    $banco = 'blog';
    $port = '3306';
    $usuario = 'root';
    $senha = '';
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $port);

    if(!$conexao)
    {
        echo 'Erro: Não foi possível conectar ao MySql.' . PHP_EOL;
        echo 'Degging errno: ' . mysqli_connect_errno() . PHP_EOL;
        echo 'Degging error: ' . mysqli_connect_errno() . PHP_EOL;
        return null;

    }
    return $conexao;
}

function desconecta($conexao)
{
    mysqli_close($conexao);
}

?>