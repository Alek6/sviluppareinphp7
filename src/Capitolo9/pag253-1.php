<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

use Nocarrier\Hal;

$hal = new Hal('/speakers/ezimuel', [
    'id' => 'ezimuel',
    'name' => 'Enrico Zimuel'
]);
echo $hal->asJson(true);
