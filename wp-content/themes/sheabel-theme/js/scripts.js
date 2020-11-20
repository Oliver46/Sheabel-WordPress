
import "../css/template.css";
import GMap from "./modules/GoogleMap";
//import weather from "./modules/weather_API";


var googleMap = new GMap();
//var weatherAPI = new Weather();


// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
    module.hot.accept()
  }
  