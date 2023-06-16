<?php
$server_socket = "103.10.15.253:8100"; // ip_address:port

// session data, user, password, you get from the login form inspection with the path "auth / authenticate"
$session_data = "ZDU1NDViN2ZjOGI0ZTEwMGFiYmMyYjdlNDNjNDc4YWMwM2MxMjMxMjE1NjY5OSr0OTQ2MzM%XX"; 
$irs_username = "ABCDEF";
$irs_password = "123XYZ";

header('Content-Type: application/json'); 
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://".$server_socket."/auth/authenticate");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, "irstoken=+&data=".$session_data."&username=".$irs_username."&password=".$irs_password);
$token = curl_exec($curl);
curl_close($curl);
$token = json_decode($token);
print_r($token);
echo "ini adalah contoh penambahan code di dalam file yang sudah ada";
?>
