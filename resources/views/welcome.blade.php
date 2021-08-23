@extends('web')

@section('content')

<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': true, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
	<div class="header-body border-top-0 bg-dark box-shadow-none">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}">
							<a href="#" class="goto-top"><img alt="Porto" width="102" height="45" data-sticky-width="82" data-sticky-height="36" data-sticky-top="0" src="{{ asset('img/lazy.png') }}" data-plugin-lazyload data-plugin-options="{'threshold': 500}" data-original="img/landing/logo.png"></a>
						</div>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row">
						<div class="header-nav header-nav-links header-nav-light-text header-nav-dropdowns-dark">
							<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-text-capitalize header-nav-main-text-size-2 header-nav-main-mobile-dark header-nav-main-effect-1 header-nav-main-sub-effect-1 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}">
								<nav class="collapse">
									<ul class="nav nav-pills" id="mainNav">
										<li class="dropdown">
											<a class="dropdown-item" data-hash data-hash-offset="130" href="{{ url('/') }}">
												INICIO
											</a>
										</li>
										<li class="dropdown">
											<a class="dropdown-item" data-hash data-hash-offset="130" href="#nosotros">
												NOSOTROS
											</a>
										</li>
										<li class="dropdown">
											<a class="dropdown-item" data-hash data-hash-offset="130" href="#servicios">
												SERVICIOS
											</a>
										</li>
										<li class="dropdown">
											<a class="dropdown-item" data-hash data-hash-offset="130" href="#contacto">
												CONTACTO
											</a>
										</li>
										
									</ul>
								</nav>
							</div>

							<div class="header-column header-column-border-left flex-grow-0 justify-content-center">
								<div class="header-row pl-4 justify-content-end">
									<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean m-0">
										<li class="social-icons-facebook"><a href="http://www.facebook.com/sevencrows" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-white"></i></a></li>
										<li class="social-icons-linkedin"><a href="http://www.linkedin.com/sevencrows" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-white"></i></a></li>
										<li class="social-icons-instagram"><a href="http://www.instagram.com/sevencrows" target="_blank" title="Instagram"><i class="icon-social-instagram icons text-white"></i></a></li>
									</ul>
									<button class="btn header-btn-collapse-nav ml-0 ml-sm-3" data-toggle="collapse" data-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div role="main" class="main">
	<section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;" data-plugin-lazyload data-plugin-options="{'threshold': 500}" data-original="img/landing/header_bg.jpg">
		<div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
		<div class="container pt-5 mt-5">
			<div class="row align-items-center pt-3">
				<div class="col-lg-5 mb-5">
					<!--<h5 class="text-primary font-weight-bold mb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750"></h5>-->
					<h1 class="font-weight-bold text-12 line-height-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">Diseño y desarrollo de páginas Web<span class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600" data-appear-animation-duration="800"><span class="d-inline-block text-primary highlighted-word highlighted-word-rotate highlighted-word-animation-1 alternative-font-3 font-weight-bold text-1 ml-2">!</span></span></h1>
					<p class="custom-font-size-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" data-appear-animation-duration="750">
					Brindamos soluciones para tu negocio o emprendimiento con diseños profesionales y modernos.
					
					<!--<a href="#intro" data-hash data-hash-offset="120" class="text-color-light font-weight-semibold text-1 d-block">SABER MAS <i class="fa fa-long-arrow-alt-right ml-1"></i></a></p>-->
					<!-- <a class="video-open lightbox d-block text-color-light appear-animation" href="#popup-content-1" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" data-appear-animation-duration="750" data-plugin-options="{'type':'inline'}"><div class="video-open-icon"></div>See How It Works</a>-->
				
				</div>
				<div class="col-lg-6 offset-lg-1 mb-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1200" data-appear-animation-duration="750">
					<div class="clearfix">
						<img width="569px" src="{{ asset('img/banner.jpg') }}" class="img-responsive" alt="banner">
					</div>
				</div>
				<div class="col-md-8 col-lg-6 col-xl-5 custom-header-bar py-4 pr-5 appear-animation z-index-2" data-appear-animation="maskRight" data-appear-animation-delay="1200" data-appear-animation-duration="750">
					<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1500">

						<h4 class="position-relative text-center font-weight-bold text-7 line-height-2 mb-0">Posicionate en Internet</h4>

						<p class="position-relative text-center font-weight-normal mb-1">* Descuento para empresas unipersonales.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<hr>
	
	<section id="nosotros">
		<div class="container container-lg-custom py-5 my-2">
			<div class="row text-center text-md-left">
				<div class="col-lg-4 mt-5 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
					<p class="text-7 gradient-text-color font-weight-bold line-height-5 negative-ls-2">Somos una empresa desarrolladora de software ubicada en Montevideo.</p>
					<p class="font-weight-semibold mb-1">Ofrecemos soluciones a empresas y emprendedores que deseen crecer y posicionarse en Internet, ó bien cubrir alguna necesidad dentro de su organización.</p>
				</div>
				<div class="col-lg-8">
					<div class="row featured-boxes featured-boxes-style-4">
						<div class="col-md-6">
							<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								<div class="box-content px-4">
									<i class="icon-featured icon-screen-tablet icons text-14 mb-4 w-75"></i>
									<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Diseño</h4>
									<p class="px-3 mb-0">Diseños profesionales y modernos. Tu sitio se adapta a cualquier dispositivo.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<div class="box-content px-4">
									<i class="icon-featured icon-people icons text-14 mb-4 w-75"></i>
									<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Creatividad</h4>
									<p class="px-3 mb-0">Generamos soluciones a medida personalizada para cada cliente.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<div class="box-content px-4">
									<i class="icon-featured icon-earphones-alt icons text-14 mb-4 w-75"></i>
									<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Soporte</h4>
									<p class="px-3 mb-0">Brindamos asistencia telefónica y ayuda por chat para realizar consultas y resolver tus inconvenientes.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<div class="box-content px-4">
									<i class="icon-featured icon-notebook icons text-14 mb-4 w-75"></i>
									<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Manuales</h4>
									<p class="px-3 mb-0">Entregamos documentación necesaria para que utilices el software sin dificultades.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<hr>

	<section>
		<div class="container py-4 my-5">
			<div class="row justify-content-center text-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<div class="col-lg-8">
					<h2 class="font-weight-bold mb-3 mt-3"></h2>
					<p class="text-6 text-color-dark line-height-7 negative-ls-1 px-5">¿Tenés alguna idea, proyecto o emprendimiento en mente y no sabes por donde comenzar?</p>
					<p class="opacity-9 text-4">En Sevencrows te asesoramos.</p>
				</div>
			</div>
			<div class="row featured-boxes featured-boxes-style-4">
				<div class="col-md-6 col-lg-3">
					<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
						<div class="box-content px-4">
							<i class="icon-featured icon-bulb icons text-12"></i>
							<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Tu idea</h4>
							<p class="mb-0">Agendamos una reunión por videollamada o presencial para que nos cuentes en detalle tu idea. </p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
						<div class="box-content px-4">
							<i class="icon-featured icon-layers icons text-12"></i>
							<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Presupuesto</h4>
							<p class="mb-0">De acuerdo a tus necesidades te enviamos un informe sin costo estimando el tiempo de entrega y presupuesto del proyecto.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
						<div class="box-content px-4">
							<i class="icon-featured icon-organization icons text-12"></i>
							<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Desarrollo</h4>
							<p class="mb-0">Nos comprometemos a realizar nuestro mejor trabajo manteniendote siempre informado sobre los avances.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
						<div class="box-content px-4">
							<i class="icon-featured icon-check icons text-12"></i>
							<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Finalización y entrega</h4>
							<p class="mb-0">Tu web lista publicada en internet para comenzar a crecer.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="servicios" class="section section-parallax bg-color-grey-scale-1 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '116%'}" data-image-src="img/parallax/parallax-corporate-14-1.jpg">
		<div class="container container-lg-custom">
			<div class="row justify-content-between align-items-center">
				<div class="col-md-7 order-2 order-md-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
					<span class="font-weight-bold text-color-dark opacity-8 text-4">A partir de $4.500,00</span>
					<h2 class="font-weight-bold text-9 mb-4">Página Web informativa</h2>
					<p class="lead">Sitio web para mostrarles a los visitantes acerca tus servicios.</p>
					<ul class="list list-icons pb-2 mb-4">
						<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Incluye 4 secciones.</span></li>
						<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Recursos ilustrativos (galeria de imágenes y videos).</span></li>
						<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Formulario de contacto</span></li>
						<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Botón de chat Whatsapp.</span></li>
						<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Dominio .com.uy</span></li>
					</ul>
					<!--<a href="#" class="btn btn-primary font-weight-semibold rounded-0 btn-px-5 py-3 text-2">LEARN MORE</a>-->
				</div>
				<div class="col-md-4 text-center text-md-left order-1 order-md-2 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
					<img src="{{ asset('img/ecommerce-image-3.png') }}" class="img-fluid" alt="" />
				</div>
			</div>
		</div>
	</section>

	<section class="section section-height-3 section-parallax bg-color-light border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%', 'offset': 70}" data-image-src="img/parallax/parallax-corporate-14-2.jpg">
		<div class="container container-lg-custom">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-5 col-xl-6 text-center pr-5 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
					<img src="{{ asset('img/porto-admin-preview-1.jpg') }}" class="img-fluid" alt="" />
				</div>
				<div class="col-md-6 col-lg-7 col-xl-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
					<!--<span class="font-weight-bold text-color-dark opacity-8 text-4">A partir de $0.000,00</span>-->
					<h2 class="font-weight-bold text-9 mb-4">E-Commerce</h2>
					<p class="lead">Tienda online con carrito de compras aceptando tarjetas como medios de pago.</p>
					<ul class="list list-icons pb-2 mb-4">
						<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Panel administrativo.</span></li>
						<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Carrito de compras.</span></li>
						<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Control de stock y ventas.</span></li>
						<li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Pagos online.</span></li>
					</ul>
					<p class="lead">Disponemos de una versión de demostración sin costo para que pruebes!</p>
					<a href="{{ url('ecommerce') }}" class="btn btn-primary font-weight-semibold rounded-0 btn-px-5 py-3 text-2">MÁS INFORMACIÓN</a>
				</div>
			</div>
		</div>
	</section>

	<section id="support" class="section section-angled bg-light border-0 m-0 mt-5 position-relative z-index-3 pt-0">
		<div class="container pb-5 mb-5">
			<div class="row align-items-center mb-5">
				<div class="col-lg-6 pr-xl-5 mb-5 mb-lg-0">
					<h2 class="font-weight-bold text-9 mb-1">Atención personalizada</h2>
					<h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-3">DISPONIBLE PARA TODOS LOS SERVICIOS</h5>
					<p class="ls-0 text-default fw-400 mb-5"></p>
					<div class="d-flex align-items-center border border-top-0 border-right-0 border-left-0 pb-4 mb-4">
						<i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 mr-3"></i>
						<p class="mb-0"><b class="text-color-dark">MANUALES -</b> Entregamos documentación necesaria del proyecto para que utilices el software sin dificultades.</p>
					</div>
					<div class="d-flex align-items-center border border-top-0 border-right-0 border-left-0 pb-4 mb-4">
						<i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 mr-3"></i>
						<p class="mb-0"><b class="text-color-dark">ASISTENCIA -</b> Ayuda telefónica y por chat para realizar consultas y resolver tus dudas.</p>
					</div>
					<div class="d-flex align-items-center pb-4 mb-4">
						<i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 mr-3"></i>
						<p class="mb-0"><b class="text-color-dark">SOPORTE -</b> Te seguiremos acompañando brindando actualizaciones y mejoras con nuevas funcionalidades.</p>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-2">
					<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
						<img class="img-fluid" src="img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="img/landing/porto_dots2.png" alt="" style="position: absolute; bottom: -2%; left: -43%; transform: rotate(90deg)">
					</div>
					<img alt="asistencia-telefonica-imagen" src="{{ asset('img/callcenter-image-02.png') }}" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="{{ asset('img/callcenter-image-02.png') }}" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 ml-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200" style="width: 590px; max-width: none;">
					<!--<img alt="Porto Documentation" src="{{ asset('img/callcenter-image-01.png') }}" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="{{ asset('img/callcenter-image-01.png') }}img/landing/porto_docs.jpg" class="img-fluid  rounded box-shadow-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="700" style="left: -100px; bottom: 50px;">-->
				</div>
			</div>
		</div>
		
	</section>

