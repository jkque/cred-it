<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Jk Que" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400italic,600,700|Montserrat:400,700|Merriweather" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />

	<!-- Media Agency Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/app-landing.css') }}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/et-line.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/fonts.css') }}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{ asset('css/bs-switches.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{ asset('css/colors.css') }}" type="text/css" />
	<link id="swcolors-Css" rel="stylesheet" href="{{ asset('css/colors.php?color=c0392b') }}" type="text/css">

	<!-- Document Title
	============================================= -->
	<title>Credible IT Inc. Philippines' Leading Unbanked Credit Card System Developer</title>
	@yield('style')

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark" data-sticky-class="not-dark" data-responsive-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="{{ asset('images/logo-dark.png') }}"><img src="{{ asset('images/logo.png') }}" alt="Cred.it Logo"></a>
						{{-- <a href="index.html" class="retina-logo" data-dark-logo="demos/app-landing/images/logo-dark@2x.png"><img src="demos/app-landing/images/logo@2x.png" alt="Canvas Logo"></a> --}}
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="with-arrows clearfix not-dark">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="160">
							<li><a href="#" data-href="#wrapper"><div>HOME</div></a></li>
							<li><a href="#" data-href="#section-about"><div>ABOUT US</div></a></li>
							<li><a href="#" data-href="#section-nextgen"><div>EXPLORE</div></a>
								<ul>
									<li><a href="#" data-href="#section-nextgen"><div>BECOME OUR PARTNER COOP</div></a></li>
									<li><a href="#" data-href="#section-stunning-graphics"><div>BECOME OUR MERCHANT PARTNER</div></a></li>
								</ul>
							</li>
							<li><a href="#" data-href="#section-contact"><div>CONTACT US</div></a></li>
							{{-- <li>
								<div style="margin-top: 20px">
								 <a href="#"><i class="icon-phone3"></i> (63) 956-500-2518</a> | 
								 <a href="#"><i class="icon-envelope2"></i> info@cred-it.ph</a>
									
								</div>
								 <a href="#"><i class="icon-phone3"></i> (63) 956-500-2518 | <i class="icon-envelope2"></i> info@cred-it.ph</a>
							</li> --}}
						</ul>
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		@yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" style="background-color: #FFF;">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="row clearfix">

						<div class="col-md-5">

							<div class="widget clearfix">
								<div class="row clearfix">
									<div class="col-md-8 bottommargin-sm clearfix" style="color:#888;">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, consequatur facere molestiae iusto atque.</p>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-pinterest">
											<i class="icon-pinterest"></i>
											<i class="icon-pinterest"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-vimeo">
											<i class="icon-vimeo"></i>
											<i class="icon-vimeo"></i>
										</a>

									</div>
								</div>
							</div>

						</div>

						<div class="col-md-7">
							<div class="row clearfix">

								<div class="col-md-4 bottommargin-sm">
									<div class="widget widget_links app_landing_widget_link clearfix">
										<h4>In News</h4>

										<ul>
											<li><a href="http://codex.wordpress.org/">Documentation</a></li>
											<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="http://wordpress.org/support/">Support Forums</a></li>
											<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 bottommargin-sm">
									<div class="widget widget_links app_landing_widget_link clearfix">
										<h4>About Us</h4>

										<ul>
											<li><a href="http://codex.wordpress.org/">Documentation</a></li>
											<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="http://wordpress.org/support/">Support Forums</a></li>
											<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 bottommargin-sm">
									<div class="widget widget_links app_landing_widget_link clearfix">
										<h4>Support</h4>

										<ul>
											<li><a href="http://codex.wordpress.org/">Documentation</a></li>
											<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="http://wordpress.org/support/">Support Forums</a></li>
											<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="nobg notoppadding">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2017 All Rights Reserved by Credible IT Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>	
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.gmap.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script>
		jQuery(document).ready( function($){

			function pricingSwitcher( elementCheck, elementParent, elementPricing ) {
				elementParent.find('.pts-left,.pts-right').removeClass('pts-switch-active');
				elementPricing.find('.pts-switch-content-left,.pts-switch-content-right').addClass('hidden');

				if( elementCheck.filter(':checked').length > 0 ) {
					elementParent.find('.pts-right').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-right').removeClass('hidden');
				} else {
					elementParent.find('.pts-left').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-left').removeClass('hidden');
				}
			}

			$('.pts-switcher').each( function(){
				var element = $(this),
					elementCheck = element.find(':checkbox'),
					elementParent = $(this).parents('.pricing-tenure-switcher'),
					elementPricing = $( elementParent.attr('data-container') );

				pricingSwitcher( elementCheck, elementParent, elementPricing );

				elementCheck.on( 'change', function(){
					pricingSwitcher( elementCheck, elementParent, elementPricing );
				});
			});

			// Get Started From Validation
			var getStartedForm = $('#get-started-form'),
				getStartedFormAlert = getStartedForm.attr('data-alert-type'),
				getStartedFormLoader = getStartedForm.attr('data-loader'),
				getStartedFormResult = getStartedForm.find('.contact-form-result'),
				getStartedFormRedirect = getStartedForm.attr('data-redirect');

			getStartedForm.validate({
				submitHandler: function(form) {

					getStartedFormResult.hide();

					if( getStartedFormLoader == 'button' ) {
						var defButton = $(form).find('button'),
							defButtonText = defButton.html();

						defButton.html('<i class="icon-line-loader icon-spin nomargin"></i>');
					} else {
						$(form).find('.form-process').fadeIn();
					}

					$(form).ajaxSubmit({
						target: getStartedFormResult,
						dataType: 'json',
						resetForm: true,
						success: function( data ) {
							if( getStartedFormLoader == 'button' ) {
								defButton.html( defButtonText );
							} else {
								$(form).find('.form-process').fadeOut();
							}
							if( data.alert != 'error' && getStartedFormRedirect ){
								window.location.replace( getStartedFormRedirect );
								return true;
							}
							if( getStartedFormAlert == 'inline' ) {
								if( data.alert == 'error' ) {
									var alertType = 'alert-danger';
								} else {
									var alertType = 'alert-success';
								}

								getStartedFormResult.addClass( 'alert ' + alertType ).html( data.message ).slideDown( 400 );
							} else {
								getStartedFormResult.attr( 'data-notify-type', data.alert ).attr( 'data-notify-msg', data.message ).html('');
								SEMICOLON.widget.notifications( getStartedFormResult );
							}
						}
					});
				}
			});

			$('[data-pricing-plan]').click( function(){
				getStartedForm.find('#get-started-form-package').val( $(this).attr('data-pricing-plan') );
				getStartedForm.find('#modal-get-started-package').html( $(this).attr('data-pricing-plan') );
			});

		});
	</script>
	@yield('script')

</body>
</html>