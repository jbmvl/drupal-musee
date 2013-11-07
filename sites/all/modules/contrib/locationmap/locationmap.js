(function($){
  Drupal.behaviors.locationmap = {

    attach: function(context, settings) {

      var target_point = new google.maps.LatLng(Drupal.settings.locationmap.lat, Drupal.settings.locationmap.lng);

      var mapOptions = {
        zoom: parseInt(Drupal.settings.locationmap.zoom),
        center: target_point,
        mapTypeId: eval(Drupal.settings.locationmap.type),
        mapTypeControl: true
        };

      var map = new google.maps.Map(document.getElementById("locationmap_map"), mapOptions);

      var markerOptions = {
        position: target_point,
        draggable: Drupal.settings.locationmap.admin,
        map: map
      };

       var styles = [
                         {
                           "featureType": "water",
                           "stylers": [
                             { "color": "#275170" }
                           ]
                         },{
                           "featureType": "administrative",
                           "elementType": "labels.text.fill",
                           "stylers": [
                             { "color": "#656565" }
                           ]
                         },{
                           "featureType": "administrative",
                           "elementType": "labels.text.stroke",
                           "stylers": [
                             { "color": "#ffffff" },
                             { "weight": 8 }
                           ]
                         },{
                           "featureType": "administrative.locality",
                           "stylers": [
                             { "visibility": "off" }
                           ]
                         },{
                           "featureType": "landscape",
                           "stylers": [
                             { "color": "#eaeaea" }
                           ]
                         },{
                           "featureType": "poi",
                           "stylers": [
                             { "visibility": "off" }
                           ]
                         },{
                           "featureType": "road",
                           "elementType": "labels.icon",
                           "stylers": [
                             { "visibility": "off" }
                           ]
                         },{
                           "featureType": "road",
                           "elementType": "geometry.fill",
                           "stylers": [
                             { "color": "#eaeaea" }
                           ]
                         },{
                           "featureType": "road",
                           "elementType": "geometry.stroke",
                           "stylers": [
                             { "color": "#0fab9d" }
                           ]
                         },{
                           "featureType": "road",
                           "elementType": "labels.text.fill",
                           "stylers": [
                             { "color": "#ffffff" }
                           ]
                         },{
                           "featureType": "road",
                           "elementType": "labels.text.stroke",
                           "stylers": [
                             { "color": "#31b78d" },
                             { "weight": 6.1 }
                           ]
                         },{
                           "featureType": "transit",
                           "stylers": [
                             { "visibility": "off" }
                           ]
                         }
                      
                        ];
 
      var marker = new google.maps.Marker(markerOptions);

      var infowindow = new google.maps.InfoWindow({
        content: Drupal.settings.locationmap.info
      });

      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
      });

      // Allow fine tuning of the marker position in admin mode.
      if (Drupal.settings.locationmap.admin) {

        google.maps.event.addListener(marker, 'dragend', function(event) {
          $('#edit-locationmap-lat').val(event.latLng.lat());
          $('#edit-locationmap-lng').val(event.latLng.lng());
        });

        google.maps.event.addListener(map, 'zoom_changed', function(event) {
          $('#edit-locationmap-zoom').val(map.getZoom());
        });
      }
    }
  };
})(jQuery);