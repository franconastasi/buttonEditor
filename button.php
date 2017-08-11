<?php

header('Content-type: image/png');

$def_src = 'http://www.ign.gob.ar/sites/default/files/logo2012blanco.png';
$src = isset($_GET['src'])? $_GET['src'] : $def_src;
$img = imagecreatefrompng($src);


$white = imagecolorallocate($img, 255, 255, 255);
$grey = imagecolorallocate($img, 128, 128, 128);
$black = imagecolorallocate($img, 0, 0, 0);



//Obtención parámetros para texto
$text = isset($_GET['stext']) ? $_GET['stext'] : "";
$text = explode('|',$text);
$text_setting = array();

switch ($m =count($text)) {
    case 4:
        $text[3] = 10;
        $text[4] = 20;
    case 5:
        $text_setting['xpos'] = $text[3];
        $text_setting['ypos'] = $text[4];
    case 3:
        $text_setting['str'] = $text[0];
        $text_setting['font'] = $text[1];
        $text_setting['size'] =  $text[2];
        break;
    default:
        $text_setting['str'] = "";
        $text_setting['size'] = 0;
        break;
}

//Imprimir texto
//Falta agregar opción para cambiar el color del texto;
$textprop = imagettftext($img, $text_setting['size'] , 0, $text_setting['xpos'], $text_setting['ypos'], $black, $text_setting['font'], $text_setting['str']);


//obtención parametros para resize

list($width, $height) = getimagesize($src);

$setting = isset($_GET['s']) ? $_GET['s'] : "fff|fff|$width|$height";
$setting = explode('|', $setting);
$img_setting = array();



switch ($n = count($setting)) {
    case $n > 4 :
    case 3:
        $setting[3] = $setting[2];
    case 4:
        $img_setting['width'] = (int) $setting[2];
        $img_setting['height'] = (int) $setting[3];
    case 2:
        $img_setting['color'] = $setting[1];
        $img_setting['background'] = $setting[0];
        break;
    default:
        list($img_setting['background'],$img_setting['color'],$img_setting['width'],$img_setting['height']) = array('F','0',$width,$height);
        break;
}

// Genera imagen transparente con nuevo alto y ancho

$thumb = imagecreatetruecolor($img_setting['width'], $img_setting['height']);
imagesavealpha($thumb, true);
$trans_colour = imagecolorallocatealpha($thumb, 0, 0, 0, 127);
imagefill($thumb, 0, 0, $trans_colour);

//resize
imagecopyresized($thumb, $img, 0, 0, 0, 0, $img_setting['width'], $img_setting['height'], $width, $height);


//creación y destrucción de la imagen
imagepng($thumb);imagedestroy($thumb);

?>