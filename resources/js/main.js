$(document).ready(function(){
 
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
 
});

function mifuncion(){
			var lista = document.getElementById("titulos_descrip");
			var indiceSeleccionado = lista.selectedIndex;
			var opcionSeleccionada = lista.options[indiceSeleccionado];
			var textoSeleccionado = opcionSeleccionada.text;
			var valorSeleccionado = opcionSeleccionada.value;
			document.getElementById("resultado").innerHTML=" \
				indice: "+indiceSeleccionado+" \
				<br>Por opcion: "+opcionSeleccionada+" \
				<br>Por Nombre: "+textoSeleccionado+" \
				<br>Por valor: "+valorSeleccionado;
		};
function mifuncion1(){
	var valor = document.getElementById("tit_servicios").value;
	document.getElementById("resultado").innerHTML=" \
	Texto: "+valor;
};
function mifuncion2(){
	var valor = document.getElementById("descrip_servicios").value;
	document.getElementById("resultado").innerHTML=" \
	Texto: "+valor;
};
$('.carousel').carousel({
   	interval: 10000 
  });
