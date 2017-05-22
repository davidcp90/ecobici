<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->call('PermissionTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('PermissionRoleTableSeeder');
        $this->call('RoleUserTableSeeder');
        // Tabalas para gestion de evaluaciones.
        $this->call('InitEvaluacionTableSeeder');
        $this->call('CategoriaTableSeeder');
        $this->call('CuestionarioTableSeeder');
        $this->call('PreguntaTableSeeder');
        $this->call('OpcionTableSeeder');
        // tablas para curso
        $this->call('CursosTableSeeder');
        $this->call('ExamenTableSeeder');
        $this->call('PreguntasTableSeeder');
        $this->call('RespuestasTableSeeder');
        //API
        $this->call('EstacionTableSeeder');
        // Prestamo,cicla y  cicla_estado
        $this->call('CiclaEstadoTableSeeder');
        $this->call('CiclaTableSeeder');
        $this->call('PrestamoTableSeeder');
        // llena historial de pagos
        $this->call('HistoricoPagosTableSeeder');
        // Tablas para Billing
        $this->call('BillingTableSeeder');
        $this->call('BillingBreakTableSeeder');
        //Model::reguard();
    }
}
