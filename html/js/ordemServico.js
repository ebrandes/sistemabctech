$(document).ready(function(){
   arrayClientes = new Array();
   $.ajax({
       url:'/clientes/listaClientesAutoComplete',
       type:'GET',
       success:function(data) {
           $(data).each(function(){
            arrayClientes.push($(this));    
           });
           
            for(i=0;i<arrayClientes.length;i++) {
                   console.log(arrayClientes[i].nome);
            }
       },
       dataType:'json'
   });
});