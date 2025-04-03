 # Uma história Star Wars
 link do site: <a href="http://www.umahistoriastarwars.free.nf/?i=1" target="_blank">umahistoriastarwars</a>
 ####
 ![home](https://github.com/Gustavo-erades/StarWars/assets/108373134/79aa5077-a1e3-4f55-a19f-08e8ded906c0)
 ####
 Esse projeto é uma releitura do meu projeto final da matéria de Desenvolvmento Web da faculdade. Segue o link do projeto antigo: <a href="https://gustavo-erades.github.io/Site-StarWars-AneisDePoder/Index.html">AneisdoPoderStarWars</a>
 ## Tecnologias 
 ![HTML](https://img.shields.io/badge/HTML-151515?style=for-the-badge&logo=html5&logoColor=white)&nbsp;
 ![CSS](https://img.shields.io/badge/CSS-151515?style=for-the-badge&logo=css3&logoColor=white)&nbsp;
 ![JavaScript](https://img.shields.io/badge/JavaScript-151515?style=for-the-badge&logo=javascript&logoColor=white)&nbsp;
 ![PHP](https://img.shields.io/badge/PHP-151515?style=for-the-badge&logo=php&logoColor=white)&nbsp;
 ![Bootstrap](https://img.shields.io/badge/bootstrap-151515?style=for-the-badge&logo=bootstrap&logoColor=whitee)&nbsp;
 ![MySql](https://img.shields.io/badge/mysql-151515?style=for-the-badge&logo=mysql&logoColor=white)&nbsp;
### OBS: para versionamento do projeto foi utilizado o GitHub
> Lembrando que o PHP é uma linguagem ***server-side***, portanto caso deseje fazer clone do projeto ou mexer em seu código de alguma maneira você vai precisar de uma **solução AMP** como o ***XAMPP*** ou o ***WAMP***. Usar o servidor interno do php só funcionará caso você deixe as linhas que mexem com banco de dados comentadas.
> por exemplo, você pode abrir seu terminal e escrever `php -S localhost:8080`, mas precisará comentar a tag php de criação de sessão (antes do `<!DOCTYPE html>` das páginas) e a tag `<?=$quantidade?>` (presente no rodapé das páginas) para que não ocorra nenhum erro.
## Front-end
1. ###  O feijão com arroz da web
Para o Front usei o padrão HTML, CSS, JavaScript e o framework Bootstrap. O Bootstrap serviu para agilizar a estilização do site, por ser uma ferramenta simples, o processo de desenvolvimento do Front-end foi relativamente rápido. Porém, também personalizei e modifiquei alguns estilos padrões do framework para dar uma cara nova às páginas. Foi utilizado o efeito parallax em todas as páginas e a responsividade foi feita por meio de breakpoints.
>Todos os gifs usados nas páginas são links para gifs da internet, portanto caso haja algum erro no carregamento desses gifs peço que entre em contato comigo para que eu possa resolver o problema, obrigado.
>Esse site também não possui nenhum fim lucrativo, portanto não estou ganhando em cima da imagem de autoria de outra pessoa. Porém, se você possui autoria sobre alguma imagem/vídeo utilizado no site, por favor, entre em contato comigo para que eu retire sua imagem e  possa a substituir por outra de livre uso, obrigado.

2. ### JavaScript

O JS foi usado para retornar a página que o usuário estava anteriormente (com o `history.go(-1)` no botão "voltar" da página de erro 404), para criar a dinâmica das sinopses dos episódios na index e para a lógica do preload (com o R2-d2 passeando na tela). Além disso também foi utilizado o Vanilla Js para o efeito ao passar o mouse pelos parágrafos.
- Na index, quando uma aba é selecionada nas seções "Trilogia Prequel" e "Trilogia Clássica", o JavaScript captura o número do episódio e troca os textos, imagem e classe da aba ativa, dando assim a noçãoo de navegação.
- Cada página é divida em duas divs, uma que contém todo o conteúdo da página e possui display none, e outra que contém o conteúdo do preload (nesse caso apenas o dróide R2-D2) e possui display block. Quando a página é carregada o JS exibe a animação do R2-D2 (feita com o uso do css) e inverte os valores dos displays para mostrar efetivamente o conteúdo da página, fazendo assim o preload. Segue o código JS desse preload:
  ```
  var i = setInterval(function () {
    clearInterval(i);
    document.getElementById("loading").style.display = "none";
    document.getElementById("preload").style.display = "block";
   
   }, 2000);
  ```
- O <a href="https://micku7zu.github.io/vanilla-tilt.js/">Vanilla JS</a> é responsável pelo efeito que mexe os parágrafos ao passar o mouse por cima deles. Apenas foi preciso importar o arquivo JS baixado no link anterior e por o atributo `data-tilt` nos parágrafos.
## Back-end
1. ###  PHP (versão 8.2.11) 
Ele é usado para consumo da api <a href="https://www.omdbapi.com/">omdbapi</a>, para fazer a conexão com o banco de dados, para gerenciar as sessões e para gerenciar as páginas a partir da index.
##### - Paginação na Index
 Por questões de agilidade alguns componentes das páginas que se repetem ficam separados e são incluidos com `require_once()` nas páginas (como o menu e o footer). Isso facilitou pois caso seja necessário incluir algum componente no menu ou no footer eu só preciaria me preocupar com um único arquivo e não com todas as páginas, mas ainda havia o problemas dos paths dos links. Os paths usavam o caminho relativo e a depender da estrutura dos arquivos esses caminhos poderiam ficar deslocados. Para resolver isso e também para dar certo nível de segurança na aplicação, foi desenvolvido um index que guarda os paths necessários em variáveis de sessão e usa o script `paginacao.php` para controlar as páginas acessadas pelos usuários, dessa maneira os caminhos dos links do menu também podem manter-se como caminhos relativos pois todas as páginas ficam em um único lugar específico.
- O script de paginação consiste em um switch case que armazena na variável $conteudo o nome da página que deverá ser inclusa naquele momento:
  ```
  <?php
	if(isset($_GET['cod'])?$_GET['cod']:$_GET['cod']=0);
	switch ($_GET['cod']) {

	    case '0':
	       $conteudo=$_SESSION["path"].'public/paginas/home.php';
	    break;
	
	    case '1':
	        $conteudo=$_SESSION["path"].'public/paginas/creditos.php';
	    break;
	
	    case '2':
	        $conteudo=$_SESSION["path"].'public/paginas/sobre.php';
	    break;
	
	    case 'ep1':
	        $conteudo=$_SESSION["path"].'public/paginas/episodio1.php';
	    break;
	
	    case 'ep2':
	        $conteudo=$_SESSION["path"].'public/paginas/episodio2.php';
	    break;

	    case 'ep3':
	        $conteudo=$_SESSION["path"].'public/paginas/episodio3.php';
	    break;
	
	    case '404':
	        $conteudo=$_SESSION["path"].'public/paginas/erro404.html';
	    break;
	
	    default:
	        $conteudo=$_SESSION["path"].'public/paginas/paginas/home.php';
	    break;
    
	}
	?>
  ```
 Os links do menu redirecionam para a prórpia index com `$_PHP['PHP_SELF']` mas levando com parâmetro no GET o código da página, por meio desse script de switch a página index sabe o que deve mostrar.
 - Exemplo dos links do menu:
   ```
   	<div class="dropdown-menu">
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=ep1'?>" class="dropdown-item" id="menuEpisodio1">Episódio I</a>
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=ep2'?>" class="dropdown-item" id="menuEpisodio2">Episódio II</a>
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=ep3'?>" class="dropdown-item" id="menuEpisodio3">Episódio III</a>
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=404'?>" class="dropdown-item" id="menuEpisodio4">Episódio IV</a>
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=404'?>" class="dropdown-item" id="menuEpisodio5">Episódio V</a>
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=404'?>" class="dropdown-item" id="menuEpisodio6">Episódio VI</a>
        </div>
   ```
- Script da index.php:
  ```
  <?php 
    session_start();

    $path=$_SERVER["DOCUMENT_ROOT"].'/testes/StarWars/';
    $_SESSION["path"]=$path;
    $_SESSION["pathConBd"]=$path.'app/database/conexaoBd/conexao.php';
    $_SESSION["pathAcessos"]=$path.'app/helpers/funcoesPHP/gerenciarAcessos.php';
    $_SESSION["pathPaginacao"]=$path.'app/helpers/paginacao.php';
    $_SESSION["pathMenu"]=$path.'public/paginas/componentes/menu.php';
    $_SESSION["pathFooter"]=$path.'public/paginas/componentes/footer.php';
    $_SESSION["pathLoad"]=$path.'public/paginas/componentes/loading.php';

    include_once($_SESSION["pathPaginacao"]);
    include($conteudo);
  ```
Dessa maneira, na prática, o usuário acessa de fato apenas a pasta "public", mas não chega nem a acessar as páginas diretamente já que se mantém apenas na index por todo o tempo. Além de facilitar a manutenção no código, fazer isso também deu certo nível de segurança para o projeto ao segregar as páginas, componentes, consumo de API e classe/objetos.

 ##### - Consumo da API
 A API utilizada foi a <a href="https://www.omdbapi.com/">omdbapi</a>. Ela foi escolhida por sua velocidade em relação a <a href="https://www.omdbapi.com/](https://swapi.dev/)">swapi</a> que é uma API específica para o universo de Star Wars. 
 - Há uma classe "Filmes", essa classe contém os atributos que armazenaram os dados retornados pela API, cada episódio corresponde a uma instância dessa classe.
 - Nos ObjEpisodioX.php é chamada a função "consumirAPI.php" e essa função recebe como parâmetro o número do episódio que deve ser buscado na API, após isso o objeto é instânciado e, por meio dos métodos setters, os atributos desse objeto são preenchidos com as seguintes informações: atores do filme, duração do filme, direção do filme, blheteria, data de lançamento, URl da imagem de capa do filme, nota no IMDB, nota no MetaCritic, nota no Roten Tomatoes, número de votos no IMDB, id para pesquisa do referido filme no IMDB e roteirista/s do filme;
 - Os dados retornados da API, como a data, são formatados por meio de funções presentes no arquivo "formatarvalores.php" presente na pasta "funcoesPHP";
 - Nos episodioX.php o objeto do referido filme é chamado com seus atributos (usando os métodos getters) nos lugares determinados (nas seções produção e notas).
```
  <?php 
      function consumirAPI($num_episodio){
            $urlFilme="http://www.omdbapi.com/?t=star+wars+episode+$num_episodio&apikey=23877d14";
            $dadosFilme=json_decode(file_get_contents($urlFilme));
            return $dadosFilme;
      }
  ?>
 ```
 ##### - Sessões PHP
 Cada página, seja ela um episódio, sobre, créditos ou a index, possui um contador de acessos em seu rodapé. Esse contador de acessos serve para saber quantas pessoas acessaram o site. Porém, não é feita só uma contagem pois também são armazenados alguns dados no banco de dados como: data e hora do acesso, ip do dispositivo usado no acesso e navegador usado noa acesso;
  - Em cada página, é validado se existe uma sessão já iniciada. Caso haja, nada acontece, mas caso contrário, uma sessão se inicia e os dados são capturados e inseridos no banco de dados;
  - Uma query 'SELECT * FROM' é executada e a quantidade de linhas retornadas é contada e armazenada na variável **$quantidade**, essa variável apenas é printada no rodapé das páginas, mostrando assim  a quantidade de acessos ao site;
```
    <?php 
    if(!isset($_SESSION["acesso_registrado"])){
        $ip=$_SERVER['REMOTE_ADDR'];
        $navegador=$_SERVER['HTTP_USER_AGENT'];
        $sql="INSERT INTO acessos(ip,navegador,diaHora) VALUES('$ip','$navegador',NOW());";
        mysqli_query($conexao,$sql);
        $_SESSION["acesso_registrado"]=true;   
    }
    $sqlConsulta="SELECT * FROM acessos;";
    $quantidade=mysqli_num_rows($conexao->query($sqlConsulta));
    ?>
```
    
2. ### SQL do banco de dados
O SGBD utilizado na fase de implementação foi o MySql, mas no momento da hospedagem do projeto na **infinity free**, o banco foi migrado para o PHPMyAdmin.
Segue o código SQL da criação das tabelas do banco de dados:
```
  create database starWars;
  use starWars;
  create table acessos(
	   id int not null auto_increment,
	   ip  varchar(20) not null,
    navegador longtext not null,
    diaHora datetime not null,
    primary key (id)
  );
```


  
