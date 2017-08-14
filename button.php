<?php

function hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
    switch (strlen($hexStr)) {
        case 4:
            $hexStr = substr($hexStr, 0, 4) . $hexStr[2] . $hexStr[3];
        case 5:
            $hexStr = substr($hexStr, 0, 5) .  $hexStr[4];
        case 6:
        case 3:
            break;
        default:
            $hexStr = "000";
            break;
    }
    $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
    $rgbArray = array();
    if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
        $colorVal = hexdec($hexStr);
        $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        $rgbArray['blue'] = 0xFF & $colorVal;
    } elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
        $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
        $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
        $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
    } else {
        return false; //Invalid hex color code
    }
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
}



header('Content-type: image/png');

$def_src = 'http://www.ign.gob.ar/sites/default/files/logo2012blanco.png';
$src = isset($_GET['src']) ? (  (  $_GET['src'] != '' ) ? $_GET['src'] : $def_src ) : $def_src;
$img = imagecreatefrompng($src);


//obtención parametros para resize

list($width, $height) = getimagesize($src);

$setting = isset($_GET['s']) ? $_GET['s'] : "fff|$width|$height";
$setting = explode('|', $setting);
$img_setting = array();



switch ($n = count($setting)) {
    case $n > 3 :
    case 2:
        $setting[2] = $setting[1];
    case 3:
        $img_setting['width'] = isset ( $setting[1] ) ? ($setting[1] != "" ? (int)$setting[1] : $width ) : $width;
        $img_setting['height'] =isset ( $setting[2] ) ? ($setting[2] != "" ? (int)$setting[2] : $height ) : $height; 
    case 1:
        $img_setting['background'] = $setting[0];
        break;
    default:
        list($img_setting['background'],$img_setting['width'],$img_setting['height']) = array('F',$width,$height);
        break;
}

// Genera imagen transparente con nuevo alto y ancho

$thumb = imagecreatetruecolor($img_setting['width'], $img_setting['height']);
imagesavealpha($thumb, true);
$trans_colour = imagecolorallocatealpha($thumb, 255, 0, 0, 127);
imagefill($thumb, 0, 0, $trans_colour);

//resize
imagecopyresized($thumb, $img, 0, 0, 0, 0, $img_setting['width'], $img_setting['height'], $width, $height);





//Obtención parámetros para texto
$text = isset($_GET['stext']) ? $_GET['stext'] : "";
$text = explode('|',$text);
$text_setting = array();
$text_color = array();

switch ($m =count($text)) {
    case 6:
        $text_color = hex2RGB($text[5]);
    case 4:
        $text[3] = 10;
        $text[4] = 20;
    case 5:
        $text_setting['xpos'] = $text[3];
        $text_setting['ypos'] = $text[4];
    case 3:
        $text_setting['str'] = $text[0];
        $text_setting['font'] =  isset ($text[1] ) ? ( $text[1] != "" ?  "./"  .$text[1] . ".ttf" : "./OpenSans-BoldItalic.ttf"   ) : "./OpenSans-BoldItalic.ttf" ;
        $text_setting['size'] =  isset ($text[2] ) ? ( $text[2] != "" ?  $text[2]   : 25   ) : 25 ;
        break;
    default:
        $text_setting['str'] = "";
        $text_setting['size'] = 0;
        break;
}

$str_color = imagecolorallocate($thumb,$text_color['red'],$text_color['green'],$text_color['blue']);

//Imprimir texto
//Falta agregar opción para cambiar el color del texto;
$textprop = imagettftext($thumb, $text_setting['size'] , 0, $text_setting['xpos'], $text_setting['ypos'], $str_color, $text_setting['font'], $text_setting['str']);



//creación y destrucción de la imagen
imagepng($thumb);imagedestroy($thumb);

?>