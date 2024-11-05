//Criação de variaveis
let inicio=document.querySelector('.botaoInicio')
let quemSomos=document.querySelector('.lista_header_1')
let local=document.querySelector('.lista_header_2')
let termos=document.querySelector('.lista_header_3')
let cadastrarPet=document.querySelector('.lista_header_4')
let contatos=document.querySelector('.lista_header_5')

let login=document.querySelector('.login')
let infoUsuario=document.querySelector('.infoUsuario')
let sairInfoUsuario=document.querySelector('.sair_infoUsuario')
let formEnviarCao=document.querySelector('.formEnviarCao')
let botaoCadastrar=document.querySelector('#botao_cadastrar')
let linkLocal=document.querySelector('.linkLocal')


//Pré-definições de variaveis

infoUsuario.style.display="none"
if(window.innerWidth<=768){linkLocal.style.display='block'}

//Event Listeners

inicio.addEventListener('click',()=>{
    window.scroll({top:0, behavior:"smooth"})
})

window.addEventListener('scroll',()=>{
    if(window.scrollY >=110 && window.innerWidth > 768){
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
    if(window.innerWidth == 1920){window.scroll({top:950, behavior:"smooth"})}
    if(window.innerWidth == 1680){window.scroll({top:950, behavior:"smooth"})}
    if(window.innerWidth == 1600){window.scroll({top:800, behavior:"smooth"})}
    if(window.innerWidth == 1440){window.scroll({top:770, behavior:"smooth"})}
    if(window.innerWidth == 1400){window.scroll({top:800, behavior:"smooth"})}
    if(window.innerWidth == 1366){window.scroll({top:700, behavior:"smooth"})}
    if(window.innerWidth == 1280){window.scroll({top:730, behavior:"smooth"})}
})

local.addEventListener('click',()=>{
    if(window.innerWidth == 1920){window.scroll({top:1600, behavior:"smooth"})}
    if(window.innerWidth == 1680){window.scroll({top:1600, behavior:"smooth"})}
    if(window.innerWidth == 1600){window.scroll({top:1455, behavior:"smooth"})}
    if(window.innerWidth == 1440){window.scroll({top:1450, behavior:"smooth"})}
    if(window.innerWidth == 1400){window.scroll({top:1400, behavior:"smooth"})}
    if(window.innerWidth == 1366){window.scroll({top:1300, behavior:"smooth"})}
    if(window.innerWidth == 1280){window.scroll({top:1450, behavior:"smooth"})}
})

termos.addEventListener('click',()=>{
    if(window.innerWidth == 1920){window.scroll({top:2400, behavior:"smooth"})}
    if(window.innerWidth == 1680){window.scroll({top:2300, behavior:"smooth"})}
    if(window.innerWidth == 1600){window.scroll({top:2050, behavior:"smooth"})}
    if(window.innerWidth == 1440){window.scroll({top:2110, behavior:"smooth"})}
    if(window.innerWidth == 1400){window.scroll({top:2110, behavior:"smooth"})}
    if(window.innerWidth == 1366){window.scroll({top:1900, behavior:"smooth"})}
    if(window.innerWidth == 1280){window.scroll({top:2050, behavior:"smooth"})}
})

cadastrarPet.addEventListener('click',()=>{
    if(window.innerWidth == 1920){window.scroll({top:3025, behavior:"smooth"})}
    if(window.innerWidth == 1680){window.scroll({top:2927, behavior:"smooth"})}
    if(window.innerWidth == 1600){window.scroll({top:2720, behavior:"smooth"})}
    if(window.innerWidth == 1440){window.scroll({top:2790, behavior:"smooth"})}
    if(window.innerWidth == 1400){window.scroll({top:2930, behavior:"smooth"})}
    if(window.innerWidth == 1366){window.scroll({top:2530, behavior:"smooth"})}
    if(window.innerWidth == 1280){window.scroll({top:2690, behavior:"smooth"})}
})

contatos.addEventListener('click',()=>{
    window.scroll({top:4000, behavior:"smooth"})
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










