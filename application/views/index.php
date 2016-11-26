<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Marmitaria Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="<?=base_url('assets/css/agency.min.css')?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Marmitaria-Online</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Serviços</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Nossa Equipe</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bem-Vindo a Marmitaria Online</div>
                <div class="intro-heading">Faça agora seu Pedido</div>
                <a href="#services" class="page-scroll btn btn-xl">Fazer Pedido</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Escolha umas das opções abaixo</h2>
                    <h3 class="section-subheading text-muted"> </h3>
                </div>
            </div>
            <a href="php/principal/pedido.php">
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-retweet fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">On Demand</h4>
                    <p class="text-muted">Monte seu próprio prato com várias opções do nosso cardápio, do seu estilo, do seu gosto, do jeito que você sempre quis.</p>
                </div>
            </a>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Pratos-Feitos</h4>
                    <p class="text-muted">Escolha dentre várias opções de Prato-Feito do seu gosto, sempre pensados na medida certa de calorias e satisfação.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Adcionais</h4>
                    <p class="text-muted">Porções, saladas, lanches, salgados, refrigerantes, sucos e muito mais para complementar a sua refeição.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nosso Time</h2>
                    <h3 class="section-subheading text-muted">Apresentamos, nosso querido time de desenvolvedores</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?=base_url('assets/img/team/elias.jpg')?>" class="img-responsive img-circle" alt="">
                        <h4>Elias Portela</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?=base_url('assets/img/team/onicio.jpg')?>" class="img-responsive img-circle" alt="">
                        <h4>Junior Souza</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?=base_url('assets/img/team/danilo.jpg')?>" class="img-responsive img-circle" alt="">
                        <h4>Danilo Vicente</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Nada se faz sozinho, um caminho longo fica mais perto com um amigo. - Autor Desconhecido</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Elogios, dúvidas, críticas ou sugestões?</h2>
                    <h3 class="section-subheading text-muted">Informe abaixo seu Feedback. Será um prazer recebe-lo.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                    <form name="sentMessag" id="contactFor" method="post" action="http://localhost:5000/contato">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu Nome" id="name" name="clientenome" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Seu Email" id="email" name="clienteemail" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Seu Telefone" id="phone" name="clientetelefone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua Mensagem" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar Mensagem</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Login -->
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Login</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                                <form class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">E-mail</label>
                                        <div class="controls">
                                        <input class="form-control" id="inputEmail" type="text" placeholder="Digite o seu e-mail..." />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Senha</label>
                                        <div class="controls">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Digite a sua senha..." />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                        <label class="checkbox"><input type="checkbox" />Lembrar senha</label>
                                        <p></p>
                                        <button class="btn btn-xl" type="submit">Acessar</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                        <div class="col-md-4">
                            <h3>Não é cadastrado?</h3>
                            <p></p>
                            <h4>Não tem problema, faça aqui o seu <a href="cadastroCliente.html">Cadastro</a></h4>
                            <p> </p>
                            <p>Ou entre na <a href="adm/login">Área do Usuário</a></p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>        
    </section>

    <!-- jQuery -->
    <script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?=base_url('assets/js/jqBootstrapValidation.js')?>"></script>
    <script src="<?=base_url('assets/js/contact_me.js')?>"></script>

    <!-- Theme JavaScript -->
    <script src="<?=base_url('assets/js/agency.min.js')?>"></script>

</body>

</html>
