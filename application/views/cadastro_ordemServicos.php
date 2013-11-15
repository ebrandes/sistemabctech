<form id="frmCadastroOdemServico" method="post" action="/ordemServico/salvar">

<div class="row-fluid">
    <div class="span12">
        <label for="nome">Nome Cliente</label>
        <input type="text" id="nome" name="nome" class="input-xlarge" />
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" class="input-medium" />
    </div>
    <div class="span5">
        <label for="celular">Celular</label>
        <input type="text" id="celular" name="celular" class="input-medium" />
    </div>
</div>
    
    <div class="span12" style="margin-left:0px !important">
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" class="input-xlarge" />
    </div> 
    
<div class="row-fluid">
    <div class="span12">
        <label for="tipo_servico">Tipo de Serviço</label>
        <select class="form-control" name="tipo_servico" id="tipo_servico">
            <option value="suporte">Suporte e Manutenção</option>
            <option value="Ipanema">Venda</option>
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