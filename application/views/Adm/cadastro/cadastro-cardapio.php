
<?php 
	$nome_pagina = "Cardapio";	include("../../cabecalho_areadousuario.php"); 
	$dbc = mysqli_connect('127.0.0.1', 'root', '', 'marmitaria')
            or die("Erro ao conectar ao BD");
            mysqli_set_charset($dbc,"utf8");
	?>
	
	<!-- DEVS -->
		<div class="container">
			<div class="col-lg-12">
				<div class="row">
					<h3 class="text-center">Cadastro de Cardápio</h3>
				</div>
			</div>
		</div>
		<p></p>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                                <?php

                                    if (isset($_POST['submit'])) {
                                    	
                                    	
										$data = $_POST['cardapio_data'];
                                        #die(var_dump($data));
                                        $query = "INSERT INTO `cardapio`(`data_cardapio`) VALUES ('$data')";
                                        $result = mysqli_query($dbc, $query)
                                            or die('Error querying database 1.');
                                        
                                        #Selecionar o id do ultimo elemento
										$query = "SELECT LAST_INSERT_ID()"; // consulta
										$result = mysqli_query($dbc,$query) or die ("PROBLEMAS COM A CONSULTA; ".mysqli_error()); // enviamos a consulta ao SGBD
										$row = mysqli_fetch_row($result); // recuperamos o que for retornado em um array 	
										$id_cardapio = (int)$row[0];
										#die(var_dump($id_cardapio));
                                        $_checkbox = $_POST['produto'];
                                        foreach ($_checkbox as $_valor) {
                                        	# code...
                                        	$id_produto = (int)$_valor;
	                                        $qtd = (int)$_POST[$id_produto]; #O nome do input da quantidade é a id do produto 

	                                        $query = "INSERT INTO `produto_cardapio`(`quantidade`, `id_cardapio`, `id_produto`) VALUES ($qtd, '$id_cardapio', $id_produto)";
	                                    	$result = mysqli_query($dbc, $query)
	                                            or die('Error querying database 2.');
                                        }

                                    	?>
		                                    <script type="text/javascript">
		                                        alert("Informações Incluidas com sucesso");
		                                    </script>              
                                    <?php 
		                                } 
                                    ?>

		<div class="container">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<h4 class="text-center">Selecione a Data</h4>
						<input type="date" name="cardapio_data" class="form-control">
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</div>
		<p></p>
		<div class="container">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-3"></div>
					
					<?php
						$query2 = "SELECT id_ga, nome FROM grupo_alimentos";
                        $result2 = mysqli_query($dbc,$query2);
						
                    ?>
                    <div class="col-md-6">
					<?php while ($row2 = mysqli_fetch_array($result2)) { ?>
						</br>
						<table class="table">
							<h4 class="text-center"><?php echo $row2['nome'];?></h4>
							<tr>
								<th>Selecione</th>
								<th>Nome</th>
								<th>Unidade Medida</th>
								<th>Quantidade</th>
							</tr>

							<?php
								$id_ga = $row2['id_ga'];
								$query = "SELECT p.id_produto as id_produto, p.nome as nome_produto, g.nome as nome_grupo, u.nome as nome_um FROM produto p INNER JOIN grupo_alimentos g ON(g.id_ga = p.id_ga) INNER JOIN unidade_medida u ON(u.id_um = p.id_um) WHERE g.id_ga = $id_ga and p.fg_ativo = 1 ";
                                $result = mysqli_query($dbc,$query);
							
							while ($row = mysqli_fetch_array($result)) { ?> 
							<tr>
								<td><input type="checkbox" class="form-control" id="<?php echo $row['id_produto']?>" value="<?php echo $row['id_produto']?>" name="produto[]"></td>
								<td><label for="<?php echo $row['id_produto']?>"><?php echo $row['nome_produto'];?></label></td>
								<td><label for="<?php echo $row['id_produto']?>"><?php echo $row['nome_um'];?></label></td>
								<td><input type="number" class="form-control" name="<?php echo $row['id_produto']?>"></td>
							</tr>
								<?php } ?>
						</table>
					<?php } ?>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>

			<div class="col-md-5"></div>
			<div class="col-md-2">
				<button class="btn btn-xl" name="submit">Cadastrar</button>
			</div>
			<div class="col-md-5"></div>
		</div>
		</form>
	<!-- -->

<?php include("../../rodape_areadousuario.php"); ?> 
            