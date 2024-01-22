<?php
  session_start();
  include_once($_SESSION["pathConBd"]);
  include_once($_SESSION["pathAcessos"]);
  require_once($_SESSION["pathPaginacao"]);
  include_once($_SESSION["path"].'app/helpers/objetos/objEpisodio2.php');
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css" media="all">
    <link rel="stylesheet" href="../assets/css/styleEpisodio2.css" media="all">
    <link rel="stylesheet" href="../assets/css/episodios.css" media="all">
    <link rel="stylesheet" href="../assets/css/responsividadeEpisodio.css" media="all">
    <link rel="stylesheet" href="../assets/css/styleLoading.css">
    <script src="https://kit.fontawesome.com/574d869779.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../assets/imagens/icone3.png" type="image/x-icon">
    <title>Star Wars- Episódio II</title>
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
      <!-- imagem parallax 1 -->
      <div class="parallax img1">
          <div class="conteudo-titulo">
              <h1 class="text-light">Episódio II</h1>
              <h1 class="titulo display-2">Ataque dos Clones</h1>
          </div>
      </div>
      <!-- conteúdo card 1-->
      <div class="container conteudo">
        <h2>Contexto</h2>
        <p data-tilt class="lead">
          Uma inquietação toma conta do Senado Galáctico. Milhares de sistemas solares declararam suas intenções em deixar a República. Esse movimento separatista, sob a liderança do misterioso Conde Dookan, tem criado dificuldades para o limitado número de Cavaleiros Jedi manter a paz e a ordem na galáxia. Senadora Amidala, a antiga rainha de Naboo, está retornando ao Senado Galáctico para a votação da proposta crítica de criação de um Exército da República para auxiliar os sobrecarregados Jedi....
        </p>
      </div>
      <!-- imagem parallax 2 -->
      <div class="parallax img3">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Protejam Padmé</h1>
        </div>
      </div>
      <!-- conteúdo card 3 -->
      <div class="container conteudo">
        <p data-tilt class="lead">
          A República Galáctica está em crise. Um movimento separatista (secretamente formado pelo ex-Jedi Conde Dookan) ameaçou a paz. A Senadora Padmé Amidala, ex-Rainha de Naboo, retorna ao Senado Galáctico para oferecer um voto contra a criação de um exército da República.
        </p>
        <p data-tilt class="lead">
          Naquela noite, uma misteriosa caçadora de recompensas, a mandaloriana Zam Wessel, faz um atentado à vida de Amidala e o Conselho Jedi pede a Obi-Wan para seguir a assassina. Enquanto isso, é dado a Anakin a tarefa de proteger a Senadora e escoltá-la de volta para seu planeta natal, Naboo. Anakin recebe bem a oportunidade e está contente de estar sozinho nessa missão. O Representante de Naboo, Jar Jar Binks, assume as tarefas da Senadora durante sua ausência.
        </p>
        <p data-tilt class="lead">
          Em sua chegada, mais uma tentativa de assassinato. Como resultado, o Supremo Chanceler Palpatine pede que os Jedi Obi-Wan Kenobi e Anakin Skywalker que protejam a senadora Amidala até a votação.
        </p>
      </div>
      <!-- conteúdo parallax 4 -->
      <div class="parallax img4">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Obi-Wan vs Jango Fett</h1>
        </div>
      </div>
      <!-- conteúdo card 4 -->
      <div class="container conteudo">
        <p data-tilt class="lead">
          Durante a investigação, Obi-Wan é levado para o misterioso planeta Kamino (que não estava nos arquivos da República), onde ele descobre um exército de clones secretamente sendo desenvolvidos para a República. Os nativos dizem que o exército foi pedido há dez anos antes por um Jedi chamado Zaifo Vias — considerado morto pelo Conselho Jedi. 
        </p>
        <p data-tilt>
          Um caçador de recompensas mandaloriano chamado Jango Fett foi contratado para ser a predefinição dos clones. Obi-Wan encontra Fett em Kamino, e acredita ser ele o assassino que procura. Depois de uma tentativa de captura falha de Obi-Wan, ele coloca um dispositivo de rastreamento em sua nave e o segue para o planeta Geonosis.
        </p>
        <p data-tilt class="lead">
          Em Geonosis, Obi-Wan escuta uma conversa entre Conde Dookan e o vice-rei Nute Gunray e descobre que eles estão por trás do movimento separatista e construíram um novo exército de droides. Ele também descobre que Gunray estava por trás da tentativa de assassinato de Padmé Amidala, como vingança da Batalha de Naboo. 
        </p>
        <p data-tilt>
          Obi-Wan manda uma mensagem gravada para o Conselho Jedi para informá-los sobre o que acabou de ouvir um pouco antes de ser capturado.
        </p>
      </div>
      <!-- conteúdo parallax 5 -->
      <div class="parallax img5">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Anakin e Padmé</h1>
        </div>
      </div>
      <!-- conteúdo card 5 -->
      <div class="container conteudo">
        <p data-tilt class="lead">
          Enquanto isso, Anakin e Padmé têm ficado muito tempo juntos em Naboo. Eles haviam se beijado em um dos primeiros dias no planeta e, numa noite, Anakin revela seu amor profundo por ela. Embora sentisse o mesmo por ele, Padmé resiste, dizendo que seria impossível os dois ficarem juntos, já que ela é uma Senadora e ele um Jedi. Anakin se revolta por isso, e experiencia um conflito interno sobre seu desejo por ela e seus deveres como Jedi.
        </p>
        <p data-tilt class="lead">
          Anakin também é perturbado por um sentimento que sua mãe está em perigo grave e parte para Tatooine com Padmé (desobedeçendo as ordens de Obi-Wan de ficar em Naboo). Ao chegar, ele descobre que sua mãe foi sequestrada um mês atrás pelos Tuskens. 
        </p>
        <p data-tilt>
          Anakin vai atrás dos Tuskens e encontra sua mãe, porém ela morre em seus braços ao ser acertada por um deles. Enraivado, o jedi mata toda a comunidade Tusken. 
        </p>
        <p data-tilt>
          De volta em Coruscant, Yoda sente uma grande escuridão na Força, vindo do jovem Skywalker.
        </p>
      </div>
      <!-- conteúdo parallax 6 -->
      <div class="parallax img6">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">A batalha de Geonosis</h1>
        </div>
      </div>
      <!-- conteúdo card 6 -->
      <div class="container conteudo">
          <p data-tilt class="lead">
            Agora que o Conselho Jedi sabe do exército de Dookan, o Jedi Mace Windu lidera uma equipe para Geonosis. Sem que eles soubessem, Anakin e Padmé também vão resgatar Obi-Wan. Enquanto isso, o Representante Binks pede para que Chanceler Palpatine tenha poderes de emergência, já que a existência do exército de droides foi descoberta pelo Senado e pode ser o prelúdio de uma guerra.
          </p>
          <p data-tilt class="lead">
            Anakin e Padmé chegam ao planeta, mas são rapidamente capturados e sentenciados à morte, junto à Obi-Wan. Antes de serem levados à arena para morrerem, Padmé admite a Anakin que o ama também. Durante a tentativa de fuga dos três, o Mestre Windu chega com seus Jedi, que batalham com os droides de Dookan. 
          </p>
          <p data-tilt class="lead">
            Mesmo com Windu matando Jango Fett, a derrota parecia iminente, porém Yoda chega com o novo Exército de clones da República. Uma grande batalha se inicia entre o exército de clones da República e as forças droides Separatistas.
          </p>
      </div>
      <!-- conteúdo parallax 8 -->
      <div class="parallax img8">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Yoda vs Darth Tyranus</h1>
        </div>
      </div>
      <!-- conteúdo card 8 -->
      <div class="container conteudo">
        <blockquote class="blockquote">
          "O lado negro a tudo obscurece. Prever o futuro impossível é"
          <footer class="blockquote-footer">
            <cite class="blockquote-cite">Yoda, Mestre Jedi</cite>
          </footer>
        </blockquote>
        <p data-tilt class="lead">
          Conde Dookan tenta escapar, mas Anakin e Obi-Wan o seguem até um hangar secreto, onde eles começam um combate. Infelizmente, eles não eram páreos para o conhecimento de Dookan da Força, que então machuca Obi-Wan e corta a mão direita de Anakin com o Sabre de luz. Yoda aparece bem na hora em que eles iam ser executados, e os dois mestres da Força entram num combate de sabres-de-luz.
        </p>
        <p data-tilt class="lead">
          Depois de Yoda se revelar superior, Dookan tenta derrubar uma pilastra nos dois Jedi caídos, e usa desta distração para fugir, enquanto Yoda usa a Força para tirar a pilastra de cima de Obi-Wan e Anakin.
        </p>
        <p data-tilt class="lead">
          De volta a Coruscant, Obi-Wan informa ao Conselho Jedi do aviso de Dookan que Darth Sidious está controlando o Senado. Yoda hesita ao acreditar nisso, alegando que o Lado Sombrio é capaz de criar medo e desconfiança. Ele e Windu decidem, no entanto, que devem ficar de olho no Senado.
        </p>
        <p data-tilt class="lead">
          Anakin e Padmé se casam secretamente em Naboo, apenas com R2-D2 e C-3PO como testemunhas, violando o código jedi.
        </p>
      </div>
      <!-- volta o parallax 1 -->
      <div class="parallax img2">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Produção</h1>
        </div>
      </div>
      <div class="container conteudo">
        <div class="grid" id="conteudoAPI">
          <div class="row">
            <div class="d-none d-lg-block col-lg-2">
              <img src="<?=$filme->getUrlImagem()?>" alt="poster star wars a ameaça fantasma" class="align-self-center" id="imagemEpisodio">
            </div>
            <div class="col-12 col-lg-10">
              <div class="row">
                <span class="col-4 spanAPI">
                  <h4 class="tituloAPI">Diretor</h4>
                  <p><?= $filme->getDiretor()?></p>
                </span>
                <span class="col-4 spanAPI">
                  <h4 class="tituloAPI">Roteirista</h4>
                  <p><?= $filme->getRoterista()?></p>
                </span>
                <span class="col-4 spanAPI">
                  <h4 class="tituloAPI">Atores</h4>
                  <?php
                    foreach($filme->getAtores() as $ator){
                      echo "<ul>";
                      echo "<li>".$ator."</li>";
                      echo "</ul>";
                    }
                  ?>
              </div>
              <div class="row">
                <span class="col-4 spanAPI">
                  <h4 class="tituloAPI">Bilheteria</h4>
                  <p><?= $filme->getBilheteria()?></p>
                </span>
                <span class="col-4 spanAPI">
                <h4 class="tituloAPI">Lançamento</h4>
                  <p><?= $filme->getDataLancamento()?></p>
                </span>
                </span>
                <span class="col-4 spanAPI">
                  <h4 class="tituloAPI">Duração</h4>
                  <p><?= $filme->getDuracao()?></p>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- parallax 1 -->
      <div class="parallax img2_1">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Avaliação</h1>
        </div>
      </div>
      <div class="container conteudo">
        <div class="grid" id="conteudoAPI">
          <div class="row">
            <span class="col-4 spanAPI">
              <h4 class="tituloAPI">IMDB</h4>
              <p><?= $filme->getNotaIMDB()?></p>
            </span>
            <span class="col-4 spanAPI">
              <h4 class="tituloAPI">Roten Tomatoes</h4>
              <p><?= $filme->getnotaRotenTomatoes()?></p>
            </span>
            <span class="col-4 spanAPI">
              <h4 class="tituloAPI">Metacritic</h4>
              <p><?= $filme->getnotaMetaCritica()?></p>
            </span>
          </div>
        </div>         
        <p class="lead">
          <?= $filme->getQtVotosIMDB()?> Votos no Internet Movie Database
        </p>
        <p class="lead">
          Código no Internet Movie Database: <?=$filme->getIdIMDB()?>
        </p>
        <p class="lead">
          <a href="https://www.imdb.com/title/<?=$filme->getIdIMDB()?>/" target="_blank" id="idIMDB">confira aqui a avaliação no IMDB desse filme</a>
        </p>
      </div>
      <div class="parallax img1">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Que a Força esteja com você!</h1>
        </div>
      </div>
      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center mb-3">
            <li class="nav-item">
              <a class="nav-link px-2 text-muted"
              href="https://github.com/Gustavo-erades" target="_blank"><i class="fa-brands fa-github fa-bounce"></i></a>
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
        <img src="../assets/imagens/icons8-r2d2-96.png" alt="Droide R2D2 passeando por aí">
        <blockquote>
            Carregando, por favor aguarde &#128512; 
        </blockquote>
    </div>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/loading.js"></script>
    <script src="../assets/js/vanilla-tilt.min.js"></script>
  </body>
</html>