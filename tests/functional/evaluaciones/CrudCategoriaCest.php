<?php

class CrudCategoriaCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('email', 'admin@ecobicibogota.me');
        $I->fillField('password', 'udistrital');
        $I->click('INICIAR SESIÓN');
        $I->see('DASHBOARD');
        $I->click('Categoria');
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function CrearCategoria(FunctionalTester $I)
    {
        $I->wantTo('crear una Nueva categoria');
        $I->click('Crear');
        $I->fillField('nombre', 'Habilidades motrices');
        $I->click('Guardar');
        $I->see('Habilidades motrices');
    }

    public function CrearCategoriaSinNombre(FunctionalTester $I)
    {
        $I->wantTo('crear una Nueva categoria sin nombre');
        $I->click('Crear');
        $I->click('Guardar');
    }

    public function CrearCategoriaCancelando(FunctionalTester $I)
    {
        $I->wantTo('crear una Nueva categoria Cancelar');
        $I->click('Crear');
        $I->fillField('nombre', 'Partes Bicicleta test');
        $I->click('Cancelar');
        $I->dontsee('Partes Bicicleta test');
    }

    public function EditarCategoria(FunctionalTester $I)
    {
        $I->wantTo('Editar categoria nombre');
        $I->amOnPage("/admin/categorias/1/edit");
        $I->fillField('nombre', 'Partes Bici #2');
        $I->click('Guardar');
        $I->see('Partes Bici #2');
    }
}
