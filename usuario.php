<?php 


    session_start();

    
    $nome = $_SESSION["nomeDeUsuario"];

        $conexao = mysqli_connect("localhost","root","","castramovelteste1");

        $consulta = $conexao->query("SELECT * FROM castramovelteste1.usuario WHERE Nome = '$nome'");

        $exibe = $consulta ->fetch_assoc();

    if($consulta->num_rows == 1){
        $idUsuario = $conexao->query("SELECT id FROM castramovelteste1.usuario WHERE Nome = '$nome'");
        
        $idDoUsuario = mysqli_fetch_assoc($idUsuario);
        //echo $idDoUsuario['id'];
        $_SESSION['idDoUsuario'] = $idDoUsuario['id'];

    }else{
        echo "Erro";
    }


    

?>