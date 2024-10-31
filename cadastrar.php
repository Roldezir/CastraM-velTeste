<?php

    $conexao = mysqli_connect("localhost","root","","castramovelteste1");

        $nome = $_POST['nomeDeUsuarioCadastrar'];
        $dataNascimento = $_POST['dataDeNascimentoCadastrar'];
        $email = $_POST['emailCadastrar'];
        $senha = $_POST['senhaCadastrar'];
        $endereco = $_POST['enderecoCadastrar'];
        $telefone = $_POST['telefoneCadastrar'];

    $sql = "INSERT INTO castramovelteste1.usuario(Nome, DataNascimento, Email, Senha, Endereço, Telefone) VALUES('$nome','$dataNascimento','$email','$senha','$endereco','$telefone')";
    $resultado = mysqli_query($conexao,$sql);

    header("Location: index.html");

?>