<?php

/*
header("Content-type: image/jpg");
$string = $_GET['text'];
$im     = imagecreatefromjpeg("images/button2.jpg");
$orange = imagecolorallocate($im, 220, 210, 60);
//$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
//$py     = (imagesy($im) - 7.5 * strlen($string)) / 2;
$px = 370;
$py = 50;

//imagestring($im, 5, $px, $py, $string, $orange);
$size = 30;
$angle = 0;
$black = imagecolorallocate($im, 0, 0, 0);
$fontfile = './OpenSans-BoldItalic.ttf';
imagettftext( $im,  $size ,  $angle ,  $px ,  $py ,  $black ,  $fontfile ,  $string);

imagepng($im);
imagedestroy($im);

*/


// Set the content-type
header('Content-Type: image/png');

 
// Create the image
$im = imagecreatetruecolor(400, 30);

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 29, $white);

// The text to draw
$text = 'Testing...';
// Replace path by your own font path
$font = './OpenSans-BoldItalic.ttf';

// Add some shadow to the text
$shadow = imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);

// Add the text
$textprop = imagettftext($im, 20, 0, 10, 20, $black, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);


/*
header('Content-type: image/png');

// ?src=www.aaaa&s=

$def_src = 'http://www.ign.gob.ar/sites/default/files/logo2012blanco.png';
$src = isset($_GET['src'])? $_GET['src'] : $def_src;
$img = imagecreatefrompng($src);
list($width, $height) = getimagesize($img);

$text = isset($_GET['stext']) ? $_GET['stext'] : "";
$text = explode('|',$text);
$text_setting = array();

/*
$text_setting['size'] =  $text[0];
$text_setting['angle'] = $text[1];
$text_setting['xpos'] =  $text[2];
$text_setting['ypos'] = $text[3];
//$text_setting['color'] = $text[4]; 
$text_setting['color'] = imagecolorallocate($im, 255, 255, 255);
$text_setting['font'] = $text[4];
$text_setting['str'] = $text[5];
*/

/*
$white = imagecolorallocate($im, 255, 255, 255);
$font = './OpenSans-BoldItalic.ttf';
$text = 'Testing...';
$textprop = imagettftext($im, 20, 0, 10, 20, $black, $font, $text);


//$textprop = imagettftext($img,$text_setting['size'], $text_setting['angle'], $text_setting['xpos'], $text_setting['ypos'], $text_setting['color'], $text_setting['font'],$text_setting['str']);


$setting = isset($_GET['s']) ? $_GET['s'] : "fff|fff|$width|$height";
$setting = explode('|', $setting);
$img_setting = array();
$img;

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


list($width, $height) = getimagesize($src);
$thumb = imagecreatetruecolor($img_setting['width'], $img_setting['height']);

// http://code.runnable.com/UnF-tFdudNt1AABt/how-to-resize-an-image-using-gd-library-for-php
// Resize
imagecopyresized($thumb, $img, 0, 0, 0, 0, $img_setting['width'], $img_setting['height'], $width, $height);


imagepng($thumb);
imagedestroy($img);

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