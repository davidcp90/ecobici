<?php

class CrudPreguntaCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('email', 'admin@ecobicibogota.me');
        $I->fillField('password', 'udistrital');
        $I->click('INICIAR SESIÓN');
        $I->see('DASHBOARD');
        $I->click('Preguntas');
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function CrearPreguntaSinOpciones(FunctionalTester $I)
    {
        $I->click('Crear');
        $I->fillField('enunciado', '¿que se necesita para ser como Nairo?');
        $I->selectOption('categoria_id', 1);
        $I->selectOption('cuestionario_id', 1);
        $I->click('Guardar');
        $I->see('14');
    }

    public function CrearPreguntaConOpciones(FunctionalTester $I)
    {
        $I->click('Crear');
        $I->fillField('enunciado', '¿que se necesita para ser como Nairo?');
        $I->selectOption('categoria_id', 1);
        $I->selectOption('cuestionario_id', 1);
        $I->click('Agregar');
        $I->fillField('opciones[1][opcion]', 'Ser cool y guerrrero');
        $I->check('Es Correcta');
        $I->click('Agregar');
        $I->fillField('opciones[2][opcion]', 'Ser blanco');
        $I->click('Guardar');
        $I->see('15');
    }

    public function EditarPregunta(FunctionalTester $I)
    {
        $I->amOnPage('/admin/preguntas/1/edit');
        $I->fillField('enunciado', 'como ser un buen ciclista');
        $I->click('Guardar');
    }

    public function Eliminaropcion(FunctionalTester $I)
    {
        $I->amOnPage('/admin/preguntas/1/edit');
        $I->click('Eliminar');
        $I->dontsee('ser blanco');
        $I->click('Guardar');
    }

    public function EliminarPregunta(FunctionalTester $I)
    {
        $I->click('Eliminar');
        $I->dontsee('15');
    }
}
