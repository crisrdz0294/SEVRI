function insertarAnalisis(){

    var formData = new FormData(document.getElementById("IAnalisisRiesgo")); 
    formData.append("opcion", 1);
    $.ajax({
    url : "../../controladora/ctrAnalisis.php",
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

function paginaModificarAnalisis(IdAnalisis){     
    $('#contenedor').load("../../interfaz/IAnalisis/IModificarAnalisis.php?IdAnalisis="+IdAnalisis);
}

function actualizarAnalisis(){
   alert("llego");
    var formData = new FormData(document.getElementById('actualizarAnalisis')); 
    var id = document.getElementById("IdAnalisis").value;
    alert(id);
    formData.append("opcion", 2);
    formData.append("id",id);
    $.ajax({
    url : "../../controladora/ctrAnalisis.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    alert(data);
    var div = document.getElementById('mRespuesta');
    div.innerHTML = data;
    
    cargarPagina('../../interfaz/IAnalisis/IMostrarAnalisis.php');
    });    
}