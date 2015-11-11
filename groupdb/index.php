<html>
  <head>
    <title>GeoNews</title>
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
      <!-- Unit Testing Framework -->
      <!-- <link rel="shortcut icon" type="image/png" href="jasmine/lib/jasmine-2.3.4/jasmine_favicon.png"> -->
      <link rel="stylesheet" type="text/css" href="jasmine/lib/jasmine-2.3.4/jasmine.css">

      <script type="text/javascript" src="jasmine/lib/jasmine-2.3.4/jasmine.js"></script>
      <script type="text/javascript" src="jasmine/lib/jasmine-2.3.4/jasmine-html.js"></script>
      <script type="text/javascript" src="jasmine/lib/jasmine-2.3.4/boot.js"></script>
      <!-- End unit test framework -->
      <script src="raphael.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
      <script src="color.jquery.js"></script>
      <script src="jquery.usmap.js"></script>
      <script src="main.js"></script>

    </head>
  <body>
    <div id="alert">Select a State</div>
    <div id="map" style="width: 930px; height: 630px;"></div>
    <br>
    <div id="rssOutput">RSS-feed will be listed here...</div>
  </body>
</html>
