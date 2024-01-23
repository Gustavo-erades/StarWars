const url= window.location.search;
const pagina = url.split("?cod=");
const home= document.querySelector("#menuHome");
const episodios= document.querySelector("#dropdown");
const creditos=document.querySelector("#menuCreditos");
const sobre=document.querySelector("#menuSobre");
switch (pagina[1]){
    case '0':
        home.classList.toggle("active");
        break;
    case '1':
        creditos.classList.toggle("active");
        break;
    case '2':
        sobre.classList.toggle("active");
        break;
    case 'ep1':
        episodios.classList.toggle("active");
        document.querySelector("#menuEpisodio1").classList.toggle("text-warning");
        break;
    case 'ep2':
        episodios.classList.toggle("active");
        document.querySelector("#menuEpisodio2").classList.toggle("text-warning");
        break;
    case 'ep3':
        episodios.classList.toggle("active");
        document.querySelector("#menuEpisodio3").classList.toggle("text-warning");
        break;
    default:
        home.classList.toggle("active");
        break;

}