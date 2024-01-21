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
        <?php
          require_once("../menu.php");
        ?>
        <!-- fim da barra de navegação -->
      </div>
      <div class="cartaDev-sobre">
            <p class="lead">
                "Olá padawan, agradeço por ter me acompanhado durante essa longa tragetória pela galáxia. Aqui dou os devidos créditos àqueles que me ajudaram a contar a história de uma galáxia distante de maneira resumida, interessante e bonita visualmente. Dou os créditos ainda aos sites de onde retirei os textos e demais dados utilizados durante a construção desse projeto. Saiba, leitor, que esse site nada mais é do que um espécie de "reboot" do projeto final da matéria de Desenvolvimento Web do curso de Análise e Desenvolviento de Sistemas, feito no meu segundo semestre, no ano de 2022. Caso, por curiosidade, queira conferir a primeira versão desse projeto basta <a href="https://gustavo-erades.github.io/Site-StarWars-AneisDePoder/Index.html"> clicar aqui</a>. Espero que acompanhar essa história tenha sido tão prazeroso para você quanto foi para mim desenvolver. Esse projeto me custou tempo e pôs minhas habilidades sobre desenvolvimento web (e conhecimento sobre o vasto universo de Star Wars) a prova! Espero que tenha valido a pena. Bem, no rodapé dessa página há links para meu GitHub e demais redes sociais, te aguardo em uma próxima jornada padawan, quem sabe nos vejemos de novo caso haja algum <em>Despertar da Força</em>..."
            </p>
            <footer class="blockquote-footer centro">
                <cite class="blockquote-cite">Gustavo Êrades, o desenvolvedor, 2023</cite>
            </footer>
        </div>
      <!-- imagem parallax 2 -->
      <div class="parallax img1">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Textos</h1>
        </div>
      </div>
      <!-- conteúdo card 2-->
      <div class="container conteudo">
        <p class="lead">
            Todos os textos de todos os episódios e da página de Home desse trabalho foram retirados da página de fãs do Star Wars, analisados e reescritos por mim para depois serem colocados na página web. na aba de Links, Há um link para a página do site Star Wars Fandom.
        </p>
      </div>
      <!-- imagem parallax 3 -->
      <div class="parallax img1">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Imagens</h1>
        </div>
      </div>
      <!-- conteúdo card 3 -->
      <div class="container conteudo">
        <p class="lead">
            As imagens utilizadas vinheram, em suma maioria, do Google imagens e da API "omdbapi". Quanto aos ícones, viheram do site Icons8, Favicon e FontAwesome. Na seção "Links", há links direcionados a esses sites.
        </p>
        <p class="lead">
            OBS: há uma API gratuita e referente especificamente a Star Wars, ela é bem detalhada e dá informações sobre as produções, atores e personagens. No entanto, optei por nã usá-la devida a lentidão que o site tinha com o uso dessa API. Na seção "Links" há um link direcionado a essa API.
        </p>
      </div>
      <!-- conteúdo parallax 4 -->
      <div class="parallax img1">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Vídeos e fontes</h1>
        </div>
      </div>
      <!-- conteúdo card 4 -->
      <div class="container conteudo">
        <p class="lead">
            Os Gifs utilizados no site foram todos retirados do Google e são apenas links para tais gifs, portanto peço que, caso haja algum erro no background que continha esses gifs, entre em contato comigo para que possa resolver o problema (no rodapé dessa página há meu email para entrar em contato). As fontes vinheram do site DaFonte. Na seção "Links" há um link que redireciona para o "Dafont.com". 
        </p>
      </div>
       <!-- conteúdo parallax 7 -->
       <div class="parallax img1">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">A equipe anterior</h1>
        </div>
      </div>
      <!-- conteúdo card 7 -->
      <div class="container conteudo">
        <p class="lead">
            Esse projeto, inicialmente, era o projeto final da matéria de Desenvolvimento Web da faculdade e portanto havia um grupo, composto por 4 pessoas e orientados por um professor, que desenvolveu a primeira versão desse site. <a href="https://github.com/GustavoAdornelas" target="_blank">Gustavo Emanoel</a>, <a href="https://github.com/Gustavo-erades" target="_blank">Gustavo Êrades</a>, <a href="https://github.com/Aluno18" target="_blank">Victor Samuel</a> e Vinícius Fernades orientados pelo professor <a href="https://buscatextual.cnpq.br/buscatextual/visualizacv.do;jsessionid=5DF24C44E8A612F0451DD4DCD829B871.buscatextual_0" target="_blank">Lucas Maurício Martins</a>, eram os integrantes desse grupo.
        </p>
      </div>
      <!-- conteúdo parallax 6 -->
      <div class="parallax img1">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Links</h1>
        </div>
      </div>
      <!-- conteúdo card 6 -->
      <div class="container conteudo">
        <ul class="lead">
          <li> 
            <a target="_blank" href="https://www.omdbapi.com/">
              API omdbapi
            </a>  
          </li>
          <li> 
            <a target="_blank" href="https://swapi.dev/">
              API swapi
            </a>  
          </li>
          <li> 
            <a target="_blank" href="https://micku7zu.github.io/vanilla-tilt.js/">
              Vanilla Js
            </a>  
          </li>
          <li> 
            <a target="_blank" href="https://getbootstrap.com/">
              Bootstrap
            </a>  
          </li>
          <li>
             <a target="_blank" href="https://fontawesome.com/search?q=starwars&o=r">
              FontAwesome
            </a>  
          </li>
          <li>
             <a target="_blank" href="https://icons8.com/icons/set/Star-wars">
              Icons8
            </a> 
          </li>
          <li> 
            <a target="_blank" href="https://html-css-js.com/html/character-codes/">
              entidades HTML
            </a>  
          </li>
          <li>
            <a target="_blank" href="https://www.dafont.com/pt/sf-distant-symbols.font">
              Dafont
            </a>
          </li>
          <li>
            <a target="_blank" href="https://github.com/Gustavo-erades/StarWars">
              Repositório GitHub
            </a>
          </li>
        </ul>
      </div>
      <!-- conteúdo parallax 8 -->
      <div class="parallax img1">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Em memória de</h1>
        </div>
      </div>
      <!-- conteúdo card 8 -->
      <div class="container conteudo">
        <blockquote class="blockquote">
            "Morte é uma parte natural da vida. Alegre-se para aqueles à sua volta que se transformam na Força."
            <footer class="blockquote-footer">
                <cite class="blockquote-cite">Yoda, Mestre Jedi</cite>
            </footer>
        </blockquote>
        <p class="lead">
            A maior parte desse trabalho (primeira versão do site), se não todo, foi feita em colaboração com Vinícius Fernandes. Ele melhorou o design, trouxe novas ideias, modernizou o site, desenvolveu algumas páginas de episódios, liderou a equipe e, principalmente, foi meu amigo. Convivemos por pouco tempo. Começamos o curso de Análise e Desenvolvimento de Sistemas juntos, mas só realmente nos aproximamos durante o segundo semestre. Entre xadrez, brawhalla, código e conversas aleatórias fomos nos tornando amigos. Infelizmente, no final do ano de 2022 ele descobriu um câncer.
        </p>
        <p class="lead">
          No dia 9 de novembro de 2023, aproximadamente às quatro da manhã, perdi meu amigo.  Realmente me diverti refazendo esse site do zero (agora com bem mais experiência), mas esse projeto tem uma finalidade, ou melhor, um destinatário. Não estávamos nos falando tanto, e não nos viamos há algum tempo. Decidi refazer o projeto que fizemos juntos no segundo semestre para que pudéssemos nos reencontrar e conversar mais vezes, mas nem sempre tudo acontece como esperamos, não é? Bem, dedico cada linha de código, imagem, texto e horas não dormidas a você Vini. Sinto sua falta, mas sei que vamos nos encontrar novamente, afinal você me deve uma revanche no xadrez!  Que a força esteja contigo e também com você, caro leitor, que chegou até aqui.
        </p>
        <div class="centro">
            <img src="../imagens/vini.jpg" alt="Em memória de Vinícius Fernandes Pereira Alves" width="250px">
            <p class="lead centro">23/02/1997 - 09/11/2023</p>
        </div>
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
    <script src="../js/ativaMenu.js"></script>
  </body>
</html>