@extends('layout/template') 
@section('content')
			
		<div class="page-title">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">Contact Us</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="/" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								<li>Contact Us</li>
							</ul><!-- /.breadcrumbs -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.page-title -->

		<section class="flat-row flat-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="flat-title style1 center">
							<h2>Get in touch</h2>
						</div>
						<div class="flat-contact-form">
							@if (session('message'))
								<div class="alert alert-success">
									{{ session('message') }}
									<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-top:-10px;">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							@endif
							@if (session('errStatus'))
								<div class="alert alert-danger">
									{{ session('errStatus') }}
									<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-top:-10px;">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							@endif
							<form  method="POST" action="/hubungi-kami" class="form-info">
								@csrf
								<div class="field-row">
									<div class="one-three">
										<p class="input-info"><input type="text" name="name" value="{{ old('name') }}" placeholder="Nama anda *" required></p>
									</div>
									<div class="one-three">
										<p class="input-info"><input type="email" name="email" value="{{ old('name') }}" placeholder="Email anda *" required></p>
									</div>
									<div class="one-three">
										<p class="input-info"><input type="text" name="phone" value="{{ old('name') }}" placeholder="No Telepon *" required></p>
									</div>
									<div class="one-three" style="width:100%">
										<p class="input-info"><input type="text" name="subject" value="{{ old('subject') }}" placeholder="Judul Pesan *" required></p>
									</div>
								</div>								
								<div class="input-text">
									<textarea name="message" placeholder="Pesan anda *" required>{{ old('name') }}</textarea>
								</div>
								<div class="btn-submit">
									<button type="submit" name="submit">Kirim Pesan</button>
								</div>
							</form> <!-- /.flat-form-info -->
						</div>
					</div> <!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-row-iconbox -->  

		<!-- map -->
        <section class="flat-row pdmap">
			<div class="flat-maps" data-address="Cornwall, Vermont, Hoa Kỳ" data-height="500" data-images="images/map/map-1.png" data-name="Themesflat Map"></div>
            <div class="gm-map">	            
                <div class="map"></div>                        
            </div>
        </section>

@endsection