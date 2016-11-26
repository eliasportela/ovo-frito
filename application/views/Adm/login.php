    <section>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-12 text-center">
    			<h2 class="section-heading">Login</h2>
    			<div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 text-center">
                        <?php
                            if($error){
                          ?>
                          <div class="alert alert-danger" role="alert"><?=$error?></div>
                          <?php
                            }
                          ?>
                    </div>
                    <div class="col-md-3"></div>
                </div>
    			<div class="row">
                	<div class="col-md-4"></div>
    				<div class="col-md-4">
                        <form class="form-horizontal" method="POST" action="<?=base_url('adm/login')?>">
                        	<div class="control-group">
                                <label class="control-label" for="inputUser">User</label>
                                <div class="controls">
                                	<input class="form-control" id="inputUser" type="text" name="user" placeholder="Digite o seu Usuário..." required="" />
                           	</div>
                                    </div>
                            <div class="control-group">
                            	<label class="control-label" for="inputPassword">Senha</label>
                                <div class="controls">
                                	<input class="form-control" id="inputPassword" type="password" name="senha" placeholder="Digite a sua senha..." required="" />
                                </div>
                            </div>
                            <div class="control-group">
                               <div class="controls">
                               		<p></p>
                                	<button class="btn btn-xl" name="submit" type="submit">Acessar</button>
                                </div>
                            </div>
                        </form>				
    				</div>
    				<div class="col-md-4"></div>
    			</div>
    		</div>
    	</div>
    </div>
    </section>
