function hideShowDays(currentDay) {
	console.log(currentDay);
	$('#' + currentDay).hide();
	$('#' + currentDay).next().show();
}

function restart(currentDay) {
	$('#day11').hide();
	$('#day0').show();
}