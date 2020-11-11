
import "../css/template.css";
import GMap from "./modules/GoogleMap";


var googleMap = new GMap();


// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
    module.hot.accept()
  }
  