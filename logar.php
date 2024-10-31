<?php 

    session_start();
    
    //VERIFICA SE USUÁRIO OU SENHA ESTÃO CORRETOS
    $nome = $_POST["nomeDeUsuarioLogar"];
    $senha = $_POST["senhaLogar"];

    if($nome == 'Admin' AND $senha == 'adm'){
        header("Location: indexAdm.php");
    }else {
        $conexao = mysqli_connect("localhost","root","","castramovelteste1");

        $_SESSION["nomeDeUsuario"] = $nome;

        $consulta = $conexao->query("SELECT * FROM castramovelteste1.usuario WHERE Nome = '$nome' AND Senha ='$senha' ");

        $exibe = $consulta ->fetch_assoc();

        if($consulta->num_rows == 1){
            header("Location: indexLogado.php"); 
        }else{
            header("Location: index.html");
        }
    }
    
         
?>