<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
	 $this->visit('ecobici.app/curso')
         ->click('Capítulo 1: Normatividad')
         ->seePageIs('curso/normatividad');
    }
}
