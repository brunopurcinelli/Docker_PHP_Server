# Docker_PHP_Server 
###Ambiente de desenvolvimento PHP e Docker
Exemplo de Criação de Servidor PHP, MySQL e PhpMyAdmin com Docker

Criação de um ambiente simples com PHP 7.2.2, MySQL, phpMyAdmin e Docker.

Este projeto foi desenvolvido para auxiliar os desenvolvimentos de sites utilizando um servidor PHP com MySQL sem a necessidade de instalação de Softwares.
Juntamente com o Docker e Docker-Compose, é possível iniciar um servidor PHP rápido e de fácil manutenção, tanto para testar aplicações quanto para a criação de Sites com o PHP.

##Tecnologias incluídas:
<ul><li>PHP 7.2.2 Aapache</li><li>MySQL 5.7.20</li><li>PhpMyAdmin</li><li>Nginx 1.13</li></ul>

##Exigências:
<ul><li>Docker</li><li>Docker Compose</li></ul>

##Como usar?

###Visual Code
Para utilizar este servidor PHP com Docker, é necessário seguir os passos:
<ol><li>Copie ou clone o repositório</li><li>Após realizar o download do repositório, copie os arquivos e pastas na raiz do seu site PHP:<ul><li>/config</li><li>docker-compose.yml</li></ul></li><li>Com os arquivos e pastas já na raiz do projeto, abra a pasta do projeto com o Visual Code</li><li>Abra o terminal do Visual Code e execute este comando: <code>docker-compose up -d</code></li><li>Assim que finalizar a importação das imagens e os containers estiverem finalizados, acesse as URLs: <ul>
<li><b>PHP</b>: <a href="http://localhost:8080" target="_blank">http://localhost:8080</a></li><li><b>PhpMyAdmin</b>: <a href="http://localhost:8081" target="_blank">http://localhost:8081</a></li></ul></ol>

###Windows PowerShell
Para utilizar o servidor PHP com Docker pelo Windows, execute os passos:
<ol><li>Copie ou clone o repositório</li><li>Após realizar o download do repositório, copie os arquivos e pastas na raiz do seu site PHP:<ul><li>/config</li><li>docker-compose.yml</li></ul></li><li>Com os arquivos e pastas já na raiz do projeto, abra o <b>PowerShell</b> ou o <b>CMD</b> e vá na raiz do projeto:

<pre>PS C:\Users\Administrador> cd .\SitePhp\
PS C:\Users\Administrador\SitePhp> docker-compose up -d</pre></li><li>Assim que finalizar a importação das imagens e os containers estiverem finalizados, acesse as URLs: <ul>
<li><b>PHP</b>: <a href="http://localhost:8080" target="_blank">http://localhost:8080</a></li><li><b>PhpMyAdmin</b>: <a href="http://localhost:8081" target="_blank">http://localhost:8081</a></li></ul></ol>

###MacOS Terminal
Para utilizar o servidor PHP com Docker pelo MacOS, execute os passos:
<ol><li>Copie ou clone o repositório</li><li>Após realizar o download do repositório, copie os arquivos e pastas na raiz do seu site PHP:<ul><li>/config</li><li>docker-compose.yml</li></ul></li><li>Com os arquivos e pastas já na raiz do projeto, abra o <b>Terminal</b> e vá na raiz do projeto:

<pre>MacBook-Pro-9:~ user$ cd ~/SitePhp
MacBook-Pro-9:~ SitePhp$ sudo docker-compose up -d</pre></li><li>Assim que finalizar a importação das imagens e os containers estiverem finalizados, acesse as URLs: <ul>
<li><b>PHP</b>: <a href="http://localhost:8080" target="_blank">http://localhost:8080</a></li><li><b>PhpMyAdmin</b>: <a href="http://localhost:8081" target="_blank">http://localhost:8081</a></li></ul></ol>

###Linux
Para utilizar o servidor PHP com Docker pelo Linux, execute os passos:
<ol><li>Copie ou clone o repositório</li><li>Após realizar o download do repositório, copie os arquivos e pastas na raiz do seu site PHP:<ul><li>/config</li><li>docker-compose.yml</li></ul></li><li>Com os arquivos e pastas já na raiz do projeto, abra o <b>Terminal</b> e vá na raiz do projeto:

<pre>user@users-desktop:~$ cd ~/SitePhp
user@users-SitePhp$ sudo docker-compose up -d</pre></li><li>Assim que finalizar a importação das imagens e os containers estiverem finalizados, acesse as URLs: <ul>
<li><b>PHP</b>: <a href="http://localhost:8080" target="_blank">http://localhost:8080</a></li><li><b>PhpMyAdmin</b>: <a href="http://localhost:8081" target="_blank">http://localhost:8081</a></li></ul></ol>


------------

####Agradecimentos
Espero ter ajudado.
Obrigado.
