<h1>Sistema de Login</h1>

<p>Bem-vindo ao repositório do Sistema de Login! Este projeto é uma implementação simples de um sistema de autenticação de usuários utilizando HTML, CSS e MySQL. Ele permite que os usuários se registrem e façam login em uma interface web básica.</p>

<h2>Índice</h2>
<ul>
    <li><a href="#sobre-o-projeto" style="text-decoration: none;">Sobre o Projeto</a></li>
    <li><a href="#funcionalidades" style="text-decoration: none;">Funcionalidades</a></li>
    <li><a href="#tecnologias-utilizadas" style="text-decoration: none;">Tecnologias Utilizadas</a></li>
    <li><a href="#configuração-do-ambiente" style="text-decoration: none;">Configuração do Ambiente</a></li>
    <li><a href="#como-usar" style="text-decoration: none;">Como Usar</a></li>
    <li><a href="#contribuições" style="text-decoration: none;">Contribuições</a></li>
    <li><a href="#licença" style="text-decoration: none;">Licença</a></li>
</ul>

<h2 id="sobre-o-projeto">Sobre o Projeto</h2>
<p>Este projeto foi desenvolvido como parte de um estudo sobre autenticação de usuários e a integração de front-end (HTML/CSS) com um banco de dados MySQL. Ele inclui um formulário de registro e um formulário de login, além de validações básicas e armazenamento seguro de senhas usando hashing.</p>

<h2 id="funcionalidades">Funcionalidades</h2>
<ul>
    <li><strong>Registro de Usuário:</strong> Permite que novos usuários se cadastrem no sistema fornecendo um nome de usuário e senha.</li>
    <li><strong>Login de Usuário:</strong> Permite que usuários registrados façam login com suas credenciais.</li>
    <li><strong>Validação de Credenciais:</strong> Verifica se o nome de usuário e a senha fornecidos são válidos.</li>
</ul>

<h2 id="tecnologias-utilizadas">Tecnologias Utilizadas</h2>
<ul>
    <li><strong>HTML5:</strong> Para estruturar as páginas web.</li>
    <li><strong>CSS3:</strong> Para estilizar as páginas e criar uma interface de usuário amigável.</li>
    <li><strong>MySQL:</strong> Para gerenciar o banco de dados dos usuários.</li>
    <li><strong>PHP:</strong> Para a lógica do servidor e comunicação com o banco de dados.</li>
</ul>

<h2 id="configuração-do-ambiente">Configuração do Ambiente</h2>
<p>Para rodar este sistema localmente, siga os passos abaixo:</p>
<ol>
    <li>
        <strong>Clone o repositório:</strong>
        <pre><code>git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio</code></pre>
    </li>
    <li><strong>Configure o servidor web:</strong>
        <ul>
            <li>Certifique-se de ter o <a href="https://www.apachefriends.org/index.html" style="text-decoration: none;">XAMPP</a> ou outra pilha de servidor local (Apache, PHP, MySQL) instalada.</li>
            <li>Coloque os arquivos do projeto na pasta <code>htdocs</code> do XAMPP ou na pasta raiz do servidor web.</li>
        </ul>
    </li>
    <li><strong>Configure o banco de dados MySQL:</strong>
        <ul>
            <li>Inicie o servidor MySQL (por exemplo, usando o XAMPP).</li>
            <li>Crie um banco de dados para o projeto.</li>
            <li>Importe o arquivo <code>database.sql</code> incluído no repositório para criar as tabelas necessárias.</li>
        </ul>
    </li>
    <li><strong>Configure o arquivo de conexão com o banco de dados:</strong>
        <ul>
            <li>Abra o arquivo <code>config.php</code> ou outro arquivo de configuração de banco de dados.</li>
            <li>Atualize as credenciais de conexão ao banco de dados conforme sua configuração local:</li>
        </ul>
        <pre><code>&lt;?php
$servername = "localhost";
$username = "seu-usuario";
$password = "sua-senha";
$dbname = "nome-do-banco-de-dados";
?&gt;</code></pre>
    </li>
</ol>

<h2 id="como-usar">Como Usar</h2>
<ol>
    <li><strong>Acesse o sistema:</strong>
        <p>Abra seu navegador e vá para <code>http://localhost/nome-do-repositorio/</code>.</p>
    </li>
    <li><strong>Registre um novo usuário:</strong>
        <p>Acesse a página de registro e crie uma conta.</p>
    </li>
    <li><strong>Faça login:</strong>
        <p>Use as credenciais criadas para fazer login no sistema.</p>
    </li>
</ol>

<h2 id="contribuições">Contribuições</h2>
<p>Contribuições são bem-vindas! Se você encontrar algum bug ou tiver sugestões de melhorias, sinta-se à vontade para abrir um Pull Request.</p>

<p>Para contribuir:</p>
<ol>
    <li>Faça um fork do projeto.</li>
    <li>Crie uma nova branch (<code>git checkout -b feature-nova-funcionalidade</code>).</li>
    <li>Commit suas mudanças (<code>git commit -m 'Adiciona nova funcionalidade'</code>).</li>
    <li>Faça push para a branch (<code>git push origin feature-nova-funcionalidade</code>).</li>
    <li>Abra um Pull Request.</li>
</ol>

<h2 id="licença">Licença</h2>
<p>Este projeto está licenciado sob a licença MIT. Consulte o arquivo <a href="LICENSE" style="text-decoration: none;">LICENSE</a> para mais detalhes.</p>

