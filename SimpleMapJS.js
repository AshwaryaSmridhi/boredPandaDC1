/**
 * Created by YANG LU on 16/3/13.
 */


var map;
var newPoint;

var info = [];
var markers = [];

//var imgCircle = 'http://hoermann-gruppe.veithoermann.de/fileadmin/user_upload/map/map_point_red_big.png';
var imgCircle = 'map_point_red_big.png';
function initMap() {
    newPoint = new google.maps.Marker();

    <!-- set the map -->
    var mapProp = {
        center: new google.maps.LatLng(-37.87683931103161, 145.04428803920746),
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("googleMap")
        , mapProp);

    //drop();

    <!-- add click point-->
    google.maps.event.addListener(map, 'click', function (event) {
        clearOldPoint();
        latLngToGeo(event.latLng);
    });


    // var input = document.getElementById('addressInput');

    // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // var autocomplete = new google.maps.places.Autocomplete(input);
    //autocomplete.bindTo('bounds', map);



    checkType();
    //showPoints();
    //getPlaceFromJason();
    //loadJSON();
}

function clearOldPoint() {
    newPoint.setMap(null);
    //map.setZoom(15);
}

//get the request from search page
function getRequest() {
    var url = location.search; //get request after ?
    var theRequest = new Object();
    if (url.indexOf("?") != -1) {
        var str = url.substr(1);
        var strs = str.split("&");
        for (var i = 0; i < strs.length; i++) {
            theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
        }
    }
    return theRequest;
}

//check search type search in open data or search in user database
function checkType() {
    var req = getRequest();
    var activityName = req['activityName'];
    var postcode = req['postcode'];
    var category = req['category'];

    //`alert(postcode);

    $('pref-search1').value = activityName;
    $('pref-categoty').value = category;

    showUserPoints(activityName, category, postcode);

}

