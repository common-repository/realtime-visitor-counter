<?php
/**
* Plugin Name: Realtime visitor counter
* Plugin URI: https://wordtune.me
* Description: Use the shortcode [rtvc] on any page ore post to show the visitor count.
* Author: WordTune
* Author URI: https://wordtune.me
* Version:           1.0
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
**/

function rtvc() {

$counterFile = fopen('counter.txt', 'r+');
$counter = (int)fread($counterFile, 10);
$counter++;
fseek($counterFile, 0);
fwrite($counterFile, $counter);
fclose($counterFile);
echo esc_attr ($counter . "\n"); }


add_shortcode( 'rtvc', 'rtvc' );

?>
