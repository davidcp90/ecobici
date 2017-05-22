<?php 


$I = new FunctionalTester($scenario);
$I->wantTo('Evaluar flujo para realizar evaluación');
$I->amOnPage('/');
$I->fillField('email', 'Arnold.Berge@Carter.org');
$I->fillField('password', 'udistrital');
$I->click('INICIAR SESIÓN');

$I->see('Para continuar con el proceso de registro en Ecobici es necesario que realice un proceso de evaluacion, para ello debera contestar un cuestionario.');
$I->click('Iniciar Nueva Evaluacion');
$I->see('Bienvenido al modulo de evaluación para ecoboici');
$I->click('Diagnóstico de conocimientos en uso de la bici');
$I->see('Para continuar con el proceso de registro en Ecobici es necesario que realice un proceso de evaluacion, para ello debera contestar un cuestionario.');
$I->click('Diagnóstico de conocimientos en uso de la bici');
$I->see('Para aprobar el curso debe contestar satisfactoriamente todas las categoías que encuentra a continuacion.');
$I->click('responder');
$I->see('¿Para que sirven los pedales en una bicicleta?');
$I->select(2, 'opcion');
$I->click('Continuar');
$I->see(' Ya has terminado con la categoría: Partes de la bicicleta');
$I->click('responder');
$I->see('¿Que se debe hacer cuando se aproxima un semaforo y este esta en rojo?');
$I->select(3, 'opcion');
$I->click('Continuar');
$I->see('Ya has terminado con la categoría: Normas de transito');
$I->click('responder');
$I->see('¿Es necesario presentar algún documento de identidad para solicitar una bicicleta?');
$I->select(1, 'opcion');
$I->click('Continuar');
$I->see('Ya has terminado con la categoría: Procesos Ecobici');
$I->click('responder');
$I->see('¿Que significa un flecha a la izquierda?');
$I->select(2, 'opcion');
$I->click('Continuar');
$I->see('¿Que significa una vaca pintada en la señal?');
$I->select(2, 'opcion');
$I->click('Continuar');
$I->see('Ya has terminado con la categoría: Señales de transito');
$I->click('volver');
$I->see('Aprobado');

