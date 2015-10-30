<?php
//get the q parameter from URL
$q=$_GET["q"];

//find out which feed was selected
if($q=="Colorado") {
  //$xml=("http://news.google.com/news?ned=us&topic=h&output=rss");
    $xml=("http://news.google.com/news?q=Colorado&output=rss");
} elseif($q=="Arizona") {
  $xml=("http://news.google.com/news?q=Arizona&output=rss");
}

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
echo("<p><a href='" . $channel_link
  . "'>" . $channel_title . "</a>");
echo("<br>");
echo($channel_desc . "</p>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=2; $i++) {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;
  echo ("<p><a href='" . $item_link
  . "'>" . $item_title . "</a>");
  echo ("<br>");
  echo ($item_desc . "</p>");
}
?>
<?php
//connect to database
$username = "user";
$password = "pass";
$dbname = "news_system";
echo "this is after connection";
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection) {
$sql = "SELECT title, text1  FROM news";
$result = $connection->query($sql);
while($row = $result->fetch_assoc()) {
         echo "<br> news: ". $row["title"]. " - title: ". $row["text1"]. " " . "<br>";
     }

// Escape user inputs for security
$channel_title = $connection->real_escape_string($channel_title);
$channel_link=$connection->real_escape_string($channel_link);
$channel_desc=$connection->real_escape_string($channel_desc);
$SQL = "INSERT INTO news(title, dtime,link, text1)  VALUES ('$channel_title', NOW(), '$channel_link','$channel_desc')";
$result =$connection->query($SQL);
}
$connection->close();
 // Closing Connection with Server
?>


