$(function() {
	
	$.datepicker.setDefaults( $.datepicker.regional[ "pl" ] );
    
	$('#RezerCreate').on('change','#datetimepickerS1', function() {
		var Datas = $('input#datetimepickerS1').val();
		$.post('/index/getSomething', {'Datas': Datas}, function(data) {
		      $( "#kurs" ).html( data );
		});
	});
	
	$('#datetimepickerS1').datetimepicker( {
		lang: 'pl',
		format: 'Y-m-d',
		timepicker: false,
		yearStart: 2014,
		dayOfWeekStart: 1,
		minDate: 0,
		maxDate: '+1970-01-08', 
		formatDate: 'Y-m-d'
	});

	
});