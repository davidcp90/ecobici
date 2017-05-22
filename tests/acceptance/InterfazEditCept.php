<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Comprobar edicion datos usuario');
$I->amOnPage('/');
$I->fillField('email','admin@ecobicibogota.me');
$I->fillField('password','udistrital');
$I->click('#loggearse');
$I->seeInTitle('Ecobici Bogota - Usuarios Registrados'); //Comprueba si se loggeo
$I->click('#editar-2');
$I->seeInCurrentUrl('/admin/users/2/edit');
$I->seeInField('email','cursos@ecobicibogota.me')
$I->fillField('name','El curso e una chimba');
$I->fillField('email','cursorechimba@ecobicibogota.me');
$I->fillField('cedula','1234567');
$I->fillField('telefono_fijo','2345678');
$I->fillField('celular','3145678945');
$I->fillField('direccion','Carrera 8 # 40-45');
$I->selectOption('usuario_aprobado','cuestionario');
$I->click('#guardar');
$I->see('Operación realizada correctamente');
?>