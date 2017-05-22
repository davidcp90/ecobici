<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Loguear un usuario con curso aprobado');


$I->amOnPage('/auth/login');
$I->fillField('email', 'usuarioprueba2@ecobicibogota.me');
$I->fillField('password', 'udistrital');
$I->click('button[type=submit]');

$I->seeCurrentUrlEquals('/dashboard');
$I->amOnPage('/dashboard');
$I->seeAuthentication();	
$I->See('Dashboard');