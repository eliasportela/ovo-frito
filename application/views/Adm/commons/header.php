<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/elias.min.css')?>">
   
</head>
<body>

<!-- Navigation -->

    <nav id="mainNav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?=base_url('adm')?>">Area do Usuário</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav collapse navbar-collapse navbar-right">
                    <li>
                        <a class="page-scroll" href="<?=base_url()?>">Vizualizar Site</a>
                    </li>
                    <li>
                        <?php if ($this->session->userdata('logged')) { ?>
                        <li>
                            <a class="page-scroll" href="<?=base_url('adm/alterar-senha')?>">Alterar Senha</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?=base_url('adm/logout')?>">Sair</a>
                        <li>
                        <?php } else { ?>
                        <li>
                            <a class="page-scroll" href="<?=base_url('adm/login')?>">Login</a>
                        <li>
                        <?php  } ?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
