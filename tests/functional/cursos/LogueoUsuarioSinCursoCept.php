<?php
$I = new FunctionalTester($scenario);

//Objetivo de la prueba
$I->wantTo('Loguear un usuario sin curso aprobado');

//ruta en la que deseo realizar la prueba
$I->amOnPage('/auth/login');

//Rellenamos los campos con los valores 
$I->fillField('email', 'usuarioprueba1@ecobicibogota.me');
$I->fillField('password', 'udistrital');

//Simulamos clic en el boton de logueo
$I->click('button[type=submit]');

//Observamos si estamos ubicados en la ruta curso despues de loguearse
$I->seeCurrentUrlEquals('/curso');

//Nos ubicamos en la ruta curso
$I->amOnPage('/curso');

//Vemos si la autenticacion fue exitosa
$I->seeAuthentication();	

//Si la autenticacion fue exitosa deberemos encontrar dentro de la nueva pagina el texto Dashboard
$I->See('Dashboard');


