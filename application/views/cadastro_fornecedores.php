<form id="frmCadastroUsuario" method="post" action="/clientes/salvar">

<div class="row-fluid">
    <div class="span12">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="input-xxlarge" />
    </div>
</div>
    
    <div class="span12" style="margin-left:0px !important">
        <label for="nome">Email</label>
        <input type="text" id="email" name="email" class="input-xlarge" />
    </div> 
    
    <div class="row-fluid">
        <div class="span3">
            <label for="telefone1">Telefone principal</label>
            <input type="text" name="telefone1" id="telefone1" class="input-medium" />
        </div>
        <div class="span9">
            <label for="telefone1">Telefone secundário</label>
            <input type="text" name="telefone2" id="telefone2" class="input-medium" />
        </div>
    </div>
    

<div class="span12" style="margin-left:0px !important">
       <label for="nome">CEP</label>
       <input type="text" id="cep" name="cep" class="input-medium" />
</div> 
    
<div class="row-fluid">
    <div class="span12">
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" class="input-xxlarge" />
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
    
<div class="row-fluid marty">
    <div class="span12">
        <button type="submit" class="btn">Salvar</button>
    </div>
</div>
    
</form>