<div id="contact-us-page" class="page-a">
  <h1>CONTACT US</h1>
  <h4>Office: +1 (604) 396-4166</h4>
  <h4>Email: info@imaginerestudios.com</h4>
  <br/>
  <div id="map"></div>
  <script>
    function initMap() {
      var mapDiv = document.getElementById('map');
      var map = new google.maps.Map(mapDiv, {
        center: {lat: 49.280384, lng: -123.124609},
        zoom: 15
      });
   /*   var marker = new google.maps.Marker({
        position: {lat: 49.280384, lng: -123.124609},
        map: map,
        title: 'Imaginere Studios'
      });*/
      marker = new google.maps.Marker({
        map: map,
        position: {lat: 49.280384, lng: -123.124609},
        icon: '/img/dot.png'  
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
 </div>