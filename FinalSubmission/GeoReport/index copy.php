<!doctype html> <html> 



<head> 
  <meta charset="utf-8"> 
  <title>GeoReport.com</title> 
  <meta name="description" content=""> 
  <!--<meta name="viewport" content="width=device-width"> <!-- Place favicon.ico and apple-touch-icon.png in the root directory --> 
  <link rel="stylesheet" href="styles/vendor.css">
  <link rel="stylesheet" href="styles/main.css"> 
  <!-- <base href="/"> <link rel="icon" href="//d2c87l0yth4zbw.cloudfront.net/i/_global/favicon.png"> <!-- Open Graph data --> 

</head>
<body>
  <div class="site-content-container" style='background-image: url("img/side_earth.jpg"); background-repeat: repeat; background-size:cover;'>
    <div class="main-content">
      <header>
      <img src='strawman.png' />
      <font size="5">GeoReport</font>
      <nav>
       	<a style="border-left:1px solid white">
       		USA</a><a class="navtabs">EARTH</a><a class="navtabs">SPACE</a><a class="navtabs">EU</a>

      </nav>
      </header>
    </div>
    
  <footer ng-include="'partials/footer.html'"></footer>
</body> 

    
    <style>
        #alert {
          font-family: Arial, Helvetica, sans-serif;
          font-size: 16px;
          background-color: #ddd;
          color: #333;
          padding: 5px;
          font-weight: bold;
        }
      </style>

      <script src="raphael.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
      <script src="color.jquery.js"></script>
      <script src="jquery.usmap.js"></script>
      <script src="main.js"></script>

      <script>
      $(document).ready(function() {
        $('#map').usmap({
          'click' : function(event, data) {
              //add test to make sure showRSS returned something correctly for this function.
              var state = getName(data.name);
              console.log("getName finds that", data.name, "is:", state);
              showRSS(state);
          }
        });
      });
      </script>


  <div id="rssOutput">RSS-feed will be listed here...</div>
  <div id="map" style="position: relative; width: 800px; height: 600px; left:0%; opacity: .6"></div>
