function nuevoAjax(){
    var xmlhttp = false;
    try{
        //par que sirva en cualquier browser que no sea Internet Explorew
        xmlhttp= ActiveXObject("Msxml2.XMLHTTP");
    }catch(e){
        try{
            //para sirva en internet explorex
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch(e){
            xmlhttp= false;
        }
    }
    if(!xmlhttp && typeof XMLHttpRequest != 'undefined' ){
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function cargarPagina(url){
   $('#contenedor').load(url);
}
function insertarRiesgo(){
    var formData = new FormData(document.getElementById("IIdentificarRiesgo")); 
    formData.append("opcion", 1);
    $.ajax({
        url : "../../controladora/ctrRiesgo.php",
        type : "post",
        dataType : "html",
        data : formData,
        cache : false,
        contentType : false,
        processData : false
    }).done(function(data) {
        alert(data);
    });
}
function modificarRiesgoConsulta(id){  
    var formData = new FormData(document.getElementById("IListaModificarRiesgo"));
    formData.append("idRiesgo", id);
    $.ajax({
        url : "../interfaz/IRiesgo/IModificarRiesgo.php",
        type : "post",
        dataType : "html",
        data : formData,
        cache : false,
        contentType : false,
        processData : false
    }).done(function(data) {
        alert(data);
    });
}
function eliminarRiesgo(id){
    var formData = new FormData(document.getElementById("IIdentificarRiesgo")); 
    formData.append("opcion", 3);
    formData.append("idRiesgo", id);
    $.ajax({
        url : "../../controladora/ctrRiesgo.php",
        type : "post",
        dataType : "html",
        data : formData,
        cache : false,
        contentType : false,
        processData : false
    }).done(function(data) {
        alert(data);
    });
}
function modificarRiesgo(){
    var formData = new FormData(document.getElementById("IModificarRiesgo")); 
    formData.append("opcion", 4);
    $.ajax({
        url : "../../controladora/ctrRiesgo.php",
        type : "post",
        dataType : "html",
        data : formData,
        cache : false,
        contentType : false,
        processData : false
    }).done(function(data) {
        alert(data);
    });
}