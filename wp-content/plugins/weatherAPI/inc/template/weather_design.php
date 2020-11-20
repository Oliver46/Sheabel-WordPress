<?php
settings_errors();

$city = esc_attr( get_option( 'input_city' ));
$url = esc_attr( get_option( 'input_url' ));
$api = esc_attr( get_option( 'input_api_key' ));
?>
<div class="weather" style="margin: auto; width:100%;">
    <div><h1>Weather API</h1></div>
        <div class="weather-plugin-container">
            <div class="social-form">
                <form action="options.php" method="post">
                    <?php settings_fields( 'weather-settings-group' ); ?>
                    <?php do_settings_sections( 'custom_weather_plugins_settings' ); ?> <!-- id of the page where our information is store -->
                    <?php submit_button(); ?>
                </form>
            </div>
            <div id="renderWeather">
                <table>
                    <tbody class="showWeather"></tbody>
                </table>
            </div>
        </div>        
</div>















<script>

class Weather {
    constructor(){
        this.event();
        var city = "<?php echo $city; ?>";
        var endpoint = "<?php echo $url; ?>";
        var api = "<?php echo $api; ?>";
        console.log(api);
	    jQuery.ajax({
		url:endpoint+"?q="+ city +"&units=imperial"+
		"&APPID="+api,
		type:"POST",
		dataType:"jsonp",
		success:function(data){
			var widget = show(data);
			jQuery(".showWeather").html(widget);
		}
	    });
    }
    event(){}
}

function show(data){
    return  "<tr><td class='weatherData'>City:</td><td>"+ data.name +"</td></tr>"+
            "<tr><td class='weatherData'>Weather:</td><td>"+ data.weather[0].main +"</td><td rowspan='2'><img src='http://openweathermap.org/img/w/"+data.weather[0].icon+".png'></td></tr>"+
			"<tr><td  class='weatherData'>Description:</td><td>"+ data.weather[0].description +"</td></tr>"+
			"<tr><td  class='weatherData'>Temperature:</td><td>"+ Math.round(data.main.temp) +"&deg;F</td></tr>"+
			"<tr><td class='weatherData'>Humidity:</td><td>"+ data.main.humidity +"%</h4>"+
			"<tr><td class='weatherData'>Min Temperature:</td><td>"+ Math.round(data.main.temp_min) +"&deg;F</td></tr>"+
			"<tr><td class='weatherData'>Max Temperature:</td><td>"+ Math.round(data.main.temp_max) +"&deg;F</td></tr>"+
			"<tr><td class='weatherData'>Wind:</td><td>"+ Math.round(data.wind.speed) +"mph</td></tr>";
			
}

new Weather();

</script>


