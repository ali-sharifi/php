<?php
if (!empty($_GET['location'])) {
    $map_url = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($_GET['location']);
    $map_jason = file_get_contents($map_url);
    //$map_jason = curl_init($map_url);
    //$map_jason=curl_exec($map_jason);
    $maps_array = json_decode($map_jason, true);

    $lat = $maps_array['results'][0]['geometry']['location']['lat'];
    $lng = $maps_array['results'][0]['geometry']['location']['lng'];

    $distance = 0;
    if (!empty($_GET['distance'])) {
        $distance = $_GET['distance'];
    }

    //Instagram media search
    //https://instagram.com/developer/api-console/
    //https://api.instagram.com/v1/media/search
    //https://api.instagram.com/v1/media/search?lat=34&lng=23&distance=10000

    //should enable ssl socket protocol in php.ini: extension=php_openssl.dll
    $instagram_url = 'https://api.instagram.com/v1/media/search?lat=' . $lat . '&lng=' . $lng . '&distance=' . $distance . '&client_id=yourID!';

    $instagram_json = file_get_contents($instagram_url);
    $instagram_array = json_decode($instagram_json, true);


}
//replace yourID with your Instagram ID!
if (!empty($_GET['username'])) {
    $instagram_url1 = 'https://api.instagram.com/v1/users/search?q=' . urlencode($_GET['username']) . '&client_id=yourID!';
    //echo $instagram_url1;
    $instagram_json1 = file_get_contents($instagram_url1);
    $instagramUser_array = json_decode($instagram_json1, true);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instagram API</title>
</head>
<body>

<br/>

<form action="">
    Location : <input type="text" name="location">
    <br/>
    <br/>
    Distance : <input type="text" name="distance">
    <br/>
    <br/>
    UserName : <input type="text" name="username">
    <input type="submit" value="search">

    <input type="submit" value="search">
    <br/>
    <br/>

    <div>
        <?php
        if (!empty($instagram_array)) {
            foreach ($instagram_array['data'] as $image) {
                echo '<img src="' . $image['images']['low_resolution']['url'] . '">';

                /*echo "<br />";
                if(!empty($image['location']['name']))
                 echo  "Location name: ".$image['location']['name'] ;
                 echo "<br />";
                 echo  "Full name: ".$image['caption']['from']['full_name'] ;
                 echo "<br />";
                 echo  $image['caption']['text'] ;
                 echo "<br />";
                 echo  "user name: ".$image['caption']['from']['username'] ;
                 echo "<hr />";*/
            }
        }
        ?>

    </div>

    <div>
        <?php
        if (!empty($instagramUser_array)) {
            foreach ($instagramUser_array['data'] as $user) {
                echo '<img src="' . $user['profile_picture'] . '">';
                echo "<br />";
                echo "Full name: " . $user['full_name'];
                echo "<hr />";
            }
        }
        ?>

    </div>
</form>
</body>
</html>