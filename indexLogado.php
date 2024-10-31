
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="indexLogado.css">
</head>
<body>
    
<header>

    <!--COISAS QUE ESTÃO NA BARRA AMARELA DO CABEÇALHO-->
    <div class="barra_header" id="barra1">

        <div id="local">
            <img src="imagens/icone_local.png" id="icone_local">
            <div id="endereco">Av.Nome da Rua, N°00, Bairro Centro</div>
        </div>

        <div id="email">
            <img src="imagens/icone_email.png" id="icone_email">
            <div id="endereco_email">castramovel@hotmail.com</div>
        </div>

        <div id="whatsapp">
            <img src="imagens/icone_whatsapp.png" id="icone_whatsapp">
            <div id="numero">(00) 0 0000-0000</div>
        </div>
   
        <div id="login"><?php 
                    session_start();

                    $nome = $_SESSION["nomeDeUsuario"];

                    echo $nome;
                    
                ?></div>
        
        <div class="infoUsuario">

            <div class="perfil">Perfil </br></br>
                <?php 
                    $nome = $_SESSION["nomeDeUsuario"];
                    echo "Olá ". $nome. "! <br />" ; 
                    
                    echo "<br />Para atualizar seus dados clique no link a seguir:"
                ?>
                </br></br>
                <a href="">AtualizarCadastro
            </div>
            <div ><a href="index.html" class="logoff" style="text-decoration: none;" >Desconectar</a></div>
            <div class="sair_infoUsuario">X</div>

        </div>
       
    </div>

    <!--COISAS QUE ESTÃO NA BARRA AZUL DO CABEÇALHO-->
    <div class="barra_header" id="barra2">
        <img src="imagens/castra_movel_logo.png" class="castra_movel_logo">

        <div class="lista_header" id="lista_header_1">INÍCIO</div>
        <div class="lista_header" id="lista_header_2">QUEM<br>SOMOS</div>
        <div class="lista_header" id="lista_header_3">LOCAL</div>
        <div class="lista_header" id="lista_header_4">TERMOS</div>
        <div class="lista_header" id="lista_header_5">CADASTRAR<br>PET </div>

    </div>

</header>

