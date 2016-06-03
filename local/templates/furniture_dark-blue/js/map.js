$(document).ready(function(){
    // var styledMap = new google.maps.StyledMapType([{"featureType":"administrative","stylers":[/*{"visibility":"off"}*/]},{"featureType":"poi","stylers":[/*{"visibility":"simplified"}*/]},{"featureType":"road","stylers":[/*{"visibility":"simplified"}*/]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[/*{"visibility":"simplified"}*/]},{"featureType":"landscape","stylers":[/*{"visibility":"simplified"}*/]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#84afa3"},{"lightness":52}]},{"stylers":[{"saturation":-77}]},{"featureType":"road"}], {name: "Styled Map"});
    //    map.mapTypes.set('map_style', styledMap);
    //  map.setMapTypeId('map_style');*/
    function initialize() {



        function addMarker(location, map, i) {

            var marker = new google.maps.Marker({
                position: location,
                icon: "images/pinRed.png",
                map: map,
                label: ""
            });
            marker.ind = i;
            marker.window_id = location.window_id;


            //событие - клик
            var mclick = function(event){
                var index = marker.ind, window_id = marker.window_id;
                if (!marker.clicked) {
                    $(".contacts-window .close").click();
                    marker.setMap(null);
                    marker = new google.maps.Marker({
                        position: location,
                        icon: "images/pin_active.png",
                        map: map,
                        label: ""
                    });
                    markersClicked.push(marker);
                    marker.ind = index;
                    marker.window_id = window_id;
                    marker.hovered = 0;
                    marker.clicked = 1;
                    markers[marker.ind] = marker;
                    if (event)
                        ll = event.latLng;
                    $("#"+window_id).fadeIn(300);
                    //ссылка на google map
                    // $(".contacts-window .link2").attr("href", "https://www.google.com.ua/maps/place/"+ll.G+","+ll.K);
                }
            }

            //событие - наведение
            var mover = function() {
                var clicked = marker.clicked, index = marker.ind, window_id = marker.window_id;
                if (!marker.hovered) {
                    markers[marker.ind].setMap(null);
                    marker = new google.maps.Marker({
                        position: location,
                        icon:  (clicked) ? "images/pin_active.png": "images/pin_hover.png",
                        map: map,
                        label: ""
                    });
                    marker.ind = index;
                    marker.window_id = window_id;
                    marker.hovered = 1;
                    marker.clicked = clicked;
                    markers[marker.ind] = marker;
                    google.maps.event.addListener(marker, 'mousedown', mclick);
                    google.maps.event.addListener(marker, 'mouseout', mout);
                }
            }
            //событие - убраи наведение
            var mout = function() {
                var index = marker.ind, window_id = marker.window_id;
                if (marker.hovered) {
                    var clicked = marker.clicked;
                    marker.setMap(null);
                    var icon = (clicked) ? "images/pin_active.png" : "images/pin.png";
                    marker = new google.maps.Marker({
                        position: location,
                        icon: icon,
                        map: map,
                        label: ""
                    });
                    marker.ind = index;
                    marker.window_id = window_id;
                    marker.clicked = clicked;
                    marker.hovered = 0;
                    markers[marker.ind] = marker;
                    google.maps.event.addListener(marker, 'mouseover', mover);
                }

            };


            google.maps.event.addListener(marker, 'mouseover', mover);
            google.maps.Map.prototype.clearMarkers = function() {
                for(var i=0; i < markersClicked.length; i++){
                    markersClicked[i].setMap(null);
                }
                markersClicked = new Array();
            };
            return marker;
        }


        //зоом +  ----------------------------------------------------
        $("#map-zoom-plus").click(function(){
            var currentZoomLevel = zoom;
            if (currentZoomLevel != 21) {
                zoom = currentZoomLevel + 1;

            }
            map.setZoom(zoom);
        });
        //зоом -  ----------------------------------------------------
        $("#map-zoom-minus").click(function(){
            var currentZoomLevel = zoom;
            if (currentZoomLevel != 0) {
                zoom = currentZoomLevel - 1;
            }
            map.setZoom(zoom);
        });
        //полноэкранный режим  ---------------------------------------
        $("#map-full-mode").click(function(){
            $("#map-full-mode").hide();
            $("#map-normal-mode").show();
            $(".mapConteiner").addClass("full");
            $("body").css("overflow", "hidden");
            google.maps.event.trigger(map, "resize");
        });
        //обычный режим  ---------------------------------------------
        $("#map-normal-mode").click(function(){
            $("#map-normal-mode").hide();
            $("#map-full-mode").show();
            $(".mapConteiner").removeClass("full");
            $("body").css("overflow", "auto");
            google.maps.event.trigger(map, "resize");

        });

        //адреса  ----------------------------------------------------
        var coords = [
            {lat: 55.812869, lng: 37.397785, window_id: "coord1"},
        ];

        //центр карты  -----------------------------------------------
        var center = {lat: 55.812869, lng: 37.397785} //300004, Тула, улица Марата, 79

        //карта с настройками
        var zoom = 15;
        var map = new google.maps.Map(document.getElementById('map'), {
            scrollwheel: false,
            zoom: zoom,
            disableDefaultUI: true,
            center: center
        });

        //стили карты
        var styledMap = new google.maps.StyledMapType(
            [
                {
                    "featureType":"administrative",
                    "stylers":[/*{"visibility":"off"}*/{ "saturation": -100 }]
                },
                {
                    "featureType":"poi",
                    "stylers":[/*{"visibility":"simplified"}*/{ "saturation": -100 }]
                },
                {
                    "featureType":"road",
                    "stylers":[/*{"visibility":"simplified"}*/{ "saturation": -100 }]
                },
                {
                    "featureType":"water",
                    "stylers":[{"visibility":"simplified"},{ "saturation": -100 }]
                },
                {
                    "featureType":"transit",
                    "stylers":[/*{"visibility":"simplified"}*/{ "saturation": -100 }]
                },
                {
                    "featureType":"landscape",
                    "stylers":[/*{"visibility":"simplified"}*/{ "saturation": -100 }]
                },
                {
                    "featureType":"road.highway",
                    "stylers":[{"visibility":"off"},{ "saturation": -100 }]
                },
                {
                    "featureType":"road.local",
                    "stylers":[{"visibility":"on"},{ "saturation": -100 }]
                },
                {
                    "featureType":"road.highway",
                    "elementType":"geometry",
                    "stylers":[{"visibility":"on"},{ "saturation": -100 }]
                },
                {
                    "featureType":"water",
                    "stylers":[{"color":"#84afa3"},{"lightness":52},{ "saturation": -100 }]
                },
                {
                    "stylers":[{"saturation":-100}]
                },
                {
                    "featureType":"road"
                }
            ], 
            {name: "Styled Map"}
        );


        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');


        //закрытие всплывающего окна
        $(".contacts-window .close").click(function(){
            $(".contacts-window").fadeOut(300);
            if (map.clearMarkers)
                map.clearMarkers();
            for(i = 0; i < coords.length; i++) {
                if (markers[i] && markers[i].clicked) {
                    markers[i] = addMarker(coords[i], map, i);
                }

            }

        });
        addMarker({lat: 55.812869, lng: 37.397785}, map, 0);
        //маркеры
        /*var i = 0;
        for(i = 0; i < coords.length; i++) {

        markers[i]= addMarker(coords[i], map, i);

        }


        //выделить первый маркер
        var marker = markers[0];
        marker.setMap(null);
        marker = new google.maps.Marker({
        position: coords[0],
        icon: "images/pin_active.png",
        map: map,
        label: ""
        });
        markersClicked.push(marker);
        marker.ind = 0;
        marker.window_id = coords[0].window_id;
        marker.hovered = 0;
        marker.clicked = 1;
        markers[0].clicked = 1;
        $("#"+ marker.window_id).fadeIn(300);*/

    }   

    //если есть контейнер для карты
    if ($('#map').length > 0) { 
        initialize();
    }





})



// добавление маркера на карту
