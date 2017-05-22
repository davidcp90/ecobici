<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Comprobar interfaz crear nuevo usuario');
$I->amOnPage('/');
$I->fillField('email','admin@ecobicibogota.me');
$I->fillField('password','udistrital');
$I->click('#loggearse');
$I->seeInTitle('Ecobici Bogota - Usuarios Registrados'); //Comprueba si se loggeo
$I->click('#crear-usuario');
$I->see('Ingrese los datos del usuario');
$I->fillField('name','El profe es una chimba');
$I->fillField('password','udistrital');
$I->fillField('email','proferechimba@ecobicibogota.me');
$I->fillField('cedula','1234567');
$I->fillField('telefono_fijo','2345678');
$I->fillField('celular','3145678945');
$I->fillField('direccion','Carrera 8 # 65-45');
$I->selectOption('usuario_aprobado','curso');
$I->click('#guardar');
$I->see('Recibo de pago');
$I->see('El profe es una chimba');
$I->see('$5000');
?>