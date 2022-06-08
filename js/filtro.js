var form = document.forms[0];
form.onsubmit = function(){

   var filtro = document.querySelectorAll(".filtro:not([value='Todos']):checked");
   var filtro = '';
   for(var x=0; x<filtro.length; x++){
      filtro += filtro[x].value+',';
   }

   filtro = filtro.substring(0, filtro.lastIndexOf(","));
   form.filtro.value = document.querySelector("[value='Todos']:checked") || !filtro ? "Todos" : filtro;

}