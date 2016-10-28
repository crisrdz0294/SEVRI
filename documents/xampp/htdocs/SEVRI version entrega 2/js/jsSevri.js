function insertarSevri(){

    var formData = new FormData(document.getElementById("IcrearSevri")); 
    alert("aqui");
    formData.append("opcion", 1);
    alert("aqui");
    $.ajax({
    url : "../../controladora/ctrSevri.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
     alert(data);
    });  
    alert("aqui");   
}

function agregarParametros(){
    alert ("lol");
    var formData = new FormData(document.getElementById("agregarParametrosSevri")); 
    alert("aqui");
    if(document.getElementById('checkProbabilidad').checked ||
    document.getElementById('checkImpacto').checked ||
    document.getElementById('checkCalificacion').checked){
        formData.append("opcion", 2);
    }
    else if(document.getElementById('checkCategorias').checked){
        formData.append("opcion", 4);
    }
    else if(document.getElementById('checkDepartamentos').checked){
        formData.append("opcion", 3);
    }
    alert("aqui");
    $.ajax({
    url : "../../controladora/ctrSevri.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
     alert(data);
    });  
    alert("aqui");   
}

function deseleccionarTodos() {
    document.getElementById('checkProbabilidad').checked = false;
    document.getElementById('checkImpacto').checked = false;
    document.getElementById('checkCalificacion').checked = false;
    document.getElementById('checkCategorias').checked = false;
    document.getElementById('checkDepartamentos').checked = false;
}

function ocultarTodos(){
    document.getElementById('divProbabilidad').style.display='none';
    document.getElementById('divImpacto').style.display='none';
    document.getElementById('divCalificacion').style.display='none';
    document.getElementById('divCategorias').style.display='none';
    document.getElementById('divDepartamentos').style.display='none';
}

function encontrarSeleccionado(id){
    var checkSeleccionado = document.getElementById(id);
    ocultarTodos();
    if(checkSeleccionado.checked){
        deseleccionarTodos();
        checkSeleccionado.checked = true;
        if(id == "checkProbabilidad"){
            document.getElementById('divProbabilidad').style.display='';
        }
        else if (id == "checkImpacto"){
            document.getElementById('divImpacto').style.display='';
        }
        else if (id == "checkCalificacion"){
            document.getElementById('divCalificacion').style.display='';
        }
        else if (id == "checkCategorias"){
            document.getElementById('divCategorias').style.display='';
        }
        else if (id == "checkDepartamentos"){
            document.getElementById('divDepartamentos').style.display='';
        }
    }
}

function incluirExcluirElementos(idOrigen, idDestino) {
    var comboOrigen = document.getElementById(idOrigen);
    var comboDestino = document.getElementById(idDestino);
    var nuevaOpcion = new Option(comboOrigen[comboOrigen.selectedIndex].text,comboOrigen[comboOrigen.selectedIndex].value,"","");
    var a = comboDestino.length;
    comboOrigen.options[comboOrigen.options.selectedIndex] = null;
    comboDestino[a] = nuevaOpcion;
    alert(comboDestino[a].value);
    comboDestino[a].selected = true;
}


function paginaModificarSevri(IdSevri){     
 $('#contenedor').load("../../interfaz/ISevri/IModificarSevri.php?IdSevri="+IdSevri);
}

function cargarPagina (url) {
    $('#contenedor').load(url);
}

function confirmaActualizar(){
    var div = document.getElementById('confirmarActualizar');
    var divMensaje = document.getElementById('mensaje1');
    divMensaje.innerHTML = '¿Está seguro que desea realizar está operación?';
    div.style.display = '';
    divMensaje.style.display = '';
}

function cancelarActualizar(){
    var div = document.getElementById('confirmarActualizar');
    var divFormulario = document.getElementById('contenedorFormulario');
    var divMensaje = document.getElementById('mensaje1');
    divMensaje.style.display = 'none';
    div.style.display = 'none';
    divFormulario.style.display = 'none';
}

function actualizarSevri(){
   alert("llego");
    var formData = new FormData(document.getElementById('actualizarSevri')); 
    var id = document.getElementById("id").value;
    alert(id);
    formData.append("opcion", 5);
    formData.append("id",id);
    $.ajax({
    url : "../../controladora/ctrSevri.php",
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
    
    cargarPagina('../../interfaz/ISevri/IMostrarSevri.php');
    });    
}

function eliminarSevri(){
    alert("llego");
    var formData = new FormData(); 
    var id = document.getElementById("idSevri").value;
    alert(id);
    formData.append("opcion", 6);
    formData.append("idSevri",id);
    $.ajax({
    url : "../../controladora/ctrSevri.php",
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
    
    cargarPagina('../../interfaz/ISevri/IMostrarSevri.php');
    });    
}

function confirmarEliminacion(idSevri){
    document.getElementById('contenedorConfirmacion').style.display = '';
    document.getElementById('mensajeConfirmacion').innerHTML='¿Está seguro que desea realizar esta operación?'
    document.getElementById('idSevri').value = idSevri;
}

function cancelarEliminar(){
    document.getElementById('contenedorConfirmacion').style.display = 'none';
}