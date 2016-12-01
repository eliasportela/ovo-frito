        <section id="cadastroProduto">
            <div class="container">
              <div class="row">
              <div class="text-center">
              </div>
                <h2 class="text-center">Editar Produtos</h2>
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
                            <form method="POST" action="<?=base_url('adm/editar-produto')?>">
                                <label>Nome do produto</label>
                                    <input type="text" class="form-control" name="nome" required="" value="<?=$produto->nome?>" />
                                <label>Grupo</label>
                                    <select class="form-control" name="id_ga">
                                        <option>Selecione..</option>
                                        <?php foreach ($grupoProduto as $grupos) { ?>
                                        <option value="<?=$grupos->id_ga?>" <?php if ($grupos->id_ga == $produto->id_ga): echo "selected"; ?>
                                        <?php endif ?>><?=$grupos->nome?></option>
                                        <?php } ?>
                                    </select>
                                <label>Unidade de Medida</label> 
                                    <select class="form-control" name="id_um">
                                        <option>Selecione..</option>
                                            <?php foreach ($umProduto as $um) { ?>
                                            <option value="<?=$um->id_um?>" <?php if ($um->id_um == $produto->id_um): echo "selected"; ?>
                                            <?php endif ?>><?=$um->nome?></option>
                                            <?php } ?>
                                        </select>  
                                <label>Preço Custo</label>   
                                    <input type="number" class="form-control" name="preco_custo" required="" value="<?=$produto->preco_custo?>" />
                                <label>Preço de Venda</label>  
                                    <input type="number" class="form-control" name="preco_venda" required="" value="<?=$produto->preco_venda?>" />
                                <br/>
                                    <input type="hidden" name="id_produto" value="<?=$produto->id_produto?>">
                                <div class="col-lg-12 text-center">
                                    <input type="submit" class="btn btn-xl" value="Editar"/>
                                    <a href="<?=base_url('adm/produtos')?>"><h3>Voltar</h3></a>
                                </div>
                            </form>      
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <p></p>