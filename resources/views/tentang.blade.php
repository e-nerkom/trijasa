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
								
								<div class="content-inner partner">
									<div class="row">
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/airmas.png" alt="">
												</div>
												<!-- <div class="partner-content">
													<h3 class="text-center">Airmas</h3>
												</div> -->
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/big_switch.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/cisco.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/dell.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/fortinet.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/hitachi.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/hp.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/huawei.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/juniper.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/mbiz.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/metrodata.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/paloalto.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/sophos.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/tplink.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/transitions.png" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6">
											<div class="partner-item">
												<div class="partner-image partner-padding">
													<img src="images/partnership/vmware.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>




							<div class="content-inner team-member">
								<div class="row">
									<!-- Company Profile -->
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
								<!-- Our Team -->
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
									
								</div>
							</div>
							<div class="content-inner flat-faq">
								<!-- Contact Us -->
								<div class="faq-header">
									<h2>Frequently Asked Questions</h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic .</p>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection