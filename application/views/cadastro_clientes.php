<form id="frmCadastroUsuario" method="post" action="/clientes/salvar">

<div class="row-fluid">
    <div class="span4">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="input-xlarge" />
    </div>
    <div class="span3">
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" class="input-medium" />
    </div>
    <div class="span5">
        <label for="celular">Celular</label>
        <input type="text" id="celular" name="celular" class="input-medium" />
    </div>
</div>
    
       <div class="span12 noMargin">
        <label for="nome">Email</label>
        <input type="text" id="email" name="email" class="input-xlarge" />
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