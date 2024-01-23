<?php
  include_once($_SESSION["pathConBd"]);
  include_once($_SESSION["pathAcessos"]);
  require_once($_SESSION["pathPaginacao"]);
  include_once($_SESSION["path"].'app/helpers/objetos/objEpisodio1.php');
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css" media="all">
    <link rel="stylesheet" href="../assets/css/styleEpisodio1.css" media="all">
    <link rel="stylesheet" href="../assets/css/episodios.css" media="all">
    <link rel="stylesheet" href="../assets/css/responsividadeEpisodio.css" media="all">
    <link rel="stylesheet" href="../assets/css/styleLoading.css">
    <script src="https://kit.fontawesome.com/574d869779.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../assets/imagens/icone3.png" type="image/x-icon">
    <title>Star Wars- Episódio I</title>
  </head>
  <body>
    <div id="preload">
      <!-- imagem parallax 1 -->
      <div class="parallax img1 preload" id="start">
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
      <div class="parallax img1  preload">
          <div class="conteudo-titulo">
              <h1 class="text-light">Episódio I</h1>
              <h1 class="titulo display-2">A ameaça fantasma</h1>
          </div>
      </div>
      <!-- conteúdo card 1-->
      <div class="container conteudo  preload">
        <h2>Contexto</h2>
        <p data-tilt class="lead">
          A República Galáctica está em grande tumulto. Em disputa estão os impostos sobre as rotas comerciais para os sistemas estelares exteriores. Na esperança de resolver o assunto com um bloqueio de implacáveis naves de guerra, a gananciosa federação de comércio interrompe todos os carregamentos para o pequeno planeta Naboo. Enquanto o Congresso da República debate incessantemente esta alarmante cadeia de acontecimentos, o Supremo Chanceler mandava secretamente dois Cavaleiros Jedi, guardiões da paz e da justiça na galáxia, para resolver o conflito.
        </p>
      </div>
      <!-- imagem parallax 2 -->
      <div class="parallax img3  preload">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Morte aos jedis</h1>
        </div>
      </div>
      <!-- conteúdo card 3 -->
      <div class="container conteudo  preload">
        <p data-tilt class="lead">
          O ano 32 ABY é marcado pela disputa comercial entre a Federação de Comércio e o Planeta Naboo que se encontra bloqueado para fins comerciais. Na tentativa de resolver o conflito Chanceler Finis Valorum da República Galáctica secretamente envia dois Jedi, Qui-Gon Jinn e seu Padawan Obi-Wan Kenobi, como embaixadores à nave-capitânia Saak'ak para encontrar com o Vice-rei da Federação de Comércio Nute Gunray.
        </p>
        <blockquote class="blockquote">
          "Estou com um mal pressentimento. Não tem a ver com a missão, mestre. É uma coisa...no ar...indefinível."
          <footer class="blockquote-footer">
            <cite class="blockquote-cite"> Kenobi, Obi-Wan</cite>
          </footer>
        </blockquote>
        <p data-tilt class="lead">
          A mando do misterioso Darth Sidious, com quem mantém relação secreta, a Federação de Comércio ordena a morte dos dois Jedi e inicia a invasão ao planeta Naboo. Assim, a nave dos embaixadores, a Radiant VII, é destruída. Qui-Gon e Obi-Wan escapam da tentativa de assassinato da Federação enfrentando droides de batalha, mas se vêem obrigados a fugir para Naboo.
        </p>
      </div>
      <!-- conteúdo parallax 4 -->
      <div class="parallax img4  preload">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Um novo companheiro</h1>
        </div>
      </div>
      <!-- conteúdo card 4 -->
      <div class="container conteudo  preload">
        <p data-tilt class="lead">
          Na superfície do planeta, os Jedi encontram o nativo local Jar Jar Binks, após ter sua vida salva por Qui-Gon, os leva para Otoh Gunga, uma cidade Gungan debaixo d'água, para escapar do exército da Federação de Comércio. Enquanto isso, a Federação invade Naboo e captura a líder do planeta, a Rainha Amidala. Os Jedi têm uma audiência com o líder Gungan, Rugor Nass, e pedem o apoio dos Gungans para ajudar as pessoas de Naboo. Sem muita disposição para ajudar, oferece apenas um bongo para que os Jedi cheguem à Theed. 
        </p>
        <p data-tilt class="lead">
          Ao chegarem à capital de Naboo, os Jedi, acompanhados de Jar Jar Binks, resgatam a Rainha Amidala do exército da Federação de Comércio. Eles planejam ir até Coruscant, o planeta capital da República Galáctica, para pedir ajuda ao Senado.
        </p>
      </div>
      <!-- conteúdo parallax 5 -->
      <div class="parallax img5  preload">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Pequeno Anakin</h1>
        </div>
      </div>
      <!-- conteúdo card 5 -->
      <div class="container conteudo  preload">
        <p data-tilt class="lead">
          A nave da Rainha sofre danos graves ao tentar furar o bloqueio da Federação de Comércio que orbita Naboo. No entanto um droide chamado R2-D2 heroicamente consegue fazer reparos suficientes, possibilitando a entrada no hiper-espaço. Ao saber da fuga, Darth Sidious envia seu aprendiz, Darth Maul, para matar os dois Jedi e recapturar a Rainha.
        </p>
        <p data-tilt class="lead">
          Devido ao ataque, a nave é forçada a fazer escala no planeta deserto de Tatooine para reparos. Enquanto procuram pelas partes necessárias, eles fazem amizade com o pequeno Anakin Skywalker, um garoto escravo, cujo mestre é Watto, um Toydariano dono de um ferro-velho. Anakin tem dons para pilotagem e mecânica (ele construiu quase completamente um droide chamado C-3PO). Qui-Gon Jinn sente uma forte presença da Força em Anakin, e percebe que ele pode ser o Escolhido, que irá trazer equilíbrio à Força.
        </p>
        <p data-tilt class="lead">
          Ao inscrever Anakin numa corrida de pods, Qui-Gon faz uma aposta com Watto, na qual fica acertado que, caso o garoto vença a corrida, o Toydariano concederia as peças necessárias para o conserto da nave e libertaria Anakin. Se o menino perdesse, a nave seria de Watto. Com a vitória de Anakin, Qui-Gon conversa com a mãe de Anakin sobre as habilidades do garoto e ela acaba autorizando que o filho vá para Coruscant, para ser apresentado ao Conselho Jedi.
        </p>
      </div>
      <!-- conteúdo parallax 6 -->
      <div class="parallax img6  preload">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Conselho Jedi</h1>
        </div>
      </div>
      <!-- conteúdo card 6 -->
      <div class="container conteudo preload">
          <p data-tilt class="lead">
            Em Coruscant, Qui-Gon Jinn informa ao Conselho Jedi sobre o misterioso ataque sofrido por ele em Tatooine. Devido ao fato do atacante ter profundos conhecimento da Força, o Conselho teme que esse acontecimento indique o reaparecimento dos Sith, uma ordem de seguidores do Lado Sombrio da Força que todos pensavam haver se extinguido há tempos. Qui-Gon também relata ao Conselho o encontro com Anakin, na esperança que este seja aceito para o treinamento Jedi. 
          </p>
          <p data-tilt class="lead">
            Após os testes com o jovem Skywalker e deliberações a respeito, o Conselho nega permissão para treinamento alegando que, de acordo com o Código Jedi, Anakin é muito velho para ser treinado. A decisão também levou em consideração o sentimento de medo no garoto.
          </p>
      </div>
      <!-- conteúdo parallax 7 -->
      <div class="parallax img7  preload">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Padmé Amidala</h1>
        </div>
      </div>
      <!-- conteúdo card 7 -->
      <div class="container conteudo  preload">
        <p data-tilt class="lead">
          Sem ver nenhuma outra alternativa e, dada sua frustração com a falta de atitude do Senado, a Rainha decide retornar ao seu planeta natal para repelir a invasão ao lado de seu povo. Os dois Jedi são designados para acompanhar a Rainha de volta para Naboo, tanto para protegê-la como para tentar obter mais informações sobre o possível envolvimento dos Sith. 
        </p>
        <p data-tilt class="lead">
          De volta a Naboo, Rainha Amidala consegue convencer os Gungans a formarem uma aliança e lutarem juntos contra a Federação de Comércio. Os Gungans se defendem da artilharia dos droides usando o escudo de tecnologia Gungan. 
        </p>
        <p data-tilt class="lead">
          Porém os droides de batalha entram em ação e começam a subjugar os Gungans. A derrota para a aliança parece iminente. Mas a vitória é conseguida quando o pequeno Anakin Skywalker acidentalmente pilota um caça em meio a batalha na órbita de Naboo e destrói a Nave de Comando dos Droides da Federação, desativando o exército de droides. Enquanto isso, a Rainha Amidala e sua frota invadem o palácio e capturam Nute Gunray.
        </p>
      </div>
      <!-- conteúdo parallax 8 -->
      <div class="parallax img8  preload">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Darth Maul</h1>
        </div>
      </div>
      <!-- conteúdo card 8 -->
      <div class="container conteudo preload">
        <p data-tilt class="lead">
          Ao mesmo tempo, Darth Maul entrou em combate com Qui-Gon e Obi-Wan usando seu sabre de luz duplo. Durante a luta, Obi-Wan acaba se separando de seu mestre pelo campo de Força na entrada da sala de geradores. Jinn e o Sith continuam sua batalha observados por Obi-Wan. 
        </p>
        <p data-tilt class="lead">
          Em meio ao confronto, Maul atinge Qui-Gon Jinn no rosto e, aproveitando o atordoamento de seu adversário, acerta-o no peito com o sabre de luz, ferindo-o mortalmente. Obi-Wan luta com Darth Maul vigorosamente, conseguindo, inclusive, partir o sabre-duplo de Maul ao meio. 
        </p>
        <p data-tilt class="lead">
          O sith e o padawan lutam na sala de geradores com ataques mortais, mas Obi-Wan Kenobi sai vitorioso ao cortar Darth Maul ao meio e deixar que seu cadáver caia num poço profundo no centro da sala. Qui-Gon, em suas últimas palavras antes de partir, pede que Obi-Wan treine Anakin e faça dele um jedi.
        </p>
      </div>
      <!-- conteúdo parallax 9 -->
      <div class="parallax img9 preload">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Surge um novo jedi</h1>
        </div>
      </div>
      <!-- conteúdo card 9 -->
      <div class="container conteudo preload">
        <blockquote class="blockquote">
          "Sempre dois há somente, um mestre e um aprendiz"
          <footer class="blockquote-footer">
            <cite class="blockquote-cite">Yoda, Mestre Jedi</cite>
          </footer>
        </blockquote>
        <p data-tilt class="lead">
          Após a batalha, na qual derrotou sozinho um Sith, o Conselho Jedi nomeou Obi-Wan como um Cavaleiro Jedi. Kenobi informa para Yoda sobre o pedido de Qui-Gon acerca do jovem Anakin Skywalker. O Mestre Jedi relutantemente o permite treinar o garoto. Durante a cerimônia de cremação do corpo de Qui-Gon Jinn, Mace Windu e Yoda concordam que o incidente foi definitivamente causado pelos Sith. 
        </p>
        <p data-tilt class="lead">
          Yoda e Mace Windu, dois mestres jedi experientes, têm um mal pressentimenteo sobre o futuro da galáxia e acreditam que há mais usuários do lado sombrio da Força a serem descobertos. 
        </p>
        <p data-tilt class="lead">
          Palpatine, o recém-eleito novo Chanceler, chega à Naboo para parabenizar a Rainha Amidala em sua vitória contra a Federação, enquanto Nute Gunray é mandado para ser sentenciado por seus crimes.
        </p>
      </div>
      <!-- volta o parallax 1 -->
      <div class="parallax img2  preload">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Produção</h1>
        </div>
      </div>
      <div class="container conteudo  preload">
        <div class="grid" id="conteudoAPI">
          <div class="row">
            <div class="d-none d-lg-block   col-lg-2">
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
      <div class="parallax img2_1  preload">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Avaliação</h1>
        </div>
      </div>
      <div class="container conteudo  preload">
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
      <div class="parallax img1  preload">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Que a Força esteja com você!</h1>
        </div>
      </div>
      <div class="container  preload">
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
        <blockquote style="font-size: 1.3em;">
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