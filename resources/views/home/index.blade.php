@extends('layouts.app')
@section('style')
<style type="text/css"></style>
@endsection
@section('content')

	<section id="slider" class="full-screen slider-parallax" style="height: 550px!important">
		<div class="slider-parallax-inner" style="background: url('images/landing2.jpg') center center no-repeat; background-size: cover;">
			<div class="vertical-middle" style="z-index: 2;">
				<div class="container dark clearfix">
					<div class="row clearfix">
						<div class="col-md-12 col-sm-8">
							<div class="emphasis-title">
								<h1 class="font-body" style="font-size: 40px">Cred.it is the first tech company in the philippines that creates opportunities for unbanked Filipinos to have better lives through low-cost financial services.</h1>
							</div>
							<a href="#" data-scrollto="#section-pricing" data-easing="easeInOutExpo" data-speed="1250" data-offset="160" class="button button-large button-white button-light capitalize" style="border-radius: 23px;">LEARN MORE ABOUT CRED.IT</a>
						</div>
					</div>
				</div>
			</div>
			<div class="video-wrap" style="position: absolute; height: 100%; z-index: 1;">
				<div class="video-overlay" style="background: rgba(245, 62, 31, 0.7);"></div>
			</div>
		</div>
	</section>

	<!-- Content
	============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="clear bottommargin"></div>

			<div class="container clearfix">

				<div class="clear"></div>

				<div id="section-about" class="page-section nopadding nomargin">

					<div class="row topmargin-sm clearfix">

						{{-- <h2 class="center font-body bottommargin-lg">Frequently Asked Questions</h2> --}}
						<h5>
						<p class="center font-body bottommargin-lg">Cred.IT Inc. (Credible Information Technology Incorporated) is a start-up company and was founded by a diverse group of young and experienced professionals with corporate software development and marketing backgrounds.</p>
						 <p class="center font-body bottommargin-lg">The mission of Cred.IT is to bring state-of-the-art Credit Card Software Management technologies to the Philippine Cooperative by <b>easy</b> and <b>reliable</b> platforms. </p>
						 <p class="center font-body bottommargin-lg">Cred.IT is a company duly registered in the Philippine Securities and Exchange Commission, and based out of the University of the Philippines DOST TBI, in Cebu City, Philippines.</p></h5>
					</div>

				</div>

			</div>

			<div id="section-contact" class="page-section notoppadding" style="background-color: #F8FAFB; border-top: 1px solid #E5E5E5; border-bottom: 1px solid #E5E5E5;">

				<div class="row noleftmargin norightmargin bottommargin-lg common-height">
					<div id="headquarters-map" class="col-md-8 col-sm-6 gmap hidden-xs"></div>
					<div class="col-md-4 col-sm-6" style="background-color: #F5F5F5;">
						<div class="col-padding max-height">
							<h3 class="font-body t400 ls1">Our Headquarters</h3>

							<div style="font-size: 16px; line-height: 1.7;">
								<address style="line-height: 1.7;">
									<strong>Cebu City, Philippines:</strong><br>
									N/A<br>
									N/A<br>
								</address>

								<div class="clear topmargin-sm"></div>

								<abbr title="Phone Number"><strong>Phone:</strong></abbr> (63) 956-500-2518<br>
								<abbr title="Email Address"><strong>Email:</strong></abbr> info@cred-it.ph
							</div>
						</div>
					</div>
				</div>



				<div class="container clearfix">

					<div class="divcenter topmargin" style="max-width: 850px;">

						<div class="contact-widget">

							<div class="contact-form-result"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

								<div class="form-process"></div>

								<div class="col_half">
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Name" />
								</div>
								<div class="col_half col_last">
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" />
								</div>

								<div class="clear"></div>

								<div class="col_one_third">
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control" placeholder="Phone" />
								</div>

								<div class="col_two_third col_last">
									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control border-form-control" placeholder="Subject" />
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="template-contactform-message" rows="7" cols="30" placeholder="Your Message"></textarea>
								</div>

								<div class="col_full center">
									<button class="button button-border button-circle t500 noleftmargin topmargin-sm" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
									<br>
									<small style="display: block; font-size: 13px; margin-top: 15px;">We'll do our best to get back to you within 6-8 working hours.</small>
								</div>

								<div class="clear"></div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

							</form>
						</div>

					</div>

				</div>

			</div>

			<div class="clear"></div>

			<!-- <div class="section nomargin">
				<div class="container clearfix">

					<h2></h2>

				</div>
			</div> -->
		</div>

	</section><!-- #content end -->
@endsection
@section('script')
<script type="text/javascript"></script>
@endsection
