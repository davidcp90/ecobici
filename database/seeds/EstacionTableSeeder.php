<?php

use Illuminate\Database\Seeder;

class EstacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('estacion')->insert([
          'id'            =>1,
          'latitud'       =>'4.643043',
          'longitud'      =>'-74.154543',
          'nombre'        =>'Biblioteca el tintal',
          'direccion'     =>'Carrera 86 #6a-1 a 6a-99',
          'numero_ciclas' =>110,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>2,
          'latitud'       =>'4.631418',
          'longitud'      =>'-74.147410',
          'nombre'        =>'Plaza Banderas',
          'direccion'     =>'',
          'numero_ciclas' =>110,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>3,
          'latitud'       =>'4.629070',
          'longitud'      =>'-74.172113',
          'nombre'        =>'Portal Americas',
          'direccion'     =>'',
          'numero_ciclas' =>110,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>4,
          'latitud'       =>'4.624559',
          'longitud'      =>'-74.161018',
          'nombre'        =>'Parque Cayetano Cañizales',
          'direccion'     =>'Carrera 80 #40c Sur-1 a 40c Sur-99',
          'numero_ciclas' =>110,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>5,
          'latitud'       =>'4.664327',
          'longitud'      =>'-74.131034',
          'nombre'        =>'Centro comercial Hayuelos',
          'direccion'     =>'',
          'numero_ciclas' =>110,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>6,
          'latitud'       =>'4.673417',
          'longitud'      =>'-74.144804',
          'nombre'        =>'Parque central Fontibon',
          'direccion'     =>'Carrera 100 #17a-2 a 17a-98',
          'numero_ciclas' =>110,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>7,
          'latitud'       =>'4.648722',
          'longitud'      =>'-74.101727',
          'nombre'        =>'Centro comercial Gran estacion',
          'direccion'     =>'Carrera 66 #24a-42 a 24a-98',
          'numero_ciclas' =>110,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>8,
          'latitud'       =>'4.660668',
          'longitud'      =>'-74.089695',
          'nombre'        =>'Parque Simon Bolivar',
          'direccion'     =>'Av Calle 63 #60-19',
          'numero_ciclas' =>110,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>9,
          'latitud'       =>'4.669470',
          'longitud'      =>'-74.090724',
          'nombre'        =>'Parque Salitre Magico',
          'direccion'     =>'Av Carrera 68 #63-28 a 63-44',
          'numero_ciclas' =>110,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>10,
          'latitud'       =>'4.681062',
          'longitud'      =>'-74.082129',
          'nombre'        =>'Centro comercial Metropolis',
          'direccion'     =>'Av Carrera 68 #75a-56 a 75a-98',
          'numero_ciclas' =>110,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>11,
          'latitud'       =>'4.683718',
          'longitud'      =>'-74.079657',
          'nombre'        =>'Exito calle 80',
          'direccion'     =>'Av Carrera 68 #78-75 a 78-99',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>12,
          'latitud'       =>'4.713322',
          'longitud'      =>'-74.035416',
          'nombre'        =>'Country club',
          'direccion'     =>'Calle 134 #10-1 a 10-61',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>13,
          'latitud'       =>'4.762051',
          'longitud'      =>'-74.045252',
          'nombre'        =>'Centro comercial Santafe',
          'direccion'     =>'Bogotá-La Caro #183-43 a 183-67',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>14,
          'latitud'       =>'4.702154',
          'longitud'      =>'-74.042418',
          'nombre'        =>'Unicentro',
          'direccion'     =>'Av Carrera 15',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>15,
          'latitud'       =>'4.677088',
          'longitud'      =>'-74.048835',
          'nombre'        =>'Prque de la 93',
          'direccion'     =>'Carrera 13 #93a-10 a 93a-98',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>16,
          'latitud'       =>'4.665744',
          'longitud'      =>'-74.054068',
          'nombre'        =>'Centro comercial Andino',
          'direccion'     =>'Calle 81 #11-2 a 11-98',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>17,
          'latitud'       =>'4.658566',
          'longitud'      =>'-74.055508',
          'nombre'        =>'Gimnasio moderno',
          'direccion'     =>'Carrera 9 #74-1 a 74-99',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>18,
          'latitud'       =>'4.642843',
          'longitud'      =>'-74.054193',
          'nombre'        =>'Universidad Mnuela Beltran',
          'direccion'     =>'',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>19,
          'latitud'       =>'4.643321',
          'longitud'      =>'-74.075349',
          'nombre'        =>'Centro comercial Galerias Calle 54',
          'direccion'     =>'Bogotá',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>20,
          'latitud'       =>'4.646884',
          'longitud'      =>'-74.078247',
          'nombre'        =>'Estadio el Campin',
          'direccion'     =>'Av Ciudad de Quito #53b-78',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>21,
          'latitud'       =>'4.637072',
          'longitud'      =>'-74.079822',
          'nombre'        =>'Universidad Nacional',
          'direccion'     =>'Av Ciudad de Quito #46-1 a 46',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>22,
          'latitud'       =>'4.627968',
          'longitud'      =>'-74.064931',
          'nombre'        =>'Universidad Javeriana',
          'direccion'     =>'Calle 40a #6-1 a 6-71',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>23,
          'latitud'       =>'4.627943',
          'longitud'      =>'-74.067070',
          'nombre'        =>'Universidad distrital sede Ing.',
          'direccion'     =>'Carrera 13 #40b-2',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>24,
          'latitud'       =>'4.639234',
          'longitud'      =>'-74.066056',
          'nombre'        =>'Sena Calle 52',
          'direccion'     =>'Calle 52 #13-59 a 13-99',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>25,
          'latitud'       =>'4.636924',
          'longitud'      =>'-74.064901',
          'nombre'        =>'Clinica Marly',
          'direccion'     =>'Calle 50 #9-13 a 9-43',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>26,
          'latitud'       =>'4.632764',
          'longitud'      =>'-74.075078',
          'nombre'        =>'Parkway',
          'direccion'     =>'Carrera 24 #42-3 a 42-67',
          'numero_ciclas' =>135,
          'estado'        =>3,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>27,
          'latitud'       =>'4.621662',
          'longitud'      =>'-74.064980',
          'nombre'        =>'Parque Nacional',
          'direccion'     =>'Calle 34 #7-12',
          'numero_ciclas' =>135,
          'estado'        =>3,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>28,
          'latitud'       =>'4.613922',
          'longitud'      =>'-74.063876',
          'nombre'        =>'Universidad Distrital sede Macarena',
          'direccion'     =>'Transversal 1 #30-58 a 30-84',
          'numero_ciclas' =>135,
          'estado'        =>3,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>29,
          'latitud'       =>'4.602240',
          'longitud'      =>'-74.078593',
          'nombre'        =>'Plaza de San Victorino',
          'direccion'     =>'',
          'numero_ciclas' =>135,
          'estado'        =>3,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>30,
          'latitud'       =>'4.608691',
          'longitud'      =>'-74.094261',
          'nombre'        =>'Parque central Ricaurte',
          'direccion'     =>'Calle 9 #28a-2 a 28a-88',
          'numero_ciclas' =>135,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>31,
          'latitud'       =>'4.593387',
          'longitud'      =>'-74.123390',
          'nombre'        =>'Centro comercial centro mayor',
          'direccion'     =>'Calle 38a Sur #34d-59 a 34d-99',
          'numero_ciclas' =>135,
          'estado'        =>2,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>32,
          'latitud'       =>'4.572190',
          'longitud'      =>'-74.129543',
          'nombre'        =>'Biblioteca el tunal',
          'direccion'     =>'Calle 48b Sur #21-15 a 21-45',
          'numero_ciclas' =>150,
          'estado'        =>2,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>33,
          'latitud'       =>'4.547661',
          'longitud'      =>'-74.161035',
          'nombre'        =>'Parque illimani Barrio el paraiso',
          'direccion'     =>'Carrera 27b #71t Sur-1 a 71t Sur',
          'numero_ciclas' =>150,
          'estado'        =>2,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>34,
          'latitud'       =>'4.571943',
          'longitud'      =>'-74.163354',
          'nombre'        =>'Hospital vista hermosa',
          'direccion'     =>'Carrera 46b #72c Sur-1 a 72c Sur',
          'numero_ciclas' =>150,
          'estado'        =>2,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>35,
          'latitud'       =>'4.598187',
          'longitud'      =>'-74.166412',
          'nombre'        =>'Carrefour autosur',
          'direccion'     =>'Carrera 72d #57f Sur-2 a 57f Sur',
          'numero_ciclas' =>150,
          'estado'        =>2,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>36,
          'latitud'       =>'4.607082',
          'longitud'      =>'-74.192191',
          'nombre'        =>'Parque los naranjos',
          'direccion'     =>'Carrera 80j #70a Sur-1 a 70a Sur',
          'numero_ciclas' =>150,
          'estado'        =>2,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>37,
          'latitud'       =>'4.640793',
          'longitud'      =>'-74.164141',
          'nombre'        =>'Parque patio bonito',
          'direccion'     =>'Carrera 88D #33b Sur-1 a 33b Sur',
          'numero_ciclas' =>150,
          'estado'        =>2,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>38,
          'latitud'       =>'4.501059',
          'longitud'      =>'-74.112790',
          'nombre'        =>'Parque del virrey sur',
          'direccion'     =>'Carrera 2b Este #93b Sur-34',
          'numero_ciclas' =>150,
          'estado'        =>2,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>39,
          'latitud'       =>'4.615391',
          'longitud'      =>'-74.114506',
          'nombre'        =>'Glorieta Calle 3 cra 50',
          'direccion'     =>'',
          'numero_ciclas' =>150,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>40,
          'latitud'       =>'4.609851',
          'longitud'      =>'-74.115652',
          'nombre'        =>'Polideportivo el Jazmin',
          'direccion'     =>'Barrio montes',
          'numero_ciclas' =>150,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>41,
          'latitud'       =>'4.617707',
          'longitud'      =>'-74.137137',
          'nombre'        =>'Plaza de las americas',
          'direccion'     =>'Calle 8 Sur #71c-2 a 71c-84',
          'numero_ciclas' =>150,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>42,
          'latitud'       =>'4.616830',
          'longitud'      =>'-74.153500',
          'nombre'        =>'Hospital de kennedy',
          'direccion'     =>'Av Primero de Mayo #40b Sur',
          'numero_ciclas' =>150,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>43,
          'latitud'       =>'4.571548',
          'longitud'      =>'-74.101147',
          'nombre'        =>'Parque country sur',
          'direccion'     =>'Calle 28a Sur #10d-1 a 10d-53',
          'numero_ciclas' =>150,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>44,
          'latitud'       =>'4.558798',
          'longitud'      =>'-74.091789',
          'nombre'        =>'Parque bello horizonte sancristobal',
          'direccion'     =>'Carrera 3a Este #31d Sur-2 a 31d',
          'numero_ciclas' =>150,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>45,
          'latitud'       =>'4.566292',
          'longitud'      =>'-74.097087',
          'nombre'        =>'Supercade 20 de julio',
          'direccion'     =>'Carrera 5a #30c Sur-2 a 30c Sur-64',
          'numero_ciclas' =>150,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>46,
          'latitud'       =>'4.601486',
          'longitud'      =>'-74.065721',
          'nombre'        =>'Universidad de los andes',
          'direccion'     =>'Carrera 1 Este',
          'numero_ciclas' =>150,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

      DB::table('estacion')->insert([
          'id'            =>47,
          'latitud'       =>'4.611831',
          'longitud'      =>'-74.095038  Alkosto',
          'nombre'        =>'cra 30',
          'direccion'     =>'Calle 11 #30-49 a 30-99',
          'numero_ciclas' =>150,
          'estado'        =>1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
      ]);

    }
}
