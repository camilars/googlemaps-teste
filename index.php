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

    <div id="divLoc">
      
      <h2>Escolha a filial mais próxima de você</h2>
      <p>A Camila está onde você mais precisa. Conte com nossos serviços nas nove filiais do país.</p>
  
      <form>
        <div class="form-row">
          <div class="form-group col-md-7">
              <select class="form-control" id="sel1">
                <option>Estado</option>
                <option>Paraíba</option>
                <option>Pernambuco</option>
                <option>São Paulo</option>
              </select>
          </div>
        </div>
    
        <div class="form-row">
          <div class="form-group col-md-7">
              <select class="form-control" id="sel1">
                <option>Cidade</option>
              </select>
          </div>
        </div>
      </form>
    
    </div>

    <div id="map"></div>
    
    <script src="mapa.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSUwZt9cx-aeGvAAN03XxgIZ3Pu0rtoJ4&libraries=visualization&callback=initMap"
    async defer></script>

  </body>
</html>

