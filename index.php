<?php 
header('Location: photos.json');
exit;
#header('Access-Control-Allow-Origin: *');
#header("Content-type: application/json; charset=utf-8");
$url = "https://raw.githubusercontent.com/drandroidsv/Wallia";
$imagecount = count(glob("*/*.{jpg,png,gif,jpeg}", GLOB_BRACE));
$arr =  array(
    "info" => array (
        "Title" => "Pixel Wallpapers", 
        "Api Link" => "https://github.com/drandroidsv/wallpapermain", 
        "Wallpapers Link" => "https://github.com/drandroidsv/Wallia", 
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
