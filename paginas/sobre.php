<?php
  session_start();
  include_once("../conexaoBd/conexao.php");
  include_once("../funcoesPHP/gerenciarAcessos.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css" media="all">
    <link rel="stylesheet" href="../css/responsividade.css" media="all">
    <link rel="stylesheet" href="../css/styleLoading.css">
    <link rel="stylesheet" href="../css/styleCreditos.css">
    <script src="https://kit.fontawesome.com/574d869779.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../imagens/icone5.png" type="image/x-icon">
    <title>Star Wars - Créditos</title>
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
        <ul class="nav nav-pills justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle bg-transparent" data-toggle="dropdown" >Episódios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../episodios/episodio1.php">Episódio I</a>
              <a class="dropdown-item" href="../episodios/episodio2.php">Episódio II</a>
              <a class="dropdown-item"  href="../episodios/episodio3.php">Episódio III</a>
              <a href="../erro404.html" class="dropdown-item">Episódio IV</a>
              <a href="../erro404.html" class="dropdown-item">Episódio V</a>
              <a href="../erro404.html" class="dropdown-item">Episódio VI</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="creditos.php" class="nav-link">Créditos</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">Sobre</a>
          </li>
        </ul><!-- fim da barra de navegação -->
      </div>
      <div class="parallax img1 cartaDev">
            <p class="lead">
                Olá, me chamo Gustavo Êrades Vilarinho Silva e estou atualmente (2023) no quarto semestre do curso de Análise e Desenvolvimento de Sistemas. Esse site foi feito completamente por mim baseado no projeto final da matéria de desenvolvimento web que cursei no segundo semestre. O site foi construído com o uso da linguagem PHP, linguagem na qual estou buscando me especializar, além das tecnologias mais clichês da web: HTML, CSS, JavaScript e o framework Bootstrap. Esse projeto inclui consumo de API (omdbapi), conexão com banco de dados (MySQL), uso de sessões (para contagem de acessos à página) e aplicação de conceitos de POO. A API usada foi escolhida por conta da sua velocidade em relação a swapi (que é uma API específica de Star Wars), como SGBD foi utilizado o MySql na implementação, mas no momento da hospedagem o banco foi migrado para o PHPMyAdmin. Bem, segue o link do repositório do projeto com o código e demais detalhes técnicos: <a target="_blank" href="https://github.com/Gustavo-erades/StarWars">repositório</a>.
            </p>
            <p class="lead">
                Bom, sobre mim, gosto de jogar xadrez(<a target="_blank" href="https://lichess.org/@/VemTranquilovisk">lichess.org</a>), basquete, desenhar e, claro, programar. Amo café, o mundo geek de maneira geral e escutar música, principalmente rock (<a target="_blank" href="https://open.spotify.com/playlist/6eO31rfQ0aIGyGVUB1H7eK?si=aa8f0662fb594b84">spotify</a>). Fui voluntário na Campus Party 5 de Brasília e também na terceira edição de Goiás (ambas no ano de 2023), fui monitor da matéria de Desenvolvimento Web e adiquiri certa experiência em docência com isso.
            </p>
            <p class="lead">
                Atualmente estou focando meus estudos na parte back-end do desenvolvimento web e procurando ingressar no mercado de trabalho. Não sei ao certo o motivo pelo qual decidi trabalhar com programação, mas agora quero entrar de cabeça na área, segue meu GitHub caso queira acompanhar meus futuros projetos: <a target="_blank" href="https://github.com/Gustavo-erades">meu GitHub</a>. Caso deseje entrar em contato comigo pode me <a target="_blank" href="mailto:eradesvilarinho@gmail.com">mandar um email</a> ou me encontrar no <a target="_blank" href="https://www.linkedin.com/in/gustavo-%C3%AA-22a357231/">Linkedin</a>.
            </p>
            <p class="lead">
                Bom, espero que tenha se divertido relembrando a história de Star Wars assim como me diverti e, caso esse seja seu primeiro contato com esse universo, seja bem vindo(a) fico feliz em poder te guiar nessa jornada pelo hiperespaço. Até um próximo projeto e que a força esteja com você!
            </p>
        </div>
        <!-- conteúdo parallax 11 -->
        <div class="parallax img1">
            <div class="conteudo-titulo">
            <h1 class="titulo display-2">Que a Força esteja com você!</h1>
            </div>
        </div>
        <div class="container">
            <footer class="py-3 my-4">
            <ul class="nav justify-content-center mb-3">
                <li class="nav-item">
                <a class="nav-link px-2 text-muted" href="https://github.com/Gustavo-erades" target="_blank"><i class="fa-brands fa-github fa-bounce" style="font-size:2.5em"></i></a>
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
                        <?php $quantidade?> acessos. 
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
        <img src="../imagens/icons8-r2d2-96.png" alt="Droide R2D2 passeando por aí">
        <blockquote>
            Carregando, por favor aguarde &#128512; 
        </blockquote>
    </div>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/loading.js"></script>
  </body>
</html>