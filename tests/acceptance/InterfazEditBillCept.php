<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Comprobar edicion datos facturacion usuario');
$I->amOnPage('/');
$I->fillField('email','admin@ecobicibogota.me');
$I->fillField('password','udistrital');
$I->click('#loggearse');
$I->seeInTitle('Ecobici Bogota - Usuarios Registrados'); //Comprueba si se loggeo
$I->click('#editarbill-2');
$I->seeInCurrentUrl('/admin/user/billing/2');
$I->fillField('reference','654321');
$I->selectOption('payment_type','3');
$I->selectOption('payment_period','2');
$I->click('#guardar');
$I->see('El registro se creo correctamente');
?>