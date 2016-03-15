// An Example Google V3 customization https://wordpress.org/support/topic/how-to-enable-street-view-option and https://code.google.com/p/wordpress-geo-mashup/wiki/JavaScriptApi

GeoMashup.addAction( 'loadedMap', function ( properties, mxn ) {

        // Load some KML only into global maps - for instance pictures of squirrels

        var google_map = mxn.getMap();

        if (properties.map_content == 'global') {

                // Make the Google v3 call to add a Flickr KML layer
                var kml = new google.maps.KmlLayer( 'http://api.flickr.com/services/feeds/geo/?g=52241987644@N01&lang=en-us&format=kml', {
                        map: google_map
                } );

        }

} );

map.set('streetViewControl', true);

map.setOptions({
streetViewControl: true
}); 