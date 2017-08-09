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
    case 5:
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

/*
$text_setting['size'] =  20;
$text_setting['xpos'] = 10;
$text_setting['ypos'] = 20;
$text_setting['font'] = './OpenSans-BoldItalic.ttf';
$text_setting['str'] = 'Drakaris';


$font = './OpenSans-BoldItalic.ttf';
$text = 'Drakaris';
*/

//$textprop = imagettftext($img, 20, 0, 10, 20, $black, $font, $text);

$textprop = imagettftext($img, $text_setting['size'] , 0, $text_setting['xpos'], $text_setting['ypos'], $black, $text_setting['font'], $text_setting['str']);







//obtención parametros para resize

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
        list($img_setting['background'],$img_setting['color'],$img_setting['width'],$img_setting['height']) = array('F','0',100,100);
        break;
}

// Genera imagen transparente con nuevo alto y ancho
list($width, $height) = getimagesize($src);
$thumb = imagecreatetruecolor($img_setting['width'], $img_setting['height']);
imagesavealpha($thumb, true);
$trans_colour = imagecolorallocatealpha($thumb, 0, 0, 0, 127);
imagefill($thumb, 0, 0, $trans_colour);

//resize
imagecopyresized($thumb, $img, 0, 0, 0, 0, $img_setting['width'], $img_setting['height'], $width, $height);


//creación y destrucción de la imagen
imagepng($thumb);imagedestroy($thumb);








/*****************************************************************************/
/*
// Set the content-type
header('Content-Type: image/png');


// Create the image
$def_src = 'http://www.ign.gob.ar/sites/default/files/logo2012blanco.png';
$src = isset($_GET['src'])? $_GET['src'] : $def_src;
$im = imagecreatefrompng($src);
//$im = imagecreatetruecolor(400, 30);

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
//imagefilledrectangle($im, 0, 0, 399, 29, $white);

// The text to draw
$text = 'Testing...';
// Replace path by your own font path
//$font Italic.ttf';
//= './OpenSans-Bold
// Add some shadow to the text
$font = './OpenSans-BoldItalic.ttf';
$shadow = imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);

// Add the text
$textprop = imagettftext($im, 20, 0, 10, 20, $black, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
*/
/*********************************************************************/


/*


*/


/*
// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('images/logo2012blanco.png');
$im = imagecreatefromjpeg('images/paisaje.jpg');

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

$to = 'simpleText.jpg';

// Output and free memory
imagejpeg($im, 'simpletext.jpg');

imagejpeg($im);
imagedestroy($im);
*/
?>