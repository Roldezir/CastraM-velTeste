<?php 
    include_once("usuario.php");

    session_start();

    $conexao = mysqli_connect("localhost","root","","castramovelteste1");

        $nome = $_POST['nomeDoCao'];
        $idUsuario = $_SESSION["idDoUsuario"];
        $raca = $_POST['racaDoCao'];
        $peso = $_POST['pesoDoCao'];
        $idade = $_POST['idadeDoCao'];
        $fotos = $_POST['fotosDoCao'];
        $situacao = 'Pendente';

    $sql = "INSERT INTO castramovelteste1.cachorro(idUsuario,NomeDoCao,RaçaDoCao,PesoDoCao,IdadeDoCao,Fotos,Situaçao)
     VALUES('$idUsuario','$nome','$raca','$peso','$idade','$fotos','$situacao')";
    $resultado = mysqli_query($conexao,$sql);

    header("Location: indexLogado.php");

?>