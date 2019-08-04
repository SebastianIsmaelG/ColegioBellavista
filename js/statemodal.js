function getParameterByName(name, url) {
if (!url) url = window.location.href;
name = name.replace(/[\[\]]/g, '\\$&');
var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
    results = regex.exec(url);
if (!results) return null;
if (!results[2]) return '';
return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
function openModal(){
var open_modal = getParameterByName('estatemodal');
if (open_modal =="true"){
//Abre el modal que quieras
$('#Modalsend').modal();
}
if (open_modal =="false"){
//Abre el modal que quieras
$('#Modalsenderror').modal();
}
}
