<?php
//get the q parameter from URL
$q=$_GET["q"];
/*
//connect to database
$servername = "localhost";
$username = "user";
$password = "pass";
$dbname = "news_system";
echo "this is after connection";
$connection = new mysqli($servername, $username, $password, $dbname);
//delete the news older than 10 mins
$sql="delete from news where DATE_ADD(dtime, INTERVAL 10 MINUTE)<now()";
$result=$connection->query($sql) or die ("Error in query: $sql. ".mysql_error());
//Now check  news with the selected state

$sql = "SELECT title  FROM news where title like '$q%'";
// execute query
$result = $connection->query($sql) or die ("Error in query: $sql. ".mysql_error());
// see if any rows were returned
$rowcount=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$rowcount);
if (mysqli_num_rows($result) > 0) {
 echo "Table is not  Empty, get news from the database";
$sql="SELECT title, text1  FROM news WHERE title like '$q%'";
$result = $connection->query($sql);

while($row = mysqli_fetch_array($result)) {
    echo "<br> news: ". $row["title"]. " - title: ". $row["text1"]. " " . "<br>";
}
}
else{*/
echo "Table is Empty,call showRSS() and insert news  into databases";
if($q) {
    $xml=("http://news.google.com/news?q={$q}&output=rss");
} /*elseif($q=="Arizona") {
  $xml=("http://news.google.com/news?q=Arizona&output=rss");
}*/
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
//$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
//$channel_title = $channel->getElementsByTagName('title')
//->item(0)->childNodes->item(0)->nodeValue;
//$channel_link = $channel->getElementsByTagName('link')
//->item(0)->childNodes->item(0)->nodeValue;
//$channel_desc = $channel->getElementsByTagName('description')
//->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
//echo("<p><a href='" . $channel_link
//  . "'>" . $channel_title . "</a>");
//echo("<br>");
//echo($channel_desc . "</p>");

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
//insert the rssfeeds to databases

// Escape user inputs for security
/*
//$channel_title = $connection->real_escape_string($item_title);
//$channel_link=$connection->real_escape_string($item_link);
//$channel_desc=$connection->real_escape_string($item_desc);
//insert the news for the database
$SQL = "INSERT INTO news(title, dtime,link, text1)  VALUES ('$channel_title', NOW(), '$channel_link','$channel_desc')";
$result =$connection->query($SQL);
*/

}// for for
//}//for else


$connection->close();
 // Closing Connection with Server


?>
