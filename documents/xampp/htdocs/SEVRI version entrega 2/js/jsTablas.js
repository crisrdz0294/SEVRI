$(document).ready(function () {

    (function ($) {

        $('#filtrar').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.buscar tr').hide();
            $('.buscar tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});


/*function mensajeExito() {
   alert("entro");
     var div = document.getElementById("mensaje1");
     
    setTimeout(function(){div.innerHTML ='<p style="padding:1em;"><strong>Error!</strong>No se pudo guardar el lugar.</p> '; },0);
    setTimeout(function(){div.innerHTML = ""; }, 4000);
    
}
function mensajeError() {
    alert("entro");
     var div = document.getElementById("mensaje2");
     
    setTimeout(function(){div.innerHTML ='<p style="padding:1em;"><strong>Error!</strong>No se pudo guardar el lugar.</p> '; },0);
    setTimeout(function(){div.innerHTML = ""; }, 4000);
}*/