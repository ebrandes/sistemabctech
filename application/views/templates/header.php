<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/html/css/bootstrap.css"  type="text/css" />
        <link rel="stylesheet" href="/html/css/bootstrap-responsive.css" type="text/css"  />
        
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        
        <script src="/html/js/jquery.js" type="text/javascript"></script>
        <script src="/html/js/dataTables.js" type="text/javascript"></script>
        <script src="/html/js/global.js" type="text/javascript"></script>
        <script src="/html/js/bootstrap.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?php echo base_url()?>/html/css/default.css" type="text/css" />
	<title>Ben vindo lo ao Sistema do BC Tech</title>
                <?php loadScript::loadScripts($css,$js); ?>
</head>
<body>

  <div class="container">
      
            <div class="row-fluid">
          <div class="span8">
              <a href="/welcome"><img src="/html/img/logo.png" alt="logo_bctech" title="BCTECH" /></a> 
          </div>
          <div class="span4">
              <p class="fontNormal">Bem vindo <span class="loginName">Eduardo Brandes</span></p>
              <p class="fontNormal"><?php
                    $datestring = "Data: %d / %m  / %Y  - %h:%i %a";
                    $time = time();
                    echo mdate($datestring, $time);
                ?>
              </p>
          </div>
      </div>  
      
      
       <div class="navbar">
          <div class="navbar-inner">
              <a href="/welcome" class="brand">Home</a>
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-th-list"></span>
              </a>
              <div class="nav-collapse collapse">
                  <ul class="nav">
                      <li class="active dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                            <li><a href="/clientes/cadastro">Novo cliente</a></li>
                            <li><a href="/clientes">Lista de clientes</a></li>
                        </ul>
                      </li>
                       <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fornecedores <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Novo fornecedor</a></li>
                            <li><a href="#">Lista de fornecedores</a></li>
                        </ul>
                      </li>
                      <li class='dropdown'>
                          <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Produtos <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Novo produto</a></li>
                            <li><a href="#">Lista de produtos</a></li>
                         </ul>
                      </li>
                      <li class='dropdown'><a href="#"  class="dropdown-toggle" data-toggle="dropdown">Agenda <b class="caret"></b></a>
                          <ul class='dropdown-menu'>
                              <li><a href='#'>Nova agenda</a></li>
                              <li><a href='#'>Listar agenda</a></li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
      </div>