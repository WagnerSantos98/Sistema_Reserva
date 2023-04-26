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


$('#timepicker-from').timepicker({
	timeFormat: 'h:mm p',
	interval: 60,
	minTime: '08:00',
	maxTime: '10:00',
	startTime: '8:00',
	showMinute: false,
	stepHour: 2
  });


  $('#timepicker-to').timepicker({
	timeFormat: 'h:mm p',
	interval: 60,
	minTime: '08:00',
	maxTime: '10:00',
	startTime: '8:00',
	showMinute: false,
	stepHour: 2
  });
