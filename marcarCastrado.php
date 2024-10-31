<?php 

    $idDoCao = $_POST['idDoCao'];
    echo $idDoCao;
    $conexao = mysqli_connect("localhost","root","","castramovelteste1");
    if(!empty($idDoCao)){
        $sql5 = "UPDATE castramovelteste1.cachorro SET Situaçao='Castrado' WHERE id='$idDoCao'";
        $resultado = mysqli_query($conexao,$sql5);
    }
    header("Location:indexAdm.php")

?>
