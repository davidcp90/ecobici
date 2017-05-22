## Proyecto ECOBI - Ingenieria de Software 2 - Udistrital 2015.3 - Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)
<br>
## NOTAS Y RECOMENDACIONES GENERALES 
<br>
Este es el repositorio donde los módulos que involucren desarrollo web trabajaremos, a saber Módulos: 1,2,3 y 5. POR FAVOR RECORDAR USAR: <strong><italic> $ git checkout mod_ </strong></italic> <br>
Los cuales tendrán una rama para cada módulo, llamada <strong> mod_ </strong> en donde _ corresponde al número de su rama.<br>

Como recomendación usaremos el entorno virtual homestead de <italic>Vagrant</italic> como máquina virtual base, clonaremos el repo usando:
<br><strong>
$ cd existing_folder <italic>//corresponderá a la carpeta que hallamos configurado en homestead.yaml para el proyecto</italic><br>
$ git init<br>
$ git remote add origin git@gitlab.com:udistrital_isoft2/ingenieria2.git<br>
$ git add .<br>
$ git commit<br>
$ git push -u origin master<br>
</strong><br>

-> También es importante aclarar que cada módulo contará con una carpeta <strong>~/app/mod_ </strong> en donde _ será el número de cada módulo. Aquí se almacenarán los modelos, que contendrán la lógica de negocio y acceso a datos para cada módulo.


## Official Documentation of Laravel 5

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)