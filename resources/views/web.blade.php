
<!DOCTYPE html>
<html lang="es">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Sevencrows</title>	

		<meta name="keywords" content="Paginas web - Sistemas Web - Desarrollo de sitios Web" />
		<meta name="description" content="Empresa desarrolladora de software ubicada en Montevideo brindando servicios para empresas, micro-empresas y emprendedores para el Uruguay y el exterior.">
		<!--<meta name="author" content="okler.net">-->

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{ asset('css/demos/demo-landing.css') }}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('css/skins/skin-landing.css') }}"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>

	</head>
	<body class="alternative-font-4 loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 100}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
		
		<div class="body">

			@yield('content')

			<footer id="footer">
				<section class="section bg-dark border-0 m-0">
					<div class="container">
						<div class="row justify-content-center text-center text-lg-left py-4">
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
									<div class="feature-box-icon">
										<i class="icon-envelope icons text-color-light"></i>
									</div>
									<div class="feature-box-info pl-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">CORREO</h5>
										<p class="text-color-light font-weight-semibold mb-0">contacto@sevencrows.com.uy</p>
									</div>
								</div>
							</div>
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
									<div class="feature-box-icon">
										<i class="icon-call-out icons text-color-light"></i>
									</div>
									<div class="feature-box-info pl-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">LLAMANOS</h5>
										<a href="tel:+8001234567" class="text-color-light font-weight-semibold text-decoration-none">+598 96 000 000</a>
									</div>
								</div>
							</div>
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex">
									<div class="feature-box-icon">
										<i class="icon-share icons text-color-light"></i>
									</div>
									<div class="feature-box-info pl-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">NUESTRAS REDES</h5>
										<p class="mb-0">
											<span class="social-icons-linkedin"><a href="http://www.linkedin.com/sevencrows" target="_blank" class="text-color-light font-weight-semibold" title="Twitter"><i class="mr-1 fab fa-linkedin"></i> LINKEDIN</a></span>
											<span class="social-icons-facebook pl-3"><a href="http://www.facebook.com/sevencrows" target="_blank" class="text-color-light font-weight-semibold" title="Facebook"><i class="mr-1 fab fa-facebook-f"></i> FACEBOOK</a></span>
											<span class="social-icons-instagram pl-3"><a href="http://www.instagram.com/instagram" target="_blank" class="text-color-light font-weight-semibold" title="Linkedin"><i class="mr-1 fab fa-instagram"></i> INSTAGRAM</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="footer-copyright footer-copyright-style-2">
					<div class="container">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p><strong>SEVENCROWS</strong> - © Copyright 2021</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>

		<!-- Vendor -->
		<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
		<script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('vendor/common/common.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
		<script src="{{ asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('vendor/vide/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('vendor/vivus/vivus.min.js') }}"></script>

		<!--(remove-empty-lines-end)-->

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('js/theme.js') }}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('js/custom.js') }}"></script>


		<!-- Theme Initialization Files -->
		<script src="{{ asset('js/theme.init.js') }}"></script>

		<!-- Examples -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>

	<!-- FORM-CONTACT -->
	<script>
		/*$('#formulario-contacto').on('submit', function(e){

			let name = document.getElementById("name");
			let phone  = document.querySelector("phone");
			let email = document.getElementById("email");
			let message = document.getElementById("message");
			let token = document.getElementById("token");
			
			let datos = new FormData();
			datos.append('name', name.value);
			datos.append('phone', phone.value);
			datos.append('email', email.value);
			datos.append('message', message.value);
			
			e.preventDefault();

			fetch('{{url("/contacto")}}',{
				method: 'post',
				headers: {
					'X-CSRF-TOKEN': csrf.value
				},
				body: datos
			}).then(response => response.json())
			.then(data => {
				console.log(data.exito);
			}).catch(error => {
				console.log(error.message);
			})

		   
	   });*/
	   
   </script>

</html>