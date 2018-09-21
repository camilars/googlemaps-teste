<!DOCTYPE html>
<html>
  <head>
    
    <title>Camila Rodrigues</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="dados.js"></script>
  
  </head>
  
  <body>

    <div class="container">
      
      <h2>Escolha a filial mais próxima de você</h2>
      <p>A Camila está onde você mais precisa. Conte com nossos serviços nas nove filiais do país.</p>
  
      <form>
        <div class="form-row">
          <div class="form-group col-md-12">
            <div class="col-xs-4">
              <select class="form-control" id="sel1">
                <option>Estado</option>
                <option>Paraíba</option>
                <option>Pernambuco</option>
                <option>São Paulo</option>
              </select>
            </div>
          </div>
        </div>
    
        <div class="form-row">
          <div class="form-group col-md-12">
            <div class="col-xs-4">
              <select class="form-control" id="sel1">
                <option>Cidade</option>
              </select>
            </div>
          </div>
        </div>
      </form>
    
    </div>

    <div id="map"></div>
    <script>
      var map;
      function dropPins(allPoints, map){
      var infowindow = new google.maps.InfoWindow(); 
      for (var i = 0; i < allPoints.length; i++){
        var myLatlng = new google.maps.LatLng(allPoints[i].latitude, allPoints[i].longitude);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            animation: google.maps.Animation.DROP
        });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent("<ul><li>Latitude " + allPoints[i].latitude + "</li><li>Longitude " + allPoints[i].longitude + "</li></ul>");
        infowindow.open(map, marker);
      };

  })(marker, i));  
  }
}
var myStyle = [
       {
         featureType: "administrative",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       },{
         featureType: "poi",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       },{
         featureType: "water",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       },{
         featureType: "road",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       }
     ];

      function initMap() {

          var center = new google.maps.LatLng(-15.7797200,-47.9297200);

          map = new google.maps.Map(document.getElementById('map'), {
            center: center,
            zoom: 4.5,
            mapTypeId: 'mystyle'
          });
          map.mapTypes.set('mystyle', new google.maps.StyledMapType(myStyle, { name: 'My Style' }));


        var icone_selecionado = {
            url: "img/pin-selecionado.png", // url
            scaledSize: new google.maps.Size(3, 3), // scaled size
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0,0) // anchor
        };

        var icone_nao_selecionado = {
            url: "img/marker-nao-selecionado.png", // url
            scaledSize: new google.maps.Size(3, 3), // scaled size
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(0, 0)
        };

        


          for (var i = 0; i < filiais.length; i++) {
                var myLatlng = new google.maps.LatLng(filiais[i].latitude, filiais[i].longitude);
                  var marker = new google.maps.Marker({
                      position: myLatlng,
                      map: map,
                      icon: icone_nao_selecionado,
                      label:
                      {
                        text: filiais[i].nome, 
                        color: "#4682B4",
                        fontSize: "30px",
                        fontWeight: "bold"
                      } 

                  });
            }

            
         

            
}      
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSUwZt9cx-aeGvAAN03XxgIZ3Pu0rtoJ4&libraries=visualization&callback=initMap"
    async defer></script>

  </body>
</html>

<!-- <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>



<body>
    <div id="map"></div>
    <div id="legend"><h3>Legenda</h3> </div>
  </body>


  </body>
</html> -->



<!-- <html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jquery.csv.min.js"></script>
    <script src="dados.js"></script>
    
    <style>
      #map {
        height: 100%;
      }

      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      
      #legend {
        font-family: Arial, sans-serif;
        font-size: 30px;
        background: #fff;
        padding: 10px;
        margin: 10px;
        margin-right: 50px;
        border: 3px solid #000;
      }
      #legend h3 {
        margin-top: 0;
      }
      #legend img {
        vertical-align: middle;
        margin: 7px;
      }
    
    </style>
  </head> -->
  <!-- <body>
    <div id="map"></div>
    <script>
      var map;
      function dropPins(allPoints, map){
      var infowindow = new google.maps.InfoWindow(); 
      for (var i = 0; i < allPoints.length; i++){
        var myLatlng = new google.maps.LatLng(allPoints[i].latitude, allPoints[i].longitude);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            animation: google.maps.Animation.DROP
        });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent("<ul><li>Latitude " + allPoints[i].latitude + "</li><li>Longitude " + allPoints[i].longitude + "</li></ul>");
        infowindow.open(map, marker);
      };

  })(marker, i));  
  }
}
var myStyle = [
       {
         featureType: "administrative",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       },{
         featureType: "poi",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       },{
         featureType: "water",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       },{
         featureType: "road",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       }
     ];

      function initMap() {

          var center = new google.maps.LatLng(-15.7797200,-47.9297200);

          map = new google.maps.Map(document.getElementById('map'), {
            center: center,
            zoom: 4.5,
            mapTypeId: 'mystyle'
          });
          map.mapTypes.set('mystyle', new google.maps.StyledMapType(myStyle, { name: 'My Style' }));


        var icone_selecionado = {
            url: "img/pin-selecionado.png", // url
            scaledSize: new google.maps.Size(3, 3), // scaled size
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0,0) // anchor
        };

        var icone_nao_selecionado = {
            url: "img/marker-nao-selecionado.png", // url
            scaledSize: new google.maps.Size(3, 3), // scaled size
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(0, 0)
        };

        


          for (var i = 0; i < filiais.length; i++) {
                var myLatlng = new google.maps.LatLng(filiais[i].latitude, filiais[i].longitude);
                  var marker = new google.maps.Marker({
                      position: myLatlng,
                      map: map,
                      icon: icone_nao_selecionado,
                      label:
                      {
                        text: filiais[i].nome, 
                        color: "#4682B4",
                        fontSize: "30px",
                        fontWeight: "bold"
                      } 

                  });
            }

            
         

            
}      
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSUwZt9cx-aeGvAAN03XxgIZ3Pu0rtoJ4&libraries=visualization&callback=initMap"
    async defer></script>

  </body>
</html>

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>



<body>
    <div id="map"></div>
    <div id="legend"><h3>Legenda</h3> </div>
  </body> -->

