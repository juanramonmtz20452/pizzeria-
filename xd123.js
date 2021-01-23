  var cantidad =1;
 var precio;
  function iniciar(){
  precio=window.grande;
  
}
function ocultar (){
  cantidad=cantidad+1;
document.getElementById('cantidad').innerHTML=cantidad; 
var final=precio*cantidad;
document.getElementById('precio').innerHTML="$ "+final;
   var inputNombre = document.getElementById('precio123');
  inputNombre.value = final;
    var variable = document.getElementById('cantidad12');
  variable.value = final;

}
function mostrar (){
  if(cantidad==1)
  cantidad=1;
else{
cantidad=cantidad-1;
document.getElementById('cantidad').innerHTML=cantidad;
  var inputNombre1 = document.getElementById('cantidad12');
  inputNombre1.value = cantidad;
 var final=precio*cantidad;
document.getElementById('precio').innerHTML="$ "+final;
   var inputNombre = document.getElementById('precio123');
  inputNombre.value = final;
    var variable = document.getElementById('cantidad12');
  variable.value = final;

}
function mediana (){
	document.getElementById('medianab').innerHTML="Mediana $"+window.mediana1+"      &#8226;";	
document.getElementById('grandeb').innerHTML="Grande $"+window.grande;
document.getElementById('extrab').innerHTML="Extra Grande $"+window.extra;
document.getElementById('tpizza').innerHTML="Mediana";
 precio = window.mediana1;
 var final=precio*cantidad;
  document.getElementById('precio').innerHTML="$ "+final;	
     var inputNombre = document.getElementById('precio123');
  inputNombre.value = final;
}
function grande1(){
document.getElementById('medianab').innerHTML="Mediana $"+window.mediana1;	
document.getElementById('grandeb').innerHTML="Grande $"+window.grande+"      &#8226;";
document.getElementById('extrab').innerHTML="Extra Grande $"+window.extra;
document.getElementById('tpizza').innerHTML="Grande";	
 precio = window.grande;
 var final=precio*cantidad;	
 document.getElementById('precio').innerHTML="$ "+final;
    var inputNombre = document.getElementById('precio123');
  inputNombre.value = final;
}

function extra1(){
document.getElementById('medianab').innerHTML="Mediana $"+window.mediana1;	
document.getElementById('grandeb').innerHTML="Grande $"+window.grande;
document.getElementById('extrab').innerHTML="Extra Grande $"+window.extra+"      &#8226;";
document.getElementById('tpizza').innerHTML="Extra Grande";	
 precio = window.extra;
 var final=precio*cantidad;	
  document.getElementById('precio').innerHTML="$ "+final;
   var inputNombre = document.getElementById('precio123');
  inputNombre.value = final;
}
