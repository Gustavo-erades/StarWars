<?php
  include_once($_SESSION["pathConBd"]);
  include_once($_SESSION["pathAcessos"]);
  require_once($_SESSION["pathPaginacao"]);
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
    <link rel="stylesheet" href="./assets/css/styleCreditos.css">
    <script src="https://kit.fontawesome.com/574d869779.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./assets/imagens/icone5.png" type="image/x-icon">
    <title>Star Wars - Sobre</title>
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
          require_once($_SESSION["pathMenu"]);
        ?>
        <!-- fim da barra de navegação -->
      </div>
      <div class="cartaDev-sobre">
      <p class="lead">
                 Olá, me chamo Gustavo Êrades Vilarinho Silva e estou atualmente (2023) no quarto semestre do curso de Análise e Desenvolvimento de Sistemas. Esse site foi feito completamente por mim baseado no projeto final da matéria de desenvolvimento web que cursei no segundo semestre. O site foi construído com o uso da linguagem PHP, linguagem na qual estou buscando me especializar, além das tecnologias mais clichês da web: HTML, CSS, JavaScript e o framework Bootstrap. Esse projeto inclui consumo de API, conexão com banco de dados, uso de sessões e aplicação de conceitos de POO. Bem, segue o link do repositório do projeto com o código e demais detalhes técnicos: <a target="_blank" href="https://github.com/Gustavo-erades/StarWars">repositório</a>.
            </p>
            <p class="lead">
                Bom, sobre mim, gosto de jogar xadrez(<a target="_blank" href="https://lichess.org/@/VemTranquilovisk">lichess.org</a>), basquete, desenhar e, claro, programar. Amo café, o mundo geek de maneira geral e escutar música, principalmente rock (<a target="_blank" href="https://open.spotify.com/playlist/6eO31rfQ0aIGyGVUB1H7eK?si=aa8f0662fb594b84">spotify</a>). Fui voluntário na Campus Party 5 de Brasília e também na terceira edição de Goiás (ambas no ano de 2023), fui monitor da matéria de Desenvolvimento Web e adiquiri certa experiência em docência com isso.
            </p>
            <p class="lead">
                Atualmente estou focando meus estudos na parte back-end do desenvolvimento web e procurando ingressar no mercado de trabalho. Não sei ao certo o motivo pelo qual decidi trabalhar com programação, mas agora quero entrar de cabeça na área. Segue meu GitHub caso queira acompanhar meus futuros projetos: <a target="_blank" href="https://github.com/Gustavo-erades">meu GitHub</a>. Caso deseje entrar em contato comigo pode me <a target="_blank" href="mailto:eradesvilarinho@gmail.com">mandar um email</a> ou me encontrar no <a target="_blank" href="https://www.linkedin.com/in/gustavo-%C3%AA-22a357231/">Linkedin</a>.
            </p>
            <p class="lead">
                Bom, espero que tenha se divertido relembrando a história de Star Wars assim como me diverti e, caso esse seja seu primeiro contato com esse universo, seja bem vindo(a) fico feliz em poder te guiar nessa jornada pelo hiperespaço. Até um próximo projeto e que a força esteja com você!
            </p>
            <footer class="blockquote-footer centro">
              <cite class="blockquote-cite">Gustavo Êrades, o desenvolvedor, 2023</cite>
            </footer>
        </div>
        <!-- conteúdo parallax 11 -->
        <div class="parallax img1">
            <div class="conteudo-titulo">
            <h1 class="titulo display-2">Que a Força esteja com você!</h1>
            </div>
        </div>
        <div class="container">
          <footer class="py-3 my-4">
            <?php
              require_once($_SESSION["pathFooter"]);
            ?>
          </footer>
        </div>
        <a href="#start" id="de_volta_ao_topo">&#9650;</a>
    </div>
    <!-- loading -->
    <div id="loading">
       <?php
          require_once($_SESSION["pathLoad"]);
       ?>
    </div>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/loading.js"></script>
  </body>
</html>