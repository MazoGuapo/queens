(function($) {

    /*
    *  new_map
    *
    *  This function will render a Google Map onto the selected jQuery element
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 4.3.0
    *
    *  @param $el (jQuery element)
    *  @return  n/a
    */

    function new_map( $el ) {

      // ESTILO
      var mapStyles = [
        {
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "saturation": 36
                },
                {
                    "color": "#333333"
                },
                {
                    "lightness": 40
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 17
                },
                {
                    "weight": 1.2
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#dedede"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#39877f"
                },
                {
                    "lightness": 17
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#794242"
                },
                {
                    "lightness": 29
                },
                {
                    "weight": 0.2
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 18
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f2f2f2"
                },
                {
                    "lightness": 19
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#e9e9e9"
                },
                {
                    "lightness": 17
                }
            ]
        }
    ];

      // var
      var $markers = $el.find('.marker');

      // vars
      var args = {
        //zoom    : 6,
        center    : new google.maps.LatLng(0, 0),
        mapTypeId : google.maps.MapTypeId.ROADMAP,
        streetViewControl: false,
        zoomControl: true,
        zoomControlOptions: {
          position: google.maps.ControlPosition.RIGHT_BOTTOM
        },
        mapTypeControl: false,
        scrollwheel: false,
        fullscreenControl: false,
        disableDefaultUI: false,
      };

      // create map
      var map = new google.maps.Map($el[0], args);
      map.setOptions({
        styles: mapStyles
      });

      // add a markers reference
      map.markers = [];

      // add markers
      $markers.each(function(){
          add_marker( $(this), map );
      });

      // center map
      center_map( map );

      // return
      return map;
    }

    /*
    *  add_marker
    *
    *  This function will add a marker to the selected Google Map
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 4.3.0
    *
    *  @param $marker (jQuery element)
    *  @param map (Google Map object)
    *  @return  n/a
    */

    var infoWindowsAll = [];
    var clickedMarkerTitle = null;

    function add_marker( $marker, map ) {

      // var
      var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
      var icon = $marker.attr('data-marker-image');
      var icon_hover = $marker.attr('data-marker-image-hover');
      var type = $marker.attr('data-type');

      // create marker
      var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: icon,
        type: type
      });

      // add to array
      map.markers.push( marker );

      // if marker contains HTML, add it to an infoWindow
      if( $marker.html() ) {
        // create info window
        var infowindow = new google.maps.InfoWindow({
          content   : $marker.html()
        });
        infoWindowsAll.push(infowindow);

        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {
          closeAllInfoWindows();
          infowindow.open( map, marker );
          resetMarkerIcons();
          saveIconState(this);
          this.setIcon(icon_hover);
        });

        /* marca de inicio el primer marcador */
        marker.setVisible(false);

        google.maps.event.addListener(marker, 'mouseover', function () {
            this.setIcon(icon_hover);
        });

        google.maps.event.addListener(marker, 'mouseout', function () {
            //this.setIcon(my_ajax_object.templateUrl + "/img/marker.png");
            $('#test').html('<span>' + marker.title + '</span>');

            if (clickedMarkerTitle != null) {
                $('#test').html('<span>' + marker.title + ' and its not null</span>');
                if (marker.title != clickedMarkerTitle) {
                    $('#test').html('<span>' + marker.title + ' and ' + clickedMarkerTitle + '</span>');
                    marker.setIcon(icon);
                }
            }
            else {
                marker.setIcon(icon);
            }
        });

      }
    }

    function resetMarkerIcons() {
      //  reset all the icons back to normal except the one you clicked
      for (var i = 0; i < marker.length; i++) {
          marker[i].setIcon(this.attr('data-marker-image'));
      }
    }

    function saveIconState(marker) {
        clickedMarkerTitle = marker.title;
    }

    function closeAllInfoWindows() {
      if (infoWindowsAll) {
        for (var i = 0; i < infoWindowsAll.length; i++) {
          infoWindowsAll[i].close();

        }
      }
    }

    function filterMarker(id) {
      for (i = 0; i < map.markers.length; i++) {
        marker = map.markers[i];

        if ($(document.getElementById('map-filter-' + id)).hasClass('is-active')) {
          //console.log("yes", marker.type, 'id', id);
          if (marker.type == id) {
            marker.setVisible(true);
          }
        } else {
          if (marker.type == id) {
            marker.setVisible(false);
          }
        }
      }
    }

    /*
    *  center_map
    *
    *  This function will center the map, showing all markers attached to this map
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 4.3.0
    *
    *  @param map (Google Map object)
    *  @return  n/a
    */

    function center_map( map ) {

      // vars
      var bounds = new google.maps.LatLngBounds();
      var bounds2 = new google.maps.LatLngBounds();
      var start = true;

      // loop through all markers and create bounds
      $.each( map.markers, function( i, marker ){

        console.log(marker);
        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
        bounds2.extend( latlng );

        if( start ) {
            bounds.extend( latlng );
        }

        start = false;
      });

      /*
      setTimeout(function(){
          map.fitBounds(bounds);
       }, 500);
       */

         // only 1 marker?

    if( map.markers.length == 1 ) {
      // set center of map
        map.setCenter( bounds.getCenter() );
        map.setZoom( 14 );
        console.log('1 marker')
    }  else  {
      // fit to bounds
        map.setCenter( bounds.getCenter() );
        map.setZoom( 15 ); // Change the zoom value as required
        // map.fitBounds( bounds2 ); // This is the default setting which I have uncommented to stop the World Map being repeated
        console.log('various marker')
    }

      /*

      // only 1 marker?
      if( map.markers.length == 1 )
      {
        console.log('1 marker');
        // set center of map
          map.setCenter( bounds.getCenter() );
          map.setZoom( 14 );
      }
      else
      {
        console.log('more marker');

        // fit to bounds
        map.setCenter( bounds.getCenter() );
        if (window.innerWidth > 767) { map.setZoom( 14 ); }
        else { map.setZoom( 13 ); }
        // Change the zoom value as required
        //map.fitBounds( bounds ); // This is the default setting which I have uncommented to stop the World Map being repeated

      }
      */
    }

    /*
    *  document ready
    *
    *  This function will render each map when the document is ready (page has loaded)
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 5.0.0
    *
    *  @param n/a
    *  @return  n/a
    */
    // global var
    var map = null;

    $(window).load(function () {
      $('.map-filter-item').on('click', function () {
        closeAllInfoWindows();
        var dis = $(this);
        var _dis = this;
        $('.map-filter-item.is-active').not(this).trigger('click');
        dis.toggleClass('is-active');
        if (dis.hasClass('is-active')) {
          filterMarker(dis.attr('data-filter'));
        } else {
          filterMarker(dis.attr('data-filter'));
        }
      });
      $('.map-filter-item').first().trigger('click');
    });

    jQuery(document).ready(function($){
      $('.acf-map').each(function(){
        // create map
        map = new_map( $(this) );
      });
    });

    })(jQuery);