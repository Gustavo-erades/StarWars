//seleciona os botões
const botaoEpisodio1=document.querySelector("#episodio1");
const botaoEpisodio2=document.querySelector("#episodio2");
const botaoEpisodio3=document.querySelector("#episodio3");
//seleciona os elementos
const titulo=document.querySelector("#tituloEpisodio");
const subtitulo=document.querySelector("#subtituloEpisodio");
const paragrafo=document.querySelector("#paragrafoEpisodio");
const link=document.querySelector("#linkEpisodio");
const img=document.querySelector("#imagemEpisodio");
// função que troca o texto (episódio 1)
function trocarTextoEpisodio1(){
    titulo.textContent="Episodio I";
    subtitulo.textContent="A ameaça fantasma";
    paragrafo.textContent="A Federação de Comércio entra em conflito com a República Galática ao bloquear as rotas comerciais do planeta Naboo, o que gera conflitos entre o planeta e a Federação. Secretamente, dois jedis são mandados para resolver o conflito que aparenta ser mais profundo. A mando do lorde sith Darth Sidius a Federação envia Darth Maul para assassinar o mestre jedi Qui-Gon e seu padawan Obi-Wan ao mesmo tempo que inicia uma invasão militar em Naboo.";
    link.setAttribute("href","./episodios/episodio1.php");
    img.setAttribute("src","./imagens/ep1.png");
}
// função que troca o texto (episódio 2)
function trocarTextoEpisodio2(){
    titulo.textContent="Episodio II";
    subtitulo.textContent="Ataque dos clones";
    paragrafo.textContent="Uma inquietação toma conta do Senado Galáctico. Milhares de sistemas solares declararam suas intenções em deixar a República. Esse movimento separatista, sob a liderança do misterioso Conde Dookan, tem criado dificuldades para o limitado número de Cavaleiros Jedi manter a paz e a ordem na galáxia. Senadora Amidala, a antiga rainha de Naboo está retornando ao Senado Galáctico para a votação da proposta crítica de criação de um Exército da República, para auxiliar os sobrecarregados Jedi....";
    link.setAttribute("href","./episodios/episodio2.php");
    img.setAttribute("src","./imagens/ep2.png");
}
// função que troca o texto (episódio 3)
function trocarTextoEpisodio3(){
    titulo.textContent="Episodio III";
    subtitulo.textContent="A vingança dos Sith";
    paragrafo.textContent="Guerra! A República está desmoronando sob o ataque do impiedoso Lord Sith, Conde Dookan. Há heróis de ambos os lados. O Mal está por toda parte. Em uma manobra surpreendente, o diabólico líder Droide, General Grievous, invadiu a capital da República e sequestrou o Chanceler Palpatine, Líder do Senado Galáctico. Enquanto o Exército Separatista de Droides tenta escapar da capital sitiada com seu valioso refém, dois cavaleiros Jedi lideram uma missão desesperada para resgatar o Chanceler preso....";
    link.setAttribute("href","./erro404.html");
    img.setAttribute("src","./imagens/ep3.png");
}
// botão para o episódio 1
botaoEpisodio1.addEventListener("click",()=>{
    botaoEpisodio1.classList.toggle("active");
    botaoEpisodio2.classList.remove('active');
    botaoEpisodio3.classList.remove('active');
    trocarTextoEpisodio1();
})
// botão para o episódio 2
botaoEpisodio2.addEventListener("click",()=>{
    botaoEpisodio2.classList.toggle("active");
    botaoEpisodio1.classList.remove('active');
    botaoEpisodio3.classList.remove('active');
    trocarTextoEpisodio2();
})
// botão para o episódio 3
botaoEpisodio3.addEventListener("click",()=>{
    botaoEpisodio3.classList.toggle("active");
    botaoEpisodio1.classList.remove('active');
    botaoEpisodio2.classList.remove('active');
    trocarTextoEpisodio3();
})