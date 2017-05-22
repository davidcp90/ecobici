@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<div class="container_capitulos">
		<div class="col-md-12">	
			<h1 class="ecobici ico_cap1 title_c1" style="margin-left:45px;">Normatividad del sistema Ecobici</h1><br>	
			<article><p><span class="ecobici_p">Ecobici</span> busca estrategias alternativas de movilidad, se analiza el modelo de 
			bicicletas compartidas que se está ejecutando en Ciudad de México, para su implementación en la ciudad de Bogotá
			como prueba piloto.</p>

			<p>El proyecto busca integrar las bicicletas como parte esencial de la movilidad, dirigido a los habitantes de 
			la capital, de sus alrededores y a los turistas. Permite a los usuarios registrados tomar una bicicleta de 
			cualquier ciclo estación y devolverla en la más cercana a su destino en trayectos ilimitados. </p>
			<p><span class="ecobici_p">El Sistema de 
			Bicicletas Públicas Ecobici</span>, ha sido adoptado como una alternativa eficaz para trasladarse y para mejorar la 
			calidad de vida de los bogotanos.</p>
			</article>
		</div>
		<div class="col-md-4"><center><img src="/assets/img/registro.svg" style="margin-top:40px;"></center></div>
		<div class="col-md-8">
			<h2 class="ecobici title_c1">¿Cómo usar el sistema?</h2>
			<article>
				<p>Dirígete al punto de atención más cercano, y habla con un asesor quien estará dispuesto a atenderlo e 
				iniciar el proceso de registro.</p>
				<p>El asesor te pedirá los siguientes datos para poder realizar tu registro:</p>
				<ol>
					<li> Identificación válida (cédula, cedula de extranjería, pasaporte), vigente en original y copia.</li>
					<li> Tarjeta bancaria de crédito o débito VISA o MASTERCARD, Los cargos se harán mensualmente a la tarjeta 
					crédito o débito, o recibo del servicio público de energía (con menos de 30 días de haber sido expedido a nombre
					de persona física). Los cargos se harán mensualmente al recibo del servicio público.</li>
					<li> Manifestación por escrito y bajo juramento: En la que el usuario certifica que cuenta con las habilidades 
					y conocimientos suficientes para hacer uso adecuado de la bicicleta como medio de transporte.</li>
			</article><br><br>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3">
				<center><img src="/assets/img/examen.svg"></center><br>
				<article>Si tienes los conocimientos necesarios para el uso del sistema y el uso correcto de la bicicleta, 
				realiza el examen de conocimientos suficientes y si lo apruebas podrás empezar a disfrutar del servicio.
				</article>
			</div>
			<div class="col-md-3">
				<center><img src="/assets/img/aprende.svg"></center><br>
				<article>También puedes optar por tomar el curso gratuito que te ofrece la 
				<span class="ecobici_p">EcoEscuela de Ecobici</span>, en el cual podrás aprender la normatividad vigente para el 
				transito en bicicleta por la ciudad, conocer la bicicleta y cómo montar una en caso de que no sepas hacerlo. 
				Al final del curso realizarás un test de conocimientos aprendidos 
				que garantizarán que estás apto para utilizar correctamente el sistema.
				</article><br>
			</div>
			<div class="col-md-3"></div>
		</div>
		<div class="row norma_separador">
			<div class="col-md-2"></div>
			<div class="col-md-4"><br>
				<center><img class="normal_img"src="/assets/img/vcard.png"></center>
				<center><img class="small_img"src="/assets/img/vcard_small.png"></center>
			</div>
			<div class="col-md-4"><br><br><br>
				<article><h2 class="ecobici">Reclama tu VCard</h2>
				<p>Al pasar cualquiera de los exámenes,se te entregará un PIN o VCard que te identificará como 
				usuario activo del sistema <span class="ecobici_p">Ecobici</span> y podrás hacer uso del sistema.
				</article>
			</div>
			<div class="col-md-2"></div>
		</div>

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4"><br>
				<center><img src="/assets/img/tomauna.png"></center>
			</div>
			<div class="col-md-4">
				<article>Ve a una <span class="ecobici_p">EcoEstación</span> y toma una bicicleta presentando tu PIN o tu Vcard.
				Pasar la vCard por el lector, o ingresar el usuario y PIN.
				</article>
				<center><img src="/assets/img/scanear.svg"></center>
			</div>
			<div class="col-md-2"></div>
		</div>

		<div class="row">
			<center><h1 class="ecobici">Toma, usa y devuelve, así de fácil.</h1></center>
			<div class="col-md-1"></div>
			<div class="col-md-5"><br>
				<center><img src="/assets/img/tablet.svg"></center>
			</div>
			<div class="col-md-5">
				<article><p>La pantalla indicará el número de anclaje asignado para tomar una bicicleta.</p>
				<p>Antes de cada viaje, tendrás dos minutos
				para verificar los componentes de la bicicleta.</p>
				<p>Si detectas alguna falla, la podrás devolver y tomar otra.
				Para devolver una bicicleta en una Ecoestación:
				<ol>
					<li>Debes anclar la bicicleta en un espacio con luz verde encendida.</li>
					<li>Verificar que la bicicleta este completamente fija y no se pueda sacar.</li>
					<li>Pasar la vCard por el lector o digitar el usuario y PIN respectivo, para verificar la correcta 
					devolución, habiendo pulsado el botón de devolución en la interfaz.</li>
				</ol>
				</article>				
			</div>
			<div class="col-md-1"></div>			
		</div>
		<div class="row">
			<center><quote>La pantalla indicará “Bicicleta devuelta correctamente”, y reportará a la <br>central de 
			procesamiento los datos respectivos para contabilizar los respectivos usos.</quote></center>
		</div>
		<div class="row bici_separador"></div>
		<div class="row responsive_separador">
			<div class="col-md-2"></div>
			<div class="col-md-4"><br>
				<center><img src="/assets/img/dispositivos.svg"></center>
			</div>
			<div class="col-md-4">
				<article style="color:#fff;"><center><h2 class="ecobici_p">Ecobici para donde vayas y como lo necesites</h2>
				<p>Puedes consultar tu información, tu historial de pagos y tus recorridos en tu celular o 
				desde la página del sistema, en cualquier dispositivo android, o PC/MAC.</center>
				</article>
			</div>
			<div class="col-md-2"></div>
		</div>

		<section class="pricing-section">
            <center><h2 class="ecobici">Tenemos el plan ideal para ti</h2></center>
            <div class="pricing pricing--palden">
                <div class="pricing__item">
                    <div class="pricing__deco">
                        <svg class="pricing__deco-img" version="1.1" id="Layer_1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="100px" viewBox="0 0 300 100" enable-background="new 0 0 300 100" xml:space="preserve">
                            <path class="deco-layer deco-layer--1" opacity="0.6" fill="#FFFFFF" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" />
                            <path class="deco-layer deco-layer--2" opacity="0.6" fill="#FFFFFF" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" />
                            <path class="deco-layer deco-layer--3" opacity="0.7" fill="#FFFFFF" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z" />
                            <path class="deco-layer deco-layer--4" fill="#FFFFFF" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" />
                        </svg>
                        <div class="pricing__price"><span class="pricing__currency">$</span>3.000<span class="pricing__period">/ día</span></div>
                        <h3 class="pricing__title">Plan Temporal</h3>
                    </div>
                    <small>(Todo el día trayectos de -45min GRATIS)</small>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Trayectos 45 - 60 min <br>$1.000</li>
                        <li class="pricing__feature">Hora o Fracción <br>$2.500</li>
                        <li class="pricing__feature">Trayectos +24 horas <br>$15.000</li>
                        <li class="pricing__feature">Reposición de la VCard <br>$10.000</li>
                    </ul>
                </div>
                
                <div class="pricing__item pricing__item--featured">
                    <div class="pricing__deco">
                        <svg class="pricing__deco-img" version="1.1" id="Layer_1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="100px" viewBox="0 0 300 100" enable-background="new 0 0 300 100" xml:space="preserve">
                            <path class="deco-layer deco-layer--1" opacity="0.6" fill="#FFFFFF" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" />
                            <path class="deco-layer deco-layer--2" opacity="0.6" fill="#FFFFFF" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" />
                            <path class="deco-layer deco-layer--3" opacity="0.7" fill="#FFFFFF" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z" />
                            <path class="deco-layer deco-layer--4" fill="#FFFFFF" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" />
                        </svg>
                        <div class="pricing__price"><span class="pricing__currency">$</span>9.000<span class="pricing__period">/3 días</span></div>
                        <h3 class="pricing__title">Plan Temporal</h3>
                    </div>
                     <small>(Todo el día trayectos de -45min GRATIS)</small>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Trayectos 45 - 60 min <br>$1.000</li>
                        <li class="pricing__feature">Hora o Fracción <br>$2.500</li>
                        <li class="pricing__feature">Trayectos +24 horas <br>$15.000</li>
                        <li class="pricing__feature">Reposición de la VCard <br>$10.000</li>
                    </ul>
                </div>
                <div class="pricing__item">
                    <div class="pricing__deco">
                        <svg class="pricing__deco-img" version="1.1" id="Layer_1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="100px" viewBox="0 0 300 100" enable-background="new 0 0 300 100" xml:space="preserve">
                            <path class="deco-layer deco-layer--1" opacity="0.6" fill="#FFFFFF" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" />
                            <path class="deco-layer deco-layer--2" opacity="0.6" fill="#FFFFFF" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" />
                            <path class="deco-layer deco-layer--3" opacity="0.7" fill="#FFFFFF" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z" />
                            <path class="deco-layer deco-layer--4" fill="#FFFFFF" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" />
                        </svg>
                        <div class="pricing__price"><span class="pricing__currency">$</span>15.000<span class="pricing__period">/7 días</span></div>
                        <h3 class="pricing__title">Plan Temporal</h3>
                    </div>
                    <small>(Todo el día trayectos de -45min GRATIS)</small>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Trayectos 45 - 60 min <br>$1.000</li>
                        <li class="pricing__feature">Hora o Fracción <br>$2.500</li>
                        <li class="pricing__feature">Trayectos +24 horas <br>$15.000</li>
                        <li class="pricing__feature">Reposición de la VCard <br>$10.000</li>
                    </ul>
                </div>

                <div class="pricing__item">
                    <div class="pricing__deco">
                        <svg class="pricing__deco-img" version="1.1" id="Layer_1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="100px" viewBox="0 0 300 100" enable-background="new 0 0 300 100" xml:space="preserve">
                            <path class="deco-layer deco-layer--1" opacity="0.6" fill="#FFFFFF" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" />
                            <path class="deco-layer deco-layer--2" opacity="0.6" fill="#FFFFFF" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" />
                            <path class="deco-layer deco-layer--3" opacity="0.7" fill="#FFFFFF" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z" />
                            <path class="deco-layer deco-layer--4" fill="#FFFFFF" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" />
                        </svg>
                        <div class="pricing__price"><span class="pricing__currency">$</span>726.000<span class="pricing__period">/Año</span></div>
                        <h3 class="pricing__title">Plan Anual</h3>
                    </div>
                     <small>(Todo el día trayectos de -45min GRATIS)</small>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Trayectos 45 - 60 min <br>$1.000</li>
                        <li class="pricing__feature">Hora o Fracción <br>$2.500</li>
                        <li class="pricing__feature">Trayectos +24 horas <br>$15.000</li>
                        <li class="pricing__feature">Reposición de la VCard <br>$10.000</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="row">
			<center><quote>*El costo de tu recorrido será adjuntado a la opción de pago que has escogido en tu registro.</quote></center>
		</div>
		<div class="row footer_normatividad">
			<div class="col-xs-4 col-md-8"></div>
			<div class="col-xs-8 col-md-4">
				<center><h1 class="ecobici">Continua con el siguiente capítulo</h1>
			<a href="reglamento"><i class="fa fa-hand-o-down"></i><strong>Haz clic Aquí</strong>
			<div class="curso c2 cap">Capítulo 2: Reglamento</div></a></center>
			</div>
		</div>
</div>
@stop