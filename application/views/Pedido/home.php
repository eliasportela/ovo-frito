	<script>
	function tamanho(){
		var tamanho = $('#tamanhoMarmita').val();
		if (tamanho==1) {
			$('#1').show();
			$('#2').hide();
			$('#3').hide();;
		} 
		if (tamanho==2) {
			$('#1').hide();
			$('#2').show();
			$('#3').hide();;
		} 
		if (tamanho==3) {
			$('#1').hide();
			$('#2').hide();
			$('#3').show();;
		} 
		}
	</script>
<!-- Conteudo da pagina -->
    <section id="pedido">
    	<div class="container">
	    	<div class="row">
	    		<div class="col-lg-12">
	    			<div class="row">
			    		<div class="col-md-3"></div>
			    		<div class="col-md-6">
			    			<!--Tamanho da Marmita e quantidade Linha 1-->
			    			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				    			<div class="row">
				    				<div class="col-lg-12">
				    					<div class="row">
					    					<div class="col-md-6">
					    						<h4>Tamanho</h4>
								    			<select class="form-control" name="tamanhoMarmita" id="tamanhoMarmita" onchange="tamanho()">
							    					<option selected>Selecione o Tamanho</option>
							    					<option value="1">Grande</option>
							    					<option value="2">Media</option>
							    					<option value="3">Pequena</option>
							    				</select>
							    			</div>
							    			<div class="col-md-6">
				    							<h4>Quantidade</h4><input type="number" class="form-control" name="qtdMarmita" value="1">
				    						</div>
			    						</div>
			    					</div>
			    				</div>
		    				</form>
		    			</div>
		    			<div class="col-md-3"></div>
			    	</div>		
	    		</div>
	    	</div>
	   	</div>
    </section>
   