 # Uma história Star Wars
 link do site: <a href="https://umahistoriastarwars.000webhostapp.com/" target="_blank">umahistoriastarwars</a>
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
> Lembrando que o PHP é uma linguagem ***server-side***, portanto caso deseje fazer clone do projeto ou mexer em seu código de alguma maneira você precisa de uma **solução AMP** como o ***XAMPP*** ou o ***WAMP***. Usar o servidor interno do php só funcionará caso você deixe as linhas que mexem com banco de dados comentadas.
> por exemplo, você pode abrir seu terminal e escrever ***php -S localhost:8080***, mas precisará comentar a tag php de criação de sessão (antes do `<!DOCTYPE html>` das páginas) e a tag `<?=$quantidade?>` (presente no rodapé das páginas) para que não ocorra nenhum erro.
## Front-end
## Back-end
1. ###  PHP (versão 8.2.11) 
Ele é usado para consumo da api <a href="https://www.omdbapi.com/">omdbapi</a>, para fazer a conexão com o banco de dados e para gerenciar as sessões.
 ##### - Consumo da API
 A API utilizada foi a <a href="https://www.omdbapi.com/">omdbapi</a>. Ela foi escolhida por sua velocidade em relação a <a href="https://www.omdbapi.com/](https://swapi.dev/)">swapi</a> que é uma API específica para o universo de Star Wars. 
 - Há uma classe "Filmes", essa classe contém os atributos que armazenaram os dados retornados pela API, cada episódio corresponde a uma instância dessa classe.
 - Nos ObjEpisodioX.php é chamada a função "consumirAPI.php" e essa função recebe como parâmetro o número do episódio que deve ser buscado na API, após isso o objeto é instânciado e, por meio dos métodos setters, os atributos desse objeto são preenchidos com as seguintes informações: atores do filme, duração do filme, direção do filme, blheteria, data de lançamento, URl da imagem de capa do filme, nota no IMDB, nota no MetaCritic, nota no Roten Tomatoes, número de votos no IMDB, id para pesquisa do referido filme no IMDB e roteirista/s do filme;
 - Os dados retornados da API, como a data, são formatados por meio de funções presentes no arquivo "formatarvalores.php" presente na pasta "funcoesPHP";
 - Nos episodioX.php o objeto do referido filme é chamado com seus atributos (usando os métodos getters) nos lugares determinados (nas seções produção e notas).
 '''
  <?php 
      function consumirAPI($num_episodio){
            $urlFilme="http://www.omdbapi.com/?t=star+wars+episode+$num_episodio&apikey=23877d14";
            $dadosFilme=json_decode(file_get_contents($urlFilme));
            return $dadosFilme;
      }
  ?>
 '''
 ##### - Sessões PHP
 Cada página, seja ela um episódio, sobre, créditos ou a index, possui um contador de acessos em seu rodapé. Esse contador de acessos serve para saber quantas pessoas acessaram o site. Porém, não é feita só uma contagem pois também são armazenados alguns dados no banco de dados como: data e hora do acesso, ip do dispositivo usado no acesso e navegador usado noa acesso;
  - Em cada página, é validado se existe uma sessão já iniciada. Caso haja, nada acontece, mas caso contrário, uma sessão se inicia e os dados são capturados e inseridos no banco de dados;
  - Uma query 'SELECT * FROM' é executada e a quantidade de linhas retornadas é contada e armazenada na variável **$quantidade**, essa variável apenas é printada no rodapé das páginas, mostrando assim  a quantidade de acessos ao site;
    '''
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
    '''
    
2. ### SQL do banco de dados
O SGBD utilizado na fase de implementação foi o MySql, mas no momento da hospedagem do projeto na **00WebHost**, o banco foi migrado para o PHPMyAdmin.
Segue o código SQL da criação das tabelas do banco de dados:
  '''
  create database starWars;
  use starWars;
  create table acessos(
	   id int not null auto_increment,
	   ip  varchar(20) not null,
    navegador longtext not null,
    diaHora datetime not null,
    primary key (id)
  );
  '''


  
