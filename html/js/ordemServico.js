var arrayClientesNome = new Array();
var arrayClientes = new Array();
$(document).ready(function(){
   $.ajax({
       url:'/clientes/listaClientesAutoComplete',
       type:'GET',
       success:function(data) {
           $(data).each(function(){
             arrayClientes.push(this);
           });
       },
       dataType:'json'
   });
   
    for(i=0;i<arrayClientes.length;i++)    {
        arrayClientesNome.push(arrayClientes[i].nome);
    }
  
   $("input[name='nome']").autocomplete(function(){
            source: arrayClientesNome
    });  
        
});