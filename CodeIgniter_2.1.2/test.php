<?PHP
	

//Connect To Database
$hostname='50.63.153.17';
$username='hutmut24_db';
$password='hut_dbPass!12';
$dbname='hutmut24_V2';
$usertable='news';
$yourfield = 'title';

mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.'. mysql_error());
mysql_select_db($dbname);


echo "home page";


$sqlstr = mysql_query("SELECT * FROM news");
if (mysql_numrows($sqlstr) != 0) {
while ($row = mysql_fetch_array($sqlstr)) {
?>
<p><?= $row['title'] ?></p>

<?php
}
}
?>
