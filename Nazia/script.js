$(document).ready(function() {
	
	var years = 0;
	var days = 0;

	var dob = new Date("1996-10-26");
	var curret_year = new Date();

	var year_interval = setInterval(function(){
		years++;
		$("p").text(years + " years passed");
		
		var age = curret_year.getFullYear() - dob.getFullYear();
		
		if(years == age){
			clearInterval(year_interval);
			year_interval = 0;
		}

		
	}, 2000);

});