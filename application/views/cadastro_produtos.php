<form id="frmCadastroProduto" method="post" action="/produtos/salvar">

<div class="row-fluid">
    <div class="span6">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="input-xlarge" />
    </div>
    <div class="span3">
        <label for="Categoria">Categoria</label>
        <select name="categoria">
            <option value="0">Selecione a categoria</option>
            <?php foreach ($categorias as $categoria) { ?>
                <option value="<?php echo $categoria['cod'] ?>"><?php echo $categoria['nome'] ?></option>
            <?php } ?>
        </select>
        
    </div>
    <div class="span3">
    </div>
</div>
    
    <div class="span12" style="margin-left:0px !important">
        <label for="Descricao">Descrição</label>
        <textarea id="Descricao" class="form-control input-xlarge" rows="5"></textarea>
    </div> 
    
    <div class="row-fluid">
        <div class="span4" style="margin-left:0px !important">
            <label for="valor">Valor</label>
            <input type="text" id="valor" name="valor" class="input-medium" />
        </div> 
        
        <div class="span8">
            <label for="valor">Imagem do produto</label>
        </div>
        
    </div>
    
    
<div class="row-fluid">
    <div class="span7">
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" class="input-xxlarge" />
    </div>
    <div class="span2">
        <label for="endereco">Complemento</label>
                <label class="radio inline">
                  <input type="radio" id="comp1" value="C" name="complemento"> Casa
                </label>
                 <label  class="radio inline">
                  <input type="radio" id="comp2" value="A" name="complemento"> Apto
                </label>
    </div>
    <div class="span3">
        <label for="numero">Nº</label>
        <input type="text" name="numero" id="numero" class="input-small" />
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <label for="bairro">Bairro</label>
        <select class="form-control" name="bairro">
            <option value="Tristeza">Tristeza</option>
            <option value="Ipanema">Ipanema</option>
            <option value="Ipanema">3</option>
            <option value="Ipanema">4</option>
            <option value="Ipanema">5</option>
        </select>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" />
    </div>
</div>

<div class="row-fluid marty">
    <div class="span12">
        <button type="submit" class="btn">Salvar</button>
    </div>
</div>
    
</form>