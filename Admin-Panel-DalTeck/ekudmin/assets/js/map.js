(function($) {
    "use strict";
    // default map
     $('.map') 
      .gmap3({
        center:[37.7638886, -122.4563572],
        zoom:14,
        scrollwheel: false,
        mapTypeControl: false,
        streetViewControl: false,
        mapTypeId: "shadeOfGrey", // to select it directly
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, "shadeOfGrey"]
          }
      })
      .styledmaptype( 
        "shadeOfGrey", [
            { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#ece2df" }, { "lightness": 1 }] },
        ], { name: "Shades of Grey" }
        );

        // satellite map active
         $('.map_se') 
          .gmap3({
            center:[40.748817, -73.985428],
            zoom:3,
            scrollwheel: false,
            mapTypeControl: true,
            streetViewControl: false,
            mapTypeId: google.maps.MapTypeId.SATELLITE
          })
          .marker([
            {position:[40.748817, -73.985428]},
            {address:"46000 Usa"},
            {address:"86000 New york", icon: "http://maps.google.com/mapfiles/marker_grey.png"}
          ])
          .on('click', function (marker) {
            marker.setIcon('http://maps.google.com/mapfiles/marker_green.png');
          });

        // regular map active
         $('.map_se2') 
          .gmap3({
            center:[42.943007, -76.2615904],
            zoom:6,
            scrollwheel: false,
            mapTypeControl: true,
            streetViewControl: false
          })
          .marker([
            {position:[42.943007, -76.2615904]},
            {address:"86000 Usa"},
            {address:"86000 New york", icon: "http://maps.google.com/mapfiles/marker_grey.png"}
          ])
          .on('click', function (marker) {
            marker.setIcon('http://maps.google.com/mapfiles/marker_green.png');
          });

        // custom map active
         $('.map_se3') 
          .gmap3({
            center:[42.943007, -76.2615904],
            zoom:5,
            scrollwheel: false,
            mapTypeControl: true,
            streetViewControl: false,
            mapTypeId: "shadeOfBg", // to select it directly
            mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, "shadeOfBg"]
            }
          })

        .styledmaptype(
            "shadeOfBg", [
                { "featureType": "all", "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#5B5652" }, { "lightness": 1 }] },
                { "featureType": "all", "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] },
                { "featureType": "all", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] },
                { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#000000" }, { "lightness": 20 }] },
                { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }, { "weight": 1.2 }] },
                { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 20 }] },
                { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 21 }] },
                { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#EDEDED" }, { "lightness": 17 }] },
                { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#EDEDED" }, { "lightness": 29 }, { "weight": 0.2 }] },
                { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#F1F1F1" }, { "lightness": 18 }] },
                { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#F1F1F1" }, { "lightness": 16 }] },
                { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#F1F1F1" }, { "lightness": 1 }] },
                { "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 17 }] }
            ], { name: "Shades of Grey" }
        );

}(jQuery));