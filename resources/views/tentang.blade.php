@extends('layout/template') 
@section('content')
		
		<div class="page-title">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">About Us</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="/" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								<li>About Us</li>
							</ul><!-- /.breadcrumbs -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.page-title -->

		<section class="main-about">
			<div class="container">
				<div class="row">
					<div class="wrap-about">
						<div class="sidebar-about">
							<div class="widget-nav-tab">
								<h3>About our company</h3>
								<ul class="tab-about">
									<li class="active">About Us</li>
									<li>Partnership</li>
									<li>Company Experience</li>
									<li>Our Team</li>
									<li>Contact Us</li>
								</ul>
							</div>
							<div class="widget-brochures">
								<ul class="download">
									<li class="pdf">
										<a href="/download-company-profile" title="">Company Profile.pdf</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="about-content-tab">
							<div class="content-inner over-view">

								<div class="text-about">
									{!! $data[4]->description !!}						
								</div>								
								
								<div class="text-justify">
									<div class="row">
										<div class="col-md-6">
											<div class="about-us style2">
												<div class="flat-title style1">
													<h3 class="mb-3">Our Vision</h3>
												</div>
												<div class="content text-justify">
													<div class="visibox-content">
														<span class="ion-star"></span>
														<div class="text-justify" style="padding-left:70px">{!! $data[0]->description !!}</div>
													</div>
													
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="flat-clients">
												<div class="flat-title style1">
													<h3 class="mb-3">Our Mission</h3>

													<div class="box-misi">
													{!! $data[1]->description !!}
													</div>
													
												</div>
												
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="content-inner history">
								<div class="row-inner">
									<div class="one-half left">
										<div class="image">
											<img src="images/about/02.jpg" alt="">
										</div>
									</div>
									<div class="one-half text right">
										<div class="text-about">
											<h3>A Global Organization</h3>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
											<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="row-inner">
									<div class="one-half text left">
										<div class="text-about">
											<h3>We are family</h3>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
											<ul>
												<li><span class="ion-checkmark-round"></span>Contrary to popular belief, Lorem Ipsum is not</li>
												<li><span class="ion-checkmark-round"></span>It has roots in a piece of classical Latin literature</li>
												<li><span class="ion-checkmark-round"></span>Making it over 2000 years old. Richard McClintock</li>
												<li><span class="ion-checkmark-round"></span>Professor at Hampden-Sydney College in Virginia</li>
											</ul>
										</div>
									</div>
									<div class="one-half right">
										<div class="image">
											<img src="images/about/03.jpg" alt="">
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="flat-list-year">
									<ul>
										<li>
											<div class="one-half">
												<div class="year">
													1998
												</div>
											</div>
											<div class="one-half right">
												<div class="info-year">
													<h4>Start with a small service</h4>
													<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still</p>
												</div>
											</div>
										</li>
										<li>
											<div class="one-half right">
												<div class="year">
													2000
												</div>
											</div>
											<div class="one-half left">
												<div class="info-year">
													<h4>Website Design, Seo Makerting Online</h4>
													<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still</p>
												</div>
											</div>
											
										</li>
										<li>
											<div class="one-half">
												<div class="year">
													2005
												</div>
											</div>
											<div class="one-half right">
												<div class="info-year">
													<h4>Developer WordPress Themeforest.net</h4>
													<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still</p>
												</div>
											</div>
										</li>
										<li>
											<div class="one-half right">
												<div class="year">
													2018
												</div>
											</div>
											<div class="one-half left">
												<div class="info-year">
													<h4>20th anniversary</h4>
													<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still</p>
												</div>
											</div>
											
										</li>
									</ul>
								</div>
							</div>
							<div class="content-inner team-member">
								<div class="row">
									<div class="col-lg-4 col-sm-6">
										<div class="team-item">
											<div class="team-image">
												<img src="images/team/01.jpg" alt="">
											</div>
											<div class="team-content">
												<div class="name">
													KAWHI LEONARD
												</div>
												<div class="options">
													Manager
												</div>
											</div>
											<div class="team-content hover">
												<div class="name">
													KAWHI LEONARD
												</div>
												<div class="options">
													Manager
												</div>
												<ul>
													<li>
														<a href="#" title="">
															<i class="fa fa-twitter"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-facebook-f"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-google-plus"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-pinterest-p"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="team-item">
											<div class="team-image">
												<img src="images/team/02.jpg" alt="">
											</div>
											<div class="team-content">
												<div class="name">
													MANAGIN PAUH
												</div>
												<div class="options">
													Desinger
												</div>
											</div>
											<div class="team-content hover">
												<div class="name">
													MANAGIN PAUH
												</div>
												<div class="options">
													Desinger
												</div>
												<ul>
													<li>
														<a href="#" title="">
															<i class="fa fa-twitter"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-facebook-f"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-google-plus"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-pinterest-p"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="team-item">
											<div class="team-image">
												<img src="images/team/03.jpg" alt="">
											</div>
											<div class="team-content">
												<div class="name">
													THERESA RODGERS
												</div>
												<div class="options">
													Marketer
												</div>
											</div>
											<div class="team-content hover">
												<div class="name">
													THERESA RODGERS
												</div>
												<div class="options">
													Marketer
												</div>
												<ul>
													<li>
														<a href="#" title="">
															<i class="fa fa-twitter"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-facebook-f"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-google-plus"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-pinterest-p"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="team-item">
											<div class="team-image">
												<img src="images/team/04.jpg" alt="">
											</div>
											<div class="team-content">
												<div class="name">
													MANAGIN PAUH
												</div>
												<div class="options">
													Manager
												</div>
											</div>
											<div class="team-content hover">
												<div class="name">
													MANAGIN PAUH
												</div>
												<div class="options">
													Manager
												</div>
												<ul>
													<li>
														<a href="#" title="">
															<i class="fa fa-twitter"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-facebook-f"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-google-plus"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-pinterest-p"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="team-item">
											<div class="team-image">
												<img src="images/team/05.jpg" alt="">
											</div>
											<div class="team-content">
												<div class="name">
													MANAGIN PAUH
												</div>
												<div class="options">
													Manager
												</div>
											</div>
											<div class="team-content hover">
												<div class="name">
													MANAGIN PAUH
												</div>
												<div class="options">
													Manager
												</div>
												<ul>
													<li>
														<a href="#" title="">
															<i class="fa fa-twitter"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-facebook-f"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-google-plus"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-pinterest-p"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="team-item">
											<div class="team-image">
												<img src="images/team/06.jpg" alt="">
											</div>
											<div class="team-content">
												<div class="name">
													MANAGIN PAUH
												</div>
												<div class="options">
													Manager
												</div>
											</div>
											<div class="team-content hover">
												<div class="name">
													MANAGIN PAUH
												</div>
												<div class="options">
													Manager
												</div>
												<ul>
													<li>
														<a href="#" title="">
															<i class="fa fa-twitter"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-facebook-f"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-google-plus"></i>
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-pinterest-p"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="content-inner partner">
								<div class="row">
									<div class="col-lg-4 col-sm-6">
										<div class="partner-item">
											<div class="partner-image">
												<img src="images/partner/01.jpg" alt="">
											</div>
											<div class="partner-content">
												<h3>Leaves & CO</h3>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
												<div class="btn-visit">
													<a href="#" title="">Visit Company<span class="ion-android-arrow-forward"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="partner-item">
											<div class="partner-image">
												<img src="images/partner/02.jpg" alt="">
											</div>
											<div class="partner-content">
												<h3>Travel Lookbook</h3>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
												<div class="btn-visit">
													<a href="#" title="">Visit Company<span class="ion-android-arrow-forward"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="partner-item">
											<div class="partner-image">
												<img src="images/partner/03.jpg" alt="">
											</div>
											<div class="partner-content">
												<h3>Sushi Express</h3>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
												<div class="btn-visit">
													<a href="#" title="">Visit Company<span class="ion-android-arrow-forward"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="partner-item">
											<div class="partner-image">
												<img src="images/partner/04.jpg" alt="">
											</div>
											<div class="partner-content">
												<h3>Studio</h3>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
												<div class="btn-visit">
													<a href="#" title="">Visit Company<span class="ion-android-arrow-forward"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="partner-item">
											<div class="partner-image">
												<img src="images/partner/05.jpg" alt="">
											</div>
											<div class="partner-content">
												<h3>The One</h3>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
												<div class="btn-visit">
													<a href="#" title="">Visit Company<span class="ion-android-arrow-forward"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="partner-item">
											<div class="partner-image">
												<img src="images/partner/06.jpg" alt="">
											</div>
											<div class="partner-content">
												<h3>Fashion & Blogger</h3>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
												<div class="btn-visit">
													<a href="#" title="">Visit Company<span class="ion-android-arrow-forward"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="content-inner flat-faq">
								<div class="faq-header">
									<h2>Frequently Asked Questions</h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic .</p>
								</div>
								<div class="faq-content">
									<div class="accordion">
										<div class="accordion-toggle">
											<div class="toggle-title">
												<span>1</span>Section 1.10.33 of "de Finibus Bonorum et Malorum", written?
											</div><!-- /.toggle-title -->
											<div class="toggle-content">
												<p>
													Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.
												</p>
											</div><!-- /.toggle-content -->
										</div><!-- /.accordiontoggle -->
										<div class="accordion-toggle">
											<div class="toggle-title active">
												<span>2</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit?
											</div><!-- /.toggle-title -->
											<div class="toggle-content">
												<p>
													Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap.
												</p>
											</div><!-- /.toggle-content -->
										</div><!-- /.accordion-toggle -->
										<div class="accordion-toggle">
											<div class="toggle-title">
												<span>3</span>But I must explain to you how all this mistaken idea of denouncing?
											</div><!-- /.toggle-title -->
											<div class="toggle-content">
												<p>
													Good strategy is the antidote to competition.
													Strategic thinking is the process of developing a
													strategy that defines your value proposition and
													your unique value chain. This process includes
													market and competitive research as well as an
													assessment of the company’s capabilities and
													the industry forces impacting it.
												</p>
											</div><!-- /.toggle-content -->
										</div><!-- /.accordion-toggle -->
										<div class="accordion-toggle">
											<div class="toggle-title">
												<span>4</span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical?
											</div><!-- /.toggle-title -->
											<div class="toggle-content">
												<p>
													Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap.
												</p>
											</div><!-- /.toggle-content -->
										</div><!-- /.accordion-toggle -->
										<div class="accordion-toggle">
											<div class="toggle-title">
												<span>5</span>There are many variations of passages of Lorem Ipsum?
											</div><!-- /.toggle-title -->
											<div class="toggle-content">
												<p>
													Good strategy is the antidote to competition.
													Strategic thinking is the process of developing a
													strategy that defines your value proposition and
													your unique value chain. This process includes
													market and competitive research as well as an
													assessment of the company’s capabilities and
													the industry forces impacting it.
												</p>
											</div><!-- /.toggle-content -->
										</div><!-- /.accordion-toggle -->
										<div class="accordion-toggle">
											<div class="toggle-title">
												<span>6</span> If you are going to use a passage of Lorem ?
											</div><!-- /.toggle-title -->
											<div class="toggle-content">
												<p>
													Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.
												</p>
											</div><!-- /.toggle-content -->
										</div><!-- /.accordiontoggle -->
										<div class="accordion-toggle">
											<div class="toggle-title">
												<span>7</span>Section 1.10.33 of "de Finibus Bonorum et Malorum”?
											</div><!-- /.toggle-title -->
											<div class="toggle-content">
												<p>
													Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap.
												</p>
											</div><!-- /.toggle-content -->
										</div><!-- /.accordion-toggle -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection