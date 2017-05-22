<?php

namespace evaluaciones;


class ValidarCategoriaTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function ValidarCategoria(UnitTester $t)
    {
        $user = $t->create();
        $user->categoria = null;
        $t->assertFalse($user->validate(['categoria'])); 
        $user->categoria = 'procesos ecobici';
        $t->assertFalse($user->validate(['categoria']));

        $user->username = 'partes de la bicicleta';
        $t->assertTrue($user->validate(['categoria']));

        $t->seeInDatabase('categoria', ['nombre' => 'partes de la bicicleta']);
    }
}