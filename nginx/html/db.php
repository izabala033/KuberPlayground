<?php

if ($query == null){
	echo "Error, variable query is unset";
	return;
}

$dbconn = pg_connect("host=192.168.49.2 port=32528 dbname=postgres user=postgres password=securepassword123")
	or die('could not connect: ' . pg_last_error());

$response = pg_query($dbconn, $query);

pg_close($dbconn);
unset($query);

/*

while($row = pg_fetch_row($response)){
	echo "name: $row[0] pass: $row[1] email: $row[2]";
	echo "<br/>";
}
*/

?>