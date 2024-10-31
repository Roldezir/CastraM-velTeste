<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="admPanel.css">
</head>
<body>
    
    <header>


        <div class="totalCaoCadastrado">Total de cães cadastrados:
            <?php 
                $conexao = mysqli_connect("localhost","root","","castramovelteste1");
                $sqlTotalCaoCadastrados = "SELECT COUNT(*) AS t FROM cachorro";
                $resultado1 = $conexao->query($sqlTotalCaoCadastrados);
                $resultado1 = $resultado1->fetch_assoc();
                echo $resultado1['t'];
            ?>
        </div>
        <div class="totalCaoCastrado">Total de cães castrados:
            <?php 
                $conexao = mysqli_connect("localhost","root","","castramovelteste1");
                $sqlTotalCaoCadastrados = "SELECT COUNT(*) AS t FROM cachorro WHERE Situaçao = 'Castrado'";
                $resultado1 = $conexao->query($sqlTotalCaoCadastrados);
                $resultado1 = $resultado1->fetch_assoc();
                echo $resultado1['t'];
            ?>
        </div>

        <div class="totalCaoPendente">Total de cães pendentes:
            <?php 
                $conexao = mysqli_connect("localhost","root","","castramovelteste1");
                $sqlTotalCaoCadastrados = "SELECT COUNT(*) AS t FROM cachorro WHERE Situaçao = 'Pendente'";
                $resultado1 = $conexao->query($sqlTotalCaoCadastrados);
                $resultado1 = $resultado1->fetch_assoc();
                echo $resultado1['t'];
            ?>
        </div>

    </header>

    <section>
        
        <div class="tabCorpo">

            <table class="tabela tabela1">
                <thead> 
                    <tr class="tabCabecario">

                        <th scope="col" class="tabCab1">ID</th>
                        <th scope="col" class="tabCab2">Dono</th>
                        <th scope="col" class="tabCab3">Nome do Cão</th>
                        <th scope="col" class="tabCab4">Raça</th>
                        <th scope="col" class="tabCab5">Peso</th>
                        <th scope="col" class="tabCab6">Idade do Cão</th>
                        <th scope="col" class="tabCab7">Situação</th>
                        <th scope="col" class="tabCab8">#</th>

                    </tr>
                </thead>

                <tbody>
                    <?php 
                        $conexao = mysqli_connect("localhost","root","","castramovelteste1");
                        $sql = "SELECT * FROM cachorro WHERE Situaçao = 'Pendente' ORDER BY id DESC";                
                        $resultado = $conexao->query($sql);

                        while ($elementos = mysqli_fetch_array($resultado)) {
                            $sql1 = $conexao->query("SELECT Nome FROM usuario WHERE id = '$elementos[idUsuario]' ");          
                            $sql2 = mysqli_fetch_assoc($sql1);

                                echo "<tr>";
                                echo "<td>" .$elementos['id']."</td>";
                                echo "<td>" .$sql2['Nome']."</td>";
                                echo "<td>" .$elementos['NomeDoCao']."</td>";
                                echo "<td>" .$elementos['RaçaDoCao']."</td>";
                                echo "<td>" .$elementos['PesoDoCao']."</td>";
                                echo "<td>" .$elementos['IdadeDoCao']."</td>";
                                echo "<td>" .$elementos['Situaçao']."</td>";
                                echo "<td> <input type='submit' class='linhaAcao' onclick='abrirLinhaAcao($elementos[id])' value='+'> </td>";
                                echo "<tr>";  
                        }
                    ?>
                </tbody>
            </table>

            <table class="tabela tabela2">
                <thead> 
                    <tr class="tabCabecario">

                        <th scope="col" class="tabCab1">ID</th>
                        <th scope="col" class="tabCab2">Dono</th>
                        <th scope="col" class="tabCab3">Nome do Cão</th>
                        <th scope="col" class="tabCab4">Raça</th>
                        <th scope="col" class="tabCab5">Peso</th>
                        <th scope="col" class="tabCab6">Idade do Cão</th>
                        <th scope="col" class="tabCab7">Situação</th>
                        <th scope="col" class="tabCab8">#</th>

                    </tr>
                </thead>

                <tbody class="tabela2">
                    <?php 
                        $conexao = mysqli_connect("localhost","root","","castramovelteste1");
                        $sql = "SELECT * FROM cachorro WHERE Situaçao = 'Castrado' ORDER BY id DESC";                
                        $resultado = $conexao->query($sql);

                        while ($elementos = mysqli_fetch_array($resultado)) {
                            $sql1 = $conexao->query("SELECT Nome FROM usuario WHERE id = '$elementos[idUsuario]' ");  
                            $sql2 = mysqli_fetch_assoc($sql1);

                                echo "<tr>";
                                echo "<td>" .$elementos['id']."</td>";
                                echo "<td>" .$sql2['Nome']."</td>";
                                echo "<td>" .$elementos['NomeDoCao']."</td>";
                                echo "<td>" .$elementos['RaçaDoCao']."</td>";
                                echo "<td>" .$elementos['PesoDoCao']."</td>";
                                echo "<td>" .$elementos['IdadeDoCao']."</td>";
                                echo "<td>" .$elementos['Situaçao']."</td>";
                                echo "<td> <input type='submit' class='linhaAcao' onclick='abrirLinhaAcao($elementos[id])' value='+'> </td>";
                                echo "<tr>";    
                        }
                    ?>
                </tbody>
            </table>

        </div>

        <div class="alterarSituacao">

            <div class="fecharAlterarSituacao">X</div>

            <div class="infoDoCao"></div>

            <form action="marcarCastrado.php" method="post">
                <input type="text" name="idDoCao" id="numIdDoCao">
                <input type="submit" value="Marcar como Castrado" class="marcarComoCastrado">
            </form>

        </div>

    </section>

    <footer>

        <div class="mostrarCaesCastrados" onclick="mostrarCastrados()">Mostrar cães castrados</div>

        <div class="mostrarCaesPendentes" onclick="mostrarPendentes()">Mostrar cães pendentes</div>

        <a class="voltar" href="index.html">VOLTAR</a>
    </footer>

    <script>
        //CRIAÇÃO DE VARIÁVEIS
        let linhaAcao = document.querySelector('.linhaAcao')
        let alterarSituacao = document.querySelector('.alterarSituacao')
        let fecharAlterarSituacao = document.querySelector('.fecharAlterarSituacao')
        let infoDoCao = document.querySelector('.infoDoCao')
        var idDoCao
        let tabela1 = document.querySelector('.tabela1')
        let tabela2 = document.querySelector('.tabela2')
        //PREDEFINIÇÕES 
        alterarSituacao.style.display='none'
        tabela2.style.display='none'
        //FUNÇÕES
        function abrirLinhaAcao(x){
            alterarSituacao.style.display='block'
            infoDoCao.innerHTML= 'Deseja mesmo marcar o cão do ID: '+x+' como CASTRADO?'
            idDoCao = x

            document.querySelector('#numIdDoCao').value=idDoCao
        }

        function mostrarCastrados(){
            tabela1.style.display='none'
            tabela2.style.display='block'
        }
        function mostrarPendentes(){
            tabela1.style.display='block'
            tabela2.style.display='none'
        }

        //EVENT LISTENERS   
        fecharAlterarSituacao.addEventListener('click',()=>{
            alterarSituacao.style.display='none'
        })

        

    </script>

</body>
</html>




