
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1><center>Dívida em codificação de arquivo utf8 & us-ascii</center></h1>
    <h3>Problema:</h3>
    <p>
    Estou editando um projeto web/php, porém os arquivos que vieram a mim estão em utf-8, se fizer 
    o comando <pre>file -i file.php</pre> no terminal do linux ele retorna que o arquivo original
    sem alterações está em charset=utf-8, quando eu abro ele na minha maquina e salvo novamente,
    forçando o netbeans ou sublime para salvar na codificação utf-8 ele salva, se abro novamente, os dois falam que esta em utf-8, porem quando se faz no terminal <pre>file -i file.php</pre> ele retorna que o arquivo esta em <strong>us-ascii</strong>, isto esta dificultando o desenvolvimento, porque o professor mentor do projeto, precisa verificar e confirmar as inserções
     e ou alterações feitas por mim antes de aceita-las na branch master, quando ele abre na máquina dele, a codificação do arquivo fica uma bagunça como a imagem abaixo <br>
     <p align="center"><img src="https://s9.postimg.cc/9x2yxccbj/e9b91967-d2b5-49ff-b8b4-aae19493e812.jpg"></p><br>, impossibilitando a leitura, já na minha máquina abre normal, alguém sabe como resolver essa situação ?
    </p>
    <h3>Minha máquina: </h3>
    <p>
    	-GNU/Linux Debian 9 streach x64b.<br>
    	-Idioma teclado: Portugues(Brasil)
    </p>
    <p>
    	O arquivo para testes é o cadastrarvotante.php<br>
    	quem puder baixar ele e ver se a coficiação está errada agradeço.
    </p>
    <p>
    	Alguém poderia ajudar ?
    </p>
    <p>
    	<h3>Observações:</h3>
    	Já tentei converter com<pre>iconv -f us-ascii -t utf-8</pre> sem resultado;
    </p>
</body>
</html>