//search in database to get activity info
function showUserPoints(activityName, category, postcode) {
    var url = 'http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/userData.php?activityName=' + activityName +
        '&postcode=' + postcode + '&category=' + category;

    alert(url);

    var http_request = new XMLHttpRequest();
    try {
        // Opera 8.0+, Firefox, Chrome, Safari
        http_request = new XMLHttpRequest();
    } catch (e) {
        // Internet Explorer Browsers
        try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");

        } catch (e) {

            try {
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                // Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }

    http_request.onreadystatechange = function () {

        if (http_request.readyState == 4 || http_request.readyState == "complete") {
            var csv = http_request.responseText;
            alert(csv);
            var lines = csv.split("\n");
            var result = [];

            var headers = lines[0].split("^");

            for (var i = 1; i < lines.length; i++) {

                var obj = {};
                var currentline = lines[i].split("^");

                for (var j = 0; j < headers.length; j++) {
                    obj[headers[j]] = currentline[j];
                }
                result.push(obj);
            }

            var flag = -1;

            for (var i = 0; i< markers.length;i++){
                markers[i]. setMap(null);
            }
            markers = [];
            info = [];

            for (var j = 0; j < result.length; j++) {
                putMark(result[j], 0);
                flag++;
            }

            if (flag < 1) {
                alert("Cannot find an Activity created by User. We have suggestions, would you be interested?");
                showOpenDataPoints(postcode, category, activityName);
            }
            map.setZoom(10);
        }
    }
    ;
    http_request.open("GET", url, true);
    http_request.send();
}

var http_request;
//search in open data set according to suburb and category
function showOpenDataPoints(postcode, category, activityName) {

    var http_request = new XMLHttpRequest();
    try {
        // Opera 8.0+, Firefox, Chrome, Safari
        http_request = new XMLHttpRequest();
    } catch (e) {
        // Internet Explorer Browsers
        try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");

        } catch (e) {

            try {
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                // Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }

    var url = 'http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/openData.php?activityName=' + activityName +
        '&postcode=' + postcode + '&category=' + category;;
    //url+="?dataSet="+string;
    //url=url+"&sid="+Math.random();
    http_request.onreadystatechange = function () {

        if (http_request.readyState == 4 || http_request.readyState == "complete") {
            var csv = http_request.responseText;
            alert(csv);
            var lines = csv.split("\n");

            var result = [];

            var headers = lines[0].split("^");

            for (var i = 1; i < lines.length; i++) {

                var obj = {};
                var currentline = lines[i].split("^");

                for (var j = 0; j < headers.length; j++) {
                    obj[headers[j]] = currentline[j];
                }
                result.push(obj);
            }

            var flag = 0;
            /*
             if (postcode === 'undefined') {

             for (var j = 0; j < result.length; j++) {
             putMark(result[j], 1);
             flag++;
             }
             }
             else {*/
            for (var i = 0; i< markers.length;i++){
                markers[i]. setMap(null);
            }

            markers = [];
            info = [];

            for (var j = 0; j < result.length; j++) {
                //if (result[j].Postcode == parseInt(postcode)) {
                putMark(result[j], 1);
                flag++;
                //}
                //}
            }

            if (flag < 1) {
                alert("Cannot find a place arrcoding to your choice." +
                    "Please change the filter");
            }
            map.setZoom(10);
        }
    }
    ;
    http_request.open("GET", url, true);
    http_request.send();
}

function putMark(result, type) {
    var position = {
        lat: parseFloat(result.Latitude),
        lng: parseFloat(result.Longitude)
    };

    //create marker
    markers.push(new google.maps.Marker({
        position: position,
        map: map,
        icon: imgCircle,
        animation: google.maps.Animation.DROP
    }));

    if (type == 1) {
        info.push(new google.maps.InfoWindow({
            content: '<table><tr><td>Name:</td><td>'
            + result.Name + '</td></tr><tr><td>Business Category:</td><td>'+result.Business+
            '</td></tr><tr><td>Address:</td><td>' + result.Address +
            '<br/>' + result.Suburb + '</td></tr><tr><td>Postcode:</td><td>'+result.Postcode+'</td></tr></table>'
        }));
    } else {
        info.push(new google.maps.InfoWindow({
            content: '<table><tr><td>Activity Name:</td><td>'
            + result.ActivityName + '</td></tr><tr><td>Address:</td><td>' + result.Address +
            '<br/>' + result.Suburb + '</td></tr><tr><td>Postcode:</td><td>'+result.Postcode+'</td></tr></table>'
        }));
    }

    var index = markers.length - 1;
    google.maps.event.addListener(markers[index], 'click', function () {

        for(var i = 0; i<info.length;i++){
            info[i].close();
        }

        info[index].open(map, markers[index]);
    });

}

//search location according to user input
function getLocationByAddress() {
    var addressBar = document.getElementById("addressInput");
    var address = addressBar.value + " Australia";
    geoToLatLng(address);
}

//get latLng according to address
function geoToLatLng(address) {
    var geocoder = new google.maps.Geocoder();

    geocoder.geocode({
            //pass in address
            'address': address
        }, function (results, status) {

            if (status == google.maps.GeocoderStatus.OK) {
                //get latLng
                var latLng = results[0].geometry.location;
                //call new function to get full address
                latLngToGeo(latLng);
            }
            else {
                alert("please check the address");
            }
        }
    );
}

// decode latLng
function latLngToGeo(latLng) {
    var geocoder = new google.maps.Geocoder();

    geocoder.geocode({
        //passin latlng
        'location': latLng
    }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            //get decode latlng
            var location = results[0].geometry.location;
            //reset map center
            map.setCenter(location);
            //zoom in when click
            //map.setZoom(16);
            //get address

            var addressInfo = results[0].address_components;

            var shortAddress = addressInfo[0].long_name + " " + addressInfo[1].long_name;
            var suburb = addressInfo[2].long_name;
            var state = addressInfo[3].long_name;
            //var country =  addressInfo[4].long_name;
            //var postcode =  addressInfo[5].long_name;

            var address = shortAddress + "</br>" + suburb + "</br>" + state;
            //place the marker
            placeMarker(latLng, address);

        } else {
            // insert error innerHTML
            alert(latLng + "：error " + status);
        }
    });

}

//put marker according to the user click
function placeMarker(location, address) {
    //alert(location);

    newPoint.setMap(null);
    newPoint = new google.maps.Marker({
        position: location,
        map: map,
        <!-- animation can let the marker bounce -->
        animation: google.maps.Animation.BOUNCE,
    });

    var infowindow = new google.maps.InfoWindow({
        content: '<table>' +
        '<tr>' +
        '<td>Address:</td><td>' + address +
        '</td></tr>'+
        '<tr>' +
        '<td><button id="triggerClose" onclick="cancelPopUp()">Cancel</button></td>' +
        '<td>' +
        '<button id="trigger" class="trigger" onclick="popUp()">Create</button>' +
        '</tr>' +
        '</table>'
    });

    for(var i = 0; i<info.length;i++){
        info[i].close();
    }

    infowindow.open(map, newPoint);
}

/*
 create new activity point according to user input
 */
function newActivity(newLng, newLat) {
    var newLocation = {lat: newLat, lng: newLng};
    //element should be get before clear the point
    var activityName = document.getElementById("nameTxt").value;

    clearOldPoint();
    //var activityTime = document.getElementById("activityTIme").value;

    markers.push(new google.maps.Marker({
        position: newLocation,
        map: map,
        icon: imgCircle,

    }));

    var i = markers.length - 1;

    info.push(new google.maps.InfoWindow({
        content: '<table><tr><td>Activity Name:</td><td>' + activityName + '</td></table>'
    }));

    google.maps.event.addListener(markers[i], 'click', function () {
        for(var i = 0; i<info.length;i++){
            info[i].close();
        }
        info[i].open(map, markers[i]);
    });
}

//status of the bar
var status = 0;

//hide the bar and cancle the user clicked point
function cancelPopUp(){
    if(status == 1)
    {
        $("#slider").hide(500);
        status = 0;
    }
    clearOldPoint();
}

//show the bar
function popUp(){
    if(status==0)
    {
        $("#slider").show(500);
        status=1;
    }
}





