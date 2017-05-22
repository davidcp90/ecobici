<?php

class CrudEvaluacionesCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('email', 'admin@ecobicibogota.me');
        $I->fillField('password', 'udistrital');
        $I->click('INICIAR SESIÓN');
        $I->see('DASHBOARD');
        $I->click('Cuestionario');
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function CrearEvaluacion(FunctionalTester $I)
    {
        $I->click('Crear');
        $I->fillField('nombre', 'Diagnostico de conocimientos #2');
        $I->fillField('puntaje', 7);
        $I->click('Guardar');
        $I->see('Diagnostico de conocimientos #2');
    }

    public function CrearEvaluacionSinNombre(FunctionalTester $I)
    {
        $I->click('Crear');
        $I->fillField('puntaje', 7);
        $I->click('Guardar');
        $I->see('Ingrese los datos del cuestionario');
    }

    public function CrearEvaluacionSinPuntaje(FunctionalTester $I)
    {
        $I->click('Crear');
        $I->fillField('nombre', 'Diagnostico de conocimientos #3');
        $I->fillField('puntaje', '');
        $I->click('Guardar');
        $I->see('Ingrese los datos del cuestionario');
        $I->click('Cancelar');
        $I->dontsee('Diagnostico de conocimientos #3');
    }

    public function CrearEvaluacionCancelando(FunctionalTester $I)
    {
        $I->click('Crear');
        $I->fillField('nombre', 'Diagnostico de conocimientos #4');
        $I->fillField('puntaje', 6);
        $I->click('Cancelar');
        $I->see('Cuestionarios');
    }

    public function EditarEvaluacion(FunctionalTester $I)
    {
        $I->amOnPage('/admin/cuestionarios/1/edit');
        $I->see('Ingrese los datos del cuestionario');
        $I->fillField('nombre', 'Diagnostico complementario');
        $I->fillField('puntaje', 5);
        $I->click('Guardar');

    }

    public function EliminarEvaluacion(FunctionalTester $I)
    {
        $I->click('Eliminar');
        $I->dontsee('Diagnostico complementario');

    }
}
