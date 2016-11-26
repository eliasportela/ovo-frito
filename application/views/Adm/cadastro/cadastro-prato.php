<!DOCTYPE html>
<html>
	<head>
		<script src="angular.min.js">
		</script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro de Pratos</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
	
	<title>Cadastro de Pratos</title>
		<meta charset="utf-8"/>
	</head>
	<body ng-app="crudSemBD" ng-controller="controlador">

<!-- Navigation -->

    <nav id="mainNav" class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="areadousuario.html">Marmitaria-Online</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.html">Vizualizar Site</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Ajuda</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Angular -->
		<div class="container">
			<div class="row">
				<h2> Pratos-Feitos</h2>
				<table class="table"> <!-- tabela -->
					<tr> <!-- table row (nova linha)--> 
						<!-- table header (célula de cabeçalho)-->
						<th> Código </th>
						<th> Nome do Prato</th> 
						<th> Estoque </th> 
						<th> Calorias </th>
						<th> Preço </th> 
						<th> Opçoes </th>
					</tr>
					<tr ng-repeat="prato in listapratos">
						<td> {{prato.codigo}} </td> 
						<td> {{prato.nome}} </td> 
						<td> {{prato.est}} </td>
						<td> {{prato.cal}} </td>
						<td> {{prato.preco}} </td> 
						<td> 
							<a href="#" ng-click="remover(prato.codigo)"> Remover </a> 
							||
							<a href="#" ng-click="atualizar(prato.codigo)"> Atualizar </a> 
						</td>
					</tr>
				</table>
			</div>
		</div>
	<div class="container">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
			<h3 class="text-center"> Informações Cadastrais </h3>
				Código 				<input type="number" class="form-control" ng-model="codigo"/>
				<br/>Nome do Prato 	<input type="text" class="form-control" ng-model="nome"/>	
				<br/>Estoque 		<input type="number" class="form-control" ng-model="est"/>
				<br/>Calorias 		<input type="number" class="form-control" ng-model="cal">	
				<br/>Preço 			<input type="number" class="form-control" ng-model="preco"/>	
				<br/>
				<div class="col-lg-12 text-center">
                <button type="button" class="btn btn-xl" ng-click="inserir()"> Inserir </button>
				<button type="button" class="btn btn-xl" ng-click="alterar()"> Atualizar </button>
				</div>
			</div>
		</div>
	</div>
	</div>
			<script>
				var app = angular.module('crudSemBD', []);
				app.controller('controlador', 
					function($scope) {
						// criar uma estrutura de dados JSON
						$scope.listapratos = [
							{codigo:'001', nome: 'Tradicional', est: '40', cal: '550', preco: 'R$10.00'},
							];
						// insere na lista
						$scope.inserir = function(){
							// adiciona novo prato em listapratos
							$scope.listapratos.push(
								{codigo: $scope.codigo,
								 nome: $scope.nome,
								 est:  $scope.est,
								 cal: $scope.cal,
								 preco: $scope.preco
								}
							);
						}
						// remove da lista
						$scope.remover = function(codigo){
							var resposta = confirm("Confirma a exclusão deste elemento?");
							if (resposta == true){
								var posicao = retornaIndice(codigo);
								$scope.listapratos.splice(posicao, 1);
							}
						};
						// atualiza um prato
						$scope.atualizar = function(codigo){
							var posicao = retornaIndice(codigo);
							$scope.codigo = $scope.listapratos[posicao].codigo;
							$scope.nome = $scope.listapratos[posicao].nome;
							$scope.est = parseFloat($scope.listapratos[posicao].est);
							$scope.cal = parseFloat($scope.listapratos[posicao].cal);
							$scope.precon = parseFloat($scope.listapratos[posicao].preco);
						}
						// editar o prato
						$scope.alterar = function(){
							// recupera o índice do prato para alterar
							var indice = retornaIndice($scope.codigo);
							if (indice != -1){
								$scope.listapratos[indice].nome = $scope.nome;
								$scope.listapratos[indice].est = $scope.est;
								$scope.listapratos[indice].cal = $scope.cal;
								$scope.listapratos[indice].preco = $scope.preco;
							}
						}
						// função que retorna a posição de um prato pelo seu código 
						function retornaIndice(codigo){
							var i;
							for (i=0;i<$scope.listapratos.length;i++){
									if ($scope.listapratos[i].codigo == codigo){
										return i; // retorna posição do prato desejado
									}
							}
							return -1;
						}
						
					}
				);
			</script>
			</div>
			<p> </p>
			<!--  Rodape -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Marmitaria-Online 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Política de Privacidade</a>
                        </li>
                        <li><a href="#">Termos de uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>