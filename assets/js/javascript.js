let session_id; 

function bien(){
    let text;
    let person = prompt("Ingresa tu nombre:", "Users Name");
    if (person == null || person == "") {
      window.alert("Inválido.");
      } else {
      window.alert("Hola " + person + "! Cómo estás?");
}};

function aviso(){
  window.alert("Para poder registrarte, ve al inicio\nAhi eligirás entre cuatro botones para registrarte como alguien que busca u ofrece trabajo");
}

  
function hide(id){
  document.getElementById(id).style.display="none";
}

function show(id){
  document.getElementById(id).style.display="block";
  
}

function show_zoom(){
  document.getElementById('zoom').style.display="block";
}

$("#main_container").click(function(event) {
    const text = document.getElementById(event.target.className).innerHTML;
    document.getElementById("span_muestra").innerHTML=text;
});

$(document).ready(function() {
  $(".dropdown-toggle").dropdown();
});