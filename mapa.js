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

          var center = new google.maps.LatLng(-8.020465,-34.923203);

          map = new google.maps.Map(document.getElementById('map'), {
            center: center,
            zoom: 5,
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