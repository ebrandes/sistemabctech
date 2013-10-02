
<div class="row-fluid">
    <div class="span12 lista_clientes">
<?php     
    
    $tmpl = array ( 'table_open'  => 
        '<table border="0" cellpadding="0" cellspacing="0" id="lista_clientes">' );
    $this->table->set_template($tmpl);
    $this->table->set_heading('Nome', 'Endereço', 'Telefone','Celular','Complemento');
    $this->table->add_row('Fred', 'Blue', 'Small','Fred', 'red');
    $this->table->add_row('Fred', 'Blue', 'ttt','Fred', 'Blue');
    $this->table->add_row('Fred', 'Blue', 'Small','Fred', 'Blue');
    echo $this->table->generate();
?>
     </div>
</div>
