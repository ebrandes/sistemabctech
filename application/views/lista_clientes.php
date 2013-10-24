
<div class="row-fluid">
    
    <?php
    $all = $this->messages->get();
    foreach ($all as $type => $messages)
        foreach ($messages as $message)
            echo '<div class="text-'.$type.'">' . $message . '</div>';
    ?>
    
    <div class="span12 lista_clientes">
<?php     
    
    $tmpl = array ( 'table_open'  => 
        '<table border="0" cellpadding="0" cellspacing="0" id="lista_clientes">' );
    $this->table->set_template($tmpl);
    $this->table->set_heading('Nome', 'Endereço', 'Telefone','Celular','Complemento');
  
    foreach($lista as $cliente) {   
        $this->table->add_row($cliente["nome"],$cliente["endereco"] ."  - ". $cliente["numero"]   , $cliente["telefone"],$cliente["celular"],$cliente["complemento"]);
    }
    echo $this->table->generate();
?>
     </div>
</div>
