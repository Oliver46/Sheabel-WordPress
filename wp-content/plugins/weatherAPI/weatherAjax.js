//console.log(frontend_ajax_object.ajaxurl);
class Weather {
    constructor(){
        
        var city = frontend_ajax_object.ajaxurl;
        var endpoint = frontend_ajax_object.city;
        var api = frontend_ajax_object.apikey;
	    jQuery.ajax({
		url:endpoint+"?q="+ city +"&units=imperial&APPID="+api,
		type:"POST",
		dataType:"jsonp",
		success:function(data){
			var widget = show(data);
			jQuery(".showWeather").html(widget);
			}
	    });
    }
   
}

function show(data){
    return  "<tr><td class='weatherData'>City:</td><td>"+ data.name +"</td></tr>"+
            "<tr><td class='weatherData'>Weather:</td><td>"+ data.weather[0].main +"</td><td rowspan='2'><img src='http://openweathermap.org/img/w/"+data.weather[0].icon+".png'></td></tr>"+
			"<tr><td  class='weatherData'>Description:</td><td>"+ data.weather[0].description +"</td></tr>"+
			"<tr><td  class='weatherData'>Temperature:</td><td>"+ Math.round(data.main.temp) +"&deg;F</td></tr>"+
			"<tr><td class='weatherData'>Humidity:</td><td>"+ data.main.humidity +"%</h4>"+
			"<tr><td class='weatherData'>Min Temperature:</td><td>"+ Math.round(data.main.temp_min) +"&deg;F</td></tr>"+
			"<tr><td class='weatherData'>Max Temperature:</td><td>"+ Math.round(data.main.temp_max) +"&deg;F</td></tr>";
			// "<tr><td class='weatherData'>Wind:</td><td>"+ Math.round(data.wind.speed) +"mph</td></tr>";
			
}

new Weather();