<!DOCTYPE html>
<html>
<body>

<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
//check error
$servername = "localhost";
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

$SQL = "INSERT INTO news(title,dtime,text1, text2)  VALUES ('Arizona', NOW(), 'SHEEP', 'HORSE')";

$result =$connection->query($SQL);

$SQL = "UPDATE news SET title='California', text1='tiger', text2='monkey' WHERE newsid='3'";

$result =$connection->query($SQL); 

$SQL = "DELETE FROM news WHERE newsid='2'";

$result =$connection->query($SQL); 

//print "Records added to the database";

}
else {

print "Database NOT Found";
}



$connection->close();

 // Closing Connection with Server
?>
</body>
</html>

