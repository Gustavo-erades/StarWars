<?php
  session_start();
  include_once("./app/database/conexaoBd/conexao.php");
  include_once("./app/helpers/funcoesPHP/gerenciarAcessos.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css" media="all">
    <link rel="stylesheet" href="./assets/css/responsividade.css" media="all">
    <link rel="stylesheet" href="./assets/css/styleLoading.css">
    <script src="https://kit.fontawesome.com/574d869779.js" crossorigin="anonymous"></script>
    <script src="./assets/js/trocarTextosPrequel.js" defer></script>
    <script src="./assets/js/trocarTextosClassico.js" defer></script>
    <link rel="shortcut icon" href="./assets/imagens/icone5.png" type="image/x-icon">
    <title>Star Wars</title>
  </head>
  <body>
   <div id="preload">
      <!-- imagem parallax 1 -->
      <div class="parallax img1" id="start">
        <div class="conteudo-titulo">
          <span class="titulo_logo text-warning display-1">Star Wars</span>
        </div>
        <br>
        <!-- barra de navegação (menu hambúrger e dropdown) -->
        <?php
          require_once("menu.php");
        ?>
        <!-- fim da barra de navegação -->
      </div>
      <!-- conteúdo card 1 -->
      <div class="container conteudo">
        <h2 class="d-none d-md-block">Há Muito tempo atrás, numa galáxia muito, muito distante....</h2>
        <h2 class="d-block d-md-none">Há Muito tempo atrás, numa galáxia  distante....</h2>
        <p data-tilt class="lead">
          Star Wars é uma franquia de filmes, séries, revistas em quadrinhos e desenhos animados. Uma trama política espacial com direito a 
          espadas brilhantes, naves espaciais, robôs, alienígenas, viagens na velocidade da luz, exércitos de droides e explosões. A trama 
          idealizada por George Lucas foi iniciada no fim da década de 1970 com o filme Star Wars: Uma Nova Esperança. 
        </p>
        <p data-tilt class="lead">
            O primeiro filme acompanhava um jovem com uma ligação mistica com a galáxia (Luke Skywalker), um contrabandista espacial e seu fiel escudeiro 
            (Han Solo e Chewbacca), uma princesa de um planeta distante (Leia Organa) e dois robôs (C-3P0 e R2-D2), o quarteto viajava pela galáxia 
            lutando contra o temível império e as tropas de clones do terrível Darth Vader e do Imperador Palpatine. Com esse filme, chamado 
            posteriormente de Episódio IV, uma das maiores franquias da história do cinema começou. 
        </p>
        <p data-tilt class="lead">
            Portanto, Jovem padawan, caso queira conhecer a história do início ao fim da era jedi, da ascensão à queda do temível império, da origem ao fim daquele que amedrontou a galáxia por anos conhecido como Darth Vader, então acompanhe a história dos seis primeiros episódios da saga Star Wars e, como diziam os velhos mestre jedi, que a Força esteja com você!
        </p>
      </div>
      <!-- imagem parallax 2 -->
      <div class="parallax img2">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Divirta-se padawan!</h1>
        </div>
      </div>
      <!-- conteúdo card 2-->
      <div class="container conteudo">
        <h2>O início da jornada</h2>
        <p data-tilt class="lead">
          George Walton Lucas Junior foi o grande idealizador do universo de Star Wars, seja como produtor, roteirista ou diretor, ele 
          esteve presente durante todo o desenvolvimento dos seis primeiros filmes da saga. George Lucas fazia parte da nova geração de 
          diretores de cinema na década de 1970 e escreveu o roteiro de um filme que teria 6 horas de duração, após receber diversos "não" 
          de estúdios que não apoiavam a ideia, acabou dividindo essas seis horas em seis filmes (surgia aí os seis primeiros filmes da 
          saga). 
        </p>
        <p data-tilt class="lead">
          Após diveros problemas com o estúdio, equipe de produção, prazos e elenco a história de Star Wars finalmente começou em 
          1977, começando já com o quarto capítulo e segiu até 1983, durante esse período foi produzida a primeira trilogia que ficou 
          conhecida como "trilogia clássica". Em 1999 chegou aos cinemas o filme "Star Wars: A Ameaça fantasma" e esse filme deu início a 
          trilogia que se passaria antes dos três filmes originais e ficaria conhecida como "trilogia prequel".
        </p>
        <p data-tilt class="lead">
          Esses seis primeiros filmes modelaram todo o universo de star wars e são eles que contam a história princial dessa saga, das batalhas entre Jedis e Siths, da queda da república e dos confrontos entre rebeldes e o império até a derrocada do lado sombrio da Força.
        </p>
      </div>
      <!-- imagem parallax 3 -->
      <div class="parallax img3">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Uma história Star Wars</h1>
        </div>
      </div>
      <!-- conteúdo card 3 -->
      <div class="container conteudo">
        <p data-tilt class="lead">
          O tempo em Star Wars é contado como ABY | DBY, ou seja, antes e depois da batalha de Yavin, batalha essa que foi o maior 
          confronto entre a Aliança Rebelde e o Império Galático na Guerra Civil Galática, foi nessa batalha que a primeira estrela da 
          morte foi destruida. O episódio IV conta a história dessa batalha e, devido a sua importância, a data dessa batalha é considerada 
          o ano 0, portanto os anos dos eventos em Star Wars são contado como antes, durante ou depois dessa batalha. Assim o universo de 
          Star Wars é dividido em 7 principais eras:
        </p>
        <ul class="lead">
          <li data-tilt>era Pré-República</li>
          <li data-tilt>era da Velha República</li>
          <li data-tilt>era da Ascensão do Império</li>
          <li data-tilt>era da Rebelião</li>
          <li data-tilt>era da Nova República</li>
          <li data-tilt>era da Nova Ordem Jedi</li>
          <li data-tilt>era do Legado</li>
        </ul>
        <p data-tilt class="lead">A trilogia prequel se passa no final da era da Ascensão do Império e a trilogia clássica se passa no período da era da Rebelião.</p>
      </div>
      <!-- conteúdo parallax 4 -->
      <div class="parallax img4">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Trilogia Prequel</h1>
        </div>
      </div>
      <!-- conteúdo card 4 -->
      <div class="conteudo">
        <div class="card bg-transparent">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs bg-transparent justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" id="episodio1">Episódio I</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="episodio2">Episódio II</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="episodio3">Episódio III</a>
              </li>
            </ul>
          </div>
          <div class="card-body bg-dark media">
            <div class="media-body">
              <h4 class="card-title" id="tituloEpisodio">Episódio I</h4>
              <h6 class="card-subtitle" id="subtituloEpisodio">A ameaça fantasma</h6>
              <p class="card-text lead" id="paragrafoEpisodio">
                A Federação de Comércio entra em conflito com a República Galática ao bloquear as rotas comerciais do planeta Naboo, o que gera conflitos entre o planeta e a Federação.
                Secretamente, dois jedis são mandados para resolver o conflito que aparenta ser mais profundo. A mando do lorde sith Darth Sidius a Federação envia Darth Maul para assassinar o mestre jedi Qui-Gon e seu padawan Obi-Wan ao mesmo tempo que inicia uma invasão militar em Naboo.  
              </p>
              <a class="btn btn-warning" href="./paginas/episodios/episodio1.php" id="linkEpisodio">Ver história</a>
            </div>
            <img  src="./assets/imagens/ep1.png" alt="A ameaça fantasma" class="align-self-center" id="imagemEpisodio">
          </div>
        </div>
      </div>
      <!-- conteúdo parallax 6 -->
      <div class="parallax img6">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Trilogia clássica</h1>
        </div>
      </div>
      <!-- conteúdo card 6 -->
      <div class="conteudo">
        <div class="card bg-transparent">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs bg-transparent justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" id="episodio4">Episódio IV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="episodio5">Episódio V</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="episodio6">Episódio VI</a>
              </li>
            </ul>
          </div>
          <div class="card-body bg-dark media">
            <div class="media-body">
              <h4 class="card-title" id="tituloEpisodioClassico">Episódio IV</h4>
              <h6 class="card-subtitle" id="subtituloEpisodioClassico">Uma nova esperança</h6>
              <p class="card-text lead" id="paragrafoEpisodioClassico">
                19 anos após os acontecimentos do episódio III a galáxia está sob poder do Império que é governado com mão de ferro pelo Imperador Palpatine e seu braço direito Lorde Darth Vader.
                Os rebeldes liderados pela princesa Leia Organa conseguem roubar a planta de construção de uma arma bélica conhecida como Estrela da Morte e implantá-la no droide R2-D2 que segue para Tatooine buscando seu dono Obi-Wan Kenobi.
                Após o assassinato brutal de seus tios, Luke Skywalker descobre o passado sobre os jedis e, junto de Obi-Wan, Leia e dois caçadores de recompensa (Han Solo e Chewbacca), tenta parar os planos maléficos do Império. 
              </p>
              <a href="erro404.html" class="btn btn-warning" id="linkEpisodioClassico">Ver história</a>
            </div>
            <img src="./assets/imagens/ep4.png" alt="Uma nova esperança" class="align-self-center" id="imgEpisodioClassico">
          </div>
        </div>
      </div>
      <!-- conteúdo parallax 8 -->
      <div class="parallax img8">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">A Força</h1>
        </div>
      </div>
      <!-- conteúdo card 8 -->
      <div class="container conteudo">
        <blockquote class="blockquote">
          "Um campo de energia criado por todas as coisas vivas. Ele nos envolve e penetra, é o que mantém a galáxia unida"
          <footer class="blockquote-footer">
            <cite class="blockquote-cite"> Kenobi, Obi-Wan</cite>
          </footer>
        </blockquote>
        <p data-tilt class="lead">
          A Força é a fonte de poder no universo de Star Wars, seja você um lorde sith, um mestre jedi, um caçador de recompensas, 
          android ou qualquer outro, qualquer ser tem ligação com a Força e pode usá-la! O que diferencia é a capacidade que o ser tem de se conectar 
          com ela. 
        </p>
        <p data-tilt class="lead">
          Nas células dos seres vivos existe um microorganismo microscópico chamado de Midi-Chlorians, esse microorganismo 
          facilita a interação com a Força e contabilazando o tanto desses organismos existentes no seres vivos é possível medir a sensibilidade 
          de cada um à Força, porém, há formas artificiais de se ligar a Força e utilizar seu poder.
        </p>
      </div>
      <!-- conteúdo parallax 9 -->
      <div class="parallax img9">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Jedi x Sith</h1>
        </div>
      </div>
      <!-- conteúdo card 9 -->
      <div class="container conteudo">
        <h2>A Força possui dois lados...</h2>
        <p data-tilt class="lead">
          A forma com que um indivíduo se conecta e usa a Força impacta diretamente em sua personalidade e vice versa. A Força se divide em dois lados:
        </p>
        <ul class="lead">
          <li data-tilt >Ashla -> lado luminoso</li>
          <li data-tilt >Bogan -> lado sombrio</li>
        </ul>
        <p data-tilt class="lead">
          O lado sombrio da Força é, de forma geral, ultilizado pelos lordes Sith (Darth Vader, Darth Maul, Darth Tyranus).Os usuários desse lado costumam ser mais agressivos e letais em seus ataques, acessam a Força pelo ódio e sentimentos negativos. 
        </p>
        <p data-tilt class="lead">
          Em contra partida, o outro lado da Força é acessado por meio da meditação e concentração extrema. Os mestres jedi (Yoda, Obi-Wan, Mace Windu) evitam usar a Força para ferir e preferem ser letais apenas em último caso,  pregam o afastamento emocional e usam seus poderes jedi para buscar o equilíbrio e bem-estar da galáxia.
        </p>
        <p data-tilt class="lead">
          Por seguirem filosofias tão diferentes os mestre jedi e os lordes sith travam batalhas que se rastam por gerações, no fim, só 
          conseguem concordar em uma coisa: o perigo que o amor pode trazer. Para o lado sombrio o amor poder trazer compaixão e afeto, para 
          o lado jedi o amor pode trazer sentimentos ruins como ciúme e raiva.
        </p>
        <p data-tilt class="lead">
          Porém, o que Star Wars mostra durante toda a saga é que ambos os lados existem dentro dos seres e o melhor caminho para uso da 
          Força é buscar o equilíbrio entre eles, assim o usuário pode combinar as habilidades dos dois lados se tornando um usuário poderoso da Força, como fez Luke Skywalker.
        </p>
      </div>
      <!-- conteúdo parallax 10 -->
      <div class="parallax img10">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Os sabres de luz</h1>
        </div>
      </div>
      <!-- conteúdo card 10 -->
      <div class="container conteudo">
        <p data-tilt class="lead">
          Os sabres de luz são espadas de plasma feitas a partir de um cristal raro que é energizado com o poder do usuário do sabre, 
          assim o sabre recebe sua cor (verde, azul, roxo, vermelho), por isso os usuários do lado sombrio costumam possuir um sabre de luz 
          vermelho, pois energizam o cristal com sentimentos negativos. 
          Skaywalker.
        </p>
        <p data-tilt class="lead">
          É por isso também que os sabres de luz costumam carregar a energia 
          do usuário original, energia essa que pode ser sentida por pessoas sensitivas a Força, a exemplo do sabre de luz de Anakin Skywalker
        </p>
        <p data-tilt class="lead">
          Há, porém, na galáxia sabres de luz artificiais e mesmo não sendo um usuário da Força é possivel usar a espada luminosa.
        </p>
        <p data-tilt class="lead"> 
          O sabre serve tanto para ataque quanto para defesa, há diversas formas de usá-los em combate e formatos(uma, duas e até três pontas), podem bloquear tiros de blasters, cortar praticamnete tudo e, claro, são extremamente letais. Até por esse motivo é mais comum ver apenas usuários 
          legítimos da Força os ultilizando, o que fez com que a arma se tornasse quase que a identificação de um usuário da Força.
        </p>
      </div>
      <!-- conteúdo parallax 11 -->
      <div class="parallax img11">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Que a Força esteja com você!</h1>
        </div>
      </div>
      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center mb-3">
            <li class="nav-item">
              <a class="nav-link px-2 text-muted" href="https://github.com/Gustavo-erades" target="_blank"><i class="fa-brands fa-github fa-bounce"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-2 text-muted">&copy; 2023 por Gustavo Êrades </a>
            </li>
          </ul>
          <div class="grid">
            <div class="row">
              <span id="span-footer-redes" class="col-xl-6">
                fale comigo: 
                <a href="https://www.linkedin.com/in/gustavo-%C3%AA-22a357231/" target="_blank" class="footer-redes"><i class="fa-brands fa-linkedin"></i></a>
                <a href="mailto:eradesvilarinho@gmail.com" target="_blank" class="footer-redes"><i class="fa-solid fa-envelope"></i></a>
              </span>
              <span id="span-footer-acessos" class="col-xl-6">
                <span>
                  <?=$quantidade?> acessos. 
                </span>
              </span>
            </div>
          </div>
        </footer>
      </div>
      <a href="#start" id="de_volta_ao_topo">&#9650;</a>
   </div>
    <!-- loading -->
    <div id="loading">
        <img src="./assets/imagens/icons8-r2d2-96.png" alt="Droide R2D2 passeando por aí">
        <blockquote>
            Carregando, por favor aguarde &#128512; 
        </blockquote>
    </div>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/loading.js"></script>
    <script src="./assets/js/vanilla-tilt.min.js"></script>
  </body>
</html>