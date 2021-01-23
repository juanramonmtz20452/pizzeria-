  var cantidad =1;
 var precio=null;
  function load(){
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange =function(){
      if (this.readyState==4 && this.status==200) {


        document.getElementById("demo").innerHTML=this.responseText;
      }


    };

xhttp.open("GET","pedidospendientes.php",true);
xhttp.send();
  }


  function load2(){
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange =function(){
      if (this.readyState==4 && this.status==200) {


        document.getElementById("demo").innerHTML=this.responseText;
      }
    };

xhttp.open("GET","listapedidos.php",true);
xhttp.send();
  }

  function iniciar(){
  precio=window.grande;
  
}
function aumentar (){
  cantidad=cantidad+1;
document.getElementById('cantidad').innerHTML=cantidad; 
  var inputNombre1 = document.getElementById('cantidad12');
  inputNombre1.value = cantidad;
var final=precio*cantidad;
document.getElementById('precio').innerHTML="$ "+final;
   var inputNombre = document.getElementById('precio123');
  inputNombre.value = final;
}
function bajar (){
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
}
}
function mediana (){
  document.getElementById('medianab').innerHTML="Mediana $"+window.mediana1+"      &#8226;";  
document.getElementById('grandeb').innerHTML="Grande $"+window.grande;
document.getElementById('extrab').innerHTML="Extra Grande $"+window.extra;
document.getElementById('tpizza').innerHTML="Mediana";
   var inputNombre = document.getElementById('tamano123');
  inputNombre.value = "Mediana";
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
   var inputNombre = document.getElementById('tamano123');
  inputNombre.value = "Grande";

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
   var inputNombre = document.getElementById('tamano123');
  inputNombre.value = "Extra Grande";

 precio = window.extra;
 var final=precio*cantidad; 
  document.getElementById('precio').innerHTML="$ "+final;
   var inputNombre = document.getElementById('precio123');
  inputNombre.value = final;
}
