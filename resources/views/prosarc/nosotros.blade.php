@extends('layouts.app', ['page' => __('Nosotros'), 'pageSlug' => 'nosotros'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Nosotros
@endsection

@section('content')
	<div class="col-md-12">
		<div class="text-center letra-titulo">
			<h2>PROSARC S.A. ESP</h2>
		</div>
		<div class="col-md-12">
			<div class="col-md-10" style="margin-left: auto;">
				<img src="white/img/DJI_0123.jpg" class="responsive imagen-prosarc" width="600" height="400">
				<br><br><br><br>
			</div>
		</div>

		<div class="col-md-12">
			<div class="row mx-auto">
				<div class="politicas mx-auto col-md-5">
					<div class="col-md-12 text-center letra-titulo">
						<h3>Misión</h3>
					</div>
					<div class="col-md-12 text-justify letra-contenido">
						<p> Ejecutar políticas, planes, programas y proyectos ambientales, a través de la implementación de la Licencia Ambiental y normas ambientales, para contribuir a brindar soluciones integrales a la Industria en General para el Manejo de Residuos Peligrosos.</p>
					</div>
				</div>
				<div class="politicas mx-auto col-md-5">
					<div class="col-md-12 text-center letra-titulo">
						<h3>Visión</h3>
					</div>
					<div class="col-md-12 text-justify letra-contenido">
						<p> PROTECCIÓN SERVICIOS AMBIENTALES RESPEL DE COLOMBIA S.A. ESP – PROSARC S.A. ESP, en el 2023 habrá incidido en la consolidación de un modelo viable, prospero, equitativo y sostenible, a través de una cultura ambiental responsable en la solución integral para el Manejo de Residuos Peligrosos.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>


	{{-- Div Objetivo General --}}
	<div class="col-md-12" style="background-color: rgba(0, 158, 255, .1); border-radius: 20px 20px 20px 20px; padding: 20px 20px 20px 20px;">
		<div class="col-md-12 text-center letra-titulo">
			<h1>OBJETIVOS</h1>
		</div>
		<div class="col-md-12 text-justify letra-contenido">
			<p>Garantizar la confiabilidad de los resultados a los tratamientos emitidos y cumplimiento de las normas de calidad y ambiental en la prestación de sus servicios, de acuerdo con las necesidades del cliente y la utilización adecuada de los recursos disponible, dentro de una cultura empresarial de prevención, en todos los niveles, tanto de los riesgos ocupacionales identificados, así como de sus impactos ambientales, así como garantizar la gestión eficaz de los requisitos y compromisos legales de la normatividad aplicable vigente y generar confianza por su desempeño y gestión empresarial, se ha diseñado el Sistema Integrado de Gestión de <strong>PROSARC S.A. ESP.</strong> </p>
			<br>
			<p><strong>PROSARC S.A. ESP</strong>, para el cumplimiento de su Política y Objetivo General del Sistema Integrado de Gestión, tiene como objetivos específicos los siguientes:</p>
		</div>
	</div>



	{{-- Div Objetivo #1 --}}<hr>

	<div class="col-md-12">
		<div class="col-md-12">
			<div class="text-left">
				<a class="btn btn-success letra-titulo" data-toggle="collapse" href="#collapseObjetivo" role="button" aria-expanded="false" aria-controls="collapseObjetivo">
					<h2>Objetivo #1</h2><br>
				</a>
			</div>
		</div>
		<div class="collapse" id="collapseObjetivo">
		    <div class="col-md-12 mx-auto text-justify letra-contenido" style="background-color: rgba(0, 255, 0, .1); border-radius: 20px 20px 20px 20px; padding: 20px 20px 20px 20px;"> 
		    	Implementar actividades de promoción y prevención en salud, dirigidas a nuestros trabajadores y de seguridad para nuestros colaboradores, contratistas y visitantes con el fin de prevenir accidentes y enfermedades laborales.
			</div>
			<div class="row">
				<div class="col-md-8 mx-auto text-justify">
					<a class="btn btn-success letra-titulo" data-toggle="collapse" href="#collapseActividad" role="button" aria-expanded="false" aria-controls="collapseActividad">
					    Actividad
					</a>

					<div class="collapse" id="collapseActividad"> 
					  	<div class="col-md-12 mx-auto"  style="background-color: rgba(0, 255, 0, .1); border-radius: 20px 20px 20px 20px; padding: 20px 20px 20px 20px;">
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-titulo">
				    			<br><strong>ACTIVIDADES</strong>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-titulo">
				    			<br><strong>PROCESOS IMPLICADOS</strong>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Evaluar los puestos de trabajo mediante la ejecución de las mediciones ocupacionales, mejorando las condiciones con la implementación  de las recomendaciones dadas en cada uno de los estudios realizados.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>SST</p>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Realiza mantenimiento predictivo y preventivo a las instalaciones locativas, maquinarias y equipos que puedan causar accidentes.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>MANTENIMIENTO</p>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Evitar accidentes o enfermedades laborales en el desarrollo de nuestras actividades.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>TODOS LOS PROCESOS</p>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Desarrollar actividades orientadas al auto-cuidado y a la prevención de riesgos.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>GESTIÓN HUMANA / SST</p>
				    			</div>
				    		</div>
					    </div> 
					</div>
				</div>
				<div class="col-md-4 mx-auto text-justify">
					<a class="btn btn-success letra-titulo" data-toggle="collapse" href="#collapsePolitica" role="button" aria-expanded="false" aria-controls="collapsePolitica">
					    Pólitica
					</a>

					<div class="collapse" id="collapsePolitica"> 
					  	<div class="col-md-12 mx-auto text-center letra-contenido" style="background-color: rgba(0, 255, 0, .1); border-radius: 20px 20px 20px 20px; padding: 20px 20px 20px 20px;">
					    	<h1>Pólitica de Seguridad y Salud en el Trabajo</h1>
					    </div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Div Objetivo #2 --}}<hr>

	<div class="col-md-12">
		<div class="col-md-12">
			<div class="text-center">
				<a class="btn btn-success mx-auto letra-titulo" data-toggle="collapse" href="#collapseObjetivo2" role="button" aria-expanded="false" aria-controls="collapseObjetivo2">
					<h2>Objetivo #2</h2><br>
				</a>
			</div>
		</div>
		<div class="collapse" id="collapseObjetivo2">
		    <div class="col-md-12 mx-auto text-justify letra-contenido" style="background-color: rgba(0, 255, 0, .1); border-radius: 20px 20px 20px 20px; padding: 20px 20px 20px 20px;"> 
		    	Garantizar que los servicios de recolección, transporte, manejo, tratamiento, incineración y destrucción de toda clase de desechos y residuos sean oportunos, adecuados y seguro, previniendo la contaminación y la disminuyendo los impactos que se puedan generar a los recursos naturales 
			</div>
			<div class="row">
				<div class="col-md-8 mx-auto text-justify">
					<a class="btn btn-success letra-titulo" data-toggle="collapse" href="#collapseActividad2" role="button" aria-expanded="false" aria-controls="collapseActividad2">
					    Actividad
					</a>

					<div class="collapse" id="collapseActividad2"> 
					  	<div class="col-md-12 mx-auto"  style="background-color: rgba(0, 255, 0, .1); border-radius: 20px 20px 20px 20px; padding: 20px 20px 20px 20px;">
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-titulo">
				    			<br><strong>ACTIVIDADES</strong>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-titulo">
				    			<br><strong>PROCESOS IMPLICADOS</strong>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Realizar seguimiento, monitoreo y mejoras al cumplimiento de emisiones derivadas al proceso de termo-destrucción.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>TRATAMIENTO TERMICO/GESTIÓN AMBIENTAL</p>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Gestionar de forma eficiente el almacenamiento temporal, el alistamiento y la distribución para los procesos de disposición final adecuados de todos los residuos entregados por nuestros clientes.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>PDA</p>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Generar conciencia ambiental por parte de los trabajadores mediante el desarrollo de actividades y campañas educativas.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>GESTIÓN AMBIENTAL</p>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Proporcionar mejoras locativas y operativas que ayuden a reducir impactos generados al medio ambiente.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>TODOS LOS PROCESOS</p>
				    			</div>
				    		</div>
					    </div> 
					</div>
				</div>
				<div class="col-md-4 mx-auto text-justify">
					<a class="btn btn-success letra-titulo" data-toggle="collapse" href="#collapsePolitica2" role="button" aria-expanded="false" aria-controls="collapsePolitica2">
					    Pólitica
					</a>

					<div class="collapse" id="collapsePolitica2"> 
					  	<div class="col-md-12 mx-auto text-center letra-contenido" style="background-color: rgba(0, 255, 0, .1); border-radius: 20px 20px 20px 20px; padding: 20px 20px 20px 20px;">
					    	<h1>Pólitica de Calidad</h1>
					    </div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Div Objetivo #3 --}}<hr>

	<div class="col-md-12">
		<div class="col-md-12">
			<div class="text-right">
				<a class="btn btn-success letra-titulo" data-toggle="collapse" href="#collapseObjetivo3" role="button" aria-expanded="false" aria-controls="collapseObjetivo3">
					<h2>Objetivo #3</h2><br>
				</a>
			</div>
		</div>
		<div class="collapse" id="collapseObjetivo3">
		    <div class="col-md-12 mx-auto text-justify letra-contenido" style="background-color: rgba(0, 255, 0, .1); border-radius: 20px 20px 20px 20px; padding: 20px 20px 20px 20px;"> 
		    	Cumplir con los estándares de calidad en la prestación del servicio a nuestros clientes, optimizando y mejorando continuamente en los procesos y procedimientos establecidos en la Empresa, llegando a los estándares de eficiencia, eficacia, efectividad, cumpliendo siempre con la legislación Ambiental Colombiana y los requerimientos de nuestros Clientes.
			</div>
			<div class="row">
				<div class="col-md-8 mx-auto text-justify">
					<a class="btn btn-success letra-titulo" data-toggle="collapse" href="#collapseActividad3" role="button" aria-expanded="false" aria-controls="collapseActividad3">
					    Actividad
					</a>

					<div class="collapse" id="collapseActividad3"> 
					  	<div class="col-md-12 mx-auto"  style="background-color: rgba(0, 255, 0, .1); border-radius: 20px 20px 20px 20px; padding: 20px 20px 20px 20px;">
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-titulo">
				    			<br><strong>ACTIVIDADES</strong>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra letra-titulo">
				    			<br><strong>PROCESOS IMPLICADOS</strong>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Atender de manera oportuna y eficaz los requerimientos del cliente con el fin de medir su grado de satisfacción.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>SEVICIO AL CLIENTE/PDA / TERMODESTRUCCIÓN / COMERCIAL/GESTIÓN DE CALIDAD</p>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Garantizar eficacia en cada proceso y/o subproceso para la correcta prestación de nuestros servicios.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>TODOS LOS PROCESOS</p>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Fortalecer canales de comunicación para cliente interno y externo con enfoque al servicio al cliente.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>TODOS LOS PROCESOS</p>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Garantizar acciones de seguimiento y verificación de nuestros requisitos legales.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>TODOS LOS PROCESOS</p>
				    			</div>
				    		</div>
				    		<div class="col-md-12 row">
				    			<div class="col-md-5 mx-auto text-center actividades letra-contenido">
				    			<br><p>Mantener trazabilidad a cada actividad realizada dentro de cada proceso para la gestión de la operación.</p>
				    			</div>
				    			<div class="col-md-5 mx-auto text-center procesos letra-contenido">
				    			<br><p>TODOS LOS PROCESOS</p>
				    			</div>
				    		</div>
					    </div> 
					</div>
				</div>
				<div class="col-md-4 mx-auto text-justify">
					<a class="btn btn-success letra-titulo" data-toggle="collapse" href="#collapsePolitica3" role="button" aria-expanded="false" aria-controls="collapsePolitica3">
					    Pólitica
					</a>

					<div class="collapse" id="collapsePolitica3"> 
					  	<div class="col-md-12 mx-auto text-center letra-contenido" style="background-color: rgba(0, 255, 0, .1); border-radius: 20px 20px 20px 20px; padding: 20px 20px 20px 20px;">
					    	<h1>Pólitica Ambiental</h1>
					    </div> 
					</div>
				</div>
			</div>
		</div><br>
	</div>

	{{-- Fin de los Div's de Objetivos --}}<hr>
	
	<h2 class=" letra-titulo">POLÍTICAS</h2>

	<div class="accordion" id="accordionExample">
	  
		{{-- Políica #1 --}}
		<div class="card">
			<div class="card-header" id="headingOne">
				<h2 class="mb-0">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					<strong class="letra-titulo">POLÍTICAS DE CONFIDENCIALIDAD</strong>
					</button>
				</h2>
			</div>
			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="row">
					<div class="col-md-3">
						<img src="white/img/confidencial.jpg" style="margin: 10px 10px 10px 10px;">
					</div>
					<div class="card-body col-md-8 text-justify letra-contenido" style="margin: 10px">
						<p>Todo el personal y quien labore en PROSARC S.A. ESP, desde la Gerencia General y directivos, se comprometen a mantener la confidencialidad de los resultados de sus diferentes clientes, así como a proteger dicha información de un uso contrario al autorizado, pérdida, acceso no autorizado, alteración y destrucción. Sólo se utilizará la información obtenida en los análisis para responder a los requerimientos y consultas y procesar las solicitudes de los clientes.</p>
						<br>
						<p>El personal y quien labore en <strong>PROSARC S.A. ESP</strong>, sea contratista y/o temporal, asume con mucha seriedad la responsabilidad de mantener la confidencialidad de sus datos y con este fin toma precauciones razonables y cuenta con procedimientos y mecanismos para protegerlos, también para que el personal involucrado, guarde confidencialidad absoluta al respecto, así como también, para que no divulguen la dicha información a terceros y no la utilice para otro propósito que no sea ofrecerle bienes y servicios específicos a los clientes de <strong>PROSARC S.A. ESP</strong>.</p> 
						<br>
						<p>Para esto el personal ha firmado compromisos en la “Carta de Compromiso” y acuerdos de confidencialidad de la información en el “Acuerdo de Confiabilidad”, que reposan en las carpetas de cada hoja de vida. </p>
						<br>
						<p>En el caso de los datos y resultados almacenados o distribuidos en medios electrónicos, se protegen contra alteraciones o daños mediante back ups periódicos y por medio de claves personalizadas se protegen contra accesos sin autorización.</p>
						<br>
						<p>Sólo se podrá divulgar la información cuando la misma sea requerida para proteger y defender los derechos y la seguridad de <strong>PROSARC S.A. ESP</strong>, sus clientes y el personal a cargo. Excepto por las circunstancias previamente mencionadas, la información recolectada no se divulgará a terceros.</p>
					</div>
				</div>
			</div>
		</div>
		{{-- Política #2 --}}
		<div class="card">
			<div class="card-header" id="headingTwo">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					<strong class="letra-titulo">POLÍTICA DE INDEPENDENCIA <br> E IMPARCIALIDAD</strong>
					</button>
				</h2>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<div class="row">
					<div class="card-body col-md-9 text-justify letra-contenido" style="margin: 10px 10px 10px 20px;">
						El Proceso de Tratamiento de <strong>PROSARC S.A. ESP</strong> y el área Comercial, tiene como política no acceder a amenazas o cualquier medio de coacción implícita o explícita, así como no intervenir en actividades que puedan afectar la confiabilidad de los resultados que emite a sus clientes y la competencia. Esto se manifiesta a través de la libertad que tienen para ejercer las funciones establecidas en los perfiles de cargo.
					</div>
					<div class="col-md-2">
						<img src="white/img/imparcial.png" style="margin: 10px;">
					</div>
				</div>
			</div>
		</div>
		{{-- Política #3 --}}
		<div class="card">
			<div class="card-header" id="headingThree">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					<strong class="letra-titulo">POLÍTICA DE REVISIÓN DE <br> PEDIDOS Y CONTRATOS</strong>
					</button>
				</h2>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				<div class="row">
					<div class="col-md-3">
						<img src="white/img/revición.jpg" style="margin: 10px 10px 10px 10px;">
					</div>
					<div class="card-body col-md-8 text-justify letra-contenido">
						<p><strong>PROSARC S.A. ESP</strong>, como política tiene revisar las diferentes solicitudes y/o requerimientos de muestreo y análisis de sus clientes internos y externos conservando registros de las revisiones e informando al cliente de las desviaciones que se presentan en la ejecución de sus actividades con respecto a los requerimientos iniciales, determinando la capacidad de análisis y velando por el aumento de la satisfacción de sus clientes.</p>
						<br>
						<p>Para esto se cuenta con procedimientos para la revisión de los requerimientos y contratos dentro de los procedimientos establecidos por <strong>PROSARC S.A. ESP</strong> y con personal consiente y capacitado para tal fin.</p>
					</div>
				</div>
			</div>
		</div>
		{{-- Polílica #4 --}}
		<div class="card">
			<div class="card-header" id="headingFour">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					<strong class="letra-titulo">POLÍTICA DE COMPRA DE <br> SERVICIOS Y SUMINISTRO</strong>
					</button>
				</h2>
			</div>
			<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
				<div class="row">
					<div class="card-body col-md-9 text-justify letra-contenido" style="margin: 10px 10px 10px 20px;">
						<p><strong>PROSARC S.A. ESP</strong>, tiene como política la adquisición de materiales, insumos, suministros y servicios de la calidad, con el fin que no se vea afectado directa o indirectamente la confiabilidad de los resultados que se emiten; siguiendo los procedimientos legales vigentes, realizando las verificaciones y aprobaciones pertinentes que garanticen el cumplimiento de las especificaciones solicitadas, así como emitir el concepto de la evaluación de proveedores a las diferentes partes interesadas, incluyendo los requisitos ambientales y de salud y de seguridad en el trabajo.</p>
					</div>
					<div class="col-md-2">
						<img src="white/img/compras.jpg">
					</div>
				</div>
			</div>
		</div>
		{{-- Política #5 --}}
		<div class="card">
			<div class="card-header" id="headingFive">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
					<strong class="letra-titulo">POLÍTICA DE QUEJAS Y RECLAMOS</strong>
					</button>
				</h2>
			</div>
			<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
				<div class="row">
					<div class="col-md-3">
						<img src="white/img/quejas.jpg" style="margin: 10px 10px 10px 10px;">
					</div>
					<div class="card-body col-md-8 text-justify letra-contenido">
						<p>Es política de <strong>PROSARC S.A. ESP</strong>, trabajar en procura de la disminución efectiva de las quejas y reclamos de los clientes internos y externos y cuando estos reclamos se presenten, trabajar en conjunto con los clientes para resolver de forma oportuna, pronta y efectiva cualquier deficiencia que haya sido presentada, para aumentar su satisfacción y la imagen de la Empresa. Para esto, hemos establecido el procedimiento XXXX Gestión de Quejas, como instrumento para dar tratamiento a este tipo de situaciones.</p>
					</div>
				</div>
			</div>
		</div>
		{{-- Política #6 --}}
		<div class="card">
			<div class="card-header" id="headingSix">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
					<strong class="letra-titulo">POLÍTICA DE TRABAJO NO CONFORME</strong>
					</button>
				</h2>
			</div>
			<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
				<div class="row">
					<div class="card-body col-md-9 text-justify letra-contenido" style="margin: 10px 10px 10px 20px;">
						<p>Es política de <strong>PROSARC S.A. ESP</strong>, evitar bajo cualquier circunstancia la ocurrencia de trabajo no conformes. Sin embargo, en caso de que ocurran se deberá prestar atención pronta, se asignan responsables y se toman las acciones correspondientes para solventar cualquier deficiencia que pueda afectar de forma directa o indirecta los procedimientos del sistema integrado de gestión. Para esto, se ha establecido el procedimiento XXXXX Procedimiento de Control de Trabajo NO Conforme, como instrumento para dar tratamiento a estas situaciones.</p>
					</div>
					<div class="col-md-2">
						<img src="white/img/conforme.jpg">
					</div>
				</div>
			</div>
		</div>
		{{-- Política #7 --}}
		<div class="card">
			<div class="card-header" id="headingSeven">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
					<strong class="letra-titulo">POLÍTICA DE CONFLICO DE INTERESES</strong>
					</button>
				</h2>
			</div>
			<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
				<div class="row">
					<div class="col-md-3">
						<img src="white/img/conflicto.jpg" style="margin: 10px 10px 10px 10px;">
					</div>
					<div class="card-body col-md-8 text-justify letra-contenido">
						<p>Es política de <strong>PROSARC S.A ESP</strong>, respetar la propiedad del cliente, controlar y evitar bajo cualquier circunstancia que la información generada por concepto de requerimiento de tratamiento de incineración, celdas, entre otras, haya sido solicitada por el cliente, sea entregada a otro, incluyendo a la misma empresa. Para lo anterior, <strong>PROSARC S.A. ESP</strong>, ha identificado los posibles conflictos de interés internos y externos, por lo que establecemos controles, las responsabilidades y las acciones correspondientes para solventar cualquier deficiencia que pueda generar un incumplimiento a esta política.</p>
					</div>
				</div>
			</div>
		</div>
		{{-- Política #8 --}}
		<div class="card">
			<div class="card-header" id="headingEight">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
					<strong class="letra-titulo">POLÍTICA DE ACCIONES <br> CORRECTIVAS Y PREVENTIVAS</strong>
					</button>
				</h2>
			</div>
			<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
				<div class="row">
					<div class="card-body col-md-9 text-justify letra-contenido" style="margin: 10px 10px 10px 20px;">
						<p>Es política de <strong>PROSARC S.A. ESP</strong>, respetar la propiedad del cliente, controlar y evitar bajo cualquier circunstancia que la información generada por concepto de requerimiento de tratamiento de incineración, celdas, entre otras, haya sido solicitada por el cliente, sea entregada a otro, incluyendo a la misma empresa. Para lo anterior, <strong>PROSARC S.A. ESP</strong>, ha identificado los posibles conflictos de interés internos y externos, por lo que establecemos controles, las responsabilidades y las acciones correspondientes para solventar cualquier deficiencia que pueda generar un incumplimiento a esta política.</p>
					</div>
					<div class="col-md-2">
						<img src="white/img/correctivas.png">
					</div>
				</div>
			</div>
		</div>
		{{-- Política #9 --}}
		<div class="card">
			<div class="card-header" id="headingNine">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
					<strong class="letra-titulo">POLÍTICA DE COMPETENCIA, JUICIO <br>E INTEGRIDAD DEL PERSONAL</strong>
					</button>
				</h2>
			</div>
			<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
				<div class="row">
					<div class="col-md-3">
						<img src="white/img/integridad.jpg" style="margin: 10px 10px 10px 10px;">
					</div>
					<div class="card-body col-md-8 text-justify letra-contenido">
						<p><strong>PROSARC S.A. ESP</strong>, se compromete a capacitar el personal de forma continua, determinando las necesidades del mismo, mediante evaluaciones periódicas o sugerencias de ellos mismos. La programación de la capacitación la establece el responsable del Sistema Integrado de Gestión mediante un programa de capacitación. Esta capacitación puede llevarse a cabo fuera en las instalaciones de <strong>PROSARC S.A. ESP</strong> Para llevarse a cabalidad con esto, la Empresa ha establecido un procedimiento XXXX Procedimiento para Entrenamiento de Personal y el procedimiento XXXX Competencia y Detección de Necesidades de Formación.</p>
						<br>
						<p><strong>PROSARC S.A. ESP</strong>, se compromete igualmente a incluir dentro de estas capacitaciones, la sensibilización del personal en aspectos como el compromiso adquirido por todo el personal que ingresa a la Empresa, a realizar sus actividades en forma imparcial e integral, guardando estrictamente la confidencialidad y empleando una buena práctica profesional, sin presiones interno o externas comerciales, financieras u otras que puedan tener una influencia negativa sobre la calidad del trabajo.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	{{-- Div correspondiente al mapa de procesos --}}	
	<div class="col-md-12 mx-auto">
		<div class="col-md-12 mx-auto text-center letra-titulo">
			<h2>MAPA DE PROCESOS</h2>
		</div>
		<div class="col-md-10 mx-auto">
			<img src="white/img/Mapa_proceso.png" class="responsive imagen-prosarc">
		</div>
	</div>


@endsection

@push('scripts')
	
@endpush