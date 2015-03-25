<br />
<h2>php:</h2>
<?php
//php serialization
echo '<pre>';
$single = array('cat', 'dog', 'fish');

print_r($single);

$ser = serialize($single); //compact all array data into a string : a:3:{i:0;s:3:"cat";i:1;s:3:"dog";i:2;s:4:"fish";}a:3:{i:0;s:3:"cat";i:1;s:3:"dog";i:2;s:4:"fish";}
$unser = unserialize($ser);
echo $ser;
echo "<br />";
echo $unser;
echo "<br />";
print_r($unser);
?>

<br />
<h2>json:</h2>

<?php
//json serialization
echo '<pre>';
$single = array('cat', 'dog', 'fish');

print_r($single);

echo  $ser=json_encode($single);
echo "<br />";
echo json_decode($ser);
echo "<br />";
print_r(json_decode($ser));
?>