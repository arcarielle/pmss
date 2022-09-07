function modalBienvenida(){    
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
}

function añadirEmpleo(){
    limpiarDoc();
    $(document).ready(function() {
        $("#añadirEmpleo").load("/pmss/php/administracion/añadirEmpleo.php");
    });
}

function modificarEmpleo(){
    limpiarDoc();
    $(document).ready(function() {
        $("#modificarEmpleo").load("/pmss/php/administracion/modificarEmpleo.php");
    });
}
//Actualmente limpia informacion pero no devuelve al breakpoint adecuado osea #administracion
function limpiarDoc(){
    $(document).ready(function() {
        $('#añadirEmpleo').empty();
        $('#modificarEmpleo').empty();
        $('#mensajeria').empty();
        $('#miInformacionC').empty();
    });
}

function eliminarEmpleo(){
    $(document).ready(function() {
        $("#eliminarEmpleo").load("/pmss/php/administracion/eliminarEmpleo.php");
    });
}

function mensajeria(){
    limpiarDoc();
    $(document).ready(function() {
        $("#mensajeria").load("/pmss/php/administracion/mensajeria.php");
    });
}

function miInformacionA(){
    $(document).ready(function() {
        $("#miInformacionA").load("/pmss/php/administracion/miInformacionA.php");
    });
}

function miInformacionC(){
    limpiarDoc();
    $(document).ready(function() {
        $("#miInformacionC").load("/pmss/php/administracion/miInformacionC.php");
    });
}
function modSelReg(){
    $(document).ready(function(){
        $('#selRegistro').modal('show');
        });
    }