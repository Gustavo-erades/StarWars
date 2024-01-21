<?php
  session_start();
  include_once("../app/database/conexaoBd/conexao.php");
  include_once("../app/helpers/funcoesPHP/gerenciarAcessos.php");
  include_once("../app/helpers/objetos/objEpisodio3.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css" media="all">
    <link rel="stylesheet" href="../assets/css/styleEpisodio3.css" media="all">
    <link rel="stylesheet" href="../assets/css/episodios.css" media="all">
    <link rel="stylesheet" href="../assets/css/responsividadeEpisodio.css" media="all">
    <link rel="stylesheet" href="../assets/css/styleLoading.css">
    <script src="https://kit.fontawesome.com/574d869779.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../assets/imagens/icone3.png" type="image/x-icon">
    <title>Star Wars- Episódio III</title>
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
      <!-- imagem parallax 1 -->
      <div class="parallax img1">
          <div class="conteudo-titulo">
              <h1 class="text-light">Episódio III</h1>
              <h1 class="titulo display-2">A Vingança de Sith</h1>
          </div>
      </div>
      <!-- conteúdo card 1-->
      <div class="container conteudo">
        <h2>Contexto</h2>
        <p data-tilt class="lead">
          Guerra! A República está desmoronando sob o ataque do impiedoso Lord Sith, Conde Dookan. Há heróis de ambos os lados. O Mal está por toda parte. Em uma manobra surpreendente, o diabólico líder Droide, General Grievous, invadiu a capital da República e sequestrou o Chanceler Palpatine, Líder do Senado Galáctico. Enquanto o Exército Separatista de Droides tenta escapar da capital sitiada com seu valioso refém, dois cavaleiros Jedi lideram uma missão desesperada para resgatar o Chanceler preso....
        </p>
      </div>
      <!-- imagem parallax 2 -->
      <div class="parallax img3">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Batalha sobre Coruscant</h1>
        </div>
      </div>
      <!-- conteúdo card 3 -->
      <div class="container conteudo">
        <p data-tilt class="lead">
          A República Galáctica está em meio a uma guerra épica com a Confederação de Sistemas Independentes sob a liderança do Lorde Sith Dookan. O lider cibórgue do Exército da Confederação, General Grievous se infiltrou em Coruscant e capturou o Supremo Chanceler Palpatine, líder do Senado Galáctico.
        </p>
        <p data-tilt class="lead">
          Enquanto o Exército Droide tenta fugir de Coruscant, uma grande batalha espacial irrompe com os Cavaleiros Jedi Anakin Skywalker e Obi-Wan Kenobi liderando uma missão para resgatar o Chanceler. No processo, o caça de Obi-Wan é danificado por droides buzz e Anakin, que tenta atirar neles para expulsá-los, apenas faz a situação ficar pior. Ele consegue salvar Obi-Wan e os dois Jedi fazem um pouso de emergência no hangar do Cruzador da Federação de Comércio Mão Invisível, a nave-capitânia dos Separatistas.
        </p>
        <p data-tilt class="lead">
          Auxiliados por R2-D2, Anakin e Obi-Wan progridem pelos corredores lutando com um exército de super droides de batalha no caminho.
        </p>
      </div>
      <!-- conteúdo parallax 4 -->
      <div class="parallax img4">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Resgatando o Chanceler</h1>
        </div>
      </div>
      <!-- conteúdo card 4 -->
      <div class="container conteudo">
        <p data-tilt class="lead">
          Os Jedi chegam até o Quartel do General, encontrando o capturado Chanceler Palpatine. Eles confrontam Dookan, em um duelo de sabres. Durante a batalha, Obi-Wan fica inconsciente após um ataque com a Força de Dookan.
        </p>
        <p data-tilt class="lead">
          Anakin continua o duelo e consegue cortar a mão de Dookan e pegar o sabre do Lorde Sith. Com Dookan de joelhos, Anakin, após muito encorajamento de Palpatine, decapita o Conde.
        </p>
        <p data-tilt class="lead">
          Uma explosão ocorre na parte traseira da nave, trazida pelo ataque do Destróier Estelar classe Venator Guarlara, causando a Mão Invisível uma descida incontrolável em Coruscant. Mesmo sendo persuardido por Palpatine a deixar seu mestre, Anakin carrega Kenobi nas costas e protege o Chanceler ao mesmo tempo. Pouco depois Obi-Wan recupera a consciência.
        </p>
      </div>
      <!-- conteúdo parallax 5 -->
      <div class="parallax img5">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Confrontando Grievous</h1>
        </div>
      </div>
      <!-- conteúdo card 5 -->
      <div class="container conteudo">
        <p data-tilt class="lead">
          Após Grievous e a equipe de comando recuperarem o controle da nave utilizando os propulsores de emergência, ele ordena que os dois Jedi e seus companheiros sejam capturados. Ele ativou uma armadilha de Escudos de Raio, que faz eles serem capturados e levados à ponte sob custódia. Mas R2 cria uma distração, ganhando tempo suficiente para os Jedi recuperarem seus sabres e se libertarem.
        </p>
        <p data-tilt class="lead">
          Grievous então manda seus MagnaGuardas IG-100 atrás dos Jedi. Obi-Wan rapidamente decapita um deles com sua lâmina, mas o droide continua. Obi-Wan ataca-o novamente e o droide entra em colapso. Anakin cuida dos droides de batalha que estavam levando Palpatine. Então, os Jedi se aproximam de Grievous, mas ele quebra o vidro com a Barra Elétrica de seu guarda e é levado para fora. Usando um cabo, ele retorna para a nave e usa um Pod de emergência.Lançando todas as outras capsulas, ele foge para uma das naves da Federação. 
        </p>
        <p data-tilt class="lead">
          Mais uma vez, a nave começa a cair numa queda-livre na órbita de Coruscant. Anakin toma o controle e a pilota, ajudado por speeders de emergência, tentando pousá-la em uma das plataformas de pouso industriais de Coruscant.
        </p>
      </div>
      <!-- conteúdo parallax 6 -->
      <div class="parallax img6">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Reuniões</h1>
        </div>
      </div>
      <!-- conteúdo card 6 -->
      <div class="container conteudo">
          <p data-tilt class="lead">
              Em Coruscant, Anakin é elogiado por seu heroismo. Ele se encontra secretamente com a Senadora Padmé Amidala, e eles dividem beijos na sombra, mantendo seu amor em segredo. Ela lhe revela que está grávida. 
          </p>
          <p data-tilt class="lead">
            Mais tarde, Anakin acorda em pânico, coberto de suor. Ele conta a Padmé que esteve sonhando com ela morrendo durante o parto, e promete que não deixará que este sonho se torne realidade.
          </p>
          <p data-tilt class="lead">
              Palpatine solicita a presença de Anakin e eles se encontram no Escritório do Chanceler em Coruscant. O Senado garantiu ao Chanceler mais poderes de emergência na guerra, dando controle direto para ele do Conselho Jedi. Palpatine confessa a Anakin seu medo, desconfiança e descaso com os Jedi. Ele aponta Anakin para ser seu representante pessoal no Conselho Jedi.
          </p>
          <p data-tilt class="lead">
              O Conselho aceita o apontamento de Anakin, mas não lhe concede o nível de Mestre. Anakin reage com raiva, insistindo que ele é mais poderoso que qualquer um no Conselho.
          </p>
          <p data-tilt class="lead">
              Mais tarde, Obi-Wan avisa para Anakin que o Conselho quer que ele espione o Chanceler e avise sobre todos os seus passos. Anakin fica confuso, pois é leal ao Chanceler e amigo de Kenobi.
          </p>
      </div>
      <!-- conteúdo parallax 8 -->
      <div class="parallax img7">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">A tragédia de Darth Plagueis</h1>
        </div>
      </div>
      <!-- conteúdo card 8 -->
      <div class="container conteudo">
        <blockquote class="blockquote">
          "O lado sombrio é o caminho para várias habilidades que alguns consideram como não-naturais."
          <footer class="blockquote-footer">
            <cite class="blockquote-cite">Chanceler, Palpatine</cite>
          </footer>
        </blockquote>
        <p data-tilt class="lead">
          Na Casa de Ópera Galáxias, no Distrito Uscru, Anakin se junta a Palpatine e assiste o Ballet Mon Calamari apresentar "Squid Lake". Palpatine continua a seduzir Anakin para o lado sombrio, fazendo com que ele desconfie dos Jedi dizendo que a Ordem quer dar um golpe na República e tomar seu lugar. 
        </p>
        <p data-tilt class="lead">
          Palpatine conta a história de Darth Plagueis, um Lorde Sith que usava a Força para driblar morte e que foi morto por seu aprendiz enquanto dormia. Quando Anakin pergunta se é possível aprender o poder de parar a morte, Palpatine simplesmente responde: "Não como um Jedi", alienando Anakin ainda mais da Ordem Jedi.
        </p>
        <p data-tilt class="lead">
          Palpatine também informa Anakin que suas fontes descobriram a localização do General Grievous, no planeta de Utapau. Anakin repassa esta informação para o Conselho Jedi, que decide enviar Obi-Wan para investigar. Anakin expressa seu interesse em ir, mas o Conselho insiste que alguém com mais experiência é necessário para confrontar Grievous.
        </p>
      </div>
      <div class="parallax img8">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Obi-Wan vs Grievous</h1>
        </div>
      </div>
      <div class="container conteudo">
        <blockquote class="blockquote">
          "Se você deseja se transformar em um líder sábio e completo, deve abraçar uma visão mais ampla, não apenas uma única visão dogmática."
          <footer class="blockquote-footer">
            <cite class="blockquote-cite">Chanceler, Palpatine</cite>
          </footer>
        </blockquote>
        <p data-tilt class="lead">
          Obi-Wan chega em Utapau, e começa sua procura por General Grievous, montado num varáctil chamado Boga. Ele encontra Grievous no Décimo nível e os dois começam um combate pessoal, com Grievous usando quatro sabres-de-luz de uma só vez. Obi-Wan rapidamente corta duas mãos do General, fazendo com que a batalha ficasse mais justa. 
        </p>
        <p data-tilt class="lead">
          Durante a batalha, a Armada do Terceiro Sistema chega sob comando de CC-2224 (Cody). Obi-Wan pega Grievous desprevenido e usa a Força para empurrá-lo até bater no teto. Grievous solta seus sabres restantes e tenta fugir numa Wheel Bike, com Obi-Wan o perseguindo com Boga. 
        </p>
        <p data-tilt class="lead">
          Em Coruscant, Anakin conta a Palpatine que o General Grievous foi achado em Utapau. Anakin insiste que também deveria estar em Utapau. A conversa deles muda para a sabedoria de Palpatine da Força, e ele revela que conhece o Lado Sombrio, sendo assim um Lorde Sith. Depois, diz que se Anakin for para o Lado Sombrio, conseguirá salvar Padmé. 
        </p>
        <p data-tilt class="lead">
          Ao ouvir isso, Anakin lhe ameaça com o sabre de luz. Afirma ao Chanceler que vai denunciá-lo ao Conselho Jedi. Mas querendo salvar sua esposa, e acreditando que Palpatine é o uníco com esse conhecimento, Anakin decide não matar o Chanceler.
        </p>
        <p data-tilt class="lead">
          Obi-Wan continua a perseguir General Grievous, com muita luta consegue alcançá-lo e eles entram em um confronto mortal, onde Obi-Wan sai vitorioso.
        </p>
      </div>

      <div class="parallax img2">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Sidious revelado</h1>
        </div>
      </div>
      <div class="container conteudo">
        <p data-tilt class="lead">
          Anakin denuncia o Chanceler ao Conselho jedi e se oferece para ajudar na prisão de Palpatine, mas Windu pede para que ele fique fora disso. Mestres Windu, Fisto, Kolar e Tiin entram numa nave e vão para o escritório de Palpatine.
        </p>
        <p data-tilt class="lead">
          Sentado nas Câmaras do Conselho, relembrando da promessa de Palpatine de impedir a morte de Padmé, Anakin corre atrás dos quatro Jedi.
        </p>
        <p data-tilt class="lead">
          Mace Windu e os três outros Mestres Jedi chegam no escritório do Chanceler e declaram suas intenções de prender o Chanceler em nome da República. Palpatine grita de raiva, puxa um sabre-de-luz da manga e se arremessa em direção aos Mestres Jedi. Palpatine desmonstra muita velocidade e habilidade com o sabre de luz, ele consegue acertar os mestres Fisto, Kolar e Tiin com ataques mortais e vencê-los com muita facilidade. Somente Windu restou para enfrentar o Chanceler.
        </p>
      </div>
      <div class="parallax img9">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Levante-se, lorde Vader</h1>
        </div>
      </div>
      <div class="container conteudo">
        <p data-tilt class="lead">
          Palpatine e Mace continuam a lutar até o peitoril da janela. Enquanto isso, Anakin chega à cena bem quando Windu desarma Palpatine. Durante o duelo, o Relâmpago da Força do Lorde Sith é refletido de volta para ele por Mace Windu. Com a face distorcida, Sidious afirma que está fraco demais para continuar. Bem quando Mace está para dar o ataque final, Anakin intervém e corta a mão de Mace. Anakin foi finalmente forçado a escolher entre a Ordem Jedi e Padmé. Palpatine atinge e arremessa Windu pela janela, fazendo-o morrer.
        </p>
        <p data-tilt class="lead">
          Anakin fica horrorizado por suas ações, mas ele sabe que deste ponto não há como voltar. Palpatine torna Anakin seu novo aprendiz Sith. Anakin se ajoelha diante a Palpatine, prometendo obedecer suas ordens desde que a vida de Padmé fosse salva e Palpatine o renomeia com o nome Sith de Darth Vader. Palpatine ordena um ataque ao Templo Jedi, para o fim da "Rebelião Jedi".
        </p>
        <p data-tilt class="lead">
          Vader ataca o Templo com a ajuda do batalhão da 501ª Legião. Ele brutalmente abre caminho pelo templo, matando todo o Jedi que cruzasse seu caminho, incluindo os mestres presentes no templo e os padawans que se escondiam.
        </p>
      </div>

      <div class="parallax img2_1">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Executar Ordem 66</h1>
        </div>
      </div>
      <div class="container conteudo">
        <blockquote class="blockquote">
          "Comandante Cody, a hora chegou. Execute a ordem 66!"
          <footer class="blockquote-footer">
            <cite class="blockquote-cite">
              Sidius, Darth
            </cite>
          </footer>
        </blockquote>
        <p data-tilt class="lead">
          Enquanto isso, de seu escritório, Palpatine ordena à todos os comandantes espalhados pela galáxia para cumprir a Ordem 66, dando início ao Grande Purgo jedi e a Guerra Civil Galáctica.
        </p>
        <p data-tilt class="lead">
          Pela Galáxia, os clones troopers se viram contra seus Generais Jedi. Em Utapau, Obi-Wan Kenobi é atirado de um penhasco quando a explosão de um AT-TE acerta a parede de rochas perto dele. Em Mygeeto, o Mestre Jedi Ki-Adi-Mundi é atingido pelos tiros de CC-1138 e seus soldados. No planeta tropical Felucia, a Amazona Jedi Aayla Secura é atacada por CC-5052 e a 327ª Star Corps . Em Cato Neimoidia, o caça Jedi de Plo Koon é abatido por seus companheiros de vôo. E em Saleucami, o speeder de Stass Allie é destruído pela sua escolta de speeders BARC. Em Kashyyyk, Yoda está observando a batalha enquanto o Comandante Gree e um tenente tentam mata-lo, mas ele os sente e decapita os dois clones com seu sabre verde, chegando a conclusão de que alguma coisa estava errada.
        </p>
        <p data-tilt class="lead"> 
          Bail Organa chega no Templo e acaba testemunhando o abatimento do jovem Padawan Zett Jukassa por um esquadrão de troopers comandados por Appo. Horrorizado, Organa deixa Coruscant em seu Tantive IV, esperando conseguir fazer contato com algum Jedi sobrevivente.
        </p>
        <p data-tilt class="lead">
          Obi-Wan e Yoda sobrevivem à ordem 66 e são recolhidos pela nave de Senador Organa, o Tantive IV. Os Jedi decidem voltar para Coruscant para recalibrar um sinal emanando do Templo Jedi falando para todos os Jedi voltarem para lá, caindo na armadilha de Palpatine. Kenobi espera que o aviso afaste qualquer Jedi sobrevivente.
        </p>
        <p data-tilt class="lead">
          Mais tarde, Vader procura Padmé no Complexo de Apartamentos do Senado. Ela vê a fumaça do Templo Jedi, mas não sabe o que estava acontecendo. Ele a conta que os Jedi tentaram tomar o controle da República e que há traidores no Senado. Ele diz que deve ir para o Sistema Mustafar, onde os Separatistas restantes se reuniram, onde acabará com a guerra. Ele promete que as coisas serão diferentes, que ambos e o bebê poderão viver em paz, e se despede.
        </p>
      </div>

      <div class="parallax img10">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Nascimento do Império</h1>
        </div>
      </div>
      <div class="container conteudo">
        <blockquote class="blockquote">
          "Então é assim que a liberdade morre, Com um estrondoso aplauso."
          <footer class="blockquote-footer">
            <cite class="blockquote-cite">
                Amidala, Padmé
            </cite>
          </footer>
        </blockquote>
        <p data-tilt class="lead">
          Em Mustafar, Vader é bem vindo pelo Vice-rei Nute Gunray mas rapidamente começa seu massacre dos líderes Separatistas, chegando ao fim, quando mata Nute Gunray. Neste ponto a primeira manifestação física do Lado Sombrio em Vader começou a se revelar: seus olhos se tornam amarelo pálido.  
        </p>
        <p data-tilt class="lead">
          O Senado organizou uma sessão especial onde Palpatine conta aos membros do "complô dos Jedi para tomar o controle do Senado". Ao meio de vários aplausos, ele anuncia que a República será reorganizada no primeiro Império Galáctico. Mas Padmé Amidala e Bail Organa não são enganados.
        </p>
        <p data-tilt class="lead">
          Enquanto isso, Obi-Wan e Yoda vão ao Templo Jedi, matando clones enquanto avançam entre vários corpos. Eles recalibram o sinal do Templo para avisar a todos os Jedi para ficarem longe do Templo. No centro de controle, Obi-Wan assiste as gravações de segurança.
        </p>
        <p data-tilt class="lead">
          Em descrença, ele vê Vader assassinando os Jedi. Yoda diz que eles não têm chance a não ser destruir os Sith, incluindo Vader. Obi-Wan suplica a Yoda para deixá-lo lutar com o Imperador, mas Yoda recusa, dizendo que Obi-Wan não ganharia tal luta, e que ele deveria lutar contra seu ex-aprendiz, seu "irmão".
        </p>
        <p data-tilt class="lead">
          Obi-Wan vai até o apartamento de Padmé, procurando por Vader. Ele a encontra e conta que Anakin fora para o lado Sombrio e matara Padawans no Templo Jedi. Em desgosto, Padmé recusa-se a acreditar e a revelar onde Vader foi. Obi-Wan vai embora, mas antes diz que sabe que Anakin é o pai dos bebês.
        </p>
        <p data-tilt class="lead">
          Mais tarde, Padmé deixa Coruscant em seu esquife espacial, partindo para Mustafar para se encontrar com Vader. Sem que ela soubesse, Obi-Wan secretamente embarca na nave momentos antes de decolar.
        </p>
      </div>
      <div class="parallax img11">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">O poder absoluto do lado sombrio</h1>
        </div>
      </div>
      <div class="container conteudo">
        <blockquote class="blockquote">
          "Sua arrogância o cegou, mestre yoda...e agora vai sentir o poder absoluto do lado sombrio da Força"
          <footer class="blockquote-footer">
            <cite class="blockquote-cite">
              Sidius, Darth
            </cite>
          </footer>
        </blockquote>
        <p data-tilt class="lead">
          Após livrar-se dos guardas que guardavam o gabinete do chanceler com o empurrão da Força, Yoda encontra-se com Palpatine. Depois de um breve diálogo, inicia-se o duelo entre o Grande Mestre Jedi e o Lorde Sombrio Sith.
        </p>
        <p data-tilt class="lead">
          Palpatine, isto é, Darth Sidious lança Relâmpagos da Força na direção de Yoda que é jogado para trás. Após recuperar-se, Yoda responde ao ataque do Imperador, lançando-o longe com Empurrão da Força.
        </p>
        <p data-tilt class="lead">
          Ambos, Yoda e Darth Sidious sacam seus sabres de luz. Depois, jogam-se um contra o outro e começam a duelar por todo o gabinete até pularem para um elevador que os conduz até a Câmara Principal do Senado, onde segue-se um violento combate.
        </p>
        <p data-tilt class="lead">
          Darth Sidious mostra-se um exímio controlador do Lado Sombrio da Força ao erguer os pods do Senado para depois lança-los na direção de Yoda, cujos esforços para evitá-los esgotam suas energias.
        </p>
        <p data-tilt class="lead">
          Eles pulam para um pod onde Darth Sidious desarma Yoda, lançando seu sabre de luz longe com os Relâmpagos da Força. O Lorde Negro dos Sith volta a lançar os relâmpagos no Grande Mestre Jedi, cujas mãos nuas concentram a energia dos relâmpagos em uma bola de luz que explode arremessando-os para trás.
        </p>
        <p data-tilt class="lead">
          Então, Yoda tem um vislumbre do futuro: uma esperança para a galáxia ainda existia e ele não poderia arriscar morrer ali.
        </p>
        <p data-tilt class="lead">
          Darth Sidious consegue segurar-se e evita a queda, mas Yoda cai vários metros e consegue fujir, após isso se encontra com o senador Bail Organa.
        </p>
      </div>
      <div class="parallax img12">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Não me obrigue a te matar</h1>
        </div>
      </div>
      <div class="container conteudo">
        <blockquote class="blockquote">
          "Você era o escolhido! Foi dito que você iria destruir os Sith, não se unir a eles. Trazer o equilíbrio para Força, não joga-la nas trevas!"
          <footer class="blockquote-footer">
            <cite class="blockquote-cite">
              Kenobi, Obi-Wan
            </cite>
          </footer>
        </blockquote>
        <p data-tilt class="lead">
          A nave pousa em Mustafar. Vader e Padmé se abraçam. Ela revela sua conversa com Obi-Wan. Quando ela implora que ele fuja com ela para criar a criança em paz, Vader diz que eles não precisam mais fugir, pois ele havia trazido paz para a República e poderia até tomar o lugar de Palpatine, onde os dois governariam a Galáxia juntos.
        </p>
        <p data-tilt class="lead">
          Se afastando com horror e tristeza, e percebendo que aquele já não era mais Anakin, Padmé diz que ele está partindo seu coração e que está indo por um caminho que ela não pode seguir.
        </p>
        <p data-tilt class="lead">
          Vader vê Obi-Wan emergindo do esquife. Enfurecido, ele usa enforca Padmé com o uso da Força, achando que ela o trouxe para matá-lo. Ela fica inconsciente e Vader a solta. Obi-Wan e Vader começam um duelo intenso.
        </p>
        <p data-tilt class="lead">
          O duelo leva Obi-Wan e Vader para vários lugares em Mustafar. Um ataque errônio do sabre de Darth Vader acertou um computador, o que desativou os escudos das instalações. O duelo continuava enquanto todo o prédio era bombardeado por lava. Ambos caíram num rio da lava pendurados em um dos "braços" centrais da estrutura. Eles continuam sua batalha sobre a lava, avançando por plataformas flutuantes.
        </p>
        <p data-tilt class="lead">
          Durante a luta, Obi-Wan pula de um droide para a terra firme, ganhando uma vantagem. Cego em sua ira, Vader imprudentemente pula de encontro a seu antigo Mestre e rapidamente Obi-Wan corta as pernas e o braço esquerdo de Vader. Vader desce rolando o terrapleno até a beira do rio de lava. Com as roupas e a carne começando a queimar, Vader se afunda ainda mais no lado sombrio.
        </p>
        <p data-tilt class="lead">
          Com Obi-Wan assistindo em desespero, Vader tenta em vão se puxar para cima do terraplano com sua única mão mecânica. Obi-Wan grita com ele em desgosto, dizendo que esse não era seu destino, mas Vader só consegue gritar em raiva. Quando suas roupas entram em contato com a lava, ele pega fogo, fazendo com que ele perdesse a maioria, senão toda, pele. Obi-Wan olha por um momento e então leva o sabre-de-luz de Anakin e se afasta, incapaz de assistir seu ex-melhor amigo morrer. Ele então vai embora com a gravemente ferida Padmé e os droides R2-D2 e C3PO.
        </p>
      </div>
      <div class="parallax img13">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">Nascimento e renascimento</h1>
        </div>
      </div>
      <div class="container conteudo">
        <blockquote class="blockquote">
          "Consegue me ouvir? Lorde Vader..."
          <footer class="blockquote-footer">
            <cite class="blockquote-cite">
              Sidius, Darth
            </cite>
          </footer>
        </blockquote>
        <p data-tilt class="lead">
          Darth Sidious chega a Mustafar com um batalhão de Shock trooper Clone. Eles salvam Darth Vader da beira da morte usando um pod-stacis e medicina Sith da nave de Sidious.
        </p>
        <p data-tilt class="lead">
          No asteroide isolado de Polis Massa, Yoda medita e ouve a voz do espírito de Qui-Gon Jinn. A voz diz que há uma maneira de se unir à Força e continuar com consciência após a morte. Para aprender este poder, Yoda se declara um aprendiz do espírito de Qui-Gon Jinn. Pela primeira vez em séculos Yoda toma a posição de aprendiz.
        </p>
        <p data-tilt class="lead">
          Obi-Wan chega a Polis Massa e Padmé é trazida para assistência médica. Ela está morrendo, tendo perdido toda a vontade de viver. Os droides médicos trabalham para salvar seus bebês - dois gêmeos, para surpresa de Bail Organa, Obi-Wan e Yoda. Um menino e uma menina nascem. Em suas últimas palavras, Padmé os nomeia "Luke" e "Leia".
        </p>
        <p data-tilt class="lead">
          Vader é colocado em sua armadura. No Centro de Reconstrução Cirúrgica de Imperador Palpatine em Coruscant, lhe são dadas novas pernas, um novo braço, pulmões mecânicos e outras "partes de substituição". Ele se veste na armadura preta, uma máscara é selada e seu capacete é ajustado. Darth Vader começa a respirar pela máscara. A maior parte, se não a cirurgia inteira, é levada com Vader acordado e consciente, com nenhuma anestesia aparente,  fazendo-o lamentar, gritar, e se contorcer de agonia torturante.
        </p>
        <p data-tilt class="lead">
          No último suspiro de Padmé, ela diz que acredita que ainda existe algo bom dentro de Anakin. Ela morre acreditando no homem que sempre amou.
        </p>
        <p data-tilt class="lead">
          Darth Vader começa a falar por seu amplificador de voz. Ele pergunta o que houve com Padmé. Darth Sidious diz que, em sua raiva, Vader a matou, juntamente com seus filhos que jamais nasceriam. Vader, muito nervoso, convoca a Força para destruir tudo em sua volta, inclusive Sidius, apesar não ser tão forte na Força como antes - Ele apenas conseguiu fazer os droides e os equipamentos implodirem a sua volta ao gritar "Nãoooo!"
        </p>
      </div>
      <div class="parallax img14">
        <div class="conteudo-titulo">
          <h1 class="titulo display-2">A separação das crianças</h1>
        </div>
      </div>
      <div class="container conteudo">
        <p data-tilt class="lead">
          Abordo do Tantive IV, pousado em Naboo, Obi-Wan, Yoda, e Bail Organa se sentam em uma mesa de conferência. Eles concordam em manter Padmé parecendo grávida e fingir que as crianças morreram junto com a mãe durante o parto. Para sua própria segurança, Luke e Leia são separados esperando que os Sith não sintam sua presença. 
        </p>
        <p data-tilt class="lead">
          Leia será adotada por Bail Organa e Luke será mandado para sua família em Tatooine. Obi-Wan e Yoda irão esperar até o tempo certo para as crianças Skywalker fazerem sua parte. Yoda pede a Obi-Wan para estudar a técnica que Qui-Gon aprendeu para alcançar a imortalidade.
        </p>
        <p data-tilt class="lead">
          Bail Organa deixa R2-D2 e C-3PO aos cuidados de Raymus Antilles e ordena a limpeza de memória dos droides. Yoda vai para Dagobah para começar seu exílio, o qual ele parcialmente leva como uma penitência por falhar ao derrotar Sidious. Na ponte de um Destróier Estelar classe Venator, Vader e o Imperador Sidius,observam a construção de uma arma de destruição planetária.
        </p>
        <p data-tilt class="lead">
          Em Alderaan, a pequena Leia é trazida por Bail Organa para sua mulher, Rainha Breha Organa. Em Tatooine, Obi-Wan traz Luke Skywalker para sua nova família: seu tio, Owen, e sua tia, Beru. Obi-Wan vai embora em um eopie, indo para seu exílio no Deserto Jundland, onde permaneceria estudando a técnica de Qui-Gon e observando o cresciemento do jovem Luke.
        </p>
        <p data-tilt class="lead">
          Owen e Beru, segurando o pequeno Skywalker, olham no horizonte e observam os dois sóis de Tatooine se pondo, esperando por uma Nova Esperança.
        </p>
      </div>
      <div class="parallax img1">
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
      <div class="parallax img1">
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