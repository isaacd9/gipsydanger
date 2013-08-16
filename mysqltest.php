<?php
	$conn=mysql_connect("127.0.0.1","symfony","junglr123",3306);
	echo mysql_get_server_info($conn);
	mysql_select_db('gipsydanger');
	$list=mysql_list_dbs();
	//echo mysql_fetch_array('list');
	echo $list;
?>
