        <section id="cadastroProduto">
            <div class="container">
              <div class="row">
              <div class="text-center">
              <a href="../movimentacoes/produto.php"><button class="btn btn-xl" id="">Vizualizar Produtos</button></a>
                </div>
                <h2 class="text-center">Cadastro de Produtos</h2>
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
                            <form method="POST" action="<?=base_url('adm/cadastro-produto')?>">
                                <label>Nome do produto</label>
                                    <input type="text" class="form-control" name="nome" required="" />
                                <label>Grupo</label>
                                    <!--Comeco do select-->
                                    <select class="form-control" name="id_ga">
                                        <option>Selecione..</option>
                                        <?php foreach ($grupoProduto as $grupos) { ?>
                                        <option value="<?=$grupos->id_ga?>"><?=$grupos->nome?></option>
                                        <?php } ?>
                                    </select>
                                    <!--Fim do select-->
                                <label>Unidade de Medida</label> 
                                    <select class="form-control" name="id_um">
                                        <option>Selecione..</option>
                                            <?php foreach ($umProduto as $um) { ?>
                                            <option value="<?=$um->id_um?>"><?=$um->nome?></option>
                                            <?php } ?>
                                        </select>  
                                <label>Preço Custo</label>   
                                    <input type="number" class="form-control" name="preco_custo" required=""/>
                                <label>Preço de Venda</label>  
                                    <input type="number" class="form-control" name="preco_venda" required=""/>
                                <br/>
                                <div class="col-lg-12 text-center">
                                    <input type="submit" class="btn btn-xl" value="Inserir"/>
                                    <a href="<?=base_url('adm#cadastro')?>"><h3>Voltar</h3></a>
                                </div>
                            </form>      
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <p></p>