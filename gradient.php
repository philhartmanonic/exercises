#PHP script creating a graphic gradient
#From a Reddit /r/dailyprogrammer challenge

<?php
$width = 1000;
$length = 100;
$leftR = 204;
$leftG = 119;
$leftB = 34;
$rightR = 1;
$rightG = 66;
$rightB = 37;
$x = array();
$y = array();
$p = imagecreatetruecolor($width,$length);
for ($i = 1; $i <= $width; $i++) {
    array_push($x, ($i - 1));
}
for ($i = 1; $i <= $length; $i++) {
    array_push($y, ($i - 1));
}
$rlr = $rightR - $leftR;
$rlb = $rightB - $leftB;
$rlg = $rightG - $leftG;
foreach ($x as $ex) {
    $f = $ex / $width;
    $r = $leftR + round($rlr * $f);
    $g = $leftG + round($rlg * $f);
    $b = $leftB + round($rlb * $f);
    $c = imagecolorallocate($p, $r, $g, $b);
    foreach ($y as $why) {
        imagesetpixel($p, $ex, $why, $c);
    }
}
header('Content-Type: image/png');
imagepng($p);
?>
