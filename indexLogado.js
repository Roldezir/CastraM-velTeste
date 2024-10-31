//Criação de variaveis
let inicio=document.querySelector('#lista_header_1')
let quemSomos=document.querySelector('#lista_header_2')
let local=document.querySelector('#lista_header_3')
let termos=document.querySelector('#lista_header_4')
let cadastrarPet=document.querySelector('#lista_header_5')

let login=document.querySelector('#login')
let infoUsuario=document.querySelector('.infoUsuario')
let sairInfoUsuario=document.querySelector('.sair_infoUsuario')
let formEnviarCao=document.querySelector('.formEnviarCao')
let botaoCadastrar=document.querySelector('#botao_cadastrar')

//let perfil=document.querySelector('.perfil')

//Pré-definições de variaveis

infoUsuario.style.display="none"
//perfil.innerHTML='Nome:'+ 

//Event Listeners

inicio.addEventListener('click',()=>{
    window.scroll({top:0, behavior:"smooth"})
})

window.addEventListener('scroll',()=>{
    if(window.scrollY >=180){
        inicio.style.position= 'fixed'
        inicio.style.top='80%'
        inicio.style.left='5%'
        inicio.style.zIndex = '2'
        inicio.style.background='rgb(0, 0, 199)'
        inicio.style.height='10%'
        inicio.style.borderRadius='40px'
        inicio.style.width='7%'
    }else{
        inicio.style.position= 'absolute'
        inicio.style.top='0%'
        inicio.style.left= '23%'
        inicio.style='hover{background-color: rgb(60, 60, 245)'
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
    window.scroll({top:3040, behavior:"smooth"})
})

sairInfoUsuario.addEventListener('click',()=>{
    infoUsuario.style.display="none"
})

login.addEventListener('click',()=>{
    infoUsuario.style.display="block"
})

formEnviarCao.addEventListener('submit', Event=>{
    window.alert('Cão Cadastrado com Sucesso!')
})










