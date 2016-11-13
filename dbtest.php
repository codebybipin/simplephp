<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "<br><br><br><br>My awesome PHP test<br>";
$query = "SELECT * from user";
$rs = $connection->query($query);
while ($row = $rs->fetch_array(MYSQLI_ASSOC)) {
    echo $row['userID'] . " " . $row['username'] . "<br>";
    
}
echo $dbhost . "<br>";
    echo $dbport . "<br>";
    echo $dbuser . "<br>";
    echo $dbpwd . "<br>";
    echo $dbname . "<br>";
$rs->close();
$connection->close();
?>
