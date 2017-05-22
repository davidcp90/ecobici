@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<div class="container_capitulos">
	<div class="row">
		<h1 class="ecobici ico_cap2 title_c2" style="margin-left:45px;">Reglamento de tránsito</h1><br>
		<div class="col-md-12">
			<article>
				<span class="ecobici_p">Ecobici</span> establece que en pro de la seguridad y confort de nuestros usuarios 
				y el entero cumplimiento de las normas de tránsito vigentes en Colombia, se permite citar textualmente 
				el <span class="ecobici_p">Código de Tránsito de Colombia </span> el cual reglamenta las normas que deben seguir nuestros usuarios al 
				transitar por las vías de la ciudad con la bicicleta.
			</article><br><br>
			<center class="ecobici title_c2"><h2>Del Título III - Normas de Comportamiento</h2> 
			<h3>Capítulo V - Ciclistas y Motociclistas</h3></center><br>
			<div class="col-md-6">
				<article>
					<span class="ecobici">Artículo 94° :</span><span class="ecobici_p"> Normas generales para bicicletas, triciclos, motocicletas,
					motociclos y mototriciclos.</span>
				</article>
				<article>
					<p>Los conductores de bicicletas, triciclos, motocicletas, motociclos y mototriciclos, estarán sujetos 
					a las siguientes normas:</p>
					<p>Deben transitar por la derecha de las vías a distancia no mayor de un (1) metro de la acera u orilla 
					y nunca utilizar las vías exclusivas para servicio público colectivo.</p>
					<p>Los conductores de estos tipos de vehículos y sus acompañantes deben vestir chalecos o chaquetas 
					reflectivas de identificación que deben ser visibles cuando se conduzca entre las 18:00 y las 6:00 horas del día 
					siguiente, y siempre que la visibilidad sea escasa.</p>
					<p>Los conductores que transiten en grupo lo harán uno detrás de otro.</p>
					<p>No deben sujetarse de otro vehículo o viajar cerca de otro carruaje de mayor tamaño que lo oculte de 
					la vista de los conductores que transiten en sentido contrario.</p>
					<p>No deben transitar sobre las aceras, lugares destinados al tránsito de peatones y por aquellas vías en 
					donde las autoridades competentes lo prohíban.</p>
					<p>Deben conducir en las vías públicas permitidas o, donde existan, en aquellas especialmente diseñadas 
					para ello.</p>
					<p>Deben respetar las señales, normas de tránsito y límites de velocidad.</p>
					<p>No deben adelantar a otros vehículos por la derecha o entre vehículos que transiten por sus respectivos 
					carriles.</p>
					<p>Siempre utilizarán el carril libre a la izquierda del vehículo a sobrepasar. Deben usar las señales 
					manuales detalladas en el artículo 69 de este código.</p>
					<p>Los conductores y los acompañantes cuando hubieren, deberán utilizar casco de seguridad, de acuerdo 
					como fije el Ministerio de Transporte.</p>
					<p>La no utilización del casco de seguridad cuando corresponda dará lugar a la inmovilización del vehículo.</p>
				</article><br><br>
			</div>
			<div class="col-md-6">
				<article>
					<span class="ecobici">Artículo 95° :</span><span class="ecobici_p"> Normas específicas para bicicletas y triciclos.</span>
				</article>
				<article>
					<p>Las bicicletas y triciclos se sujetarán a las siguientes normas específicas:</p>
					<p>No podrán llevar acompañante excepto mediante el uso de dispositivos diseñados especialmente para ello, 
					ni transportar objetos que disminuyan la visibilidad o que los incomoden en la conducción.</p>
					<p>Cuando circulen en horas nocturnas, deben llevar dispositivos en la parte delantera que proyecten 
					luz blanca, y en la parte trasera que reflecte luz roja.</p><br>
					<p><span class="ecobici">Parágrafo.</span> Los Alcaldes Municipales podrán restringir temporalmente 
					los días domingos y festivos, el tránsito de todo tipo de vehículos por las vías nacionales o 
					departamentales que pasen por su jurisdicción, a efectos de promover la práctica de actividades 
					deportivas tales como el ciclismo, el atletismo, el patinaje, las caminatas y similares, así como, 
					la recreación y el esparcimiento de los habitantes de su jurisdicción, siempre y cuando haya una vía 
					alterna por donde dichos vehículos puedan hacer su tránsito normal.</p>
				</article>
			</div>
		</div>
	</div>
	<div class="row footer_reglamento">
			<div class="col-xs-4 col-md-8"></div>
			<div class="col-xs-8 col-md-4">
				<center><h1 class="ecobici">Continua con el siguiente capítulo</h1>
			<a href="bicicleta"><i class="fa fa-hand-o-down"></i><strong>Haz clic Aquí</strong>
			<div class="curso c3 cap">Capítulo 3: Conoce la <span class="ecobici_p">Bici</span></div></a></center>
			</div>
	</div>
</div>
@stop