</div>

<!--<div role="main" class="main mt-5">

	<div class="container container-xl-custom">
		<div class="row justify-content-center featured-boxes featured-boxes-style-4 pb-3 mb-4">
			<div class="col-md-4">
				<div class="featured-box featured-box-primary">
					<div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
						<i class="icon-featured far fa-envelope icons far fa-envelope mb-3"></i>
						<span class="d-block opacity-7 line-height-1">CORREO</span>
						<h2 class="font-weight-bold text-color-dark text-5 mb-0">contacto@sevencrows.com.uy</h2>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="featured-box featured-box-primary mx-5">
					<div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
						<i class="icon-featured icons icon-screen-desktop mb-3"></i>
						<span class="d-block opacity-7 line-height-1">NUESTRAS REDES</span>
						<ul class="social-icons mt-3">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/sevencrows" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="social-icons-instagram"><a href="http://www.instagram.com/sevencrows" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/sevencrows" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="featured-box featured-box-primary">
					<div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1000">
						<i class="icon-featured icons icon-call-in mb-3"></i>
						<span class="d-block opacity-7 line-height-1">LLAMANOS</span>
						<h2 class="font-weight-bold text-color-dark text-5 mb-0">+598 96 000 000</h2>
					</div>
				</div>
			</div>
		</div>
	</div>-->

	@include('layouts.banner-whatsapp')

</div>

<section class="bg-color-light border-0 pt-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 col-lg-6">
				<h2 class="font-weight-normal text-color-dark text-center text-8 mb-4"><strong class="font-weight-extra-bold">Ó dejanos tu mensaje!</strong></h2>
				<p class="text-4 opacity-8 text-center mb-4">Al recibir tu solicitud nos pondremos en contacto a la brevedad.</p>
				
				@include('layouts.contact')
				
			</div>
		</div>
	</div>
</section>

@endsection