
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        # US-ASCII_UTF-8_TESTE
    <center>![A3ATecnologia Logo](https://s17.postimg.org/p6xh4o6vj/logo300.png)</center>
    <h2><center>Project A3A Tecnologia</center></h2>
    <br>
    <h3>Objetivos:</h3>
    <ul>
        <li>Cadastrar alunos, veículos, instrutores, horários, categoria de habilitação;</li>
        <li><strong>Controlar agenda de aulas direção</strong>;</li>
        <li>Gerenciar exames feitos nas bancas de legislação e direção.</li>
    </ul>
    <br>
    <h3>Após baixar o projeto, executar no terminal na raiz do projeto</h3>
    Instalar as bibliotecas utilizadas
    <pre>composer install ou composer update</pre>
    Criar um database no mysql com o nome a3atecnologia em seguida no terminal na raiz do projeto
    <br>
    Após composer install para funcionar o mail auto embed siga as insturções do github
    <pre>
	https://github.com/eduardokum/laravel-mail-auto-embed
	$providers = [
	    ...
	    \Eduardokum\LaravelMailAutoEmbed\ServiceProvider::class,
	    ...
	 ];
	 php artisan vendor:publish --provider="Eduardokum\LaravelMailAutoEmbed\ServiceProvider"
	 </pre>
    Migrar todo o schema do database para o mysql
    <pre>php artisan migrate</pre>
    <h3>Inserir todos os dados pré estabelecidos nas tables</h3>
    <pre>
php artisan db:seed</pre>
    <h3>Para inserir uma única classe ou table de Seeds;</h3>
    <pre>php artisan db:seed --class=UserTableSeeder</pre>
    <br>
    <strong>Não é necessário configurar apache, faça um kill apache2 na porta 80 se quiser usar ela</strong>
    <h3 style="color: #000">Failed to decode response: zlib_decode(): data error => executar no terminal</h3>
    <pre>composer clear-cache</pre>
    <br>
    <h3>Documentação Laravel</h3>
    <a href = "https://laravel.com/docs/5.6/">Documentação</a>
    <br>
    <h3>Comandos principais git</h3>
    Criar nova branch -> facilita seu proprio versionamento local, é como se você tivesse duas versões uma pra teste e outra pra envio ao master, onde teste é o seu novo branch;
    <pre>git checkout -b teste</pre>
    Visualizar qual branch esta ativo no estado atual;
    <pre>git branch</pre>
    Mudar de um branch para outro;
    <pre>git checkout master</pre>
    <pre>git checkout teste</pre>
    Submeter mudanças do branch teste ao master
    <pre>
    git checkout teste
	git add .
	git commit -m "Alteração referente a ..."
	git checkout master
	git merge teste
	git push origin master
    </pre>
    Depois que enviar não se esqueça de voltar ao branch de testes
    <pre>git checkout teste</pre>
    <br>

</body>
</html>
