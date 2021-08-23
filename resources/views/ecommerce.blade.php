@extends('web')

@section('content')

<!-- Current Page CSS -->
<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

<!-- Skin CSS -->
<link rel="stylesheet" href="css/skins/skin-corporate-7.css"> 

<!-- HEADER -->
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
											<a class="dropdown-item" data-hash data-hash-offset="130" href="{{ url('/#nosotros') }}">
												NOSOTROS
											</a>
										</li>
										<li class="dropdown">
											<a class="dropdown-item" data-hash data-hash-offset="130" href="{{ url('/#servicios') }}">
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
                                        <li class="social-icons-instagram"><a href="http://www.instagram.com/sevencrows" target="_blank" title="Instagram"><i class="icon-social-instagram text-white"></i></a></li>
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
<!-- END-HEADER -->

<div role="main" class="main">

    <!-- BANNER -->
	<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
            <ul>
                <li class="slide-overlay" data-transition="fade">
                    <img src="img/slides/slide-corporate-7-1.jpg"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg">
                    
                    <div class="tp-caption"
                        data-x="center" data-hoffset="['-165','-165','-165','-215']"
                        data-y="center" data-voffset="['-110','-110','-110','-135']"
                        data-start="1000"
                        data-transform_in="x:[-300%];opacity:0;s:500;"
                        data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption text-color-light font-weight-normal"
                        data-x="center"
                        data-y="center" data-voffset="['-110','-110','-110','-135']"
                        data-start="700"
                        data-fontsize="['22','22','22','40']"
                        data-lineheight="['25','25','25','45']"
                        data-transform_in="y:[-50%];opacity:0;s:500;">Tienda online autoadministrable</div>

                    <div class="tp-caption"
                        data-x="center" data-hoffset="['165','165','165','215']"
                        data-y="center" data-voffset="['-110','-110','-110','-135']"
                        data-start="1000"
                        data-transform_in="x:[300%];opacity:0;s:500;"
                        data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center"
                        data-y="center" data-voffset="['-60','-60','-60','-85']"
                        data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">E-COMMERCE</h1>

                    <div class="tp-caption font-weight-light text-center"
                        data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-x="center"
                        data-y="center" data-voffset="['-10','-10','-10','-25']"
                        data-fontsize="['18','18','18','50']"
                        data-lineheight="['29','29','29','40']"
                        style="color: #b5b5b5;">Tener tu catálogo de productos en internet multiplica tus ventas.</div>

                    <a class="tp-caption btn btn-primary font-weight-bold"
                        href="#saber-mas"
                        data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center"
                        data-y="center" data-voffset="['65','65','65','210']"
                        data-paddingtop="['15','15','15','30']"
                        data-paddingbottom="['15','15','15','30']"
                        data-paddingleft="['33','33','33','50']"
                        data-paddingright="['33','33','33','50']"
                        data-fontsize="['13','13','13','25']"
                        data-lineheight="['20','20','20','25']">CONOCER MÁS <i class="fas fa-arrow-right ml-1"></i></a>

                    <!--<a class="tp-caption btn btn-light font-weight-bold text-color-primary"
                        href="#"
                        data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-hoffset="['-120','-120','-120','-195']"
                        data-y="center" data-voffset="['65','65','65','210']"
                        data-paddingtop="['15','15','15','30']"
                        data-paddingbottom="['15','15','15','30']"
                        data-paddingleft="['33','33','33','50']"
                        data-paddingright="['33','33','33','50']"
                        data-fontsize="['13','13','13','25']"
                        data-lineheight="['20','20','20','25']">SABER MÁS</a>

                    <a class="tp-caption btn btn-primary font-weight-bold"
                        href="#saber-mas"
                        data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-hoffset="['90','90','90','165']"
                        data-y="center" data-voffset="['65','65','65','210']"
                        data-paddingtop="['15','15','15','30']"
                        data-paddingbottom="['15','15','15','30']"
                        data-paddingleft="['33','33','33','50']"
                        data-paddingright="['33','33','33','50']"
                        data-fontsize="['13','13','13','25']"
                        data-lineheight="['20','20','20','25']">DEMO <i class="fas fa-arrow-right ml-1"></i></a>-->
                    
                </li>
                <li class="slide-overlay" data-transition="fade">
                    <img src="img/slides/slide-corporate-7-2.jpg"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg">
                    
                    <div class="tp-caption"
                        data-x="center" data-hoffset="['-115','-115','-115','-185']"
                        data-y="center" data-voffset="['-110','-110','-110','-135']"
                        data-start="1000"
                        data-transform_in="x:[-300%];opacity:0;s:500;"
                        data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <!--<div class="tp-caption text-color-light font-weight-normal"
                        data-x="center"
                        data-y="center" data-voffset="['-110','-110','-110','-135']"
                        data-start="700"
                        data-fontsize="['22','22','22','40']"
                        data-lineheight="['25','25','25','45']"
                        data-transform_in="y:[-50%];opacity:0;s:500;"></div>-->

                    <div class="tp-caption"
                        data-x="center" data-hoffset="['115','115','115','185']"
                        data-y="center" data-voffset="['-110','-110','-110','-135']"
                        data-start="1000"
                        data-transform_in="x:[300%];opacity:0;s:500;"
                        data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center"
                        data-y="center" data-voffset="['-60','-60','-60','-85']"
                        data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">PRUEBA GRATUITA</div>

                    <div class="tp-caption font-weight-light text-center"
                        data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-x="center"
                        data-y="center" data-voffset="['-10','-10','-10','-25']"
                        data-fontsize="['18','18','18','50']"
                        data-lineheight="['29','29','29','40']"
                        style="color: #b5b5b5;">Solicitá tu usuario</div>

                    <a class="tp-caption btn btn-primary font-weight-bold"
                        href="#saber-mas"
                        data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center"
                        data-y="center" data-voffset="['65','65','65','210']"
                        data-paddingtop="['15','15','15','30']"
                        data-paddingbottom="['15','15','15','30']"
                        data-paddingleft="['33','33','33','50']"
                        data-paddingright="['33','33','33','50']"
                        data-fontsize="['13','13','13','25']"
                        data-lineheight="['20','20','20','25']">CONOCER MÁS <i class="fas fa-arrow-right ml-1"></i></a>
                    
                </li>
            </ul>
        </div>
    </div>
    <!-- END-BANNER -->

    <section id="saber-mas">
		<div class="container pt-4 my-5">
			<div class="row justify-content-center text-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">¿Cuales son los beneficios?</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">TU NEGOCIO AL SIGUIENTE NIVEL</p>
                    <p class="text-1rem text-color-default negative-ls-05 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">Tener tu catálogo de productos en internet y darles a tus clientes la posibilidad de comprar desde la comodidad de sus casas mejora considerablemente las ventas aumentando tu presencia en Internet.</p>
                    <p class="text-1rem text-color-default negative-ls-05 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">Nuestro sistema te permite llevar un control total de ventas automatizando el stock de tus productos, podrás visualizar los pedidos cancelados, pendientes de envío y entregados para una mejor gestión.</p>
                    <p class="text-1rem text-color-default negative-ls-05 py-3 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">Diseño profesional, compacto y moderno, podrás administrar tu sitio desde cualquier dispositivo con conexión a Internet.</p>
                </div>
			</div>
		</div>
	</section>

    <hr>

    <div class="container">
        <div class="row py-4 mt-5">
            <div class="col">
                <h3 class="font-weight-normal text-center">Características</h3>
                <div class="row pt-5 clearfix">
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter">
                            <div class="feature-box-icon">
                                <i class="icon-grid icons text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2">Panel administrativo</h4>
                                <p class="mb-4">Gestioná tu sitio de forma fácil e intuitiva. Ingresá productos, proveedores, ventas y más.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
                            <div class="feature-box-icon">
                                <i class="icon-screen-tablet icons text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2">Blog de noticias</h4>
                                <p class="mb-4">Creá contenido, subí imágenes, videos y compartilos en tus redes sociales.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                            <div class="feature-box-icon">
                                <i class="icon-calculator icons text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2">Punto de venta</h4>
                                <p class="mb-4">Además de las ventas Online efectuadas por los usuarios, registrá aquellas que realices presencialmente en tu local.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                            <div class="feature-box-icon">
                                <i class="icon-basket icons text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2">Carrito</h4>
                                <p class="mb-4">Los clientes podrán registrarse, realizar compras y efectuar pagos online con tarjetas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                            <div class="feature-box-icon">
                                <i class="icon-bell icons text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2">Notificaciones</h4>
                                <p class="mb-4">El sistema te alertará si ocurre algo. Cuando recibas un mensaje, publiquen algun comentario o te estés quedando sin stock de algún producto te lo haremos saber.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                            <div class="feature-box-icon">
                                <i class="icon-star icons text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2">Promociones</h4>
                                <p class="mb-4">Ofrecerles ofertas y descuentos a tus clientes son un elemento decisivo a la hora de comprar.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                            <div class="feature-box-icon">
                                <i class="icon-bubbles icons text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2">Comentarios y reseñas</h4>
                                <p class="mb-4">Las opiniones sobre tus productos importan, los clientes leen los comentarios de otros usuarios antes de tomar una decisión de compra.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                            <div class="feature-box-icon">
                                <i class="icon-chart icons text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2">Estadísticas</h4>
                                <p class="mb-4">Gráficos de gastos e ingresos. Sabrás cuales son tus clientes potenciales y tus productos más vendidos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2">Te mostramos un ejemplo</h2>
                    <p class="lead">Hemos creado una tienda ficticia con todas las funcionalidades de un E-commerce para que puedas ver nuestro trabajo. </p>
                    <p>Como modelo corresponde a un negocio de venta de insumos informáticos.</p>
                    <!--<p class="pr-5 mr-5">Probá ingresar productos, proveedores, gestionar pedidos, descuentos y más </p>-->
                    <a href="{{ url('/') }}" target="_blank" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">VER TIENDA</a>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
                    <!--<img src="{{ asset('img/ecommerce-cart.png') }}" width="200px" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -70%;" alt="" />-->
                    <img src="{{ asset('img/ecommerce-single-product.png') }}" width="300px" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -50%;" alt="" />
                    <img src="{{ asset('img/ecommerce-heading.png') }}" width="380px" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="section section-secondary border-0 py-5 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                <div class="col-lg-5 order-2 order-lg-1 pt-4 pt-lg-0 pb-5 pb-lg-0 mt-5 mt-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <h2 class="font-weight-bold text-color-light text-7 mb-2">Probalo sin costo!</h2>
                    <p class="lead font-weight-light text-color-light text-4">Ingresá productos, proveedores, banners, gestioná pedidos, facturas, descuentos y más...</p>
                    <p class="font-weight-light text-color-light text-2 mb-4 opacity-7">Comunicate con nosotros y solicitá tu usuario para obtener acceso al panel administrativo.</p>
                    <a href="#contacto" class="btn btn-primary-scale-2 btn-px-5 btn-py-2 text-2">SOLICITAR ACCESO <i class="fas fa-arrow-circle-right ml-1"></i></a>
                </div>
                <div class="col-9 offset-lg-1 col-lg-5 order-1 order-lg-2 scale-2">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ asset('img/ecommerce-image.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <div id="saber-mas" class="container mb-5">
        <div class="row mb-4">
            <div class="col pb-5">
                <hr class="solid my-5">
                <h2 class="text-color-dark font-weight-normal text-6 mb-2 text-center">Disponemos de varios planes a partir de <strong>$8.500</strong>, elegí el que mas se adapte a tu negocio o emprendimiento de acuerdo a tus necesidades.</h2>
                <p class="lead">Para más informacion no dudes en <a href="#formulario-contacto">contactarnos</a>.</p>
            </div>
        </div>

        <div class="pricing-table pricing-table-no-gap mb-4">
            <div class="col-md-4">
                <div class="plan">
                    <div class="plan-header">
                        <h3>Inicial</h3>
                    </div>
                    <div class="plan-price">
                        <span class="price"><span class="price-unit">$</span>8.500</span>
                        <label class="price-label">PARA QUE LOS VISITANTES PUEDAN VER TUS PRODUCTOS</label>
                    </div>
                    <div class="plan-features">
                        <ul>
                            <li>+35 Productos</li>
                            <li>Panel administrativo <i class="icon-check icon text-success"></i></li>
                            <li>Catálogo de productos <i class="icon-check icon text-success"></i></li>
                            <li>Carrito de compras <i class="icon-close icon text-danger"></i></li>
                            <li>Pagos online <i class="icon-close icon text-danger"></i></li>
                            <li>Blog <i class="icon-close icon text-danger"></i></li>
                            <li>Punto de venta <i class="icon-close icon text-danger"></i></li>
                            <li>Proveedores <i class="icon-close icon text-danger"></i></li>
                            <li>Reportes <i class="icon-close icon text-danger"></i></li>
                        </ul>
                    </div>
                    <div class="plan-footer">
                        <a href="#contacto" class="btn btn-dark btn-modern btn-outline py-2 px-4">Consultar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="plan plan-featured">
                    <div class="plan-header bg-primary">
                        <h3>Premium</h3>
                    </div>
                    <div class="plan-price">
                        <span class="price"><span class="price-unit">$</span>28.000</span>
                        <label class="price-label">TODO LO QUE NECESITAS PARA UN NEGOCIO EN CRECIMIENTO</label>
                    </div>
                    <div class="plan-features">
                        <ul>
                            <li>+200 Productos</li>
                            <li>Panel administrativo <i class="icon-check icon text-success"></i></li>
                            <li>Catálogo de productos <i class="icon-check icon text-success"></i></li>
                            <li>Carrito de compras <i class="icon-check icon text-success"></i></li>
                            <li>Pagos online <i class="icon-check icon text-success"></i></li>
                            <li>Blog <i class="icon-close icon text-success"></i></li>
                            <li>Punto de venta <i class="icon-check icon text-success"></i></li>
                            <li>Proveedores <i class="icon-check icon text-success"></i></li>
                            <li>Reportes <i class="icon-check icon text-success"></i></li>
                        </ul>
                    </div>
                    <div class="plan-footer">
                        <a href="#contacto" class="btn btn-primary btn-modern py-2 px-4">Consultar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="plan">
                    <div class="plan-header bg-info">
                        <h3>Avanzado</h3>
                    </div>
                    <div class="plan-price">
                        <span class="price"><span class="price-unit">$</span>13.500</span>
                        <label class="price-label">PAQUETE BÁSICO PARA COMENZAR A VENDER POR INTERNET</label>
                    </div>
                    <div class="plan-features">
                        <ul>
                            <li>+90 Productos</li>
                            <li>Panel administrativo <i class="fa fa-check text-success"></i></li>
                            <li>Catálogo de productos <i class="fa fa-check text-success"></i></li>
                            <li>Carrito de compras <i class="fa fa-check text-success"></i></li>
                            <li>Pagos online <i class="fa fa-check text-success"></i></li>
                            <li>Blog <i class="icon-close icon text-success"></i></li>
                            <li>Punto de venta <i class="icon-close icon text-danger"></i></li>
                            <li>Proveedores <i class="icon-close icon text-danger"></i></li>
                            <li>Reportes <i class="icon-close icon text-danger"></i></li>
                        </ul>
                    </div>
                    <div class="plan-footer">
                        <a href="#contacto" class="btn btn-info btn-modern btn-outline py-2 px-4">Consultar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.banner-whatsapp')

    <section class="bg-color-light border-0 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-6">
                    <h2 class="font-weight-normal text-color-dark text-center text-8 mb-4"><strong class="font-weight-extra-bold">Realizá tu consulta!</strong></h2>
                    <p class="text-4 opacity-8 text-center mb-4">Al recibir tu solicitud nos pondremos en contacto a la brevedad.</p>
                    
                    @include('layouts.contact')

                </div>
            </div>
        </div>
    </section>

</div>

@endsection