//Criação de variaveis
    let inicio=document.querySelector('.botaoInicio')
    let quemSomos=document.querySelector('.lista_header_1')
    let local=document.querySelector('.lista_header_2')
    let termos=document.querySelector('.lista_header_3')
    let cadastrarPet=document.querySelector('.lista_header_4')
    let contatos=document.querySelector('.lista_header_5')

    let loginCriarConta=document.querySelector('.login')
    let caixaLoginCriarConta=document.querySelector('.caixa_login_criar_conta')
    let botaoSairCaixaLoginCriarConta=document.querySelector('.sair_caixa_login_criar_conta')
    let formCadastrar=document.querySelector('.formCadastrar')
    let botaoCadastrar=document.querySelector('.botao_cadastrar')

//Pré-definições de variaveis

    caixaLoginCriarConta.style.display="none"
    
//Event Listeners



    inicio.addEventListener('click',()=>{
        window.scroll({top:0, behavior:"smooth"})
    })

    window.addEventListener('scroll',()=>{
        if(window.scrollY >=110 && window.innerWidth > 768+"pxS"){
            inicio.style.display='block'
            inicio.style.position= 'fixed'
            inicio.style.top='80%'
            inicio.style.left='1.5%'
            inicio.style.zIndex = '2'
            inicio.style.background='rgb(0, 0, 199)'
            inicio.style.height='5%'
            inicio.style.borderRadius='40px'
        }else{
            inicio.style.display='none'
        }
    })

    quemSomos.addEventListener('click',()=>{
        window.scroll({top:950, behavior:"smooth"})
    })

    local.addEventListener('click',()=>{
        window.scroll({top:1600, behavior:"smooth"})
    })

    termos.addEventListener('click',()=>{
        window.scroll({top:2400, behavior:"smooth"})
    })

    cadastrarPet.addEventListener('click',()=>{
        window.alert('É necessário fazer Login Primeiro')
    })

    contatos.addEventListener('click',()=>{
        window.scroll({top:2500, behavior:"smooth"})
    })

    botaoSairCaixaLoginCriarConta.addEventListener('click',()=>{
        caixaLoginCriarConta.style.display="none"
    })

    loginCriarConta.addEventListener('click',()=>{
        caixaLoginCriarConta.style.display="block"
    })

    formCadastrar.addEventListener('submit', Event=>{
        window.alert('Usuário Cadastrado com Sucesso!')
    })
    


   
    
  



  
   
