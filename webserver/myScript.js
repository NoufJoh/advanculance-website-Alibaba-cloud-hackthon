// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}

// google map location ...................................................

    // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      // var map, infoWindow, lat, lng;
     
      
      // function initMap() {
      //   map = new google.maps.Map(document.getElementById('map'), {
      //     center: {lat, lng},
      //     zoom: 10
      //   });
      //   infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        // if (navigator.geolocation) {
        //   navigator.geolocation.getCurrentPosition(function(position) {
        //     var pos = {
        //       lat: position.coords.latitude,
        //       lng: position.coords.longitude
        //     };

        //     infoWindow.setPosition(pos);
        //     infoWindow.setContent('Location found.');
        //     infoWindow.open(map);
        //     map.setCenter(pos);
        //     map.setZoom(15);
        //   }, function() {
        //     handleLocationError(true, infoWindow, map.getCenter());
        //   });
        // } else {
        //   // Browser doesn't support Geolocation
        //   handleLocationError(false, infoWindow, map.getCenter());
        // }
      //}

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

var i=0;
      function divchnage(){
        var divtag=document.getElementById("divStage");
        var bgcolor=["green","orange","darkseagreen"];
        divtag.style.backgroundColor=bgcolor[i];
        i=(i+1)%bgcolor.length;
      }
      setInterval(divchnage,7000);

      
      var j=0;
      function divHealth(){
        var divtag=document.getElementById("divHealth");
        var bgcolor=["green","orange","darkred"];
        divtag.style.backgroundColor=bgcolor[j];
        j=(j+1)%bgcolor.length;
      }

      setInterval(divHealth,5000);


      var m=0;
      function divTraffic(){
        var divtag=document.getElementById("divTraffic");
        var bgcolor=["green","orange","darkred"];
        divtag.style.backgroundColor=bgcolor[m];
        m=(m+1)%bgcolor.length;
      }

      setInterval(divTraffic,3000);
var l=0;
      function divEqu(){
        var divtag=document.getElementById("divEqu");
        var bgcolor=["green","orange","darkred"];
        divtag.style.backgroundColor=bgcolor[l];
        l=(l+1)%bgcolor.length;
      }

      setInterval(divEqu,6000);
