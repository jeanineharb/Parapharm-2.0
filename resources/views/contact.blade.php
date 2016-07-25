@extends('structure')

@section('content')


<section class="mbr-section mbr-after-navbar" id="form1-17" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

	<div class="mbr-section mbr-section__container mbr-section__container--middle">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-xs-center">
					<h3 class="mbr-section-title display-2">CONTACT FORM</h3>
					<!-- 				<small class="mbr-section-subtitle">Shape your future web project with sharp design and refine coded functions.</small> -->
				</div>
			</div>
		</div>
	</div>
	<div class="mbr-section mbr-section-nopadding">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">

					<!-- <div data-form-alert="true">
						<div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Thanks for filling out form!</div>
					</div> -->

					{{ Form:: open(array('action' => 'ContactController@getContactUsForm')) }} 

					<ul class="errors">
						@foreach($errors->all('<li>:message</li>') as $message)
						{{ $message }}
						@endforeach
					</ul>

					<div class="form-group">
						{{ Form::text('name', '', array('required', 'id' => 'name', 'class' => 'form-control', 'placeholder' => 'Your name')) }}
					</div>

					<div class="form-group">
						{{ Form::text('email', '', array('required', 'id' => 'email', 'class' => 'form-control', 'placeholder'=>'Your e-mail address')) }}
					</div>

					<div class="form-group">
						{{ Form:: textarea ('message', '', array('placeholder' => 'Your message', 'class' => 'form-control', 'id' => 'message', 'rows' => '4' )) }}
					</div>

					<div class="modal-footer">
						{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
						{{ Form:: close() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mbr-section mbr-section-md-padding mbr-parallax-background" id="social-buttons2-16" style='padding-top: 90px; padding-bottom: 90px; background-image: url("{{ asset('images/parapharm.jpg') }}")'>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-xs-center" style="background-color: #ffffff; opacity: 0.7; padding: 15px;">
				<h3 class="mbr-section-title display-2">FOLLOW US</h3>
				<div>
					<!-- <a class="btn btn-social" title="Instagram" target="_blank" href="https://instagram.com/mobirise/"><i class="socicon socicon-instagram"></i></a>  -->
					<!-- <a class="btn btn-social" title="Twitter" target="_blank" href="https://twitter.com/mobirise"><i class="socicon socicon-twitter"></i></a>  -->
					<!-- <a class="btn btn-social" title="Pinterest" target="_blank" href="https://www.pinterest.com/mobirise/"><i class="socicon socicon-pinterest"></i></a> -->
					<a class="btn btn-social" title="Facebook" target="_blank" href="https://www.facebook.com/Parapharm"><i class="socicon socicon-facebook"></i></a> 
					<a class="btn btn-social" title="LinkedIn" target="_blank" href="https://www.linkedin.com/company/parapharm-s-a-l"><i class="socicon socicon-linkedin"></i></a>
					<a class="btn btn-social" title="WordPress" target="_blank" href="https://blog.parapharm.com.lb"><i class="socicon socicon-wordpress"></i></a>   
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mbr-section mbr-section__container mbr-section__container--isolated" id="map2-15">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="mbr-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2736.8257836675284!2d35.54157531521007!3d33.858895980659014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c5c0b669f7205be!2sPARAPHARM+SAL!5e1!3m2!1sen!2slb!4v1469468448570" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			</div>
		</div>
	</div>
</section>

@endsection