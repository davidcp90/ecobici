<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Realizar el curso completo');

$I->amOnPage('/auth/login');
$I->fillField('email', 'usuarioprueba1@ecobicibogota.me');
$I->fillField('password', 'udistrital');
$I->click('button[type=submit]');
$I->seeAuthentication();	

//$I->seeCurrentUrlEquals('/curso');
$I->seeInSource('Capítulo 1:');

$I->amOnPage('/curso/normatividad');
//$I->seeCurrentUrlEquals('/curso/normatividad');
$I->seeInSource('Capítulo 2:');

$I->amOnPage('/curso/reglamento');
//$I->seeCurrentUrlEquals('/curso/reglamento');
$I->seeInSource('Capítulo 3:');

$I->amOnPage('/curso/bicicleta');
//$I->seeCurrentUrlEquals('/curso/bicicleta');
$I->seeInSource('Capítulo 4:');

$I->amOnPage('/curso/habilidades');
//$I->seeCurrentUrlEquals('/curso/habilidades');
$I->seeInSource('Capítulo 5:');

$I->amOnPage('/curso/ecoestaciones');
//$I->seeCurrentUrlEquals('/curso/ecoestaciones');
$I->seeInSource('Realiza el examen');

$I->amOnPage('/curso/cuestionario');
//$I->seeCurrentUrlEquals('/curso/cuestionario');
$I->seeInSource('Diagnóstico de conocimientos en uso de la bicicleta');


