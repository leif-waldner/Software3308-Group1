<html>
<head>
 <title>US Map Demo</title>

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
        <!-- <script src="scale.raphael.js"></script> -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
        <script src="color.jquery.js"></script>
        <script src="jquery.usmap.js"></script>

        <script>
        $(document).ready(function() {
          $('#map').usmap({
            'stateSpecificStyles': {
              'AK' : {fill: '#f00'}
            },
            'stateSpecificHoverStyles': {
              'HI' : {fill: '#ff0'}
            },
'mouseoverState': {
              'HI' : function(event, data) {
                //return false;
              }
            },


            'click' : function(event, data) {
              $('#alert')
                .text('Click '+data.name+' on map 1')
                .stop()
                .css('backgroundColor', '#ff0')
                .animate({backgroundColor: '#ddd'}, 1000);
            }
          });

          $('#map2').usmap({
            'stateStyles': {
              fill: '#025',
              "stroke-width": 1,
              'stroke' : '#036'
            },
            'stateHoverStyles': {
              fill: 'teal'
            },

            'click' : function(event, data) {
              $('#alert')
                .text('Click '+data.name+' on map 2')
                .stop()
                .css('backgroundColor', '#af0')
                .animate({backgroundColor: '#ddd'}, 1000);
            }
          });

          $('#over-md').click(function(event){
            $('#map').usmap('trigger', 'MD', 'mouseover', event);
          });

          $('#out-md').click(function(event){
            $('#map').usmap('trigger', 'MD', 'mouseout', event);
          });
        });
        </script>


<script>
function showRSS(str) {
  if (str.length==0) { 
    document.getElementById("rssOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("rssOutput").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getrss.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
 <div id="alert">Click alerts</div>

  <div id="map" style="width: 930px; height: 630px; border: solid 3px red;"></div>

  <button id="over-md">mouseover MD</button> <button id="out-md">mouseout MD</button>
  <div id="map2" style="width: 300px; height: 300px;"></div>

<form>
<select onchange="showRSS(this.value)">
<option value="">Select an RSS-feed:</option>
<option value="Colorado">Colorado</option>
<option value="Arizona">Arizona</option>
</select>
</form>
<br>
<div id="rssOutput">RSS-feed will be listed here...</div>
</body>
</html>

