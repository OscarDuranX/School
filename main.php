<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 5/10/15
 * Time: 20:26
 */
require_once __DIR__ . '/vendor/autoload.php';
use Com\Iesebre\Dam2\oscarduran\Persons\Person;





$person = new Person();

$person->type="PEPITA!";
$person->setGivenName("Pepita Palotes");

$person->render();