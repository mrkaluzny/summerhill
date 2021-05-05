/* eslint-disable */

(function ($) {
  if (jQuery.contains(document, $('#map')[0])) {
    function new_map($el) {
      var $markers = $el.find('.marker');
      var args = {
        zoom: 13,
        center: new window.google.maps.LatLng(0, 0),
        styles: mapStyle,
        disableDefaultUI: true,
        mapTypeId: window.google.maps.MapTypeId.ROADMAP,
      };

      var map = new window.google.maps.Map($el[0], args);
      map.markers = [];
      $markers.each(function () {
        add_marker($(this), map);
      });

      center_map(map);
      return map;
    }

    function add_marker($marker, map) {
      var latlng = new window.google.maps.LatLng(
        $marker.attr('data-lat'),
        $marker.attr('data-lng')
      );
      var icon =
        $marker.attr('data-icon') + '/assets/images/summerhill-map-marker.svg';

      var marker = new window.google.maps.Marker({
        position: latlng,
        map: map,
        icon: icon,
      });

      map.markers.push(marker);

      if ($marker.html()) {
        var infowindow = new window.google.maps.InfoWindow({
          content: $marker.html(),
        });

        window.google.maps.event.addListener(marker, 'click', function () {
          infowindow.open(map, marker);
        });
      }
    }

    function center_map(map) {
      var bounds = new window.google.maps.LatLngBounds();
      $.each(map.markers, function (i, marker) {
        var latlng = new window.google.maps.LatLng(
          marker.position.lat(),
          marker.position.lng()
        );
        bounds.extend(latlng);
      });

      if (map.markers.length == 1) {
        map.setCenter(bounds.getCenter());
        map.setZoom(16);
      } else {
        map.fitBounds(bounds);
      }
    }

    var map = null;
    $(document).ready(function () {
      $('#map').each(function () {
        map = new_map($(this));
      });
    });
  }
})(jQuery);

var mapStyle = [
  {
    featureType: 'administrative',
    elementType: 'labels.text.fill',
    stylers: [
      {
        color: '#6195a0',
      },
    ],
  },
  {
    featureType: 'administrative.province',
    elementType: 'geometry.stroke',
    stylers: [
      {
        visibility: 'off',
      },
    ],
  },
  {
    featureType: 'landscape',
    elementType: 'geometry',
    stylers: [
      {
        lightness: '0',
      },
      {
        saturation: '0',
      },
      {
        color: '#f5f5f2',
      },
      {
        gamma: '1',
      },
    ],
  },
  {
    featureType: 'landscape.man_made',
    elementType: 'all',
    stylers: [
      {
        lightness: '-3',
      },
      {
        gamma: '1.00',
      },
    ],
  },
  {
    featureType: 'landscape.natural.terrain',
    elementType: 'all',
    stylers: [
      {
        visibility: 'off',
      },
    ],
  },
  {
    featureType: 'poi',
    elementType: 'all',
    stylers: [
      {
        visibility: 'off',
      },
    ],
  },
  {
    featureType: 'poi.park',
    elementType: 'geometry.fill',
    stylers: [
      {
        color: '#bae5ce',
      },
      {
        visibility: 'on',
      },
    ],
  },
  {
    featureType: 'road',
    elementType: 'all',
    stylers: [
      {
        saturation: -100,
      },
      {
        lightness: 45,
      },
      {
        visibility: 'simplified',
      },
    ],
  },
  {
    featureType: 'road.highway',
    elementType: 'all',
    stylers: [
      {
        visibility: 'simplified',
      },
    ],
  },
  {
    featureType: 'road.highway',
    elementType: 'geometry.fill',
    stylers: [
      {
        color: '#fac9a9',
      },
      {
        visibility: 'simplified',
      },
    ],
  },
  {
    featureType: 'road.highway',
    elementType: 'labels.text',
    stylers: [
      {
        color: '#4e4e4e',
      },
    ],
  },
  {
    featureType: 'road.arterial',
    elementType: 'labels.text.fill',
    stylers: [
      {
        color: '#787878',
      },
    ],
  },
  {
    featureType: 'road.arterial',
    elementType: 'labels.icon',
    stylers: [
      {
        visibility: 'off',
      },
    ],
  },
  {
    featureType: 'transit',
    elementType: 'all',
    stylers: [
      {
        visibility: 'simplified',
      },
    ],
  },
  {
    featureType: 'transit.station.airport',
    elementType: 'labels.icon',
    stylers: [
      {
        hue: '#0a00ff',
      },
      {
        saturation: '-77',
      },
      {
        gamma: '0.57',
      },
      {
        lightness: '0',
      },
    ],
  },
  {
    featureType: 'transit.station.rail',
    elementType: 'labels.text.fill',
    stylers: [
      {
        color: '#43321e',
      },
    ],
  },
  {
    featureType: 'transit.station.rail',
    elementType: 'labels.icon',
    stylers: [
      {
        hue: '#ff6c00',
      },
      {
        lightness: '4',
      },
      {
        gamma: '0.75',
      },
      {
        saturation: '-68',
      },
    ],
  },
  {
    featureType: 'water',
    elementType: 'all',
    stylers: [
      {
        color: '#eaf6f8',
      },
      {
        visibility: 'on',
      },
    ],
  },
  {
    featureType: 'water',
    elementType: 'geometry.fill',
    stylers: [
      {
        color: '#c7eced',
      },
    ],
  },
  {
    featureType: 'water',
    elementType: 'labels.text.fill',
    stylers: [
      {
        lightness: '-49',
      },
      {
        saturation: '-53',
      },
      {
        gamma: '0.79',
      },
    ],
  },
];
