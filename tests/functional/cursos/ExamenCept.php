<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Realizar el examen de aprobacion');

$I->amOnPage('/auth/login');
$I->fillField('email', 'usuarioprueba1@ecobicibogota.me');
$I->fillField('password', 'udistrital');
$I->click('button[type=submit]');
$I->seeAuthentication();	

$I->amOnPage('/curso/cuestionario');

$I->see('Realiza el examen');
$I->click('Diagnóstico de conocimientos en uso de la bicicleta');
$I->seeCurrentUrlEquals('/curso/cuestionario/1/pregunta/1');

$I->see('1. En que ciudad puedes usar Ecobici');
$I->selectOption(3, 'opcion');
$I->click('evaluar');

$I->see('La inscripcion al sistema que costo tiene');
$I->select(2, 'opcion');
$I->click('evaluar');

$I->see('Cuales son los articulos del Codigo de transito de Colombia que reglamentan las normas de comportamiento de los ciclistas');
$I->select(3, 'opcion');
$I->click('evaluar');

$I->see('A que horas debe usar chaleco refletivo');
$I->select(2, 'opcion');
$I->click('evaluar');

$I->see('Cuantos pasajeros pueden ir en la misma bicicleta');
$I->select(1, 'opcion');
$I->click('evaluar');

$I->see('Cuantos pasajeros pueden ir en la misma bicicleta');
$I->select(1, 'opcion');
$I->click('evaluar');

$I->see('La horquilla en que parte de la bicicleta se encuentra');
$I->select(3, 'opcion');
$I->click('evaluar');

$I->see('Que es la Tija');
$I->select(1, 'opcion');
$I->click('evaluar');

$I->see('Cual es la forma correcta para frenar la bicicleta');
$I->select(2, 'opcion');
$I->click('evaluar');

$I->see('De que forma es mas dificil mantener el equilibrio');
$I->select(1, 'opcion');
$I->click('evaluar');

$I->see('A que altura debes poner tu sillin para no tener problemas con tus rodillas');
$I->select(2, 'opcion');
$I->click('evaluar');
