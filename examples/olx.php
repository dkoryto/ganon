<?php
/**
 *
 * @author Dariusz Koryto
 * @package Ganon
 * @license http://dev.perl.org/licenses/artistic.html Artistic License
 */
// Test PHP 5.3

include_once('../ganon.php');

header( 'Content-Type: text/html; charset=UTF-8' );


$html = file_get_dom('http://olx.pl/oferty/q-parker/');
//pobiera oferte 
//todo: ma pobierac tylko obrazki i linki 
foreach($html('td[class^="offer"]') as $element) {
		echo $element->getPlainText(), "<br>\n";
	}
?>