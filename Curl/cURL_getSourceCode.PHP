<?php
//curl is a command line tool and library for transferring data with URL syntax
//example from http://php.net/manual/en/curl.examples-basic.ph

/*
 //Sample one: get the content of a site with cURL and write to file
$ch = curl_init("http://www.bcit.ca/");

$fp = fopen("example_homepage.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);

fclose($fp);
*/
/*
header("Content-type: text/plain; charset=utf-8");
$c = curl_init('http://www.example.com' );
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_USERPWD, 'username:password' );
$page = curl_exec($c);
echo $page;
curl_close($c);
*/

?>