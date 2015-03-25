<?php
//https://www.youtube.com/watch?v=7YcW25PHnAA
//https://www.youtube.com/watch?v=RTjd1nwvlj4
//https://www.youtube.com/watch?v=xkKcdK1u95s


/*
retrieve a remote URL in PHP
1.Standard file functions
2.cURL functions
3.HTTP_Request2 class from PEAR
4.pecl_http extension
*/

//Method one:
//using file function:
//the allow_url_fopen configuration setting must be turned on (which it usually is).

/*
//Sample one: reading a remote xml file and dumping it in a file:
header("Content-type: text/xml; charset=utf-8");
$page_xml = file_get_contents("http://www.w3schools.com/xml/note.xml");
$fp = fopen("site_xml.xml", "w");
fwrite(	$fp,$page_xml);
fclose($fp);
//echo $page_xsl;	 
echo $page_xml;
*/

/*
//Sample two: reading rss feed and showing the details and storing it in a file
//$url = 'http://news.microsoft.com/feed/';
$url = 'http://rss.news.yahoo.com/rss/';
$rss = simplexml_load_file($url);
print '<ul>';
foreach ($rss->channel->item as $item) {
    print '<li><a href="' . $item->link . '">' . $item->title . '</a></li>';
}
print '</ul>';
*/

/*
//Sample three: protected page, passing user name and password in query string
header("Content-type: text/plain; charset=utf-8");
//$url = 'http://username:password@URL';
$url = 'http://username:password@www.sample.com/';
$page = file_get_contents($url);
echo $page;
*/


//Sample four: passing in query string
//To retrieve a page that includes query string variables, use http_build_query() to cre‐
//ate the query string. It accepts an array of key/value pairs and returns a single string
//with everything properly escaped. You’re still responsible for the ? in the URL that sets
//off the query string
/*
header("Content-type: text/html; charset=utf-8");
$vars = array('tid' => 238431);
$qs = http_build_query($vars);
$url = 'http://www.ratemyprofessors.com/ShowRatings.jsp?' . $qs;
$page = file_get_contents($url);
echo $page;
*/


?> 