<div class="corpo">
    
    <!--PARTE REFERENTE AO INÍCIO-->
    <div>

        <img src="imagens/cao_inicio.png" class="corpo_cao_inicio">

        <div class="corpo_frases_inicio" id="corpo_frases_inicio_1">CASTRAÇÃO GRATUITA</div>
        <div class="corpo_frases_inicio" id="corpo_frases_inicio_2">EQUIPE PROFISSIONAL</div>
        <div class="corpo_frases_inicio" id="corpo_frases_inicio_3">PROCEDIMENTO SEGURO</div>
        <div class="corpo_texto_inicio">"Sua dedicação e amor para com esses seres <br>
        tão iluminados e indefesos mostram o quão pura <br> é a sua alma."</div>

    </div>

    <!--PARTE REFERENTE AO QUEM SOMOS-->
    <div class="barra_corpo_quem_somos">
        
        <img src="imagens/veterinaria_quem_somos.png" class="veterinaria_quem_somos">
        <div class="titulo_quem_somos_corpo">QUEM SOMOS?</div>
        <p class="texto_quem_somos_corpo">Somos uma equipe de veterinarios que
        atua na<br> cidade de Quirinópolis-GO em parceria com a<br> prefeitura municipal
        com o intuito de proporcionar<br> um controle demográfico de cães na cidade
        da<br> forma mais humana e respeitosa que é a castração. <br><br>

        Entendemos que a maioria das pessoas não tem as<br> condições necessárias para 
        castrar seus cães, por<br> uma eventualidade seus cães acabam tendo relações<br>
        com outros cães e no momento que os filhotes<br> nascem eles são soltos
        na rua.<br><br>

        Esse ato pode causar a morte desses filhotes por<br> desnutrição, doenças, acidentes,
        maus tratos e em <br>outros casos pode ocorrer de um motociclista atropelar<br>esses
        cães e ambos se ferirem gravemente.<br><br>

        Por isso lutamos por essa causa tão importante para<br> a sociedade, convido você
        a cadastrar seu cão para<br> ser castrado e colaborar com esse projeto e com o bem 
        <br>estar de todos.
        </p>

    </div>

    <!--PARTE REFERENTE A LOCALIZAÇÃO-->
    <div class="barra_corpo_localizacao">

        <div class="titulo_corpo_localizacao">LOCALIZAÇÃO</div>
        <div class="texto_corpo_localizacao">
            Nossa atual localização é na Av. Alameda
            Paranaiba, <br>N°35-37, Bairro Promissão, Quirinópolis-GO. <br>Mais conhecida 
            como "Pecuária", "Parque de Exposição <br>Quirinópolis" ou "Sindicato Rural de 
            Quirinópolis".
        </div>
        <div class="mapbox">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2676.0839807597504!2d-50.45633014686098!3d-18.45853677141841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949f09c0aff8207b%3A0xe60644f5f2ef6b51!2zUGFycXVlIEV4cG9zacOnw6NvIFF1aXJpbsOzcG9saXM!5e0!3m2!1spt-BR!2sbr!4v1704725194754!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!--PARTE REFERENTE AOS TERMOS-->
    <div class="barra_corpo_termos">
        <div class="titulo_corpo_termos">TERMOS DE POLÍTICA DE PRIVACIDADE</div>

        <div class="texto_corpo_termos">
            Lorem, ipsum dolor sit amet consectetur 
            adipisicing elit. Minima, neque. Repellendus perferendis ut eligendi 
            sapiente veritatis nobis<br> quas consequuntur mollitia id illum. Cum 
            perferendis doloribus nam quasi quidem repudiandae dolore! Lorem ipsum 
            dolor sit amet<br> consectetur adipisicing elit. Quaerat porro in quae 
            nesciunt corrupti quis doloribus qui totam impedit incidunt doloremque 
            earum autem<br> eum, blanditiis beatae laudantium consectetur, similique 
            aperiam officiis ullam, nisi temporibus voluptate nihil? Consectetur, 
            obcaecati<br> aspernatur, temporibus porro labore sint id fuga praesentium 
            est dolorum, qui expedita voluptatem aliquam iste perspiciatis ad<br>
            quibusdam? Quaerat fuga eius ducimus error voluptatibus laborum! Eligendi, 
            rem laborum? Assumenda maiores corporis optio enim, <br>fuga porro tenetur. 
            Reiciendis, sit a. At enim, ea possimus eos facere temporibus voluptate 
            iure explicabo, dignissimos, impedit harum. <br>Veniam maxime consectetur 
            asperiores enim dolorem cupiditate inventore temporibus. Laborum id 
            similique, quas recusandae delectus<br> soluta neque quaerat, ad amet 
            voluptate ratione pariatur laudantium suscipit vitae animi quisquam nihil 
            sequi nisi exercitationem quae<br> repellendus dolore qui. Asperiores 
            cupiditate vel ipsa libero distinctio repudiandae, excepturi, amet optio
            praesentium, consequuntur <br>dolores similique ullam voluptate harum 
            maiores quasi nostrum officiis beatae! Dignissimos quis aperiam asperiores 
            itaque repellat<br> exercitationem vero aliquam laborum perspiciatis 
            molestiae. Veniam voluptatibus beatae voluptates sit animi officia consequatur, 
            nam<br> harum quia asperiores doloremque perferendis sed? Eum voluptas iure 
            exercitationem, autem quasi, sapiente ratione asperiores <br> repellendus
            reiciendis totam temporibus ipsam natus. Tempore tenetur illo maiores saepe 
            minus perferendis nihil consequuntur odio.</div>
    </div>

    <!--PARTE REFERENTE AO CADASTRAR PET-->
    <div class="barra_corpo_cadastrar_pet">

        <div class="titulo_corpo_cadastrar_pet">CADASTRAR PET</div>

        <form action="enviarCao.php" method="POST" class="formEnviarCao">

            <input type="text" placeholder="Nome do Cão" class="requisicoes_corpo_cadastrar_pet_nome_do_cao" name="nomeDoCao" required>
            <br><input type="text" placeholder="Raça do Cão" class="requisicoes_corpo_cadastrar_pet_raca_do_cao" name="racaDoCao" required>
            <br><input type="number" placeholder="Peso do Cão(opcional)" class="requisicoes_corpo_cadastrar_pet_peso_do_cao" name="pesoDoCao">
            <br><input type="number" placeholder="Idade do Cão(opcional)" class="requisicoes_corpo_cadastrar_pet_idade_do_cao" name="idadeDoCao">
    
            <div class="checkbox_corpo_cadastrar_pet">
                <input type="checkbox" name="Requisições" class="requisicoes_corpo_cadastrar_pet" required>Meu cão não possui doenças
                <br><input type="checkbox" name="Requisições" class="requisicoes_corpo_cadastrar_pet" required>Meu cão é MACHO
                <br><input type="checkbox" name="Requisições" class="requisicoes_corpo_cadastrar_pet" required>Aceito os "Termos de Política de Privacidade"
            </div>

            <div class="texto_enviar_arquivos_corpo_cadastrar_pet">Neste campo é
                opcional o envio de<br>  5 fotos do seu cão:<br><br>-Lado 
                direito<br> -Lado esquerdo<br> -Parte da frente<br> -Parte de traz<br>
                -Parte de baixo
            </div>

            <input type="file" class="enviar_arquivos_corpo_cadastrar_pet" name="fotosDoCao">

            <input type="submit" class="enviar_corpo_cadastrar_pet">

        </form>
        
    </div>

</div>

<footer>
    <br>@instagram<br><br>@facebook<br><br>@twitter<br><br>sites de parceiros<br>
    <br>sites de parceiros<br><br>sites de parceiros<br><br>site da prefeitura
</footer>

    <script src="indexLogado.js"></script>
    
</body>
</html>