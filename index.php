<?php 
header('Location: photos.json');
exit;
#header('Access-Control-Allow-Origin: *');
#header("Content-type: application/json; charset=utf-8");
$url = "https://raw.githubusercontent.com/wacko1805/google-pixel-wallpapers-images/main";
$imagecount = count(glob("*/*.{jpg,png,gif,jpeg}", GLOB_BRACE));
$arr =  array(
    "info" => array (
        "Title" => "Pixel Wallpapers", 
        "Api Link" => "https://github.com/wacko1805/google-pixel-wallpapers", 
        "Wallpapers Link" => "https://github.com/wacko1805/google-pixel-wallpapers-images", 
        "Created by" => "Jack Sam",
        "Imagecount" => "$imagecount",
    ));
echo "[";
echo json_encode($arr);
echo ",";
include('carros.php');
include('coloridos.php');
echo '{"":""}';
echo "]";
?>
