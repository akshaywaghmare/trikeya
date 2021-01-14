@extends('layout.master')

@section('content')

<section id="page-title">

    <div class="container">
        <h1>Contact Us</h1>
        
    </div>

</section>



<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row gutter-40 col-mb-80">
						<!-- Postcontent
						============================================= -->
						<div class="postcontent col-lg-9">

							<h3>Send us an Email</h3>

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4 form-group">
											<label for="template-contactform-name">Name <small>*</small></label>
											<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-email">Email <small>*</small></label>
											<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-phone">Phone</label>
											<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
										</div>

										<div class="w-100"></div>

										

										<div class="w-100"></div>

										<div class="col-12 form-group">
											<label for="template-contactform-message">Message <small>*</small></label>
											<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
										</div>

										<div class="col-12 form-group d-none">
											<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
										</div>

										<div class="col-12 form-group">
											<button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
										</div>
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>
							</div>

						</div><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">

							<address>
								Sr. No. 15, Village Thoran, On main Kamshet <br>
								Jambhavli Road, Taluka Maval<br>
								Kamshet, Pune - 410405<br>
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr>  +91 - 8605245000<br>
							<abbr title="Email Address"><strong>Email:</strong></abbr> sales@trikayaretreat.com

						
							<div class="widget border-0 pt-0">

								<a href="https://www.facebook.com/TrikayaRetreat" target="_blank" class="social-icon si-small si-dark si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="https://www.instagram.com/trikayaretreat/" target="_blank" class="social-icon si-small si-dark si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

							</div>

						</div><!-- .sidebar end -->
					</div>

				</div>
            </div>
            
            <div class="section mb-0 bg-transparent pb-0 mb-0 pt-0">
                <div class="container">
                    <div class="heading-block" style="max-width: 500px">
                        <h3 class="font-weight-bold nott mb-4" style="font-size: 42px; letter-spacing: -1px;">Locate Us</h3>
                        
                    </div>
                </div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.7614459426986!2d73.46495101531121!3d18.853271963833823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd5562b6fdf1f7%3A0x552648e30726c00!2sTrikaya%20Retreat%20-%20Kamshet!5e0!3m2!1sen!2sin!4v1610596710353!5m2!1sen!2sin" width="1920" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
		</section><!-- #content end -->


      
    
@endsection