
$(function(){
	var d1;
	var d2;
	
	var t = new Date();
	var month = t.getMonth();
	var day = t.getDay();
	var date = t.getDate();
	var year = t.getFullYear();
	var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
	var today = "0"+(month+1)+"/"+date+"/"+year;
	var dateStr = days[day]+', '+months[month]+' '+date+', '+year;
	document.getElementById("alternate1").value = dateStr;
	document.getElementById("datepicker1").setAttribute("value",today);
	var bb = today.split(' ');
	d1 = new Date(bb);

	
	$("#datepicker1").datepicker({
		showOtherMonths: true,
		selectOtherMonths: true,
		changeMonth: true,
		changeYear: true,
		altField: "#alternate1",
		altFormat: "DD, MM d, yy",
		 
		onSelect: function() {
			var a = $.datepicker.formatDate("yy mm dd", $(this).datepicker("getDate"));
			var b = a.split(' ');
			d1 = new Date(b);
		} 
	});
	
		$("#datepicker2").datepicker({
		showOtherMonths: true,
		selectOtherMonths: true,
		changeMonth: true,
		changeYear: true,
		altField: "#alternate2",
		altFormat: "DD, MM d, yy",
		 
		onSelect: function() {
			var c = $.datepicker.formatDate("yy mm dd", $(this).datepicker("getDate"));
			var g = c.split(' ');
			d2 = new Date(g);
		} 
	});
	
	$("#click").on('click',function(){
	var oneDay = 24*60*60*1000;	// hours*minutes*seconds*milliseconds
	var diffDays = (d2-d1)/oneDay;
	document.getElementById("output").innerHTML = diffDays + " days";
	});

});





// Calculate number of days between two dates without jQuery UI
// entering date mm/dd/yyyy
/*
var a = document.getElementById("first").value;
var b = document.getElementById("second").value;
var firstDate = a.split('/');
var secondDate = b.split('/');
var n = new Date(firstDate[2], firstDate[0]-1, firstDate[1]);
var p = new Date(secondDate[2], secondDate[0]-1, secondDate[1]);
console.log("result: "+ (p-n)/(1000*60*60*24) );
*/
