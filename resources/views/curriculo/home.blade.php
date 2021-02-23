<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Maxwell Borges - Desenvolvedor</title>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/home.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('https://fonts.googleapis.com/css?family=Playfair+Display|Roboto|Crimson+Text')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.css')}}">
        <link rel="icon" href="{{asset('/favicon.ico')}}">
    </head>
    <body>
        <header class="container-fluid">
            <div class='row'>
                <div class='col-1 logo'><a class="navbar-brand logo" href="/">
                    MBB
                </a></div>
                <div class='col-11'>
                    <nav class="navbar navbar-expand-md navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                          <div class="navbar-nav">
                            <a class="nav-item nav-link" href="#about">home</a>
                            <a class="nav-item nav-link" href="#jobs">trabalhos</a>
                            <a class="nav-item nav-link" href="#contato">contato</a>
                          </div>
                        </div>
                    </nav>  
                </div>
            </div>
        </header>
        <div id='about' class='container sobre'> 
            <div class='row'>
                <div class='col-md order-md-1 texto'>
                    <h1>Hello!</h1>
                    <h2 class='nome'><span>I’m</span> Maxwell Borges</h2>
                    <h5>Trabalho como desenvolvedor <i>full stack</i> com foco na experiência do usuário.</h5>
                    <p>
                        Nascido e criado em Brasília, comecei a me interessar pelo mundo binário desde cedo, antes mesmo de concluir o ensino médio.
                    </p>
                    <p>
                        De 2011 a 2013, me formei no nível técnico, com o curso de manutenção e suporte a informática o qual me proporcionou meu CFT.
                        Em 2014, comecei meu bacharelado em ciência da computação que graduei em 2018 pela Federal de Brasília.
                        E por fim, entre 2019 e 2020 me especializei em desenvolvimento <i>mobile</i> pela Universidade Estácio de Sá. 
                    </p>
                    <p>Esse sou eu, Maxwell. Vamos juntos fazer esse sistema crescer?</p>
                </div>
                <div class='col-md order-md-2 perfil'>
                   <img src="{{asset('/storage/imgs/foto_pessoal.png')}}">
                </div>
            </div>
        </div>
        <div class='container-fluid line'></div>
        <div id='jobs' class='container trabalhos'>
            <h5>ÚLTIMOS TRABALHOS</h5>
            <h1>Meus Projetos</h1>
            <div class='row'>
                <div class='col-md imgs' style="background-image:url({{asset('/storage/imgs/gincana2.png')}})">
                    <img class='img2' src="{{asset('/storage/imgs/gincana.png')}}">
                </div>
                <div class='col-md texto'>
                    <h1>01</h1>
                    <h3>Gincana MCTI</h3>
                    <p>Em uma parceria entre o Instituto Brasileiro de Informação, Ciencia e Tecnologia (IBICT) e o Ministério da Ciência, Tecnologia e Inovações (MCTI), foi proposto um aplicativo <i>mobile</i> que fosse capaz de realizar leituras de QRCode para apresentação de quiz, o qual geraria uma pontuação que seria trocada por prêmios.</p>
                    <p>A aplicação foi desenvolvido com as tecnologias HTML, CSS e JS/Jquery em conjunto com o <i>framework</i> Cordova, a API backend responsável pelo processamento das requisições realizadas pela aplicação foi desenvolvido em PHP e banco de dados MYSQL. O sistema foi entregue juntamente com a página WEB.</p>
                    <button type="button" class="btn" href="">SAIBA MAIS</button>
                </div>
            </div>
            <div class='row'>
                <div class='col-md invertido order-md-2' style="background-image:url({{asset('/storage/imgs/educa2.png')}})">
                    <img class='img2' src="{{asset('/storage/imgs/educa.png')}}">
                </div>
                <div class='col-md order-md-1'>
                    <h1>02</h1>
                    <h3>Educa ao Quadrado (Educa<sup>2</sup>)</h3>
                    <p>Devido a pandemia, muitos alunos ficaram sem meios para ter acesso as aulas, a proposta do Educa<sup>2</sup> seria viabilizar a esses alunos o acesso a aulas por meio de mensagens RCS onde seria possível ouvir a aula gravada pelo professor a qualquer momento.</p>
                    <p>O professor iria gravar um audio da aula através da aplicação, o qual seria processado pelo servidor e enviado para o numero de celular de todos os alunos cadastrados na matéria, sem a necessidade de consumir dados móveis do aluno</p>
                    <p>O <i>frontend</i> foi desenvolvido em React e o backend API em Python. Projeto entregue para hackathon da Shawee.</p>
                    <button type="button" class="btn" href="">SAIBA MAIS</button>
                </div>
            </div>
            <div class='row'>
                <div class='col-md imgs' style="background-image:url({{asset('/storage/imgs/bbts2.png')}})">
                    <img class='img2' src="{{asset('/storage/imgs/bbts.png')}}">
                </div>
                <div class='col-md'>
                    <h1>03</h1>
                    <h3>BB Tecnologia e Serviços</h3>
                    <p>Proposto para integrar distintos sistemas e planilhas excel, o sistema disponibiliza para o técnico o calendario com as atividades agendadas e a possibilidade de marcar ferias, abonos e faltas. Já para os gerentes, a possibilidade de aprovar as solicitações de ausências e o calendário com os funcionários que estarão presentes em cada dia do mês, com respectivos horários e turnos.</p>
                    <p>Com o backend desenvolvido em PHP e banco de dados em Postgre e SQLITE, a aplicação está em fase de aprimoramento do <i>frontend</i> desenvolvido em HTML, CSS e JS para ser entregue.</p>
                    <button type="button" class="btn" href="">SAIBA MAIS</button>
                </div>
                
            </div>
        </div>
        <div class="container-fluid linguagens text-center">
        <div class="container">
            <h5>TEM UM PROJETO?</h5>
            <h1>Vamos Trabalhar Juntos</h3>
            <p>Aqui estão as empresas que já trabalhei.</h5>
            <div class='row empresas'>
                <img src="{{asset('/storage/imgs/logo_ibict.png')}}">
                <img src="{{asset('/storage/imgs/logo_bbts.png')}}">
                <img src="{{asset('/storage/imgs/logo_claro.png')}}">
            </div>
            </div>
            
        </div>
        <div id='contato' class="container vamos-trabalhar text-center">
            <h5>TEM UM PROJETO?</h5>
            <h1>Vamos Trabalhar Juntos</h3>
            <p>Tenho experiencia em desenvolvimento móvel e WEB. Sendo um desenvolvedor <i>full stack</i>, me empenho sempre a entregar a demanda que é solicitada.</p>
            <p>Disponho de outros projetos em REACT, Python (Django) e PHP (Laravel e Zend), mas por se tratar de trabalhos de pesquisa internos a institução, a sua apresentação é restrita.</p>
            <p>Entretanto, tenho muito empenho em aprender, principalmente coisas novas. Vamos começar um novo projeto juntos? Escolha um dos meios a seguir:</p>
            <div class='row contatos'>
                <a href="mailto:maxbborges@gmail.com"><img src="{{asset('/storage/imgs/email.png')}}"></a>
                <a href="tel:+5561984185161"><img src="{{asset('/storage/imgs/telefone.png')}}"></a>
                <a href="https://wa.me/5561984185161"><img src="{{asset('/storage/imgs/wa.png')}}"></a>
            </div>
            <!-- <button type="button" class="btn">VAMOS CONVERSAR</button> -->
        </div>
        <footer class="container-fluid">
            <p>Copyright 2021 Maxwell Borges - Todos os direitos reservados</p>
        </footer>

        <script src="{{asset('/js/jquery.min.js')}}"></script>
        <script src="{{asset('/js/popper.js')}}"></script>
        <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    </body>
</html>