const url= new URLSearchParams(window.location.search);
const pagina = urlParams.get("cod");
const home= document.querySelector("#menuHome");
const episodios= document.querySelector("#dropdown");
console.log(url);
console.log(pagina);
switch (pagina){
    case '1':
        home.classList.toggle("active");
        episodios.classList.remove("active");
        break;
    default:
        home.classList.toggle("active");
        episodios.classList.remove("active");
        break;

}