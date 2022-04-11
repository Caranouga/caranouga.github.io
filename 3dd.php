include_once realpath(dirname(__FILE__) . '/3d.php');
	
$player = new render3DPlayer('Notch', '-25', '-25', '10', '5', '-2', '-20', '2', 'true', 'false', 'png', '12', 'true', 'true'); //render3DPlayer(user, vr, hr, hrh, vrll, vrrl, vrla, vrra, displayHair, headOnly, format, ratio, aa, layers)
$png = $player->get3DRender();
echo "<br/>====<br/>PNG:<br/>====<br/>";
echo $png; // TrueColor image
