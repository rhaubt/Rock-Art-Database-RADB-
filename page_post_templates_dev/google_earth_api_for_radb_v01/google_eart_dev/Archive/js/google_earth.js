google.load('earth', '1');
google.load('maps','3.6', { other_params: 'sensor=false' }); // or true

var id = ''; //container ID
var ge = null; // GEPlugin
var gex = null; // GEarthExtensions
var geocoder = null; // GClientGeocoder

var init = function() { 
  google.earth.createInstance('map3d', initCallback, failureCallback);
  
// Day/Night Button - also see bottom  
  	addSampleButton('Show Sun (Dusk/Dawn)', showSun);
  	addSampleButton('Hide Sun', hideSun);  	
};



var initCallback = function(object) {
  ge = object;
  geocoder = new window.google.maps.Geocoder(); //v3 Geocoder
  ge.getWindow().setVisibility(true);
  
  
// add a navigation control
  ge.getNavigationControl().setVisibility(ge.VISIBILITY_AUTO);
  
// add some layers
  ge.getLayerRoot().enableLayerById(ge.LAYER_BORDERS, true);
  ge.getLayerRoot().enableLayerById(ge.LAYER_ROADS, true);
  
// to fetch a  KML file and show it

  function finished(object) {
    if (!object) {
      // wrap alerts in API callbacks and event handlers
      // in a setTimeout to prevent deadlock in some browsers
      setTimeout(function() {
        alert('Bad or null KML.');
      }, 0);
      return;
    }
    ge.getFeatures().appendChild(object);
    var la = ge.createLookAt('');
    la.set(37.77976, -122.418307, 25, ge.ALTITUDE_RELATIVE_TO_GROUND,
           180, 60, 500);
    ge.getView().setAbstractView(la);
  }

// fetch the KML
  var url = 'http://www.australianartmagazine.com/heritagedatabase-wiki/images/ProposedModel/griffithTest.kmz';
  google.earth.fetchKml(ge, url, finished);

  
// for example: geocode New York
  geocode("Griffith University, Southport, QLD");
  
    
// Day/Night Button - also see top
}
function showSun() {
  ge.getSun().setVisibility(true);
}

function hideSun() {
  ge.getSun().setVisibility(false);
};

// Original Code

var failureCallback = function(error) {
  alert("Plugin Error: " + error);
};

var geocode = function(address) {
  geocoder.geocode({ 'address': address }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        // do something with the result, such as flying to it...
        var point = results[0].geometry.location;
        var lookat = ge.createLookAt('');
        lookat.set(point.lat(), point.lng(), 100, ge.ALTITUDE_RELATIVE_TO_GROUND, 0, 0, 1000);
        ge.getView().setAbstractView(lookat);
    } else {
        alert("Geocode Error: " + status);
    }
  });
};

google.setOnLoadCallback(init);