$( function() {
	$( "#datepicker-from" ).datepicker({
		dateFormat: "dd/mm/yy",
		currentText:"Hoje",
		monthNames:["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
		dayNamesMin:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
		duration: "fast"
	});
} );

$( function() {
	$( "#datepicker-to" ).datepicker({
		dateFormat: "dd/mm/yy",
		currentText:"Hoje",
		monthNames:["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
		dayNamesMin:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
		duration: "fast"
	});
} );

/*Input de hora*/
$('#timepicker-from').timepicker({
	timeFormat: 'HH:mm',
	minTime: '07:00',
	maxTime: '22:00',
	startTime: '07:00',
	showMinute: false,
	stepHour: 2
  });


  $('#timepicker-to').timepicker({
	timeFormat: 'HH:mm',
	minTime: '07:00',
	maxTime: '22:00',
	startTime: '07:00',
	showMinute: false,
	stepHour: 2
  });


  function mostrarTransmissao(id){
	if(document.getElementById){
		var el = document.getElementById(id);
		el.style.display = (el.style.display == 'none') ? 'block' : 'block';
	}
  }

  function ocultarTransmissao(id){
	if(document.getElementById){
		var el = document.getElementById(id);
		el.style.display = (el.style.display == 'block') ? 'none' : 'none';
	}
  }

  window.onload = function(){
	mostrarTransmissao('ocultoEquipamentos');
	ocultarTransmissao('ocultoEquipamentos');
  }

