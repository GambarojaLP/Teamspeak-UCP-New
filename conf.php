<?php
$server = array( 
"tsip" => "INSERT_IP_HERE",
"tsport" => "9987",
"ts_query_admin" => "serveradmin",
"ts_query_password" => "INSERT_QUERY_PASSWORD_HERE",
"ts_query_port" => "10011",
"ts_query_user_nick" => "UCP_Administrator" 
);

TeamSpeak3::init();
$ts3_VirtualServer = TeamSpeak3::factory("serverquery://".$server["ts_query_admin"].":".$server["ts_query_password"]."@".$server["tsip"].":".$server["ts_query_port"]."/?server_port=".$server["tsport"]."&nickname=".$server["ts_query_user_nick"]."");  

if (!empty($_SERVER['HTTP_CLIENT_IP']))
	$ip = $_SERVER['HTTP_CLIENT_IP'];
elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
elseif(!empty($_SERVER['HTTP_X_FORWARDED']))
	$ip = $_SERVER['HTTP_X_FORWARDED'];
elseif(!empty($_SERVER['HTTP_FORWARDED_FOR']))
	$ip = $_SERVER['HTTP_FORWARDED_FOR'];
elseif(!empty($_SERVER['HTTP_FORWARDED']))
	$ip = $_SERVER['HTTP_FORWARDED'];
elseif(!empty($_SERVER['REMOTE_ADDR']))
	$ip = $_SERVER['REMOTE_ADDR'];
else
	$ip = 0;

foreach ($ts3_VirtualServer->clientList() as $cl) {
  if ($cl->client_type) continue;
  if ($cl->getProperty('connection_client_ip') == $ip) {
    $result = $cl->client_unique_identifier;
  }
}

?>