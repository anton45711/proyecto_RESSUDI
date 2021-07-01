function fecha(){
    var meses = new Array ("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        var diasSemana = new Array ("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
        var f = new Date();
        document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
    }

function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    especiales = [9, 8, 37, 39, 46, 6];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){
/*alert('Tecla no aceptada');*/
        return false;
      }
}

function soloNumeros(evt){
 if(window.event){
  keynum = evt.keyCode;
 }
 else{
  keynum = evt.which;
 } 

 if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
  return true;
 }
 else{
  return false;
 }
}

// Validar contraseñas iguales
function validacion(){

var nom,tel,men;
nom=document.getElementById("nom").value;
tel=document.getElementById("tel").value;
men=document.getElementById("men").value;


if(nom==="" || tel==="" || men==="" ){
   sweetAlert("Todos los registros","deben llenarse","error");
   return false;
}

else if(nom.length>80){
   sweetAlert("Nombre","sobrepasa el rango de palabras","error");
     return false;
}else if(tel.length>10){
   sweetAlert("Teléfono", "sobrepasa el rango de numeros","error");
   return false;

}else if(men.length>150){
   sweetAlert("Mensaje", "mensaje muy largo","error");
   return false;

}}



