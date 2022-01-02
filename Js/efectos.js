$(document).ready(function function_name(argument){
	

	//Menu
 $('.menu a').each(function(index , elemento) {
 	$(this).css({
 		'top': '-200px'
 	});

  $(this).animate({

       top: '0'
  	  }, 2000 + (index * 300));
  
 });

//header
 
 $('header .textos' ).css({
 	opacity:0,
 	marginTop:0
 });

 $('header .textos' ).animate({
 	opacity:1,
 	marginTop:'-52px'
 }, 2000);

//elementos menu
var acercade = $('#acerca-de').offset().top;

var ofertas = $('#ofertas').offset().top;
 var ubicacion = $('#ubicacion').offset().top;

$('#btn-acerca-de').on('click' , function() {
	$('html, body').animate({
		scrollTop: 600
	},500);
});
$('#btn-ofertas').on('click' , function() {
	$('html, body').animate({
		scrollTop: ofertas
	},500);
});
$('#btn-ubicacion').on('click' , function() {
	$('html, body').animate({
		scrollTop: ubicacion
	},500);
});


});//
