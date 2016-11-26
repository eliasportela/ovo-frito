        <section id="cadastroProduto">
            <div class="container">
              <div class="row">
              <div class="text-center">
              <a href="../movimentacoes/produto.php"><button class="btn btn-xl" id="">Vizualizar Funcionarios</button></a>
                </div>
                <h2 class="text-center">Cadastro de Funcionário</h2>
              </div>
            </div>
            <div class="container">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 text-center">
                        <?php
                            if($error){
                          ?>
                            <hr>
                          <div class="alert alert-danger" role="alert"><?=$error?></div>
                          <?php
                            }
                            if($success){
                          ?>
                            <hr>
                           <div class="alert alert-success" role="alert"><?=$success?></div>
                          <?php
                            }
                          ?>
                            <hr>
                            <form method="POST" action="<?=base_url('adm/cadastro-funcionario')?>">
                                <p><label for="nome">Nome do Funcionario</label></p>
                                <input type="text" id="nome" class="form-control" name="nome" placeholder="Ex. Elias Portela" required="" />
                                <br><p><label for="user">User</label></p>
                                <input type="text" id="user" class="form-control" name="user" required="" placeholder="Ex. portela"/>
                                <br><p><label for="senha">Senha</label></p>
                                <input type="password" id="senha" class="form-control" name="senha" required="" />
                                <br><p><label for="confSenha">Confirmar Senha</label></p>
                                <input type="password" id="confSenha" class="form-control" name="confSenha" required="" />
                                <div class="col-lg-12 text-center">
                                    <br>
                                    <input type="submit" class="btn btn-xl" value="Inserir" />
                                    <a href="<?=base_url('adm#cadastro')?>"><h3>Voltar</h3></a>
                                </div>
                            </form>      
                        </div>
                    </div>
                </div>
            </div>
        </section>