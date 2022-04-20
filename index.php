<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/wordpress/wp-content/themes/scientific/style.css">
    <!-- link rel="shortcut icon" type="imagem.png" href="/wordpress/wp-content/themes/scientific/logo_sem_fundo2-removebg-preview.png"-->
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    
    <title>Scientific Network</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li> <a href="#projeto"> Projeto Integrador </a> </li>
            <li> <a href="#missao"> Missão </a> </li>
            <li> <a href="#visao"> Visão </a> </li>
            <li> <a href="#valores"> Valores </a> </li>
            <li> <a href="#quem"> Quem somos? </a> </li>
        </ul>
    </div>
    <div id="titulo">
        <h1>Scientific NetWork</h1>
    </div>
    <div class="meio">
        <h2>Bem-vindo a sua comunidade científica!</h2>
        
        <form> 
            <fieldset id="login">
                <h3>Complete com as suas informações:</h3>
                <label for="email"><strong>Email:</strong></label>
                <input type="email" name="email" id="email" required placeholder="Ex: usuario@email.com">
                <label for="senha"><strong>Senha:</strong></label>
                <input type="password" name="senha" id="senha" required placeholder="**********">
                <button type="submit" id="botaoLogin">Log In</button>
                <a href="#">Esqueceu a sua senha?</a>
            </fieldset>
            <div class="fazerCadastro">
                <h3>Ainda não possui Login? Faça o seu cadastro!</h3>
                <img src="/wordpress/wp-content/themes/scientific/ciencia.png" alt="Logo ciência" id="logo_ciencia">
                <button type="button" id="botaoCadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
    <div class="cadastro">
        <form method="post">
            <fieldset>
                <legend>Informações</legend>
                <label for="nome">Nome Completo: </label>
                <input type="text" name="nome" id="nome">
                <label for="emailCadastro">E-mail: </label>
                <input type="email" name="emailCadastro" id="emailCadastro">
                <label for="senhaCadastro">Cadastre uma senha: </label>
                <input type="password" name="senhaCadastro" id="senhaCadastro">
                <input type="submit" value="Enviar" name="botaoDadosCadastrados" id="botaoDadosCadastrados">
            </fieldset>
        </form>
        <?php //dadosSelect() ?>
    </div>
    <div class="inferior">
        <section id="projeto"><h2>Projeto Integrador</h2>
            <p>Este projeto tem como objetivo primário a criação de uma plataforma rede social na qual cientistas 
            de todo o mundo sejam capazes de compartilhar informações uns com os outros, dessa forma aumentando a taxa de
            desenvolvimento científico de todo o planeta</p>
        </section>

        <section id="missao"><h3>Missão</h3>
            <p>Por meio de um trabalho desenvolvido com ética, comprometimento e eficiência, temos a missão de 
            transformar a realidade de empresas, negócios e pessoas, aumentando os seus resultados no universo web e mobile de 
            maneira contínua.</p>
        </section>

        <section id="visao"><h3>Visão</h3>
            <p>Ser uma empresa de desenvolvimento de aplicativos excelente em inovação e criatividade que é parceira 
            dos nossos clientes, promove grandes resultados e segue seus valores para consolidar-se no mercado como referência no 
            desenvolvimento de aplicativos e em serviços e soluções web e mobile.</p>
        </section>

        <section id="valores"> <h3>Valores</h3>
                <ul>
                    <li>Inovar na proposta</li>
                    <li>Revolucionar na ação</li>
                    <li>Surpreender a cada contato</li>
                    <li>Entregar sempre o melhor</li>
                    <li>Ser honesto, profissional e responsável</li>
                    <li>Crescer e aprender todos os dias</li>
                    <li>Viver e trabalhar com alegria</li>
                    <li>Respirar tecnologia 24 horas</li>
                </ul>
        </section>
        
        <section id="quem"><h3>Quem somos?</h3>
            Somos uma empresa de desenvolvimento de aplicativos para quem 
            gosta de inovar, superar expectativas e sair da caixa. Sonhamos alto e junto com 
            o nosso time alcançamos excelentes resultados, contribuindo para o sucesso de 
            empresas, negócios e pessoas. 
        </section>
    </div>
    <script src="/wordpress/wp-content/themes/scientific/scripts.js"></script>
</body>
</html>



