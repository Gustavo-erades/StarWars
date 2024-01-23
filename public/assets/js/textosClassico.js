// seleciona os campos de texto
const tituloClassico=document.querySelector("#tituloEpisodioClassico");
const subtituloClassico=document.querySelector("#subtituloEpisodioClassico");
const textoClassico=document.querySelector("#paragrafoEpisodioClassico");
const linkClassico=document.querySelector("#linkEpisodioClassico");
const imgClassico=document.querySelector("#imgEpisodioClassico");
// funções que trocam os textos dos botões
function trocarTextoEpisodio4(){
    tituloClassico.textContent="Episódio IV";
    subtituloClassico.textContent="Uma nova esperança";
    textoClassico.textContent="É um período de guerra civil. Partindo de uma base secreta, naves rebeldes atacam e conquistam sua primeira vitória contra o perverso império galáctico. Durante a batalha, espiões rebeldes conseguem roubar os planos secretos da arma decisiva do império, a Estrela da Morte, uma estação espacial blindada com poder suficiente para destruir um planeta inteiro. Perseguida pelos sinistros agentes do Império, a princesa Leia Organa se apressa para voltar à sua casa. A bordo de sua nave estelar, ela protege os planos roubados que podem salvar seu povo e restaurar a liberdade à galáxia...";
    linkClassico.setAttribute("href","erro404.html");
    imgClassico.setAttribute("src","./assets/imagens/ep4.png");
}
function trocarTextoEpisodio5(){
    tituloClassico.textContent="Episódio V";
    subtituloClassico.textContent="O império contra-ataca";
    textoClassico.textContent="É um período crítico para as Forças Rebeldes. Embora a Estrela da Morte tenha sido destruída na batalha de Yavin, as Tropas Imperiais conseguem expulsar os Rebeldes de sua base secreta e os perseguem por toda a galáxia. Fugindo da terrível Frota Imperial, um grupo de Rebeldes chefiados por Luke Skywalker, estabelece uma nova base secreta no remoto mundo gelado de Hoth. O senhor do mal, Lorde Darth Vader, obcecado pela idéia de encontrar o jovem Skywalker, despachou um Destroier Estelar Imperial enviando milhares de sondas remotas para os pontos mais longínquos do espaço....";
    linkClassico.setAttribute("href","erro404.html");
    imgClassico.setAttribute("src","./assets/imagens/ep5.png");

}
function trocarTextoEpisodio6(){
    tituloClassico.textContent="Episódio VI";
    subtituloClassico.textContent="Retorno de jedi";
    textoClassico.textContent="Luke Skywalker voltou ao seu planeta natal, Tatooine, na tentativa de salvar seu amigo Han Solo das garras do desprezível bandido Jabba, o Hutt. Luke ainda não sabe que o Império Galático iniciou secretamente a construção de uma nova estação espacial bélica, mais poderosa que a primeira Estrela da Morte. Quando estiver pronta, esta arma definitivamente significará o fim do pequeno grupo de rebeldes que luta para devolver a liberdade à galáxia....";
    linkClassico.setAttribute("href","erro404.html");
    imgClassico.setAttribute("src","./assets/imagens/ep6.png");

}
// seleciona os botões 
const botaoEpisodio4=document.querySelector("#episodio04");
const botaoEpisodio5=document.querySelector("#episodio05");
const botaoEpisodio6=document.querySelector("#episodio06");
// atribui as as classes no click dos botões e chama as funções
botaoEpisodio4.addEventListener("click",()=>{
    botaoEpisodio4.classList.toggle("active");
    botaoEpisodio5.classList.remove("active");
    botaoEpisodio6.classList.remove("active");
    trocarTextoEpisodio4();
})
botaoEpisodio5.addEventListener("click",()=>{
    botaoEpisodio5.classList.toggle("active");
    botaoEpisodio4.classList.remove("active");
    botaoEpisodio6.classList.remove("active");
    trocarTextoEpisodio5();
})
botaoEpisodio6.addEventListener("click",()=>{
    botaoEpisodio6.classList.toggle("active");
    botaoEpisodio4.classList.remove("active");
    botaoEpisodio5.classList.remove("active");
    trocarTextoEpisodio6();
})
